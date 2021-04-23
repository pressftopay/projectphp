function initMap(){
    var options = {
        center:{lat:48.456450, lng:58.562767},
        zoom:11
    }
    var map = new google.maps.Map(document.getElementById("map"),options);
    var icon = {
            url:"office.png",
            scaledSize: new google.maps.Size(40,40),
            origin:new google.maps.Point(0,0),
            anchor:new google.maps.Point(0,0)

    }
    var marker = new google.maps.Marker({
            position:{
                lat:48.456450,
                lng:58.562767
            },
            map:map,
            icon:icon
    });
}


function currentDiv(n) {
    showDivs(slideIndex = n);
  }
  
  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-opacity-off";
  }