<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lotes Controller
 *
 * @property \App\Model\Table\LotesTable $Lotes
 *
 * @method \App\Model\Entity\Lote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LotesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recepciones', 'Variedades', 'Envases', 'Filas', 'Decisiones']
        ];
        $lotes = $this->paginate($this->Lotes);

        $this->set(compact('lotes'));
    }

    /**
     * View method
     *
     * @param string|null $id Lote id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lote = $this->Lotes->get($id, [
            'contain' => ['Recepciones', 'Variedades', 'Envases', 'Filas', 'Decisiones', 'ControlDeCalidad', 'Ensacados', 'FilaRecepciones', 'IngresoAPacking']
        ]);

        $this->set('lote', $lote);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lote = $this->Lotes->newEntity();
        if ($this->request->is('post')) {
            $lote = $this->Lotes->patchEntity($lote, $this->request->getData());
            if ($this->Lotes->save($lote)) {
                $this->Flash->success(__('The lote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lote could not be saved. Please, try again.'));
        }
        $recepciones = $this->Lotes->Recepciones->find('list', ['limit' => 200]);
        $variedades = $this->Lotes->Variedades->find('list', ['limit' => 200]);
        $envases = $this->Lotes->Envases->find('list', ['limit' => 200]);
        $filas = $this->Lotes->Filas->find('list', ['limit' => 200]);
        $decisiones = $this->Lotes->Decisiones->find('list', ['limit' => 200]);
        $this->set(compact('lote', 'recepciones', 'variedades', 'envases', 'filas', 'decisiones'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lote id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lote = $this->Lotes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lote = $this->Lotes->patchEntity($lote, $this->request->getData());
            if ($this->Lotes->save($lote)) {
                $this->Flash->success(__('The lote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lote could not be saved. Please, try again.'));
        }
        $recepciones = $this->Lotes->Recepciones->find('list', ['limit' => 200]);
        $variedades = $this->Lotes->Variedades->find('list', ['limit' => 200]);
        $envases = $this->Lotes->Envases->find('list', ['limit' => 200]);
        $filas = $this->Lotes->Filas->find('list', ['limit' => 200]);
        $decisiones = $this->Lotes->Decisiones->find('list', ['limit' => 200]);
        $this->set(compact('lote', 'recepciones', 'variedades', 'envases', 'filas', 'decisiones'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lote id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lote = $this->Lotes->get($id);
        if ($this->Lotes->delete($lote)) {
            $this->Flash->success(__('The lote has been deleted.'));
        } else {
            $this->Flash->error(__('The lote could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
