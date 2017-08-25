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
    public function index()
    {
        $alumnos = $this->paginate($this->Alumnos);
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
        $alumno = $this->Alumnos->get($id, [
            'contain' => []
        ]);

        $this->set('alumno', $alumno);
        $this->set('_serialize', ['alumno']);
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
        $materias = $this->Alumnos->Materias->find('list');
        $this->set(compact('materias'));

        $users = $this->Alumnos->Users->find('list');
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
            'contain' => []
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
}
