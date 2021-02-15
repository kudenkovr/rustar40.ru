$(document).ready(function(){
	$(window).resize();
});

$(window).resize(function() {
	$('.headline').css({
		'background-position': Math.round(window.innerWidth/2-960) + 'px ' + Math.round(window.innerHeight/2-690) + 'px'
	});
	$('.contacts').css({
		'background-position': Math.round($('.contacts').innerWidth()/2-960) + 'px ' + Math.round($('.contacts').innerHeight()/2-450) + 'px'
	});
});

var rk = (function(rk, $){
	rk.load = function(action, func) {
		if (!func) func = function(data){console.log(data);}
		$.post(
			action,
			{},
			function (data) {
				if (data[0]=='{' || data[0]=='[') {data = JSON.parse(data);}
				else (console.error(data))
				
				func(data)
			}
		)
	}
	
	return rk;
}(rk||{}, jQuery));