$(function() {
  var img = $(".animal-img > img");
  
  for (let i = 0; i < img.length; i++) {
    if ($(img[i]).width() < $(img[i]).height()) {
      $(img[i]).css("width", "240px");
    } else {
      $(img[i]).css("height", "240px");  
    }
  }
});