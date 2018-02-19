<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DespachoAPartidos Controller
 *
 * @property \App\Model\Table\DespachoAPartidosTable $DespachoAPartidos
 *
 * @method \App\Model\Entity\DespachoAPartido[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DespachoAPartidosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Plantas']
        ];
        $despachoAPartidos = $this->paginate($this->DespachoAPartidos);

        $this->set(compact('despachoAPartidos'));
    }

    /**
     * View method
     *
     * @param string|null $id Despacho A Partido id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $despachoAPartido = $this->DespachoAPartidos->get($id, [
            'contain' => ['Plantas', 'Filas']
        ]);

        $this->set('despachoAPartido', $despachoAPartido);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $despachoAPartido = $this->DespachoAPartidos->newEntity();
        if ($this->request->is('post')) {
            $despachoAPartido = $this->DespachoAPartidos->patchEntity($despachoAPartido, $this->request->getData());
            if ($this->DespachoAPartidos->save($despachoAPartido)) {
                $this->Flash->success(__('The despacho a partido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The despacho a partido could not be saved. Please, try again.'));
        }
        $plantas = $this->DespachoAPartidos->Plantas->find('list', ['limit' => 200]);
        $this->set(compact('despachoAPartido', 'plantas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Despacho A Partido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $despachoAPartido = $this->DespachoAPartidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $despachoAPartido = $this->DespachoAPartidos->patchEntity($despachoAPartido, $this->request->getData());
            if ($this->DespachoAPartidos->save($despachoAPartido)) {
                $this->Flash->success(__('The despacho a partido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The despacho a partido could not be saved. Please, try again.'));
        }
        $plantas = $this->DespachoAPartidos->Plantas->find('list', ['limit' => 200]);
        $this->set(compact('despachoAPartido', 'plantas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Despacho A Partido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $despachoAPartido = $this->DespachoAPartidos->get($id);
        if ($this->DespachoAPartidos->delete($despachoAPartido)) {
            $this->Flash->success(__('The despacho a partido has been deleted.'));
        } else {
            $this->Flash->error(__('The despacho a partido could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
