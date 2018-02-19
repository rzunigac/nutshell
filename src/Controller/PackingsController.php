<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Packings Controller
 *
 * @property \App\Model\Table\PackingsTable $Packings
 *
 * @method \App\Model\Entity\Packing[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PackingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $packings = $this->paginate($this->Packings);

        $this->set(compact('packings'));
    }

    /**
     * View method
     *
     * @param string|null $id Packing id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $packing = $this->Packings->get($id, [
            'contain' => ['IngresoAPacking', 'SalidaPacking']
        ]);

        $this->set('packing', $packing);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $packing = $this->Packings->newEntity();
        if ($this->request->is('post')) {
            $packing = $this->Packings->patchEntity($packing, $this->request->getData());
            if ($this->Packings->save($packing)) {
                $this->Flash->success(__('The packing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The packing could not be saved. Please, try again.'));
        }
        $this->set(compact('packing'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Packing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $packing = $this->Packings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $packing = $this->Packings->patchEntity($packing, $this->request->getData());
            if ($this->Packings->save($packing)) {
                $this->Flash->success(__('The packing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The packing could not be saved. Please, try again.'));
        }
        $this->set(compact('packing'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Packing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $packing = $this->Packings->get($id);
        if ($this->Packings->delete($packing)) {
            $this->Flash->success(__('The packing has been deleted.'));
        } else {
            $this->Flash->error(__('The packing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
