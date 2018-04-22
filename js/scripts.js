$(document).ready(function(){

	// Accordions
	$('.accordion-block .accordion-header').click(function(){
		$(this).siblings('.accordion-content').stop().slideToggle(300);
		$(this).closest('.accordion-block').toggleClass('closed');
	});

	$('.accordion-block.closed .accordion-content').hide();

	// Notifications
	$('.notification-card .card-opener').click(function(){
		$(this).siblings('.card-info').find('.card-hidden-text').slideToggle(300);
		$(this).parent().toggleClass('opened');
	});

	// Tabs
	$(".tabs-nav li a").click(function(e){
		e.preventDefault();
		var dest = $(this).attr('href');
		$(dest).stop().fadeIn(300).siblings().hide(0);
		$(this).parent().addClass('current').siblings().removeClass('current');
	});

	$(".tabs-nav li:first-child a").click();

	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.sidebar-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
			}
		});
	});

});