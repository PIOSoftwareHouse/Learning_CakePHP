<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FilmList Controller
 *
 * @property \App\Model\Table\FilmListTable $FilmList
 *
 * @method \App\Model\Entity\FilmList[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilmListController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $filmList = $this->paginate($this->FilmList);

        $this->set(compact('filmList'));
    }

    /**
     * View method
     *
     * @param string|null $id Film List id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $filmList = $this->FilmList->get($id, [
            'contain' => []
        ]);

        $this->set('filmList', $filmList);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $filmList = $this->FilmList->newEntity();
        if ($this->request->is('post')) {
            $filmList = $this->FilmList->patchEntity($filmList, $this->request->getData());
            if ($this->FilmList->save($filmList)) {
                $this->Flash->success(__('The film list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film list could not be saved. Please, try again.'));
        }
        $this->set(compact('filmList'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Film List id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $filmList = $this->FilmList->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $filmList = $this->FilmList->patchEntity($filmList, $this->request->getData());
            if ($this->FilmList->save($filmList)) {
                $this->Flash->success(__('The film list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film list could not be saved. Please, try again.'));
        }
        $this->set(compact('filmList'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Film List id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $filmList = $this->FilmList->get($id);
        if ($this->FilmList->delete($filmList)) {
            $this->Flash->success(__('The film list has been deleted.'));
        } else {
            $this->Flash->error(__('The film list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
