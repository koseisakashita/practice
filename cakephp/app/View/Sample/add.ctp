
<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js"></script>


<?php echo $this->Html->css('/app/webroot/css/callback.css');?>
<?php echo $this->Html->script('/app/webroot/js/callback.js');?>

<h1><?php 
echo('てすと環境');
echo'</h1>';
echo $this->Form->create('Sample');
echo $this->Form->input('text');
echo $this->Form->text('name');
echo $this->Form->end('送信');

?>
<?php foreach($datas as $key):?>
<p style="background:#eee;">
name: 
<?php echo $key['Sample']['name'];?>
</p>
<?php echo $this->Form->error('name');?>
<p style="background:#eee;">
text: 
<?php echo $key['Sample']['text'];?>
</p>
<?php endforeach;?>