/* custom */

$(function(){

	$('.bs-sidebar').affix({
	    offset: {
	      top: 216
	    }
	})

	$('.backTop').click(function(){
      $('html,body').animate({scrollTop: '0px'}, 800);
    })

});