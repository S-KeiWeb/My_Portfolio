jQuery(function (){
  jQuery('.openbtn').click(function () {
    jQuery(this).toggleClass('active');
    jQuery('#mask, #mask-menu').toggleClass('show');
  });
});

