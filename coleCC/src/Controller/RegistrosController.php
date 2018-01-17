<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Registros Controller
 *
 *
 * @method \App\Model\Entity\Registro[] paginate($object = null, array $settings = [])
 */
class RegistrosController extends AppController
{
public $helpers = array('Html','Form');
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       $this->paginate = [
            'contain' => ['Alumnos','Materias']
        ];
        $registros = $this->paginate($this->Registros);

       if ( $this->request->is('post')) {

            if(  $this->request->data['buscar-reg'])
            {

        $busreg = $this->Registros->find()->where(['Alumnos.nombres LIKE'=>'%'. $this->request->data['buscar-reg'].'%']);

            $registros = $this->paginate($busreg);
        }
}
        
       $this->set('registros', $registros);
        
    }

  
    public function view($id = null)
    {
        $registro = $this->Registros->get($id, [
            'contain' => []
        ]);

        $this->set('registro', $registro);
        $this->set('_serialize', ['registro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $registro = $this->Registros->newEntity();
        if ($this->request->is('post')) {
            $registro = $this->Registros->patchEntity($registro, $this->request->getData());
            if ($this->Registros->save($registro)) {
                $this->Flash->success(__('El registro a sido guardado'));

                return $this->redirect(['controller' => 'Alumnos','action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar el registro, intentelo de nuevo'));
        }
        $this->set(compact('registro'));
        //$this->set('_serialize', ['registro']);
        $alumnos = $this->Registros->Alumnos->find('list',[
             'conditions' => ['Alumnos.id =' => $id]
            ]);
        $this->set(compact('alumnos'));
        
        $materias = $this->Registros->Materias->find('list');
        $this->set(compact('materias'));
    }

    
    public function edit($id = null)
    {
        $registro = $this->Registros->get($id, [
            'contain' => ['Materias','Alumnos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registro = $this->Registros->patchEntity($registro, $this->request->getData());
            if ($this->Registros->save($registro)) {
                $this->Flash->success(__('El registro fue editado'));

                return $this->redirect(['controller' => 'Alumnos','action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar el registro, intentelo de nuevo'));
        }
        $this->set(compact('registro'));
        $this->set('_serialize', ['registro']);

        $alumnos = $this->Registros->Alumnos->find('list');
        $this->set(compact('alumnos'));
        
        $materias = $this->Registros->Materias->find('list');
        $this->set(compact('materias'));
    
    }

    /**
     * Delete method
     *
     * @param string|null $id Registro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registro = $this->Registros->get($id);
        if ($this->Registros->delete($registro)) {
            $this->Flash->success(__('The registro has been deleted.'));
        } else {
            $this->Flash->error(__('The registro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function year()
    {
        if ( $this->request->is('post')) {

            if(  $this->request->data['buscar-year'])
            {
                 $registros = $this->Registros->find()->where(['year =' =>  $this->request->data['buscar-year']])->contain('Materias')->contain('Alumnos');

        }
        else {
             $this->Flash->error(__('Error'));
             return $this->redirect(['action' => 'index']);
        }
}
      
       $this->set(compact('registros'));   
    }
}
