<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Saletrades Controller
 *
 * @property \App\Model\Table\SaletradesTable $Saletrades
 */
class SaletradesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cars', 'Customers']
        ];
        $saletrades = $this->paginate($this->Saletrades);

        $this->set(compact('saletrades'));
        $this->set('_serialize', ['saletrades']);
    }

    /**
     * View method
     *
     * @param string|null $id Saletrade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saletrade = $this->Saletrades->get($id, [
            'contain' => ['Cars', 'Customers']
        ]);

        $this->set('saletrade', $saletrade);
        $this->set('_serialize', ['saletrade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saletrade = $this->Saletrades->newEntity();
        if ($this->request->is('post')) {
            $saletrade = $this->Saletrades->patchEntity($saletrade, $this->request->data);
            if ($this->Saletrades->save($saletrade)) {
                $this->Flash->success(__('The saletrade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The saletrade could not be saved. Please, try again.'));
            }
        }
        $cars = $this->Saletrades->Cars->find('list', ['limit' => 200]);
        $customers = $this->Saletrades->Customers->find('list', ['limit' => 200]);
        $this->set(compact('saletrade', 'cars', 'customers'));
        $this->set('_serialize', ['saletrade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Saletrade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saletrade = $this->Saletrades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saletrade = $this->Saletrades->patchEntity($saletrade, $this->request->data);
            if ($this->Saletrades->save($saletrade)) {
                $this->Flash->success(__('The saletrade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The saletrade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('saletrade'));
        $this->set('_serialize', ['saletrade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Saletrade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saletrade = $this->Saletrades->get($id);
        if ($this->Saletrades->delete($saletrade)) {
            $this->Flash->success(__('The saletrade has been deleted.'));
        } else {
            $this->Flash->error(__('The saletrade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
