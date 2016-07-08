<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">					
					<div class="login-form">
						<!-- <h2>Login to your account</h2>
						<?= $this->Flash->render('auth') ?>
						<?= $this->Form->create('') ?>
							<?= $this->Form->input('username', ['type' => 'text', 'placeholder' => 'Username']) ?>
							<?= $this->Form->input('password', ['type' => 'password', 'placeholder' => 'Password']) ?>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<?= $this->Form->button(__('Login'), ['name' => 'login', 'class' => 'btn btn-default']) ?>
						<?= $this->Form->end() ?> -->
					</div>
				</div>
				<div class="col-sm-1">
					<!-- <h2 class="or">OR</h2> -->
				</div>
				<div class="col-sm-4">
					<div class="signup-form">
						<h2>New User Signup!</h2>
						<?= $this->Form->create($user) ?>
							<?php
					            echo $this->Form->input('name', ['type' => 'text', 'placeholder' => 'Name']);
					            echo $this->Form->input('username', ['type' => 'text', 'placeholder' => 'Username']);
					            echo $this->Form->input('password', ['type' => 'password', 'placeholder' => 'Password']);
					        ?>					    
					    	<?= $this->Form->button(__('Signup'), ['class' => 'btn btn-default']) ?>
					    <?= $this->Form->end() ?>						
					</div>
				</div>
			</div>
		</div>
	</section><!--/form-->