<?php

namespace App\Controller;

class CarsController extends AppController
{
  public function index()
    {
        $this->loadComponent('Paginator');
        $cars = $this->Paginator->paginate($this->Cars->find());
        $this->set(compact('cars'));
    }
    
    public function add()
    {
        $car = $this->Cars->newEmptyEntity();
        if ($this->request->is('post')) {
            $car = $this->Cars->patchEntity($car, $this->request->getData());

            if ($this->Cars->save($car)) {
                $this->Flash->success(__('Your car has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your car.'));
        }
        $this->set('car', $car);
    }
}