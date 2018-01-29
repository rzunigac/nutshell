<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Variedades Controller
 *
 * @property \App\Model\Table\VariedadesTable $Variedades
 *
 * @method \App\Model\Entity\Variedad[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VariedadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $variedades = $this->paginate($this->Variedades);

        $this->set(compact('variedades'));
    }

    /**
     * View method
     *
     * @param string|null $id Variedad id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $variedad = $this->Variedades->get($id, [
            'contain' => ['Lotes']
        ]);

        $this->set('variedad', $variedad);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $variedad = $this->Variedades->newEntity();
        if ($this->request->is('post')) {
            $variedad = $this->Variedades->patchEntity($variedad, $this->request->getData());
            if ($this->Variedades->save($variedad)) {
                $this->Flash->success(__('The variedad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The variedad could not be saved. Please, try again.'));
        }
        $this->set(compact('variedad'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Variedad id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $variedad = $this->Variedades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $variedad = $this->Variedades->patchEntity($variedad, $this->request->getData());
            if ($this->Variedades->save($variedad)) {
                $this->Flash->success(__('The variedad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The variedad could not be saved. Please, try again.'));
        }
        $this->set(compact('variedad'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Variedad id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $variedad = $this->Variedades->get($id);
        if ($this->Variedades->delete($variedad)) {
            $this->Flash->success(__('The variedad has been deleted.'));
        } else {
            $this->Flash->error(__('The variedad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
