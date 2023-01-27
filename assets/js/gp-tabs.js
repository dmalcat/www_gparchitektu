$(function() {
	$('.gpTabs__navItem').click(function (){
		var target = $(this).attr('href');
		$(target).slideToggle();
		$(this).toggleClass('gpTabs__navItem--active');
	});
});