<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Plantas Controller
 *
 * @property \App\Model\Table\PlantasTable $Plantas
 *
 * @method \App\Model\Entity\Planta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlantasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $plantas = $this->paginate($this->Plantas);

        $this->set(compact('plantas'));
    }

    /**
     * View method
     *
     * @param string|null $id Planta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $planta = $this->Plantas->get($id, [
            'contain' => []
        ]);

        $this->set('planta', $planta);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $planta = $this->Plantas->newEntity();
        if ($this->request->is('post')) {
            $planta = $this->Plantas->patchEntity($planta, $this->request->getData());
            if ($this->Plantas->save($planta)) {
                $this->Flash->success(__('The planta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The planta could not be saved. Please, try again.'));
        }
        $this->set(compact('planta'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Planta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $planta = $this->Plantas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $planta = $this->Plantas->patchEntity($planta, $this->request->getData());
            if ($this->Plantas->save($planta)) {
                $this->Flash->success(__('The planta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The planta could not be saved. Please, try again.'));
        }
        $this->set(compact('planta'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Planta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $planta = $this->Plantas->get($id);
        if ($this->Plantas->delete($planta)) {
            $this->Flash->success(__('The planta has been deleted.'));
        } else {
            $this->Flash->error(__('The planta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
