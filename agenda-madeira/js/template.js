$(function(){
	$('#navbar_menu li a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
	$('#navbar_menu li a').click(function(){
		$(this).parent().addClass('active').siblings().removeClass('active')	
	})
})