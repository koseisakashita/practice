<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $title_for_layout;?></title>
	<?php echo $this->Html->css('test');?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js">
	</script>
	<script>
	Push.create('こんにちは！', {
	　　body: '更新をお知らせします！',
	　　icon: 'icon.png',
	　　timeout: 8, // 通知が消えるタイミング
	　　vibrate: [100, 100, 100], // モバイル端末でのバイブレーション秒数
	　　onClick: function() {
	　　　　// 通知がクリックされた場合の設定
	　　　　console.log(this);
	　　}
	});
</script>
</head>

<?php
echo $header_for_layout;

echo '<body>';
echo $content_for_layout;
?>

</body>
</html>