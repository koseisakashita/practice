<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link href="../css/test.css" rel="stylesheet">
</head>
<body>
	<h1><?php echo('てすと環境'); ?></h1>
	<?php echo $this->Form->create(false,array('type'=>'post','action'=>'/index'));
	echo $this->Form->label('text','テキスト');
	echo $this->Form->text('text');
	echo $this->Form->end('送信');
	echo $postdata;
	?>


</body>
</html>