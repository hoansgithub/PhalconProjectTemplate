<?php

use Phalcon\Events\Event,
	Phalcon\Mvc\User\Plugin,
	Phalcon\Mvc\Dispatcher,
	Phalcon\Acl;

/**
 * Security
 *
 * This is the security plugin which controls that users only have access to the modules they're assigned to
 */
class Security extends Plugin
{

	public function __construct($dependencyInjector)
	{
		$this->_dependencyInjector = $dependencyInjector;
	}

	public function getAcl()
	{
		if (!isset($this->persistent->acl)) {

			$acl = new Phalcon\Acl\Adapter\Memory();

			$acl->setDefaultAction(Phalcon\Acl::DENY);

			//Register roles
			$roles = array(
				'users' => new Phalcon\Acl\Role('Users'),
				'guests' => new Phalcon\Acl\Role('Guests'),
				'admins'=> new Phalcon\Acl\Role('Admins')
			);
			foreach ($roles as $role) {
				$acl->addRole($role);
			}

			//Private area resources
			$privateResources = array(
				'admin' => array('login'),
				
			);
			foreach ($privateResources as $resource => $actions) {
				$acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
			}

			//Public area resources
			$publicResources = array(
				'site' => array('index'),
				'admin' => array('index'),
			);
			foreach ($publicResources as $resource => $actions) {
				$acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
			}

			//Grant access to public areas to both users and guests
			foreach ($roles as $role) {
				foreach ($publicResources as $resource => $actions) {
					$acl->allow($role->getName(), $resource, '*');
				}
			}

			//Grant acess to private area to role Users
			foreach ($privateResources as $resource => $actions) {
				foreach ($actions as $action){
					$acl->allow('Admins', $resource, $action);
				}
			}
			

			//The acl is stored in session, APC would be useful here too
			$this->persistent->acl = $acl;
		}

		return $this->persistent->acl;
	}

	/**
	 * This action is executed before execute any action in the application
	 */
	public function _registerSession($user)
    {
        $this->session->set('auth', array(
            'id' => $user->id,
            'name' => $user->name,
			'role'=>$user->role
        ));
    }
	public function beforeDispatch(Event $event, Dispatcher $dispatcher)
	{
		
		
		$auth = $this->session->get('auth');
		
		if (!$auth){
			$role = 'Guests';
		} else {
			if($auth['role']==0)
			{
			$role = 'Users';
			}
			else{
				$role = 'Admins';
			}
		}

		$controller = $dispatcher->getControllerName();
		$action = $dispatcher->getActionName();
		$module=$dispatcher->getModuleName(); 
		$acl = $this->getAcl();

		$allowed = $acl->isAllowed($role, $module, $controller);
		if ($allowed != Acl::ALLOW) {
			$this->flash->error("You don't have access to this module");
//			$dispatcher->forward(
//				array(
//					'module'=>'site',
//					'controller' => 'index',
//					'action' => 'index'
//				)
//			);
			$this->response->redirect('/');
			return false;
		}

	}

}
