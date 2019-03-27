<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerList Controller
 *
 * @property \App\Model\Table\CustomerListTable $CustomerList
 *
 * @method \App\Model\Entity\CustomerList[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerListController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $customerList = $this->paginate($this->CustomerList);

        $this->set(compact('customerList'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer List id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerList = $this->CustomerList->get($id, [
            'contain' => []
        ]);

        $this->set('customerList', $customerList);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerList = $this->CustomerList->newEntity();
        if ($this->request->is('post')) {
            $customerList = $this->CustomerList->patchEntity($customerList, $this->request->getData());
            if ($this->CustomerList->save($customerList)) {
                $this->Flash->success(__('The customer list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer list could not be saved. Please, try again.'));
        }
        $this->set(compact('customerList'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer List id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerList = $this->CustomerList->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerList = $this->CustomerList->patchEntity($customerList, $this->request->getData());
            if ($this->CustomerList->save($customerList)) {
                $this->Flash->success(__('The customer list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer list could not be saved. Please, try again.'));
        }
        $this->set(compact('customerList'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer List id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerList = $this->CustomerList->get($id);
        if ($this->CustomerList->delete($customerList)) {
            $this->Flash->success(__('The customer list has been deleted.'));
        } else {
            $this->Flash->error(__('The customer list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
