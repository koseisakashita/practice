<style>
	table td {
width: 20px; 
height: 20px; 
border: 1px solid black;

	}
table{
	position:relative;
}
.display::after{
    content: 'GAMEOVER';
    position: absolute;
    animation:animeTop .35s;
    left: 40%;
    bottom: 0;
    right: 0;
    margin: auto;
    color: #333;
    font-size: 50px;
    display: block;
    width: 100vw;
    top:50%;
        text-shadow: 2px 2px 4px #333, 0 0 2px #FFF;
}
@keyframes animeTop{
0%{
	top:0;
}

100%{
	top:50%;
}
}


</style>
<div id="info"></div>
<div id="tetoris"></div>

	<h1><?php 
	echo('てすと環境');
	echo'</h1>';
	echo $this->Form->create(false,array('type'=>'post'));
	echo $this->Form->label('text','テキスト');
	echo $this->Form->input('text');
	echo $this->Form->error('text');
	echo $this->Form->input('name');
	echo $this->Form->end('送信');
	
	?>
<?php foreach($datas as $key):?>
<p style="background:#eee;">
<?php echo $key['Sample']['name'];?>
</p>
<?php echo $this->Form->error('name');?>
<p style="background:#eee;">
<?php echo $key['Sample']['text'];?>
</p>
<?php endforeach;?>
<script src="/test/cakephp/js/tetoris.js"></script>