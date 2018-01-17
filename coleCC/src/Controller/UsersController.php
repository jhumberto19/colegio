<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\Mailer\Email;

/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

      public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role'] === 'student')
        {
            if(in_array($this->request->action, ['home','logout','vernota']))
            {
                return true;
            }
            return false;
           
        }
        return parent::isAuthorized($user);
    }
public $paginate = [
        'limit' => 8,
    'order' => ['id' => 'DESC']
    ];

    public function index()
    {
        $users = $this->paginate($this->Users);

       if ( $this->request->is('post')) {

            if(  $this->request->data['buscar-user'])
            {

        $bususer = $this->Users->find()->where(['username LIKE'=>'%'. $this->request->data['buscar-user'].'%']);

            $users = $this->paginate($bususer);
        }
}
        
        $this->set('users', $users); 
    }

    public function home()
    {
        $this->render();
    }

     public function login()
    {
        if($this->request->is('post'))
        {
            $user = $this->Auth->identify();

            if($user['state'] ==='activo')
            {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else
            {
                $this->Flash->error('Datos son invalidos, por favor intente nuevamente', ['key' => 'auth']);
            }
        }
    }

     public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    public function vernota($id = null)
    {
        if(!$id){
              return $this->redirect( [ 'action' => 'home']);
        }
        
        $query = $this->Users->Alumnos->Registros->find('all',[
           'conditions' => ['Registros.alumno_id' => $id]])->contain(['Materias','Alumnos']);       

                $this->set(compact('query')); 

    }
    
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                
                if($user['role'] === 'student'){
                     $this->Flash->success(__('El usuario fue registrado, cree un alumno para este usuario'));
                return $this->redirect( ['controller' => 'Alumnos', 'action' => 'add']);
                 
            }
            else
                $this->Flash->success(__('El usuario Administrador fue creado'));
                return $this->redirect( ['action' => 'index']); 
            }
            $this->Flash->error(__('El usuario no fue registrado, intente de nuevo'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

   
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario fue registrado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo editar el usuario, intente de nuevo'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

     public function password()
    {
        if ($this->request->is('post')) {
            $query = $this->Users->findByEmail($this->request->data['email']);
            $user = $query->first();
            if (is_null($user)) {
                $this->Flash->error('La direccion de correo no existe. Por favor, trate de nuevo');
            } else {
                $passkey = uniqid();
                $url = Router::Url(['controller' => 'users', 'action' => 'reset'], true) . '/' . $passkey;
                $timeout = time() + DAY;
                 if ($this->Users->updateAll(['passkey' => $passkey, 'timeout' => $timeout], ['id' => $user->id])){
                    $this->sendResetEmail($url, $user);
                    $this->redirect(['action' => 'home']);
                } else {
                    $this->Flash->error('Error saving reset passkey/timeout');
                }
            }
        }
    }

     private function sendResetEmail($url, $user) {
        $email = new Email();
         $email->transport('gmail3');
        $email->template('resetpw');
        $email->emailFormat('both');
        $email->from('humbertomoran5@gmail.com');
        $email->to($user->email);
        $email->subject('Reset your password');
        $email->viewVars(['url' => $url, 'username' => $user->username]);
        if ($email->send()) {
            $this->Flash->success(__('Check your email for your reset password link'));
        } else {
            $this->Flash->error(__('Error sending email: ') . $email->smtpError);
        }
    }

     public function reset($passkey = null) {
        if ($passkey) {
            $query = $this->Users->find('all', ['conditions' => ['passkey' => $passkey, 'timeout >' => time()]]);
            $user = $query->first();
            if ($user) {
                if (!empty($this->request->data)) {
                    // Clear passkey and timeout
                    $this->request->data['passkey'] = null;
                    $this->request->data['timeout'] = null;
                    $user = $this->Users->patchEntity($user, $this->request->data);
                    if ($this->Users->save($user)) {
                        $this->Flash->set(__('Tu contraseña a sido actualizada.'));
                        return $this->redirect(array('action' => 'login'));
                    } else {
                        $this->Flash->error(__('La contraseña no fue actualizada. Por favor, trate de nuevo.'));
                    }
                }
            } else {
                $this->Flash->error('Invalid or expired passkey. Please check your email or try again');
                $this->redirect(['action' => 'password']);
            }
            unset($user->password);
            $this->set(compact('user'));
        } else {
            $this->redirect('/');
        }
    }
}
