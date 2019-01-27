$(function() {
  var img = $(".imgslide > img");
  var last = img.length - 1;
  var sno = 0;
  
  function slideAction() {
    $( img[sno] ).siblings("img").css("left", "-100%");
    
    $( img[sno] ).animate({
      left: "100%"
    }, 2000, function() {
      $(this).css({left: "-100%"});
    });
    
    sno++;
    
    if( sno > last ) {
      sno = 0;  
    }
    
    $( img[sno] ).animate({
      left: "0"
    }, 2000);
  }
  
  setInterval(function() {
    slideAction()
  }, 3000);
});