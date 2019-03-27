<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StaffList Controller
 *
 * @property \App\Model\Table\StaffListTable $StaffList
 *
 * @method \App\Model\Entity\StaffList[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StaffListController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $staffList = $this->paginate($this->StaffList);

        $this->set(compact('staffList'));
    }

    /**
     * View method
     *
     * @param string|null $id Staff List id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $staffList = $this->StaffList->get($id, [
            'contain' => []
        ]);

        $this->set('staffList', $staffList);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $staffList = $this->StaffList->newEntity();
        if ($this->request->is('post')) {
            $staffList = $this->StaffList->patchEntity($staffList, $this->request->getData());
            if ($this->StaffList->save($staffList)) {
                $this->Flash->success(__('The staff list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staff list could not be saved. Please, try again.'));
        }
        $this->set(compact('staffList'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Staff List id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $staffList = $this->StaffList->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $staffList = $this->StaffList->patchEntity($staffList, $this->request->getData());
            if ($this->StaffList->save($staffList)) {
                $this->Flash->success(__('The staff list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staff list could not be saved. Please, try again.'));
        }
        $this->set(compact('staffList'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Staff List id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $staffList = $this->StaffList->get($id);
        if ($this->StaffList->delete($staffList)) {
            $this->Flash->success(__('The staff list has been deleted.'));
        } else {
            $this->Flash->error(__('The staff list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
