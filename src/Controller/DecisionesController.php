<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Decisiones Controller
 *
 * @property \App\Model\Table\DecisionesTable $Decisiones
 *
 * @method \App\Model\Entity\Decision[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DecisionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $decisiones = $this->paginate($this->Decisiones);

        $this->set(compact('decisiones'));
    }

    /**
     * View method
     *
     * @param string|null $id Decision id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $decision = $this->Decisiones->get($id, [
            'contain' => ['Lotes']
        ]);

        $this->set('decision', $decision);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $decision = $this->Decisiones->newEntity();
        if ($this->request->is('post')) {
            $decision = $this->Decisiones->patchEntity($decision, $this->request->getData());
            if ($this->Decisiones->save($decision)) {
                $this->Flash->success(__('The decision has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The decision could not be saved. Please, try again.'));
        }
        $this->set(compact('decision'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Decision id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $decision = $this->Decisiones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $decision = $this->Decisiones->patchEntity($decision, $this->request->getData());
            if ($this->Decisiones->save($decision)) {
                $this->Flash->success(__('The decision has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The decision could not be saved. Please, try again.'));
        }
        $this->set(compact('decision'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Decision id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $decision = $this->Decisiones->get($id);
        if ($this->Decisiones->delete($decision)) {
            $this->Flash->success(__('The decision has been deleted.'));
        } else {
            $this->Flash->error(__('The decision could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
