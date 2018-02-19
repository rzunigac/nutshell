<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Salidas Controller
 *
 * @property \App\Model\Table\SalidasTable $Salidas
 *
 * @method \App\Model\Entity\Salida[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalidasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $salidas = $this->paginate($this->Salidas);

        $this->set(compact('salidas'));
    }

    /**
     * View method
     *
     * @param string|null $id Salida id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salida = $this->Salidas->get($id, [
            'contain' => ['Pallets']
        ]);

        $this->set('salida', $salida);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salida = $this->Salidas->newEntity();
        if ($this->request->is('post')) {
            $salida = $this->Salidas->patchEntity($salida, $this->request->getData());
            if ($this->Salidas->save($salida)) {
                $this->Flash->success(__('The salida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salida could not be saved. Please, try again.'));
        }
        $this->set(compact('salida'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Salida id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salida = $this->Salidas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salida = $this->Salidas->patchEntity($salida, $this->request->getData());
            if ($this->Salidas->save($salida)) {
                $this->Flash->success(__('The salida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salida could not be saved. Please, try again.'));
        }
        $this->set(compact('salida'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Salida id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salida = $this->Salidas->get($id);
        if ($this->Salidas->delete($salida)) {
            $this->Flash->success(__('The salida has been deleted.'));
        } else {
            $this->Flash->error(__('The salida could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
