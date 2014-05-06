<?php

namespace Site\Controllers;
class IndexController extends \ControllerBase
{

	 public function initialize()
    {
        //$this->view->setTemplateAfter('main');
        \Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
    }
	public function indexAction()
	{
		$prods=  \Items::find();
		 $this->flash->notice('This is a sample application of the Phalcon PHP Framework.
                Please don\'t provide us any personal information. Thanks');
		$this->view->setVar("prods", $prods);
	}

}