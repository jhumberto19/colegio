<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Materias Controller
 *
 *
 * @method \App\Model\Entity\Materia[] paginate($object = null, array $settings = [])
 */
class MateriasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
     public $paginate = [
        'limit' => 10,
    'order' => ['id' => 'DESC']
    ];
    public function index()
    {    
$this->paginate = [
            'contain' => ['Docentes']
        ];
        $materias = $this->paginate($this->Materias);

       if ( $this->request->is('post')) {

            if(  $this->request->data['buscar-mat'])
            {

        $busmat = $this->Materias->find()->where(['Materias.nombre LIKE'=>'%'. $this->request->data['buscar-mat'].'%']);

            $materias = $this->paginate($busmat);
        }
}
        
        $this->set('materias', $materias); 
    }

   
    public function view($id = null)
    {
        $materia = $this->Materias->get($id, [
            'contain' => ['Docentes']
        ]);

        $this->set('materia', $materia);
        $this->set('_serialize', ['materia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materia = $this->Materias->newEntity();
        if ($this->request->is('post')) {
            $materia = $this->Materias->patchEntity($materia, $this->request->getData());
            if ($this->Materias->save($materia)) {
                $this->Flash->success(__('La materia a sido registrada'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo registrar la materia, intentelo de nuevo'));
            
        }
        $this->set(compact('materia'));
        $docentes = $this->Materias->Docentes->find('list');
        $this->set(compact('docentes'));
    }

   
    public function edit($id = null)
    {
        $materia = $this->Materias->get($id, [
            'contain' => ['Docentes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materia = $this->Materias->patchEntity($materia, $this->request->getData());
            if ($this->Materias->save($materia)) {
                $this->Flash->success(__('La materia se a registrado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo edittar la materia, intentelo de nuevo'));
        }
        $this->set(compact('materia'));
        $this->set('_serialize', ['materia']);

        $docentes = $this->Materias->Docentes->find('list');
        $this->set(compact('docentes'));
    }
    

    /**
     * Delete method
     *
     * @param string|null $id Materia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materia = $this->Materias->get($id);
        if ($this->Materias->delete($materia)) {
            $this->Flash->success(__('The materia has been deleted.'));
        } else {
            $this->Flash->error(__('The materia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
