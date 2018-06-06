<?php
	echo $this->Html->css('../app/webroot/css/pages/admin/login',
		['inline' => false]
	);
	$this->assign('title', '投稿一覧');
?>
<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>