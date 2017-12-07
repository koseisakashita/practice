
	window.onload = function(){
		var width = 10;
		var height = 20;
		var html = ['<table id="gameover">'];
		for(y=0;y<height;y++){
			html.push('<tr>');
			for(x=0;x<width;x++){
				html.push('<td></td>');

			}
			html.push('</tr>');
		}
		html.push('</table>');
		var bodycont = document.getElementById('tetoris');
		var left = 0;
		var left0 = left;


		bodycont.innerHTML= html.join('');
		
		var cells = document.getElementsByTagName('td');
		var top =0;
		var top0 = top;
		function move(){
			function keydown(e){
				if(e.keyCode == 37 && left >0){
					left--;
				}else if(e.keyCode == 39 && left + 4 <width){
					left++;
				}
			}
			document.onkeydown= keydown;

			var left0 = left;
			cells[ top0 * width + 0+left].style.backgroundColor = '';
			cells[ top0 * width + 1+left].style.backgroundColor = '';
			cells[ top0 * width + 2+left].style.backgroundColor = ''
			cells[ top0 * width + 3+left].style.backgroundColor = '';
			cells[ top * width + 0+left].style.backgroundColor = 'red';
			cells[ top * width + 1+left].style.backgroundColor = 'red';
			cells[ top * width + 2+left].style.backgroundColor = 'red';
			cells[ top * width + 3+left].style.backgroundColor = 'red';
			  top0 = top;
			  top ++;
			if(top < height){
			  setTimeout( move, 1000)
			}else if(height == 0){


		}
		move();
	}
