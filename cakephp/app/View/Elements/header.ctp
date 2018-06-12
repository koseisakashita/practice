<header>
	<div class="header-inner">
		<?php echo $this->Html->link('投稿システム', [
			'controller' => 'posts',
			'action' => 'index'
		]);?>
		<div class="header-item">
			<div class="link">
				<?php echo $this->Session->read('Auth.User.username');?>さん
			</div>
			<ul class="menu list-unstyled">
				<li>
					<?php echo $this->Html->link('ログアウト', [
						'controller' => 'users',
						'action' => 'logout'
					]);?>
				</li>
			</ul>
		</div>
	</div>
</header>
<script>
(function(){
	var opt = {
		headerElm: '.header-item > .link'
	};
	window.main = new main(opt);
})();
</script>