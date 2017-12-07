
	<h1><?php 
	echo('てすと環境');
	echo'</h1>';
	echo $this->Form->create(false,array('type'=>'post','action'=>'.'));
	echo $this->Form->label('text','テキスト');
	echo $this->Form->text('text');
	echo $this->Form->end('送信');
	echo $data;
	?>
