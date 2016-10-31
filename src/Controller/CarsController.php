<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cars Controller
 *
 * @property \App\Model\Table\CarsTable $Cars
 */
class CarsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cars = $this->paginate($this->Cars);

        $this->set(compact('cars'));
        $this->set('_serialize', ['cars']);
    }

    /**
     * View method
     *
     * @param string|null $id Car id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $car = $this->Cars->get($id, [
            'contain' => ['Buytrades']
        ]);

        $this->set('car', $car);
        $this->set('_serialize', ['car']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $car = $this->Cars->newEntity();
        if ($this->request->is('post')) {
            $car = $this->Cars->patchEntity($car, $this->request->data, ['associated' => ['Buytrades']]);
            if ($this->Cars->save($car)) {
                $this->Flash->success(__('The car has been saved.'));
                $this->buytrades->updateALL(
                    array('buytrades.totalvalue' => 100));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The car could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('car'));
        $this->set('_serialize', ['car']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Car id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $car = $this->Cars->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $car = $this->Cars->patchEntity($car, $this->request->data);
            $car->$this->buydrade->totalvalue = 100;
            if ($this->Cars->save($car)) {
                $this->Flash->success(__('The car has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The car could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('car'));
        $this->set('_serialize', ['car']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Car id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $car = $this->Cars->get($id);
        if ($this->Cars->delete($car)) {
            $this->Flash->success(__('The car has been deleted.'));
        } else {
            $this->Flash->error(__('The car could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
