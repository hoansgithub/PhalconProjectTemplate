<?php echo $this->getContent(); ?>
<div class="block-login">
                    <div class="block-login-logo">
<!--                        <a class="logo">Cody's</a>-->
                    </div>                    
                    <div class="block-login-content">
                        <h1>Sign in</h1>
                         <?php echo $this->tag->form(array('admin/index/start', 'id' => 'signinForm')); ?>
                            
                        <div class="form-group">  
							<?php echo $this->tag->textField(array('email', 'name' => 'email', 'class' => 'form-control', 'placeholder' => 'Your login/e-mail')); ?>
                        </div>
                        <div class="form-group">   
							<?php echo $this->tag->passwordField(array('password', 'name' => 'password', 'class' => 'form-control', 'placeholder' => 'Your password')); ?>
                        </div>
                        <div class="pull-left">
                            <div class="checkbox">
                                <label> <?php echo $this->tag->checkField(array('remember-me', 'name' => 'keep')); ?>Remember me</label>
                            </div>
                        </div>                                        
<!--                        <div class="pull-right">
                            <a href="#">Forgot password?</a>
                        </div>-->

                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>                                        
                        
                       <?php echo $this->tag->endform(); ?>
                        <div class="sp"></div>

<!--                        <button class="btn btn-success btn-block" onClick="location.href='pages-signup.html'">Create an account</button>                    -->

<!--                        <p class="tac">Or use</p>

                        <div class="pull-left" style="width: 45%;">
                            <button class="btn btn-block btn-primary btn-facebook"><i class="fa fa-facebook pull-left"></i> Facebook</button>
                        </div>
                        <div class="pull-right" style="width: 45%;">
                            <button class="btn btn-block btn-info btn-tweeter"><i class="fa fa-twitter pull-left"></i> Twitter</button>
                        </div>-->

                        <div class="sp"></div>
                        <div class="pull-left">
							Cody's workbench <?php echo date('Y'); ?>
                        </div>
                    </div>
					
</div>




       