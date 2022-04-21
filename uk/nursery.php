

<?php
/**
 * Template Name: Kido Nursery Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
// get_template_part( 'singular' );
//  include 'header.php';
// get_header();

include 'header.php';

$json = '{"galimg":["https://storage.googleapis.com/kido-assets/211159_IMG_4436.jpg","https://storage.googleapis.com/kido-assets/282021_2544.jpg","https://storage.googleapis.com/kido-assets/76524_Large-shutterstock_238308907.jpg","https://storage.googleapis.com/kido-assets/155519_What-else-do-we-do.jpg","https://storage.googleapis.com/kido-assets/413773_Kido-Greenwich_internal-scaled.jpg","https://storage.googleapis.com/kido-assets/192869_Windsor-Centre-Pages-Header-1.jpg","https://storage.googleapis.com/kido-assets/193012_Crouch-End-Centre-Pages-2-1.jpg","https://storage.googleapis.com/kido-assets/57118_Golders-Green-Centre-Pages-Header-3.jpg"],"ageRange":"","lang_taught":"","opening_hours":"9AM to 6PM","play_area":"Yes","transportation":"No","paragraph_title":"ashfchasjch","description":"                        Kido International Preschool and Day Care (Formerly Safari Kid) is a wonderful 3500 sq ft space in the heart of Bandra, off Carter Road and near Khar & Santa Cruz.<br/><br/>Itu2019s a palace of imagination u2013 complete with a large play area, themed spaces, and an indoor stage for drama, music, and dance. Between the reading nooks and creative corners, our international preschool is also furnished with science and tech bays u2013 so children can learn whilst playing with a diverse range of advanced equipment.<br/><br/>Each preschool classroom is bright, warm and spacious, keeping your child engaged in a program thatu2019s designed just for them.<br/><br/>Our programs are for children between the ages of 8 months and 5 years, including preschool extended days and full days.<br/><br/>Give us a call and we can chat about our Bandra Preschool in more detail, or arrange a tour so you can see what the place is like!                   ","brochure_link":"hjashdjadhh","curriculum":"csasacasc","hours":"hjhasjdhj","schedule":"hasdjhasd","nutrition":"hasjdhjmnmxczn","outdoor_space":"zbxncbnshgad","address":"sadasdyuyu","country":"United Kingdom","city":"London","state":"","lattitude":"asdbcbasn","longitude":"bzbzxgh","google":"3","dayNurseries":"9.7","offsted":"Nice","reviews":[{"name":"Test","comment":"Temp"},{"name":"hgasghdaghs","comment":"ta Cruz.<br/><br/>Itu2019s a palace of imagination u2013 complete with a large play area, themed spaces, and an indoor stage for drama, music, and dance. Between the reading nooks and creative corners, our international preschool is also furnished with science and tech bays u2013 so children can learn whilst playing with a diverse range of advanced equipment.<br/><br/>Each preschool classroom is bright, warm and spacious, keeping your child engaged in a program th"},{"name":"Naksck kjaskcja kasd","comment":"iverse range of advanced equipment.<br/><br/>Each preschool classroom is bright, warm and spacious, keeping your child engaged in a program thatu2019s designed just for them.<br/><br/>Our programs are for children between the ages of 8 months and 5 years, including preschool extended days and full days.<br/><br/>Give us a call and we can chat a"},{"name":"Bbbnasdgagshd asghdghasd","comment":"ying with a diverse range of advanced equipment.<br/><br/>Each preschool classroom is bright, warm and spacious, k"}],"faqs":[{"name":"what is kido","comment":"our child engaged in a program thatu2019s designed just for them.<br/><br/>Our programs are for children between the ages of 8 months and 5 years, including preschool extended days and full days.<br/><br/>Give us a call and "},{"name":"Time pass","comment":"Testkjaskdasbdas d sakjd"}]}';

    // echo "<pre>";
    // print_r($post->post_content);
    // echo "</pre>";
    // die;

$post_cont =  json_decode($json);
// $post_cont =  json_decode($post->post_content);
// $reviews = $post_cont->reviews;
    // echo "<pre>";
    // print_r($post_cont);
    // echo "</pre>";
    // die;


?>
<section class="nursery-head-title mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="head-text-blue">Kido Camden Nursery & Day Care</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="title">
                    <p>
                       <?php echo strlen($post_cont->country) ? $post_cont->country."," : ""; ?>
                       <?php echo strlen($post_cont->state) ? $post_cont->state."," : ""; ?> 
                       <?php echo strlen($post_cont->city) ? $post_cont->city : ""; ?>
                    </p>
                    <div class="rating d-flex justify-content-between">
                    <div class="google-rating">
                        <div class="google-rating-logo">
                            <img src="https://storage.googleapis.com/kido-assets/google.png" alt="" width="40" class="img-fluid">
                        </div>
                        <div class="google-rating-star">
                            <small class="font-weight-bold"><i class="fas fa-star text-primary mr-1"></i> <i class="fas fa-star text-primary mr-1"></i> <i class="fas fa-star text-primary mr-1"></i> <i class="fas fa-star text-primary mr-1"></i></small>
                        </div>
                    </div>
                    <div class="google-rating">
                        <div class="google-rating-logo">
                            <img src="https://storage.googleapis.com/kido-assets/daycare.svg" alt="" width="140" class="img-fluid">
                        </div>
                        <div class="google-rating-star">
                            <small class="font-weight-bold"><span class="day-care-rate">4.5</span></small>
                        </div>
                    </div>
                    <div class="google-rating">
                        <div class="google-rating-logo">
                            <img src="https://storage.googleapis.com/kido-assets/offset.png" alt="" width="40" class="img-fluid">
                        </div>
                        <div class="google-rating-star">
                            <small class="font-weight-bold">Coming Soon</small>
                        </div>
                    </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="nursery-gallery-grid mt-5">
    <div class="container">
        <div class="row desktop-nur-gallery">
            <div class="col-lg-6 padding-0">
                <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-Clerkenwell-Upstairs-Classroom_02.jpg" class="lg-nur-gal-img" alt="">
            </div>
            <div class="col-lg-3 padding-0">
                <img src="<?php echo isset($post_cont->galimg[1]) ? $post_cont->galimg[1] : "https://www.pacificfoodmachinery.com.au/media/catalog/product/placeholder/default/no-product-image-400x400.png"; ?>" class="nur-gal-imgs" alt="">
                <img src="<?php echo isset($post_cont->galimg[2]) ? $post_cont->galimg[2] : "https://www.pacificfoodmachinery.com.au/media/catalog/product/placeholder/default/no-product-image-400x400.png"; ?>" class="nur-gal-imgs mt-2" alt="">
            </div>
            <div class="col-lg-3 padding-0">
                <img src="<?php echo isset($post_cont->galimg[3]) ? $post_cont->galimg[3] : "https://www.pacificfoodmachinery.com.au/media/catalog/product/placeholder/default/no-product-image-400x400.png"; ?>" class="nur-gal-imgs" alt="">
                <img src="<?php echo isset($post_cont->galimg[4]) ? $post_cont->galimg[4] : "https://www.pacificfoodmachinery.com.au/media/catalog/product/placeholder/default/no-product-image-400x400.png"; ?>" class="nur-gal-imgs mt-2" alt="">
                <div class="show-more-position">
                    <button id="modalActivate" type="button" class="show-more-btn btn btn-sm" data-toggle="modal" data-target="#exampleModalPreview">
                    <i class="fa fa-th mr-3" aria-hidden="true"></i>Show all photos
                    </button>
                </div>
            </div>
        </div>
        <div class="row mobile-nur-gallery">
            <div class="col-lg-12">
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                    <?php
                        foreach ($post_cont->galimg as $k => $v) {
                            $act = ($k == 0) ? "active" : "";
                            echo '<div class="carousel-item '.$act.'">
                                    <img src="'.$v.'" class="d-block nursery-list-img" alt="...">
                                </div>';
                        }
                    ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls1" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls1" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
                <div class="show-more-position">
                    <button id="modalActivate" type="button" class="show-more-btn btn btn-sm" data-toggle="modal" data-target="#exampleModalPreview">
                    <i class="fa fa-th mr-3" aria-hidden="true"></i>Show all photos
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pop-up-gallery">
  <!-- Modal start -->
    <!-- Modal -->
    <div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
        <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
            <div class="modal-content-full-width modal-content">
                <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span style="font-size: 2em;" class="text-white" aria-hidden="true">&times;</span>
                    </button>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">

                                <?php
                                    foreach ($post_cont->galimg as $k => $v) {
                                        $act = ($k == 0) ? "active" : "";
                                        echo '<div class="carousel-item '.$act.'">
                                                <img src="'.$v.'" class="inner-nur-gal-img" alt="...">
                                            </div>';
                                    }
                                ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls2" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls2" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>
<section>
    <div class="sticky-contact">
        <div class="p-2 shadow">
            <p><i class="fas fa-envelope text-white" title="Email"></i></p>
            <p><i class="fas fa-phone text-white" title="phone"></i></p>
            <p><i class="fab fa-facebook-f text-white" title="facebook"></i></p>
            <p><i class="fab fa-instagram text-white" title="Instagram"></i></p>
            <p><i class="fa fa-download text-white" title="Download Brochure"></i></p>
        </div>
    </div>
</section>
<section class="nursery-data mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="nursery-desc">

                    <div class="nur-cat d-flex justify-content-between my-4">
                        <?php if(strlen($post_cont->ageRange)){ ?> <div class="lang text-center"><img src="https://storage.googleapis.com/kido-assets/age-range.svg" alt="" width="40"><h6 class="mt-3"><small class="font-weight-bold">Age range</small></h6><small><?php echo $post_cont->ageRange; ?></small></div> <?php }; ?>
                        <?php if(strlen($post_cont->lang_taught)){ ?> <div class="lang text-center"><img src="https://storage.googleapis.com/kido-assets/language.svg" alt="" width="40"><h6 class="mt-3"><small class="font-weight-bold">Languages taught</small></h6><small><?php echo $post_cont->lang_taught; ?></small></div> <?php } ?>
                        <?php if(strlen($post_cont->opening_hours)){ ?> <div class="lang text-center"><img src="https://storage.googleapis.com/kido-assets/hours.svg" alt="" width="40"><h6 class="mt-3"><small class="font-weight-bold">Opening hours</small></h6><small><?php echo $post_cont->opening_hours; ?></small></div> <?php } ?>
                        <?php if(strlen($post_cont->play_area)){ ?> <div class="lang text-center"><img src="https://storage.googleapis.com/kido-assets/Outdoor-Space-03.svg" alt="" width="40"><h6 class="mt-3"><small class="font-weight-bold">Outdoor Play Area</small></h6><small><?php echo $post_cont->play_area; ?></small></div> <?php } ?>
                        <?php if(strlen($post_cont->transportation)){ ?> <div class="lang text-center"><img src="https://storage.googleapis.com/kido-assets/transportation1.svg" alt="" width="40"><h6 class="mt-3"><small class="font-weight-bold">Transportation</small></h6><small><?php echo $post_cont->transportation; ?></small></div> <?php } ?>
                    </div>
                    <p>
                        <?php 
                        echo $post_cont->description;
                        ?>
                    </p>

                </div>
                <div class="Brochure-download mt-5">
                    <h2 class="nury-head-title head-text-blue mb-4">Our Brochure</h2>
                    <a class="btn-sm btn btn-primary"><i class="fa fa-download pr-3"></i>Download Our Brochure</a>
                </div>
                <div class="school-details mt-5">
                    <h2 class="nury-head-title head-text-blue mb-4">School details</h2>
                    <p>Curriculum <span class="font-weight-bold">EYFS, Kïdo</span></p>
                    <p>Hours <span class="font-weight-bold">7:30 am - 6:30 pm</span></p>
                    <p>Schedule <span class="font-weight-bold">Part time, Full time, 51 weeks/year</span></p>
                    <p>Nutrition <span class="font-weight-bold">Breakfast, Lunch, Snacks</span></p>
                    <p>Outdoor Space <span class="font-weight-bold">Yes</span></p>
                </div>



                <div class="reviews mt-5">
                    <h2 class="nury-head-title head-text-blue mb-4">Reviews</h2>
                    <div class="review-data mt-2">
                        <?php
                        foreach ($post_cont->reviews as $k => $v) {
                            if($k < 2){
                                echo "<p><small>".$v->comment."</small></p>";
                                echo "<i class='text-secondary'><small><b>".$v->name."</b></small></i><hr>";
                            }
                        }
                        ?>
                    </div>
                    <div class="review-data mt-2" id="review-data-more" style="display:none">
                        <?php
                        foreach ($post_cont->reviews as $k => $v) {
                            if($k > 1){
                                echo "<p><small>".$v->comment."</small></p>";
                                echo "<i class='text-secondary'><small><b>".$v->name."</b></small></i><hr>";
                            }
                        }
                        ?>
                    </div>
                    <div>
                        <a id="review-more-btn" class="link-primary">Show More</a>
                    </div>
                </div>


            </div>
            <div class="col-lg-4">
                <div class="nursery-contact">
                    <div class="nur-cont border p-4 shadow text-center bg-white">
                        <h3 class="my-4">Contact <?php echo $post->post_title; ?></h3>
                        <div class="mt-3">
                        <button class="btn btn-secondary btn-sm" type="button"><i class="fas fa-envelope text-white pr-3"></i>Send Message</button>
                        <button class="btn-sm btn btn-secondary" type="button"><i class="fas fa-phone text-white pr-3"></i>Give us a call</button>
                        <button class="btn-sm btn btn-secondary" type="button"><i class="fab fa-facebook-f text-white pr-3"></i>Facebook</button>
                        <button class="btn-sm btn btn-secondary" type="button"><i class="fab fa-instagram text-white pr-3"></i>Instagram</button>
                        <button class="btn-sm btn btn-secondary" type="button"><i class="fa fa-download text-white pr-3"></i>Download Our Brochure</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map-sec mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <h2 class="nury-head-title head-text-blue mb-4">Location</h2>
                <div class="map-area">
                    <div id="googleMap" style="width:100%;height:600px;"></div>
                    <div class="address row">
                        <div class="col-lg-6 border p-3 bg-light shadow">
                            <h3 class="head-blue">Juhu International Preschool & Day Care</h3>
                            <p><small>Seema Plot No 287/6, Gulmohar Road No 1, Opp Irla Masjid, J.V.P.D. Scheme, Vile Parle (W), Mumbai 400049, India, India</small></p>
                            <p><small>tel +919987840606</small></p>
                            <p><small>email juhu@kido.school</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="faq mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <h2 class="nury-head-title head-text-blue mb-4">FAQs</h2>
                <div class="gallery-area">
                    <div class="accordion" id="accordionExample">
                        <?php
                            foreach ($post_cont->faqs as $k => $v) {
                                echo "<div class='card1 student-well-being'>
                                        <div class='card-header card-header1 bg-light' id='heading".$k."'>
                                            <h2 class='card-text mb-0'>
                                            <button class='btn btn-link btn-block text-left collapsed' type='button' data-toggle='collapse' data-target='#collapse".$k."' aria-expanded='true' aria-controls='collapse".$k."'>
                                                ".$v->name."
                                            </button>
                                            </h2>
                                        </div>
                                        <div id='collapse".$k."' class='collapse' aria-labelledby='heading".$k."' data-parent='#accordionExample'>
                                        <div class='card-body bg-white'>
                                            <p class='pl-3'>".$v->comment."</p>
                                        </div>
                                        </div>
                                        <hr/>
                                    </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="near-by-nursery my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="nury-head-title head-text-blue mb-4">Other Nurseries Nearby</h2>
                    <?php include 'nearby-nurseries.php';?>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
<script type="text/javascript">
$(document).ready(function () {
    $("#review-more-btn").click(function () {
        $("#review-data-more").toggle();
        $(this).text($(this).text() == 'Show More' ? 'Show less' : 'Show More')
    });
});
</script>