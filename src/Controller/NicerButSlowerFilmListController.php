<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NicerButSlowerFilmList Controller
 *
 * @property \App\Model\Table\NicerButSlowerFilmListTable $NicerButSlowerFilmList
 *
 * @method \App\Model\Entity\NicerButSlowerFilmList[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NicerButSlowerFilmListController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $nicerButSlowerFilmList = $this->paginate($this->NicerButSlowerFilmList);

        $this->set(compact('nicerButSlowerFilmList'));
    }

    /**
     * View method
     *
     * @param string|null $id Nicer But Slower Film List id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nicerButSlowerFilmList = $this->NicerButSlowerFilmList->get($id, [
            'contain' => []
        ]);

        $this->set('nicerButSlowerFilmList', $nicerButSlowerFilmList);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nicerButSlowerFilmList = $this->NicerButSlowerFilmList->newEntity();
        if ($this->request->is('post')) {
            $nicerButSlowerFilmList = $this->NicerButSlowerFilmList->patchEntity($nicerButSlowerFilmList, $this->request->getData());
            if ($this->NicerButSlowerFilmList->save($nicerButSlowerFilmList)) {
                $this->Flash->success(__('The nicer but slower film list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nicer but slower film list could not be saved. Please, try again.'));
        }
        $this->set(compact('nicerButSlowerFilmList'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Nicer But Slower Film List id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nicerButSlowerFilmList = $this->NicerButSlowerFilmList->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nicerButSlowerFilmList = $this->NicerButSlowerFilmList->patchEntity($nicerButSlowerFilmList, $this->request->getData());
            if ($this->NicerButSlowerFilmList->save($nicerButSlowerFilmList)) {
                $this->Flash->success(__('The nicer but slower film list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nicer but slower film list could not be saved. Please, try again.'));
        }
        $this->set(compact('nicerButSlowerFilmList'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Nicer But Slower Film List id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nicerButSlowerFilmList = $this->NicerButSlowerFilmList->get($id);
        if ($this->NicerButSlowerFilmList->delete($nicerButSlowerFilmList)) {
            $this->Flash->success(__('The nicer but slower film list has been deleted.'));
        } else {
            $this->Flash->error(__('The nicer but slower film list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
