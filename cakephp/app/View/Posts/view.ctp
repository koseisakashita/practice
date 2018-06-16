<?php
	echo $this->Html->css('../app/webroot/css/pages/posts/view',
		['inline' => false]
	);
	$this->assign('title', '投稿の詳細');
?>


<div class="posts-view-container">
    <div class="p-head-area">
		<h1><?php echo h($post['Post']['title']); ?></h1>
		<p>作成日時: <?php echo $post['Post']['created']; ?></p>
    </div>
    <div class="content">
		<p><?php echo h($post['Post']['body']); ?></p>
	</div>

</div>



