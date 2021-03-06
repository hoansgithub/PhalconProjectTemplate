<?php

namespace Admin\Controllers;
use Phalcon\Tag as Tag;
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
		$email='';
		$password='';
		$checked='';
		 if ($this->cookies->has('loginemail')) {
            $loginemail= $this->cookies->get('loginemail');
            $lemail = $loginemail->getValue();
			$email=$lemail;
			$loginpass= $this->cookies->get('loginpass');
            $lpass = $loginpass->getValue();
			$password = $lpass;
			$checked='checked';
        }
        if (!$this->request->isPost()) {
            Tag::setDefault('email', $email);
            Tag::setDefault('password', $password);
			Tag::setDefault('remember-me',$checked);
        }
    }

    public function registerAction()
    {
        $request = $this->request;
        if ($request->isPost()) {

            $name = $request->getPost('name', array('string', 'striptags'));
            $username = $request->getPost('username', 'alphanum');
            $email = $request->getPost('email', 'email');
            $password = $request->getPost('password');
            $repeatPassword = $this->request->getPost('repeatPassword');

            if ($password != $repeatPassword) {
                $this->flash->error('Passwords are different');
                return false;
            }

            $user = new Users();
            $user->username = $username;
            $user->password = sha1($password);
            $user->name = $name;
            $user->email = $email;
            $user->created_at = new Phalcon\Db\RawValue('now()');
            $user->active = 'Y';
            if ($user->save() == false) {
                foreach ($user->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                Tag::setDefault('email', '');
                Tag::setDefault('password', '');
                $this->flash->success('Thanks for sign-up, please log-in to start generating invoices');
                return $this->forward('index/index');
            }
        }
    }

    /**
     * Register authenticated user into session data
     *
     * @param Users $user
     */
    private function _registerSession($user)
    {
        $this->session->set('auth', array(
            'id' => $user->id,
            'name' => $user->username,
			'role'=>$user->role
        ));
    }

    /**
     * This actions receive the input from the login form
     *
     */
    public function startAction()
    {
        if ($this->request->isPost()) {
            $email = $this->request->getPost('email', 'email');

            $password = $this->request->getPost('password');
            $password = md5($password);
			
			$rememberme= isset($_POST['remember-me'])?true:false;
			
            $user = \Users::findFirst("email='$email' or username='$email' AND password='$password' AND active=true");
            if ($user != false) {
                $this->_registerSession($user);
				if($rememberme)
				{
					$this->cookies->set('loginemail', $email, time() + 15 * 86400);
					$this->cookies->set('loginpass', $password, time() + 15 * 86400);
				}
				else{
					$this->cookies->set('loginemail', '', time() + 15 * 86400);
					$this->cookies->set('loginpass', '', time() + 15 * 86400);
				}
                $this->flash->success('Welcome ' . $user->name);
                $this->response->redirect('admin/item');
            }

           

            $this->flash->error('Wrong email/password');
        }
		//Check if the cookie has previously set
       
        return $this->forward('index/index');
    }

    /**
     * Finishes the active session redirecting to the index
     *
     * @return unknown
     */
    public function endAction()
    {
		
        $this->session->remove('auth');
        $this->flash->success('Goodbye!');
        return $this->forward('index/index');
    }

}