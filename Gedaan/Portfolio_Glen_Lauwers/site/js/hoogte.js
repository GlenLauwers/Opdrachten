$(document).ready(function(){

	$(window).scroll(function(){
		var hoogte = $(window).scrollTop();

		var img = document.getElementById('wall_1'); 
		var height = img.clientHeight;

		if(hoogte >= height){
			$("#onder_nav").show(500);
		}

		else
		{
			$("#onder_nav").hide(500);
		}

	})
})
