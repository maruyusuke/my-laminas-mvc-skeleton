<?php

namespace LaminasUser\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class HelloController extends AbstractActionController
{
  public function worldAction()
  {
    $message = $this->params()->fromQuery('message', 'foo');
    return new ViewModel(['message' => $message]);
  }
}