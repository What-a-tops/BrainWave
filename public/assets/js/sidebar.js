(function($) {
  checkActive(true);
	var fullHeight = function() {
		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();
})(jQuery);

$(document).on('click', '#sidebarCollapse', function () {
  $('#sidebar').toggleClass('active');
  checkActive($('#sidebar').hasClass('active'));
});

function checkActive() {
  if ($('#sidebar').hasClass('active')) {
    $('#sidebar .logo').css({
      "padding" : "10px 30px !important",
      "width"  : "48px",
      "height" : "48px",
    });
    $('#sidebarCollapse i').removeClass('fa fa-times').addClass('fas fa-bars');
  } else {
    $('#sidebar .logo').css({
       "width"  : "120px",
       "height" : "120px",
       "margin" : "0 auto"
    });
    $('#sidebarCollapse i').removeClass('fa fa-bars').addClass('fas fa-times');
  }
}
