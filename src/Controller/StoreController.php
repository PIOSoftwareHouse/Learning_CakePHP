<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Store Controller
 *
 * @property \App\Model\Table\StoreTable $Store
 *
 * @method \App\Model\Entity\Store[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StoreController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Staff', 'Address']
        ];
        $store = $this->paginate($this->Store);

        $this->set(compact('store'));
    }

    /**
     * View method
     *
     * @param string|null $id Store id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $store = $this->Store->get($id, [
            'contain' => ['Staff', 'Address']
        ]);

        $this->set('store', $store);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $store = $this->Store->newEntity();
        if ($this->request->is('post')) {
            $store = $this->Store->patchEntity($store, $this->request->getData());
            if ($this->Store->save($store)) {
                $this->Flash->success(__('The store has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The store could not be saved. Please, try again.'));
        }
        $staff = $this->Store->Staff->find('list', ['limit' => 200]);
        $address = $this->Store->Address->find('list', ['limit' => 200]);
        $this->set(compact('store', 'staff', 'address'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Store id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $store = $this->Store->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $store = $this->Store->patchEntity($store, $this->request->getData());
            if ($this->Store->save($store)) {
                $this->Flash->success(__('The store has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The store could not be saved. Please, try again.'));
        }
        $staff = $this->Store->Staff->find('list', ['limit' => 200]);
        $address = $this->Store->Address->find('list', ['limit' => 200]);
        $this->set(compact('store', 'staff', 'address'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Store id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $store = $this->Store->get($id);
        if ($this->Store->delete($store)) {
            $this->Flash->success(__('The store has been deleted.'));
        } else {
            $this->Flash->error(__('The store could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
