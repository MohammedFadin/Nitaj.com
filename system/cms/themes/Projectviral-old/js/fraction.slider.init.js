/** Fraction slider **/
(function ($){ $(function(){

$('.slider').fractionSlider({
	'fullWidth': 			true,
	'controls': 			true, 
	'pager': 				true
});


$('.fraction-stop').click(function (){
	$('.slider').fractionSlider('pause');	
})

}) })(jQuery)