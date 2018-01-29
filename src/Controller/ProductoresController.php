<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Productores Controller
 *
 * @property \App\Model\Table\ProductoresTable $Productores
 *
 * @method \App\Model\Entity\Productor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $productores = $this->paginate($this->Productores);

        $this->set(compact('productores'));
    }

    /**
     * View method
     *
     * @param string|null $id Productor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productor = $this->Productores->get($id, [
            'contain' => ['Recepciones']
        ]);

        $this->set('productor', $productor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productor = $this->Productores->newEntity();
        if ($this->request->is('post')) {
            $productor = $this->Productores->patchEntity($productor, $this->request->getData());
            if ($this->Productores->save($productor)) {
                $this->Flash->success(__('The productor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productor could not be saved. Please, try again.'));
        }
        $this->set(compact('productor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Productor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productor = $this->Productores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productor = $this->Productores->patchEntity($productor, $this->request->getData());
            if ($this->Productores->save($productor)) {
                $this->Flash->success(__('The productor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productor could not be saved. Please, try again.'));
        }
        $this->set(compact('productor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Productor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productor = $this->Productores->get($id);
        if ($this->Productores->delete($productor)) {
            $this->Flash->success(__('The productor has been deleted.'));
        } else {
            $this->Flash->error(__('The productor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
