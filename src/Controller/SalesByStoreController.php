<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalesByStore Controller
 *
 * @property \App\Model\Table\SalesByStoreTable $SalesByStore
 *
 * @method \App\Model\Entity\SalesByStore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalesByStoreController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $salesByStore = $this->paginate($this->SalesByStore);

        $this->set(compact('salesByStore'));
    }

    /**
     * View method
     *
     * @param string|null $id Sales By Store id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesByStore = $this->SalesByStore->get($id, [
            'contain' => []
        ]);

        $this->set('salesByStore', $salesByStore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salesByStore = $this->SalesByStore->newEntity();
        if ($this->request->is('post')) {
            $salesByStore = $this->SalesByStore->patchEntity($salesByStore, $this->request->getData());
            if ($this->SalesByStore->save($salesByStore)) {
                $this->Flash->success(__('The sales by store has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales by store could not be saved. Please, try again.'));
        }
        $this->set(compact('salesByStore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sales By Store id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salesByStore = $this->SalesByStore->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesByStore = $this->SalesByStore->patchEntity($salesByStore, $this->request->getData());
            if ($this->SalesByStore->save($salesByStore)) {
                $this->Flash->success(__('The sales by store has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales by store could not be saved. Please, try again.'));
        }
        $this->set(compact('salesByStore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sales By Store id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesByStore = $this->SalesByStore->get($id);
        if ($this->SalesByStore->delete($salesByStore)) {
            $this->Flash->success(__('The sales by store has been deleted.'));
        } else {
            $this->Flash->error(__('The sales by store could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
