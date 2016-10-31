<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cartest2 Controller
 *
 * @property \App\Model\Table\Cartest2Table $Cartest2
 */
class Cartest2Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cartest2 = $this->paginate($this->Cartest2);

        $this->set(compact('cartest2'));
        $this->set('_serialize', ['cartest2']);
    }

    /**
     * View method
     *
     * @param string|null $id Cartest2 id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cartest2 = $this->Cartest2->get($id, [
            'contain' => []
        ]);

        $this->set('cartest2', $cartest2);
        $this->set('_serialize', ['cartest2']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cartest2 = $this->Cartest2->newEntity();
        if ($this->request->is('post')) {
            $cartest2 = $this->Cartest2->patchEntity($cartest2, $this->request->data);
            if ($this->Cartest2->save($cartest2)) {
                $this->Flash->success(__('The cartest2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cartest2 could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cartest2'));
        $this->set('_serialize', ['cartest2']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cartest2 id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cartest2 = $this->Cartest2->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cartest2 = $this->Cartest2->patchEntity($cartest2, $this->request->data);
            if ($this->Cartest2->save($cartest2)) {
                $this->Flash->success(__('The cartest2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cartest2 could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cartest2'));
        $this->set('_serialize', ['cartest2']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cartest2 id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cartest2 = $this->Cartest2->get($id);
        if ($this->Cartest2->delete($cartest2)) {
            $this->Flash->success(__('The cartest2 has been deleted.'));
        } else {
            $this->Flash->error(__('The cartest2 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
