<?php

namespace Site\Controllers;
class ErrorController extends \ControllerBase
{

	 public function initialize()
    {
        //$this->view->setTemplateAfter('main');
        \Phalcon\Tag::setTitle('ERROR');
        parent::initialize();
    }
	public function indexAction()
	{
		 $this->response->setHeader(404, 'Not Found');
	//	$this->view->pick('404/404');
	}

}