<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IngresoAPacking Controller
 *
 * @property \App\Model\Table\IngresoAPackingTable $IngresoAPacking
 *
 * @method \App\Model\Entity\IngresoAPacking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IngresoAPackingController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Packings', 'Lotes', 'Colores', 'Categorias']
        ];
        $ingresoAPacking = $this->paginate($this->IngresoAPacking);

        $this->set(compact('ingresoAPacking'));
    }

    /**
     * View method
     *
     * @param string|null $id Ingreso A Packing id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ingresoAPacking = $this->IngresoAPacking->get($id, [
            'contain' => ['Packings', 'Lotes', 'Colores', 'Categorias']
        ]);

        $this->set('ingresoAPacking', $ingresoAPacking);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ingresoAPacking = $this->IngresoAPacking->newEntity();
        if ($this->request->is('post')) {
            $ingresoAPacking = $this->IngresoAPacking->patchEntity($ingresoAPacking, $this->request->getData());
            if ($this->IngresoAPacking->save($ingresoAPacking)) {
                $this->Flash->success(__('The ingreso a packing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ingreso a packing could not be saved. Please, try again.'));
        }
        $packings = $this->IngresoAPacking->Packings->find('list', ['limit' => 200]);
        $lotes = $this->IngresoAPacking->Lotes->find('list', ['limit' => 200]);
        $colores = $this->IngresoAPacking->Colores->find('list', ['limit' => 200]);
        $categorias = $this->IngresoAPacking->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('ingresoAPacking', 'packings', 'lotes', 'colores', 'categorias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ingreso A Packing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ingresoAPacking = $this->IngresoAPacking->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ingresoAPacking = $this->IngresoAPacking->patchEntity($ingresoAPacking, $this->request->getData());
            if ($this->IngresoAPacking->save($ingresoAPacking)) {
                $this->Flash->success(__('The ingreso a packing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ingreso a packing could not be saved. Please, try again.'));
        }
        $packings = $this->IngresoAPacking->Packings->find('list', ['limit' => 200]);
        $lotes = $this->IngresoAPacking->Lotes->find('list', ['limit' => 200]);
        $colores = $this->IngresoAPacking->Colores->find('list', ['limit' => 200]);
        $categorias = $this->IngresoAPacking->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('ingresoAPacking', 'packings', 'lotes', 'colores', 'categorias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ingreso A Packing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ingresoAPacking = $this->IngresoAPacking->get($id);
        if ($this->IngresoAPacking->delete($ingresoAPacking)) {
            $this->Flash->success(__('The ingreso a packing has been deleted.'));
        } else {
            $this->Flash->error(__('The ingreso a packing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
