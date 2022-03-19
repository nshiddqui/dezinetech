<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Designs Controller
 *
 * @property \App\Model\Table\DesignsTable $Designs
 * @method \App\Model\Entity\Design[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DesignsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $design = $this->Designs->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $time = time();
            if (!empty($data['image']->getClientFilename())) {
                $data['image']->moveTo(WWW_ROOT . 'files/' . $time . $data['image']->getClientFilename());
                $data['image'] = $time . $data['image']->getClientFilename();
            } else {
                unset($data['image']);
            }
            if (!empty($data['pdf']->getClientFilename())) {
                $data['pdf']->moveTo(WWW_ROOT . 'files/' . $time . $data['pdf']->getClientFilename());
                $data['pdf'] = $time . $data['pdf']->getClientFilename();
            } else {
                unset($data['pdf']);
            }
            unset($data['files']);
            $design = $this->Designs->patchEntity($design, $data);
            if ($this->Designs->save($design)) {
                $this->Flash->success(__('The design has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The design could not be saved. Please, try again.'));
        }
        $this->set(compact('design'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Design id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $design = $this->Designs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $time = time();
            if (!empty($data['image']->getClientFilename())) {
                $data['image']->moveTo(WWW_ROOT . 'files/' . $time . $data['image']->getClientFilename());
                $data['image'] = $time . $data['image']->getClientFilename();
            } else {
                unset($data['image']);
            }
            if (!empty($data['pdf']->getClientFilename())) {
                $data['pdf']->moveTo(WWW_ROOT . 'files/' . $time . $data['pdf']->getClientFilename());
                $data['pdf'] = $time . $data['pdf']->getClientFilename();
            } else {
                unset($data['pdf']);
            }
            unset($data['files']);
            $design = $this->Designs->patchEntity($design, $data);
            if ($this->Designs->save($design)) {
                $this->Flash->success(__('The design has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The design could not be saved. Please, try again.'));
        }
        $this->set(compact('design'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Design id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $design = $this->Designs->get($id);
        if ($this->Designs->delete($design)) {
            $this->Flash->success(__('The design has been deleted.'));
        } else {
            $this->Flash->error(__('The design could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
