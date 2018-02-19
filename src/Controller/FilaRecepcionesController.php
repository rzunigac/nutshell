<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FilaRecepciones Controller
 *
 * @property \App\Model\Table\FilaRecepcionesTable $FilaRecepciones
 *
 * @method \App\Model\Entity\FilaRecepcion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilaRecepcionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['RecepcionPartidos', 'Categorias', 'Colores', 'Lotes']
        ];
        $filaRecepciones = $this->paginate($this->FilaRecepciones);

        $this->set(compact('filaRecepciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Fila Recepcion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $filaRecepcion = $this->FilaRecepciones->get($id, [
            'contain' => ['RecepcionPartidos', 'Categorias', 'Colores', 'Lotes']
        ]);

        $this->set('filaRecepcion', $filaRecepcion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $filaRecepcion = $this->FilaRecepciones->newEntity();
        if ($this->request->is('post')) {
            $filaRecepcion = $this->FilaRecepciones->patchEntity($filaRecepcion, $this->request->getData());
            if ($this->FilaRecepciones->save($filaRecepcion)) {
                $this->Flash->success(__('The fila recepcion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fila recepcion could not be saved. Please, try again.'));
        }
        $recepcionPartidos = $this->FilaRecepciones->RecepcionPartidos->find('list', ['limit' => 200]);
        $categorias = $this->FilaRecepciones->Categorias->find('list', ['limit' => 200]);
        $colores = $this->FilaRecepciones->Colores->find('list', ['limit' => 200]);
        $lotes = $this->FilaRecepciones->Lotes->find('list', ['limit' => 200]);
        $this->set(compact('filaRecepcion', 'recepcionPartidos', 'categorias', 'colores', 'lotes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fila Recepcion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $filaRecepcion = $this->FilaRecepciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $filaRecepcion = $this->FilaRecepciones->patchEntity($filaRecepcion, $this->request->getData());
            if ($this->FilaRecepciones->save($filaRecepcion)) {
                $this->Flash->success(__('The fila recepcion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fila recepcion could not be saved. Please, try again.'));
        }
        $recepcionPartidos = $this->FilaRecepciones->RecepcionPartidos->find('list', ['limit' => 200]);
        $categorias = $this->FilaRecepciones->Categorias->find('list', ['limit' => 200]);
        $colores = $this->FilaRecepciones->Colores->find('list', ['limit' => 200]);
        $lotes = $this->FilaRecepciones->Lotes->find('list', ['limit' => 200]);
        $this->set(compact('filaRecepcion', 'recepcionPartidos', 'categorias', 'colores', 'lotes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fila Recepcion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $filaRecepcion = $this->FilaRecepciones->get($id);
        if ($this->FilaRecepciones->delete($filaRecepcion)) {
            $this->Flash->success(__('The fila recepcion has been deleted.'));
        } else {
            $this->Flash->error(__('The fila recepcion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
