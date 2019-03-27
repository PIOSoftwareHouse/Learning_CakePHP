<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalesByFilmCategory Controller
 *
 * @property \App\Model\Table\SalesByFilmCategoryTable $SalesByFilmCategory
 *
 * @method \App\Model\Entity\SalesByFilmCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalesByFilmCategoryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $salesByFilmCategory = $this->paginate($this->SalesByFilmCategory);

        $this->set(compact('salesByFilmCategory'));
    }

    /**
     * View method
     *
     * @param string|null $id Sales By Film Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesByFilmCategory = $this->SalesByFilmCategory->get($id, [
            'contain' => []
        ]);

        $this->set('salesByFilmCategory', $salesByFilmCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salesByFilmCategory = $this->SalesByFilmCategory->newEntity();
        if ($this->request->is('post')) {
            $salesByFilmCategory = $this->SalesByFilmCategory->patchEntity($salesByFilmCategory, $this->request->getData());
            if ($this->SalesByFilmCategory->save($salesByFilmCategory)) {
                $this->Flash->success(__('The sales by film category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales by film category could not be saved. Please, try again.'));
        }
        $this->set(compact('salesByFilmCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sales By Film Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salesByFilmCategory = $this->SalesByFilmCategory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesByFilmCategory = $this->SalesByFilmCategory->patchEntity($salesByFilmCategory, $this->request->getData());
            if ($this->SalesByFilmCategory->save($salesByFilmCategory)) {
                $this->Flash->success(__('The sales by film category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales by film category could not be saved. Please, try again.'));
        }
        $this->set(compact('salesByFilmCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sales By Film Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesByFilmCategory = $this->SalesByFilmCategory->get($id);
        if ($this->SalesByFilmCategory->delete($salesByFilmCategory)) {
            $this->Flash->success(__('The sales by film category has been deleted.'));
        } else {
            $this->Flash->error(__('The sales by film category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
