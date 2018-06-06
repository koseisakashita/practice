<?php
	echo $this->Html->css('../app/webroot/css/pages/admin/login',
		['inline' => false]
	);
	$this->assign('title', 'ログインページ');
?>

<div class="login-form">
	<div class="section">
		<h1>Sign In</h1>
		<?php
			echo $this->Form->create('User');
		?>

		<div class="sign-input">
			<?php echo $this->Flash->render(); ?>
			<dl>
				<dt>ログインID</dt>
				<dd>
					<?php
						echo $this->Form->input('username', [
							'type' => 'text',
							'div' => false,
							'label' => false,
							'placeholder' => 'メールアドレス',
							'required' => true,
							'class' => 'form-control',
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
							'class' => 'form-control',
							'autocomplete' => 'off'
						]);
					?>
				</dd>
			</dl>
			<div class="sign-submit">
				<?php
					echo $this->Form->button('ログインする', [
						'type' => 'submit',
						'div' => false,
						'label' => false,
						'value' => 'do',
						'class' => 'btn',
						'name' => 'mode'
					]);
				?>
			</div>
		<?php echo $this->Form->end(); ?>
	</div>
</div>