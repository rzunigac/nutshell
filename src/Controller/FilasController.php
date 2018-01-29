<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Filas Controller
 *
 * @property \App\Model\Table\FilasTable $Filas
 *
 * @method \App\Model\Entity\Fila[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['DespachoAPartidos', 'Envases']
        ];
        $filas = $this->paginate($this->Filas);

        $this->set(compact('filas'));
    }

    /**
     * View method
     *
     * @param string|null $id Fila id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fila = $this->Filas->get($id, [
            'contain' => ['DespachoAPartidos', 'Envases']
        ]);

        $this->set('fila', $fila);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fila = $this->Filas->newEntity();
        if ($this->request->is('post')) {
            $fila = $this->Filas->patchEntity($fila, $this->request->getData());
            if ($this->Filas->save($fila)) {
                $this->Flash->success(__('The fila has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fila could not be saved. Please, try again.'));
        }
        $despachoAPartidos = $this->Filas->DespachoAPartidos->find('list', ['limit' => 200]);
        $envases = $this->Filas->Envases->find('list', ['limit' => 200]);
        $this->set(compact('fila', 'despachoAPartidos', 'envases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fila id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fila = $this->Filas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fila = $this->Filas->patchEntity($fila, $this->request->getData());
            if ($this->Filas->save($fila)) {
                $this->Flash->success(__('The fila has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fila could not be saved. Please, try again.'));
        }
        $despachoAPartidos = $this->Filas->DespachoAPartidos->find('list', ['limit' => 200]);
        $envases = $this->Filas->Envases->find('list', ['limit' => 200]);
        $this->set(compact('fila', 'despachoAPartidos', 'envases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fila id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fila = $this->Filas->get($id);
        if ($this->Filas->delete($fila)) {
            $this->Flash->success(__('The fila has been deleted.'));
        } else {
            $this->Flash->error(__('The fila could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
