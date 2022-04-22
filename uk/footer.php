
  
  <!-- footer start -->
  <footer>
  <section class="footer-area">
          <div class="container">
                <div class="row justify-content-center py-4">
                    <div class="col-md-5 my-1">
                            <div class="footer-widget footer-info">
                                <h4 class="widget-title pb-3">GLOBAL OFFICES</h4>
                                <ul class="list-unstyled">
                                      <li><b>United Kingdom: </b>Kido Education Oakmoore Court Kingswood Road, Hampton Lovett, Driotwich, Worcestershire WR9 0QH, UK</li>
                                      <li><b>Singapore: </b>Kido Education (Singapore) Pte. Ltd. <br/>Quantm education Pte. Ltd. <br/>30 Raffles Place, #23-01 Oxley@Raffles, Singapore 048622</li>
                                      <li><b>India: </b>KID-O EDUCATION PRIVATE LIMITED 1002, Mohini heights, 5th Road, Ramkrishna Nagar, Khar West, Mumbai-400052</li>
                                  </ul>
                            </div>
                        </div>
                    <div class="col-md-2 my-1">
                            <div class="footer-widget footer-info">
                                <h4 class="widget-title pb-3">CENTRES</h4>
                                <ul class="list-unstyled mobile-list">
                                  <li><a href="/ourcentres?srch-trm=dubai">Dubai</a></li>
                                  <li><a href="/ourcentres?srch-trm=greater-london">Greater London</a></li>
                                  <li><a href="/ourcentres?srch-trm=houshrefn">Houston</a></li>
                                  <li><a href="/ourcentres?srch-trm=austin">Austin</a></li>
                                  <li><a href="/ourcentres?srch-trm=india">India</a></li>
                                  <li><a href="/ourcentres?srch-trm=india">China</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 my-1">
                            <div class="footer-widget footer-info">
                            <h4 class="widget-title pb-3">ABOUT KIDO</h4>
                                <ul class="list-unstyled mobile-list">
                                  <li><a href="https://www.kidoholdings.com/" target="_blank">Corporate</a></li>
                                  <li><a href="/faq">FAQ</a></li>
                                  <li><a href="https://www.kidofranchise.com/" target="_blank">Franchise</a></li>
                                  <li><a href="/privacy-policy">Privacy Policy</a></li>
                                  <li><a href="/cookie-policy">Cookie Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 my-1">
                            <div class="footer-widget footer-info">
                                <h4 class="widget-title pb-3">CONTACT</h4>
                                <ul class="list-unstyled">
                                  <li><a href="/contact-us">hello@kido.school</a></li>
                                </ul>
                            </div>
                            <div class="icon-info">
                              <a href="https://www.facebook.com/Kidoeducation" target="_blank" rel="noreferrer"><i class="fab fa-facebook-f pr-3"></i></a>
                              <a href="https://www.instagram.com/kidoschools/" target="_blank" rel="noreferrer"><i class="fab fa-instagram pr-3"></i></a>
                              <a href="https://www.youtube.com/c/KidoSchools" target="_blank" rel="noreferrer"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>   
                    </div>     
                </div>

                <div class="container-fluid bottom-line"></div>

                <div class="container py-3">
                  <div class="d-flex justify-content-between">
                    <div class="terms"><a href="/">Terms and conditions</a></div>
                    <div class="all-rights"><a href="/">&copy;2021 Kïdo | All rights reserved</a></div>
                  </div>
                </div>
        </section>
    </footer>
    <!-- footer end -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<script src="https://storage.googleapis.com/kido-assets/owl.carousel.min.js"></script>
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1556817331/lightgallery-all.min.js"></script>
<script>
    function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(18.561659899201523, 73.95630825665589),
        zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }

    $(document).ready(function() {
        $('#lightgallery').lightGallery();
    });

$(document).ready(function(){

// var loop_or_not =  data.length > 3 ? true : false;

$('.upcoming-evnts').owlCarousel({
    loop:false,margin:25,nav: true,dots:true,
    responsive:{0:{items:1},600:{items:2},1000:{items:2},1300:{items:2}},
});

$('.past-evnts').owlCarousel({
    loop:true,margin:25,nav: true,dots:true,
    responsive:{0:{items:1},600:{items:2},1000:{items:2},1300:{items:2}},
});

$('.near-by-nurseries-us').owlCarousel({
    loop:false,margin:15,nav:true,dots:true,autoplay:true,
    responsive:{0:{items:1},600:{items:2},1000:{items:3},1300:{items:3}},
});

$('.near-by-nurseries-india').owlCarousel({
    loop:false,margin:15,nav:true,dots:true,autoplay:true,
    responsive:{0:{items:1},600:{items:2},1000:{items:3},1300:{items:3}},
});


$('.photo-gal-owl').owlCarousel({
    loop:false,margin:15,nav:true,dots:true,autoplay:true,
    responsive:{0:{items:1},600:{items:3},1000:{items:3},1300:{items:4}},
});

$('.search-nursery').owlCarousel({
    loop:false,margin:15,nav:true,dots:true,autoplay:true,
    responsive:{0:{items:1}},
});

$('.near-by-nurseries-search-us').owlCarousel({
    loop:false,margin:15,nav:true,dots:true,autoplay:true,
    responsive:{0:{items:1},600:{items:4},1000:{items:4},1300:{items:4}},
});




});


    
</script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJkPLyzo5XZODdhxAa_XYbk2ESQpJyZw&callback=myMap"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVtvix8ZhA1BRZLHS_DRSJtFsmQ8FQdf0&callback=myMap"></script>
</body>

 </html>