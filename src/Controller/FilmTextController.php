<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FilmText Controller
 *
 * @property \App\Model\Table\FilmTextTable $FilmText
 *
 * @method \App\Model\Entity\FilmText[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilmTextController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $filmText = $this->paginate($this->FilmText);

        $this->set(compact('filmText'));
    }

    /**
     * View method
     *
     * @param string|null $id Film Text id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $filmText = $this->FilmText->get($id, [
            'contain' => []
        ]);

        $this->set('filmText', $filmText);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $filmText = $this->FilmText->newEntity();
        if ($this->request->is('post')) {
            $filmText = $this->FilmText->patchEntity($filmText, $this->request->getData());
            if ($this->FilmText->save($filmText)) {
                $this->Flash->success(__('The film text has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film text could not be saved. Please, try again.'));
        }
        $this->set(compact('filmText'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Film Text id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $filmText = $this->FilmText->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $filmText = $this->FilmText->patchEntity($filmText, $this->request->getData());
            if ($this->FilmText->save($filmText)) {
                $this->Flash->success(__('The film text has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film text could not be saved. Please, try again.'));
        }
        $this->set(compact('filmText'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Film Text id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $filmText = $this->FilmText->get($id);
        if ($this->FilmText->delete($filmText)) {
            $this->Flash->success(__('The film text has been deleted.'));
        } else {
            $this->Flash->error(__('The film text could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
