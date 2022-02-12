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
}