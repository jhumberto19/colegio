<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Alumnos Controller
 *
 *
 * @method \App\Model\Entity\Alumno[] paginate($object = null, array $settings = [])
 */
class AlumnosController extends AppController
{
 public $helpers = array('Html','Form');
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role'] === 'student')
        {
            if(in_array($this->request->action, ['veralum']))
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
        
        $alumnos = $this->paginate($this->Alumnos);

       if ( $this->request->is('post')) {

            if(  $this->request->data['buscar-nom'])
            {

        $dados = $this->Alumnos->find()->where(['nombres LIKE'=>'%'. $this->request->data['buscar-nom'].'%']);

            $alumnos = $this->paginate($dados);
        }
}
             $this->set('alumnos', $alumnos);
       
    }     

    /**
     * View method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
     
         $query = $this->Alumnos->Registros->find('all',[
           'conditions' => ['Registros.alumno_id' => $id]])->contain(['Materias','Alumnos']);       

                $this->set(compact('query')); 


    }

     public function veralum($id = null)
    {
     
      if(!$id){
              return $this->redirect( ['controller' => 'Users', 'action' => 'home']);
        }
        
        
         $query = $this->Alumnos->find('all',[
           'conditions' => ['Alumnos.user_id' => $id]]);   
            
                 $this->set(compact('query'));
       
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumno = $this->Alumnos->newEntity();
        if ($this->request->is('post')) {
            $alumno = $this->Alumnos->patchEntity($alumno, $this->request->getData());
            if ($this->Alumnos->save($alumno)) {
                $this->Flash->success(__('El alumno se registro de forma correcta'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El alumno no fue registrado trate de nuevo'));
        }
        $this->set(compact('alumno'));
        $materias = $this->Alumnos->Materias->find('list');
        $this->set(compact('materias'));

        $users = $this->Alumnos->Users->find('list',[
           'conditions' => ['Users.role LIKE' => '%student%'],
            'order' => ['Users.created' => 'DESC'],
            'limit' => 1]);

        $this->set(compact('users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumno = $this->Alumnos->get($id, [
            'contain' => ['Users','Materias']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumno = $this->Alumnos->patchEntity($alumno, $this->request->getData());
            if ($this->Alumnos->save($alumno)) {
                $this->Flash->success(__('La informacion fue editada de forma correcta'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al editar, intentelo de nuevo'));
        }
        $this->set(compact('alumno'));
        $this->set('_serialize', ['alumno']);

        $users = $this->Alumnos->Users->find('list');
        $this->set(compact('users'));


         $materias = $this->Alumnos->Materias->find('list');
        $this->set(compact('materias'));
}
    /**
     * Delete method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumno = $this->Alumnos->get($id);
        if ($this->Alumnos->delete($alumno)) {
            $this->Flash->success(__('The alumno has been deleted.'));
        } else {
            $this->Flash->error(__('The alumno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    
     public function porgrado()
    {

       if ( $this->request->is('post')) {

            if(  $this->request->data['grado'][0][1])
            {

        $alumnos = $this->Alumnos->find()->where(['grado LIKE'=>'%'. $this->request->data['grado'][0].'%']) ->andWhere(['seccion LIKE'=>'%'. $this->request->data['grado'][1].'%']);

        }
        else {
             $this->Flash->error(__('Error'));
             return $this->redirect(['action' => 'index']);
        }
}
       $this->set(compact('alumnos'));        
       
    }


      public function porestado()
    {
         
       if ( $this->request->is('post')) {

            if(  $this->request->data['buscar-est'][0])
            {
                 $alumnos = $this->Alumnos->find()->where(['estado =' =>  $this->request->data['buscar-est'][0]]);

        }
        else {
             $this->Flash->error(__('Error'));
             return $this->redirect(['action' => 'index']);
        }
}
      
       $this->set(compact('alumnos'));       
       
    }

    

       
  
}
