<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ActorInfo Controller
 *
 * @property \App\Model\Table\ActorInfoTable $ActorInfo
 *
 * @method \App\Model\Entity\ActorInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActorInfoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Actors']
        ];
        $actorInfo = $this->paginate($this->ActorInfo);

        $this->set(compact('actorInfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Actor Info id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actorInfo = $this->ActorInfo->get($id, [
            'contain' => ['Actors']
        ]);

        $this->set('actorInfo', $actorInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actorInfo = $this->ActorInfo->newEntity();
        if ($this->request->is('post')) {
            $actorInfo = $this->ActorInfo->patchEntity($actorInfo, $this->request->getData());
            if ($this->ActorInfo->save($actorInfo)) {
                $this->Flash->success(__('The actor info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actor info could not be saved. Please, try again.'));
        }
        $actors = $this->ActorInfo->Actors->find('list', ['limit' => 200]);
        $this->set(compact('actorInfo', 'actors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actor Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actorInfo = $this->ActorInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actorInfo = $this->ActorInfo->patchEntity($actorInfo, $this->request->getData());
            if ($this->ActorInfo->save($actorInfo)) {
                $this->Flash->success(__('The actor info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actor info could not be saved. Please, try again.'));
        }
        $actors = $this->ActorInfo->Actors->find('list', ['limit' => 200]);
        $this->set(compact('actorInfo', 'actors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actor Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actorInfo = $this->ActorInfo->get($id);
        if ($this->ActorInfo->delete($actorInfo)) {
            $this->Flash->success(__('The actor info has been deleted.'));
        } else {
            $this->Flash->error(__('The actor info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
