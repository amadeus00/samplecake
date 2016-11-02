<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
* Withdrawals Controller
*
* @property \App\Model\Table\WithdrawalsTable $Withdrawals
*/
class WithdrawalsController extends AppController
{
  /**
  * Index method
  *
  * @return \Cake\Network\Response|null
  */
  public function index()
  {
    $this->paginate = [
      'contain' => ['Buytrades']
    ];
    $withdrawals = $this->paginate($this->Withdrawals);

    $this->set(compact('withdrawals'));
    $this->set('_serialize', ['withdrawals']);
  }

  /**
  * View method
  *
  * @param string|null $id Withdrawal id.
  * @return \Cake\Network\Response|null
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
  public function view($id = null)
  {
    $withdrawal = $this->Withdrawals->get($id, [
      'contain' => ['Buytrades']
    ]);

    $this->set('withdrawal', $withdrawal);
    $this->set('_serialize', ['withdrawal']);
  }

  /**
  * Add method
  *
  * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
  */

  //残金計算関数
  public function remainingcal($buytrade_id){
    $query = $this->Withdrawals->find()
    ->where(['buytrade_id' => $buytrade_id]);
    $results = $query->all();
    $data = $results->toArray();
    $sum = 0;
    foreach($data as $datarow){
      $sum = $sum + $datarow['buyvalue'];
    }

    $buytradesTable = TableRegistry::get('Buytrades');
    $buytrade = $buytradesTable->get($buytrade_id);
    $buytrade->remaining = $buytrade->totalvalue - $sum;
    $buytradesTable->save($buytrade);
  }

  public function add()
  {
    $withdrawal = $this->Withdrawals->newEntity();
    if ($this->request->is('post')) {
      $withdrawal = $this->Withdrawals->patchEntity($withdrawal, $this->request->data);

      if ($this->Withdrawals->save($withdrawal)) {
        $this->remainingcal($withdrawal->buytrade_id);
        $this->Flash->success(__('The withdrawal has been saved.'));

        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The withdrawal could not be saved. Please, try again.'));
      }
    }
    $buytrades = $this->Withdrawals->Buytrades->find('list', ['limit' => 200]);
    $this->set(compact('withdrawal', 'buytrades'));
    $this->set('_serialize', ['withdrawal']);
  }

  /**
  * Edit method
  *
  * @param string|null $id Withdrawal id.
  * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
  * @throws \Cake\Network\Exception\NotFoundException When record not found.
  */
  public function edit($id = null)
  {
    $withdrawal = $this->Withdrawals->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $withdrawal = $this->Withdrawals->patchEntity($withdrawal, $this->request->data);
      if ($this->Withdrawals->save($withdrawal)) {
        $this->Flash->success(__('The withdrawal has been saved.'));

        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The withdrawal could not be saved. Please, try again.'));
      }
    }
    $buytrades = $this->Withdrawals->Buytrades->find('list', ['limit' => 200]);
    $this->set(compact('withdrawal', 'buytrades'));
    $this->set('_serialize', ['withdrawal']);
  }

  /**
  * Delete method
  *
  * @param string|null $id Withdrawal id.
  * @return \Cake\Network\Response|null Redirects to index.
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $withdrawal = $this->Withdrawals->get($id);
    if ($this->Withdrawals->delete($withdrawal)) {
      $this->Flash->success(__('The withdrawal has been deleted.'));
    } else {
      $this->Flash->error(__('The withdrawal could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);
  }
}
