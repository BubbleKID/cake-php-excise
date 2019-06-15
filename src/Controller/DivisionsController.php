<?php
namespace App\Controller;

use App\Controller\AppController;

class DivisionsController extends AppController
{
  public function index() {
    $division = $this->paginate($this->Divisions);

    // echo "<pre>";
    // print_r($division);
    // echo"</pre>";


    // debug($division);
    $this->set(compact('division'));
  }

  public function add() {
    $division = $this->Divisions->newEntity();
    if($this->request->is('post')) {
      $division = $this->Divisions->patchEntity($division, $this->request->getData());

      if($this->Divisions->save($division)) {
        $this->Flash->success(__("The Division has been saved"));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__("The division could not be saved"));
    }

    $this->set(compact('division'));
  }

  public function edit($id = null) {
    $divi = $this->Divisions->get($id, [
      'contain' => []
    ]);

    if($this->request->is(['patch', 'post', 'put'])) {
      $divi = $this->Divisions->patchEntity($divi, $this->request->getData());

      if($this->Divisions->save($divi)) {
        $this->Flash->success(__("The Division has been saved"));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__("The division could not be saved"));
    }

    $this->set(compact('divi'));
  }

  public function view($id = null) {
    $division = $this->Divisions->get($id, [
      'contain' => []
    ]);
    $this->set(compact('division'));
  }

  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $division = $this->Divisions->get($id);
    if($this->Divisions->delete($division)) {
      return $this->redirect(['action' => 'index']);
    }
    $this->set(compact('division'));
  }
}

?>