<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RecepcionPartidos Controller
 *
 * @property \App\Model\Table\RecepcionPartidosTable $RecepcionPartidos
 *
 * @method \App\Model\Entity\RecepcionPartido[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RecepcionPartidosController extends AppController
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
        $recepcionPartidos = $this->paginate($this->RecepcionPartidos);

        $this->set(compact('recepcionPartidos'));
    }

    /**
     * View method
     *
     * @param string|null $id Recepcion Partido id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recepcionPartido = $this->RecepcionPartidos->get($id, [
            'contain' => ['Plantas']
        ]);

        $this->set('recepcionPartido', $recepcionPartido);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recepcionPartido = $this->RecepcionPartidos->newEntity();
        if ($this->request->is('post')) {
            $recepcionPartido = $this->RecepcionPartidos->patchEntity($recepcionPartido, $this->request->getData());
            if ($this->RecepcionPartidos->save($recepcionPartido)) {
                $this->Flash->success(__('The recepcion partido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recepcion partido could not be saved. Please, try again.'));
        }
        $plantas = $this->RecepcionPartidos->Plantas->find('list', ['limit' => 200]);
        $this->set(compact('recepcionPartido', 'plantas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Recepcion Partido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recepcionPartido = $this->RecepcionPartidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recepcionPartido = $this->RecepcionPartidos->patchEntity($recepcionPartido, $this->request->getData());
            if ($this->RecepcionPartidos->save($recepcionPartido)) {
                $this->Flash->success(__('The recepcion partido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recepcion partido could not be saved. Please, try again.'));
        }
        $plantas = $this->RecepcionPartidos->Plantas->find('list', ['limit' => 200]);
        $this->set(compact('recepcionPartido', 'plantas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Recepcion Partido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recepcionPartido = $this->RecepcionPartidos->get($id);
        if ($this->RecepcionPartidos->delete($recepcionPartido)) {
            $this->Flash->success(__('The recepcion partido has been deleted.'));
        } else {
            $this->Flash->error(__('The recepcion partido could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
