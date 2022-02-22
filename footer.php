
  
  <!-- footer start -->
  <footer>
        <section  class="footer-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 bg-primary">
                    <h1 class="text-white">Footer</h1>
                </div>
            </div>
        </div>
        </section>
    </footer>
    <!-- footer end -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script>
    function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(18.561659899201523, 73.95630825665589),
        zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJkPLyzo5XZODdhxAa_XYbk2ESQpJyZw&callback=myMap"></script>

</body>

 </html>