<?php

namespace Admin\Controllers;

class IndexController extends \ControllerBase
{
	 public function initialize()
    {
        $this->view->setTemplateAfter('login');
        \Phalcon\Tag::setTitle('Login');
        parent::initialize();
    }
	public function indexAction()
	{
			
	}

}