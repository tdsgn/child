

$(document).ready(function(test){

	myW = window.innerWidth;

	$("#slider").mopSlider({
		'h':300,
		'sldW':500,
		'btnW':200,
		'itemMgn':0,
		'indi':"Slide To View More",
		'type':'tutorialzine',
		'shuffle':0,
		'w': myW
	});	
	$(window).resize(function(){

		tests();
		return;
	});
});
function tests() {
	
	alert('sdfsdf');
	myW = window.innerWidth;

	$("#slider").mopSlider({
		'h':300,
		'sldW':500,
		'btnW':200,
		'itemMgn':0,
		'indi':"Slide To View More",
		'type':'tutorialzine',
		'shuffle':0,
		'w': myW
	});	
	$(window).resize(function(){

		tests();
	
	});

};
