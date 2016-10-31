<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Venders Controller
 *
 * @property \App\Model\Table\VendersTable $Venders
 */
class VendersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $venders = $this->paginate($this->Venders);

        $this->set(compact('venders'));
        $this->set('_serialize', ['venders']);
    }

    /**
     * View method
     *
     * @param string|null $id Vender id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vender = $this->Venders->get($id, [
            'contain' => ['Buytrades']
        ]);

        $this->set('vender', $vender);
        $this->set('_serialize', ['vender']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vender = $this->Venders->newEntity();
        if ($this->request->is('post')) {
            $vender = $this->Venders->patchEntity($vender, $this->request->data);
            if ($this->Venders->save($vender)) {
                $this->Flash->success(__('The vender has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vender could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vender'));
        $this->set('_serialize', ['vender']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vender id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vender = $this->Venders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vender = $this->Venders->patchEntity($vender, $this->request->data);
            if ($this->Venders->save($vender)) {
                $this->Flash->success(__('The vender has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vender could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vender'));
        $this->set('_serialize', ['vender']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vender id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vender = $this->Venders->get($id);
        if ($this->Venders->delete($vender)) {
            $this->Flash->success(__('The vender has been deleted.'));
        } else {
            $this->Flash->error(__('The vender could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
