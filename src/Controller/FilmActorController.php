<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FilmActor Controller
 *
 * @property \App\Model\Table\FilmActorTable $FilmActor
 *
 * @method \App\Model\Entity\FilmActor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilmActorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Actor', 'Film']
        ];
        $filmActor = $this->paginate($this->FilmActor);

        $this->set(compact('filmActor'));
    }

    /**
     * View method
     *
     * @param string|null $id Film Actor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $filmActor = $this->FilmActor->get($id, [
            'contain' => ['Actor', 'Film']
        ]);

        $this->set('filmActor', $filmActor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $filmActor = $this->FilmActor->newEntity();
        if ($this->request->is('post')) {
            $filmActor = $this->FilmActor->patchEntity($filmActor, $this->request->getData());
            if ($this->FilmActor->save($filmActor)) {
                $this->Flash->success(__('The film actor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film actor could not be saved. Please, try again.'));
        }
        $actor = $this->FilmActor->Actor->find('list', ['limit' => 200]);
        $film = $this->FilmActor->Film->find('list', ['limit' => 200]);
        $this->set(compact('filmActor', 'actor', 'film'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Film Actor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $filmActor = $this->FilmActor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $filmActor = $this->FilmActor->patchEntity($filmActor, $this->request->getData());
            if ($this->FilmActor->save($filmActor)) {
                $this->Flash->success(__('The film actor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film actor could not be saved. Please, try again.'));
        }
        $actor = $this->FilmActor->Actor->find('list', ['limit' => 200]);
        $film = $this->FilmActor->Film->find('list', ['limit' => 200]);
        $this->set(compact('filmActor', 'actor', 'film'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Film Actor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $filmActor = $this->FilmActor->get($id);
        if ($this->FilmActor->delete($filmActor)) {
            $this->Flash->success(__('The film actor has been deleted.'));
        } else {
            $this->Flash->error(__('The film actor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
