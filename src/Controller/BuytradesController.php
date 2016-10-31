<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Buytrades Controller
 *
 * @property \App\Model\Table\BuytradesTable $Buytrades
 */
class BuytradesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cars']
        ];
        $buytrades = $this->paginate($this->Buytrades);

        $this->set(compact('buytrades'));
        $this->set('_serialize', ['buytrades']);
    }

    /**
     * View method
     *
     * @param string|null $id Buytrade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $buytrade = $this->Buytrades->get($id, [
            'contain' => ['Cars', 'Withdrawals']
        ]);

        $this->set('buytrade', $buytrade);
        $this->set('_serialize', ['buytrade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $buytrade = $this->Buytrades->newEntity();
        if ($this->request->is('post')) {
            $buytrade = $this->Buytrades->patchEntity($buytrade, $this->request->data);
            if ($this->Buytrades->save($buytrade)) {
                $this->Flash->success(__('The buytrade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The buytrade could not be saved. Please, try again.'));
            }
        }
        $cars = $this->Buytrades->Cars->find('list', ['limit' => 200]);
        $this->set(compact('buytrade', 'cars'));
        $this->set('_serialize', ['buytrade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Buytrade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $buytrade = $this->Buytrades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $buytrade = $this->Buytrades->patchEntity($buytrade, $this->request->data);
            if ($this->Buytrades->save($buytrade)) {
                $this->Flash->success(__('The buytrade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The buytrade could not be saved. Please, try again.'));
            }
        }
        $cars = $this->Buytrades->Cars->find('list', ['limit' => 200]);
        $this->set(compact('buytrade', 'cars'));
        $this->set('_serialize', ['buytrade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Buytrade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $buytrade = $this->Buytrades->get($id);
        if ($this->Buytrades->delete($buytrade)) {
            $this->Flash->success(__('The buytrade has been deleted.'));
        } else {
            $this->Flash->error(__('The buytrade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
