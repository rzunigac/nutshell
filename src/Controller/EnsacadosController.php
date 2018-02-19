<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ensacados Controller
 *
 * @property \App\Model\Table\EnsacadosTable $Ensacados
 *
 * @method \App\Model\Entity\Ensacado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnsacadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lotes', 'Envases']
        ];
        $ensacados = $this->paginate($this->Ensacados);

        $this->set(compact('ensacados'));
    }

    /**
     * View method
     *
     * @param string|null $id Ensacado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ensacado = $this->Ensacados->get($id, [
            'contain' => ['Lotes', 'Envases']
        ]);

        $this->set('ensacado', $ensacado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ensacado = $this->Ensacados->newEntity();
        if ($this->request->is('post')) {
            $ensacado = $this->Ensacados->patchEntity($ensacado, $this->request->getData());
            if ($this->Ensacados->save($ensacado)) {
                $this->Flash->success(__('The ensacado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ensacado could not be saved. Please, try again.'));
        }
        $lotes = $this->Ensacados->Lotes->find('list', ['limit' => 200]);
        $envases = $this->Ensacados->Envases->find('list', ['limit' => 200]);
        $this->set(compact('ensacado', 'lotes', 'envases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ensacado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ensacado = $this->Ensacados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ensacado = $this->Ensacados->patchEntity($ensacado, $this->request->getData());
            if ($this->Ensacados->save($ensacado)) {
                $this->Flash->success(__('The ensacado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ensacado could not be saved. Please, try again.'));
        }
        $lotes = $this->Ensacados->Lotes->find('list', ['limit' => 200]);
        $envases = $this->Ensacados->Envases->find('list', ['limit' => 200]);
        $this->set(compact('ensacado', 'lotes', 'envases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ensacado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ensacado = $this->Ensacados->get($id);
        if ($this->Ensacados->delete($ensacado)) {
            $this->Flash->success(__('The ensacado has been deleted.'));
        } else {
            $this->Flash->error(__('The ensacado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
