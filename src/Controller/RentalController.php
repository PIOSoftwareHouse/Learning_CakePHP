<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rental Controller
 *
 * @property \App\Model\Table\RentalTable $Rental
 *
 * @method \App\Model\Entity\Rental[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RentalController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Inventory', 'Customer', 'Staff']
        ];
        $rental = $this->paginate($this->Rental);

        $this->set(compact('rental'));
    }

    /**
     * View method
     *
     * @param string|null $id Rental id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rental = $this->Rental->get($id, [
            'contain' => ['Inventory', 'Customer', 'Staff']
        ]);

        $this->set('rental', $rental);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rental = $this->Rental->newEntity();
        if ($this->request->is('post')) {
            $rental = $this->Rental->patchEntity($rental, $this->request->getData());
            if ($this->Rental->save($rental)) {
                $this->Flash->success(__('The rental has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rental could not be saved. Please, try again.'));
        }
        $inventory = $this->Rental->Inventory->find('list', ['limit' => 200]);
        $customer = $this->Rental->Customer->find('list', ['limit' => 200]);
        $staff = $this->Rental->Staff->find('list', ['limit' => 200]);
        $this->set(compact('rental', 'inventory', 'customer', 'staff'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rental id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rental = $this->Rental->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rental = $this->Rental->patchEntity($rental, $this->request->getData());
            if ($this->Rental->save($rental)) {
                $this->Flash->success(__('The rental has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rental could not be saved. Please, try again.'));
        }
        $inventory = $this->Rental->Inventory->find('list', ['limit' => 200]);
        $customer = $this->Rental->Customer->find('list', ['limit' => 200]);
        $staff = $this->Rental->Staff->find('list', ['limit' => 200]);
        $this->set(compact('rental', 'inventory', 'customer', 'staff'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rental id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rental = $this->Rental->get($id);
        if ($this->Rental->delete($rental)) {
            $this->Flash->success(__('The rental has been deleted.'));
        } else {
            $this->Flash->error(__('The rental could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
