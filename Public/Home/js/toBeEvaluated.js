$(function(){
	$('.toBeted .title').on('mouseenter','li',function(){
		$('.toBeted .title li').removeClass('active').eq($(this).index()).addClass('active');
		$('.toBeted .centent-wrap').removeClass('active').eq($(this).index()).addClass('active');
	});
});