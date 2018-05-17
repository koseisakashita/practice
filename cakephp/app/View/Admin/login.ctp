<?php
	echo $this->Html->css('/app/webroot/css/base.css');
	echo $this->Html->css('/app/webroot/css/pages/admin/login.css');
?>

<div class="login-form">
	<div class="content">
		<h1>システムログイン</h1>
		<?php echo $this->Flash->render('auth'); ?>
		<?php
			echo $this->Form->create('User');
		?>

		<div class="sign-input">
			<dl>
				<dt>ログインID</dt>
				<dd>
					<?php
						echo $this->Form->input('username', [
							'type' => 'text',
							'div' => false,
							'label' => false,
							'placeholder' => 'メールアドレス',
							'maxlength' => "64",
							'required' => true,
							'class' => 'form-control'
						]);
					?>
				</dd>
			</dl>
			<dl>
				<dt>パスワード</dt>
				<dd>
					<?php
						echo $this->Form->input('password', [
							'type' => 'password',
							'div' => false,
							'label' => false,
							'placeholder' => 'パスワード',
							'class' => 'form-control'
						]);
					?>
				</dd>
			</dl>
			<div class="sign-submit">
				<?php
					echo $this->Form->button('ログイン', [
						'type' => 'submit',
						'div' => false,
						'label' => false,
						'mode' => 'do',
						'class' => 'btn btn-primary'
					]);
				?>
			</div>
		<?php echo $this->Form->end(__('Login')); ?>
	</div>
</div>