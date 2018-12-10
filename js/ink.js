jQuery('.h-hidenbox').hide();
jQuery('.h-showbox').click(function(){
	jQuery('.h-hidenbox').toggle(200);
	jQuery('.h-hidenbox').siblings('.h-hidenbox').slideUp();
});