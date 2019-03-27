<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actor Controller
 *
 * @property \App\Model\Table\ActorTable $Actor
 *
 * @method \App\Model\Entity\Actor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $actor = $this->paginate($this->Actor);

        $this->set(compact('actor'));
    }

    /**
     * View method
     *
     * @param string|null $id Actor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actor = $this->Actor->get($id, [
            'contain' => ['Film']
        ]);

        $this->set('actor', $actor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actor = $this->Actor->newEntity();
        if ($this->request->is('post')) {
            $actor = $this->Actor->patchEntity($actor, $this->request->getData());
            if ($this->Actor->save($actor)) {
                $this->Flash->success(__('The actor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actor could not be saved. Please, try again.'));
        }
        $film = $this->Actor->Film->find('list', ['limit' => 200]);
        $this->set(compact('actor', 'film'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actor = $this->Actor->get($id, [
            'contain' => ['Film']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actor = $this->Actor->patchEntity($actor, $this->request->getData());
            if ($this->Actor->save($actor)) {
                $this->Flash->success(__('The actor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actor could not be saved. Please, try again.'));
        }
        $film = $this->Actor->Film->find('list', ['limit' => 200]);
        $this->set(compact('actor', 'film'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actor = $this->Actor->get($id);
        if ($this->Actor->delete($actor)) {
            $this->Flash->success(__('The actor has been deleted.'));
        } else {
            $this->Flash->error(__('The actor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
