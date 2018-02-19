<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ControlDeCalidad Controller
 *
 * @property \App\Model\Table\ControlDeCalidadTable $ControlDeCalidad
 *
 * @method \App\Model\Entity\ControlDeCalidad[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ControlDeCalidadController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lotes']
        ];
        $controlDeCalidad = $this->paginate($this->ControlDeCalidad);

        $this->set(compact('controlDeCalidad'));
    }

    /**
     * View method
     *
     * @param string|null $id Control De Calidad id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $controlDeCalidad = $this->ControlDeCalidad->get($id, [
            'contain' => ['Lotes']
        ]);

        $this->set('controlDeCalidad', $controlDeCalidad);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controlDeCalidad = $this->ControlDeCalidad->newEntity();
        if ($this->request->is('post')) {
            $controlDeCalidad = $this->ControlDeCalidad->patchEntity($controlDeCalidad, $this->request->getData());
            if ($this->ControlDeCalidad->save($controlDeCalidad)) {
                $this->Flash->success(__('The control de calidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The control de calidad could not be saved. Please, try again.'));
        }
        $lotes = $this->ControlDeCalidad->Lotes->find('list', ['limit' => 200]);
        $this->set(compact('controlDeCalidad', 'lotes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Control De Calidad id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $controlDeCalidad = $this->ControlDeCalidad->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controlDeCalidad = $this->ControlDeCalidad->patchEntity($controlDeCalidad, $this->request->getData());
            if ($this->ControlDeCalidad->save($controlDeCalidad)) {
                $this->Flash->success(__('The control de calidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The control de calidad could not be saved. Please, try again.'));
        }
        $lotes = $this->ControlDeCalidad->Lotes->find('list', ['limit' => 200]);
        $this->set(compact('controlDeCalidad', 'lotes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Control De Calidad id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controlDeCalidad = $this->ControlDeCalidad->get($id);
        if ($this->ControlDeCalidad->delete($controlDeCalidad)) {
            $this->Flash->success(__('The control de calidad has been deleted.'));
        } else {
            $this->Flash->error(__('The control de calidad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
