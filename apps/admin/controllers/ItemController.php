<?php

namespace Admin\Controllers;
use Phalcon\Tag as Tag;
class ItemController extends \ControllerBase
{
	 public function initialize()
    {
        $this->view->setTemplateAfter('main');
        \Phalcon\Tag::setTitle('Dashboard');
        parent::initialize();
    }
	 public function indexAction()
    {
		
    }

   

}