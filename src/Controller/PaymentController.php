<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Payment Controller
 *
 * @property \App\Model\Table\PaymentTable $Payment
 *
 * @method \App\Model\Entity\Payment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customer', 'Staff', 'Rental']
        ];
        $payment = $this->paginate($this->Payment);

        $this->set(compact('payment'));
    }

    /**
     * View method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payment = $this->Payment->get($id, [
            'contain' => ['Customer', 'Staff', 'Rental']
        ]);

        $this->set('payment', $payment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $payment = $this->Payment->newEntity();
        if ($this->request->is('post')) {
            $payment = $this->Payment->patchEntity($payment, $this->request->getData());
            if ($this->Payment->save($payment)) {
                $this->Flash->success(__('The payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment could not be saved. Please, try again.'));
        }
        $customer = $this->Payment->Customer->find('list', ['limit' => 200]);
        $staff = $this->Payment->Staff->find('list', ['limit' => 200]);
        $rental = $this->Payment->Rental->find('list', ['limit' => 200]);
        $this->set(compact('payment', 'customer', 'staff', 'rental'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $payment = $this->Payment->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payment = $this->Payment->patchEntity($payment, $this->request->getData());
            if ($this->Payment->save($payment)) {
                $this->Flash->success(__('The payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment could not be saved. Please, try again.'));
        }
        $customer = $this->Payment->Customer->find('list', ['limit' => 200]);
        $staff = $this->Payment->Staff->find('list', ['limit' => 200]);
        $rental = $this->Payment->Rental->find('list', ['limit' => 200]);
        $this->set(compact('payment', 'customer', 'staff', 'rental'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payment = $this->Payment->get($id);
        if ($this->Payment->delete($payment)) {
            $this->Flash->success(__('The payment has been deleted.'));
        } else {
            $this->Flash->error(__('The payment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
