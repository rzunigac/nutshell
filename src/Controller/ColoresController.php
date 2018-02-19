<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Colores Controller
 *
 * @property \App\Model\Table\ColoresTable $Colores
 *
 * @method \App\Model\Entity\Color[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ColoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $colores = $this->paginate($this->Colores);

        $this->set(compact('colores'));
    }

    /**
     * View method
     *
     * @param string|null $id Color id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $color = $this->Colores->get($id, [
            'contain' => ['FilaRecepciones', 'IngresoAPacking', 'SalidaPacking']
        ]);

        $this->set('color', $color);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $color = $this->Colores->newEntity();
        if ($this->request->is('post')) {
            $color = $this->Colores->patchEntity($color, $this->request->getData());
            if ($this->Colores->save($color)) {
                $this->Flash->success(__('The color has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The color could not be saved. Please, try again.'));
        }
        $this->set(compact('color'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Color id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $color = $this->Colores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $color = $this->Colores->patchEntity($color, $this->request->getData());
            if ($this->Colores->save($color)) {
                $this->Flash->success(__('The color has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The color could not be saved. Please, try again.'));
        }
        $this->set(compact('color'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Color id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $color = $this->Colores->get($id);
        if ($this->Colores->delete($color)) {
            $this->Flash->success(__('The color has been deleted.'));
        } else {
            $this->Flash->error(__('The color could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
