<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cartest Controller
 *
 * @property \App\Model\Table\CartestTable $Cartest
 */
class CartestController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cartest = $this->paginate($this->Cartest);

        $this->set(compact('cartest'));
        $this->set('_serialize', ['cartest']);
    }

    /**
     * View method
     *
     * @param string|null $id Cartest id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cartest = $this->Cartest->get($id, [
            'contain' => []
        ]);

        $this->set('cartest', $cartest);
        $this->set('_serialize', ['cartest']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cartest = $this->Cartest->newEntity();
        if ($this->request->is('post')) {
            $cartest = $this->Cartest->patchEntity($cartest, $this->request->data);
            if ($this->Cartest->save($cartest)) {
                $this->Flash->success(__('The cartest has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cartest could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cartest'));
        $this->set('_serialize', ['cartest']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cartest id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cartest = $this->Cartest->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cartest = $this->Cartest->patchEntity($cartest, $this->request->data);
            if ($this->Cartest->save($cartest)) {
                $this->Flash->success(__('The cartest has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cartest could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cartest'));
        $this->set('_serialize', ['cartest']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cartest id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cartest = $this->Cartest->get($id);
        if ($this->Cartest->delete($cartest)) {
            $this->Flash->success(__('The cartest has been deleted.'));
        } else {
            $this->Flash->error(__('The cartest could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
