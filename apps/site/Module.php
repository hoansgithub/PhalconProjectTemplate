<?php

namespace Site;
use Security;
 use \Phalcon\Mvc\Dispatcher as PhDispatcher;
class Module
{

	public function registerAutoloaders()
	{

		$loader = new \Phalcon\Loader();

		$loader->registerNamespaces(array(
			'Site\Controllers' => '../apps/site/controllers/',
			'Site\Plugins' => '../apps/plugins/',
		));

		$loader->register();
	}

	/**
	 * Register the services here to make them general or register in the ModuleDefinition to make them module-specific
	 */
	public function registerServices($di)
	{

		//Registering a dispatcher
		$di->set('dispatcher', function() use ($di) {
			
			$dispatcher = new \Phalcon\Mvc\Dispatcher();

			//Attach a event listener to the dispatcher
			$eventManager = new \Phalcon\Events\Manager();

			$dispatcher->setEventsManager($eventManager);
			$dispatcher->setDefaultNamespace("Site\Controllers");
			
			
			$eventsManager = $di->getShared('eventsManager');

		$security = new Security($di);

		/**
		 * We listen for events in the dispatcher using the Security plugin
		 */
		$eventsManager->attach('dispatch', $security);

		

		
		  $eventsManager->attach(
            "dispatch:beforeException",
            function($event, $dispatcher, $exception)
            {
                switch ($exception->getCode()) {
                    case PhDispatcher::EXCEPTION_HANDLER_NOT_FOUND:
                    case PhDispatcher::EXCEPTION_ACTION_NOT_FOUND:
                        $dispatcher->forward(
                            array(
                                'controller' => 'error',
                                'action'     => 'index',
                            )
                        );
                        return false;
                }
            }
        );
        $dispatcher->setEventsManager($eventsManager);
		
		
		return $dispatcher;
		});



	/**
	 * Setting up volt
	 */
	$di->set('volt', function($view, $di) {

		$volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);

		$volt->setOptions(array(
			"compiledPath" => "../cache/volt/"
		));

		return $volt;
	}, true);

		
		
		//Registering the view component
		$di->set('view', function() {
			$view = new \Phalcon\Mvc\View();
			$view->setViewsDir('../apps/site/views/');
			$view->registerEngines(array(
				".volt" => 'volt',
				".phtml"=>'volt'
			));
			return $view;
		});

		//Set a different connection in each module
		

	}

}