<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Film Controller
 *
 * @property \App\Model\Table\FilmTable $Film
 *
 * @method \App\Model\Entity\Film[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilmController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Language']
        ];
        $film = $this->paginate($this->Film);

        $this->set(compact('film'));
    }

    /**
     * View method
     *
     * @param string|null $id Film id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $film = $this->Film->get($id, [
            'contain' => ['Language', 'Actor', 'Category']
        ]);

        $this->set('film', $film);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $film = $this->Film->newEntity();
        if ($this->request->is('post')) {
            $film = $this->Film->patchEntity($film, $this->request->getData());
            if ($this->Film->save($film)) {
                $this->Flash->success(__('The film has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film could not be saved. Please, try again.'));
        }
        $language = $this->Film->Language->find('list', ['limit' => 200]);
        $actor = $this->Film->Actor->find('list', ['limit' => 200]);
        $category = $this->Film->Category->find('list', ['limit' => 200]);
        $this->set(compact('film', 'language', 'actor', 'category'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Film id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $film = $this->Film->get($id, [
            'contain' => ['Actor', 'Category']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $film = $this->Film->patchEntity($film, $this->request->getData());
            if ($this->Film->save($film)) {
                $this->Flash->success(__('The film has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film could not be saved. Please, try again.'));
        }
        $language = $this->Film->Language->find('list', ['limit' => 200]);
        $actor = $this->Film->Actor->find('list', ['limit' => 200]);
        $category = $this->Film->Category->find('list', ['limit' => 200]);
        $this->set(compact('film', 'language', 'actor', 'category'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Film id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $film = $this->Film->get($id);
        if ($this->Film->delete($film)) {
            $this->Flash->success(__('The film has been deleted.'));
        } else {
            $this->Flash->error(__('The film could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
