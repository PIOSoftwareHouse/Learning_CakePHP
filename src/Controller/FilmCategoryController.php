<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FilmCategory Controller
 *
 * @property \App\Model\Table\FilmCategoryTable $FilmCategory
 *
 * @method \App\Model\Entity\FilmCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilmCategoryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Film', 'Category']
        ];
        $filmCategory = $this->paginate($this->FilmCategory);

        $this->set(compact('filmCategory'));
    }

    /**
     * View method
     *
     * @param string|null $id Film Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $filmCategory = $this->FilmCategory->get($id, [
            'contain' => ['Film', 'Category']
        ]);

        $this->set('filmCategory', $filmCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $filmCategory = $this->FilmCategory->newEntity();
        if ($this->request->is('post')) {
            $filmCategory = $this->FilmCategory->patchEntity($filmCategory, $this->request->getData());
            if ($this->FilmCategory->save($filmCategory)) {
                $this->Flash->success(__('The film category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film category could not be saved. Please, try again.'));
        }
        $film = $this->FilmCategory->Film->find('list', ['limit' => 200]);
        $category = $this->FilmCategory->Category->find('list', ['limit' => 200]);
        $this->set(compact('filmCategory', 'film', 'category'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Film Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $filmCategory = $this->FilmCategory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $filmCategory = $this->FilmCategory->patchEntity($filmCategory, $this->request->getData());
            if ($this->FilmCategory->save($filmCategory)) {
                $this->Flash->success(__('The film category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film category could not be saved. Please, try again.'));
        }
        $film = $this->FilmCategory->Film->find('list', ['limit' => 200]);
        $category = $this->FilmCategory->Category->find('list', ['limit' => 200]);
        $this->set(compact('filmCategory', 'film', 'category'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Film Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $filmCategory = $this->FilmCategory->get($id);
        if ($this->FilmCategory->delete($filmCategory)) {
            $this->Flash->success(__('The film category has been deleted.'));
        } else {
            $this->Flash->error(__('The film category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
