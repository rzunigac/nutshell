<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalidaPacking Controller
 *
 * @property \App\Model\Table\SalidaPackingTable $SalidaPacking
 *
 * @method \App\Model\Entity\SalidaPacking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalidaPackingController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Packings', 'Pallets', 'Envases', 'Colores', 'Categorias']
        ];
        $salidaPacking = $this->paginate($this->SalidaPacking);

        $this->set(compact('salidaPacking'));
    }

    /**
     * View method
     *
     * @param string|null $id Salida Packing id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salidaPacking = $this->SalidaPacking->get($id, [
            'contain' => ['Packings', 'Pallets', 'Envases', 'Colores', 'Categorias']
        ]);

        $this->set('salidaPacking', $salidaPacking);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salidaPacking = $this->SalidaPacking->newEntity();
        if ($this->request->is('post')) {
            $salidaPacking = $this->SalidaPacking->patchEntity($salidaPacking, $this->request->getData());
            if ($this->SalidaPacking->save($salidaPacking)) {
                $this->Flash->success(__('The salida packing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salida packing could not be saved. Please, try again.'));
        }
        $packings = $this->SalidaPacking->Packings->find('list', ['limit' => 200]);
        $pallets = $this->SalidaPacking->Pallets->find('list', ['limit' => 200]);
        $envases = $this->SalidaPacking->Envases->find('list', ['limit' => 200]);
        $colores = $this->SalidaPacking->Colores->find('list', ['limit' => 200]);
        $categorias = $this->SalidaPacking->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('salidaPacking', 'packings', 'pallets', 'envases', 'colores', 'categorias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Salida Packing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salidaPacking = $this->SalidaPacking->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salidaPacking = $this->SalidaPacking->patchEntity($salidaPacking, $this->request->getData());
            if ($this->SalidaPacking->save($salidaPacking)) {
                $this->Flash->success(__('The salida packing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salida packing could not be saved. Please, try again.'));
        }
        $packings = $this->SalidaPacking->Packings->find('list', ['limit' => 200]);
        $pallets = $this->SalidaPacking->Pallets->find('list', ['limit' => 200]);
        $envases = $this->SalidaPacking->Envases->find('list', ['limit' => 200]);
        $colores = $this->SalidaPacking->Colores->find('list', ['limit' => 200]);
        $categorias = $this->SalidaPacking->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('salidaPacking', 'packings', 'pallets', 'envases', 'colores', 'categorias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Salida Packing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salidaPacking = $this->SalidaPacking->get($id);
        if ($this->SalidaPacking->delete($salidaPacking)) {
            $this->Flash->success(__('The salida packing has been deleted.'));
        } else {
            $this->Flash->error(__('The salida packing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
