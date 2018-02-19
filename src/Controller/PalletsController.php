<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pallets Controller
 *
 * @property \App\Model\Table\PalletsTable $Pallets
 *
 * @method \App\Model\Entity\Pallet[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PalletsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Salidas']
        ];
        $pallets = $this->paginate($this->Pallets);

        $this->set(compact('pallets'));
    }

    /**
     * View method
     *
     * @param string|null $id Pallet id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pallet = $this->Pallets->get($id, [
            'contain' => ['Salidas', 'SalidaPacking']
        ]);

        $this->set('pallet', $pallet);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pallet = $this->Pallets->newEntity();
        if ($this->request->is('post')) {
            $pallet = $this->Pallets->patchEntity($pallet, $this->request->getData());
            if ($this->Pallets->save($pallet)) {
                $this->Flash->success(__('The pallet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pallet could not be saved. Please, try again.'));
        }
        $salidas = $this->Pallets->Salidas->find('list', ['limit' => 200]);
        $this->set(compact('pallet', 'salidas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pallet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pallet = $this->Pallets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pallet = $this->Pallets->patchEntity($pallet, $this->request->getData());
            if ($this->Pallets->save($pallet)) {
                $this->Flash->success(__('The pallet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pallet could not be saved. Please, try again.'));
        }
        $salidas = $this->Pallets->Salidas->find('list', ['limit' => 200]);
        $this->set(compact('pallet', 'salidas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pallet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pallet = $this->Pallets->get($id);
        if ($this->Pallets->delete($pallet)) {
            $this->Flash->success(__('The pallet has been deleted.'));
        } else {
            $this->Flash->error(__('The pallet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
