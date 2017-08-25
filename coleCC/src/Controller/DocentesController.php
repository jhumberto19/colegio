<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Docentes Controller
 *
 *
 * @method \App\Model\Entity\Docente[] paginate($object = null, array $settings = [])
 */
class DocentesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $docentes = $this->paginate($this->Docentes);

        $this->set(compact('docentes'));
        $this->set('_serialize', ['docentes']);
    }

  
    public function view($id = null)
    {
        $docente = $this->Docentes->get($id, [
            'contain' => []
        ]);

        $this->set('docente', $docente);
        $this->set('_serialize', ['docente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $docente = $this->Docentes->newEntity();
        if ($this->request->is('post')) {
            $docente = $this->Docentes->patchEntity($docente, $this->request->getData());
            if ($this->Docentes->save($docente)) {
                $this->Flash->success(__('El docente a sido registrado de forma correcta'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El docente no fue registrado, trate de nuevo'));
        }
        $this->set(compact('docente'));
        $this->set('_serialize', ['docente']);
    }

    
    public function edit($id = null)
    {
        $docente = $this->Docentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $docente = $this->Docentes->patchEntity($docente, $this->request->getData());
            if ($this->Docentes->save($docente)) {
                $this->Flash->success(__('El docente a sido guardado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo editar, intente de nuevo'));
        }
        $this->set(compact('docente'));
        $this->set('_serialize', ['docente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Docente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $docente = $this->Docentes->get($id);
        if ($this->Docentes->delete($docente)) {
            $this->Flash->success(__('The docente has been deleted.'));
        } else {
            $this->Flash->error(__('The docente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
