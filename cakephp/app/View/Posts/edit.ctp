<?php
	echo $this->Html->css('../app/webroot/css/pages/posts/edit',
		['inline' => false]
	);
	$this->assign('title', '投稿編集');
?>


<div class="posts-edit-container">
    <div class="p-head-area">
		<h1>投稿の編集</h1>
    </div>
	<?php echo $this->Form->create('Post');?>
		<div class="input-title">
			<?php echo $this->Form->input('title',[
	            'type' => 'text',
	            'div' => false,
	            'label' => 'タイトル',
	            'placeholder' => 'タイトル',
	            'required' => true,
	            'class' => 'form-control input-width400',	
			]);?>
		</div>
		<div class="input-body">
			<?php echo $this->Form->input('body', [
	            'type' => 'textarea',
	            'div' => false,
	            'label' => '投稿内容',
	            'placeholder' => '投稿内容',
	            'required' => true,
	            'class' => 'form-control input-width400',	
			]);?>
		</div>
		<div class="submit">
			<?php
				echo $this->Form->button('編集する', [
					'type' => 'submit',
					'div' => false,
					'label' => false,
					'value' => 'do',
					'class' => 'btn btn-primary',
					'name' => 'mode'
				]);
			?>
		</div>
		<?php echo $this->Form->input('id', array('type' => 'hidden'));?>
    <?php echo $this->Form->end();?>
</div>
