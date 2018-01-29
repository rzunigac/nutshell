<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Recepciones Controller
 *
 * @property \App\Model\Table\RecepcionesTable $Recepciones
 *
 * @method \App\Model\Entity\Recepcion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RecepcionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Productores', 'Plantas']
        ];
        $recepciones = $this->paginate($this->Recepciones);

        $this->set(compact('recepciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Recepcion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recepcion = $this->Recepciones->get($id, [
            'contain' => ['Productores', 'Plantas', 'Lotes']
        ]);

        $this->set('recepcion', $recepcion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recepcion = $this->Recepciones->newEntity();
        if ($this->request->is('post')) {
            $recepcion = $this->Recepciones->patchEntity($recepcion, $this->request->getData());
            if ($this->Recepciones->save($recepcion)) {
                $this->Flash->success(__('The recepcion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recepcion could not be saved. Please, try again.'));
        }
        $productores = $this->Recepciones->Productores->find('list', ['limit' => 200]);
        $plantas = $this->Recepciones->Plantas->find('list', ['limit' => 200]);
        $this->set(compact('recepcion', 'productores', 'plantas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Recepcion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recepcion = $this->Recepciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recepcion = $this->Recepciones->patchEntity($recepcion, $this->request->getData());
            if ($this->Recepciones->save($recepcion)) {
                $this->Flash->success(__('The recepcion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recepcion could not be saved. Please, try again.'));
        }
        $productores = $this->Recepciones->Productores->find('list', ['limit' => 200]);
        $plantas = $this->Recepciones->Plantas->find('list', ['limit' => 200]);
        $this->set(compact('recepcion', 'productores', 'plantas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Recepcion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recepcion = $this->Recepciones->get($id);
        if ($this->Recepciones->delete($recepcion)) {
            $this->Flash->success(__('The recepcion has been deleted.'));
        } else {
            $this->Flash->error(__('The recepcion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
