<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Envases Controller
 *
 * @property \App\Model\Table\EnvasesTable $Envases
 *
 * @method \App\Model\Entity\Envase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnvasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $envases = $this->paginate($this->Envases);

        $this->set(compact('envases'));
    }

    /**
     * View method
     *
     * @param string|null $id Envase id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $envase = $this->Envases->get($id, [
            'contain' => ['Ensacados', 'Filas', 'Lotes']
        ]);

        $this->set('envase', $envase);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $envase = $this->Envases->newEntity();
        if ($this->request->is('post')) {
            $envase = $this->Envases->patchEntity($envase, $this->request->getData());
            if ($this->Envases->save($envase)) {
                $this->Flash->success(__('The envase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The envase could not be saved. Please, try again.'));
        }
        $this->set(compact('envase'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Envase id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $envase = $this->Envases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $envase = $this->Envases->patchEntity($envase, $this->request->getData());
            if ($this->Envases->save($envase)) {
                $this->Flash->success(__('The envase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The envase could not be saved. Please, try again.'));
        }
        $this->set(compact('envase'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Envase id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $envase = $this->Envases->get($id);
        if ($this->Envases->delete($envase)) {
            $this->Flash->success(__('The envase has been deleted.'));
        } else {
            $this->Flash->error(__('The envase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
