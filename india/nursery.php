<?php include 'header.php';?>
<?php
    $reviews = [
  [
    "comment"=>"Fantastic nursery with great facilities, nice open spaces for the kids. Staff were great with kids and we felt that our son really developed here. They really took a personal touch with him. We moved our son from a local nursery to here and we're glad we did!",
    "user"=>"Geraldine S, (Mother of child)",
  ],
  [
    "comment"=>"Although some activities can't be carried out due to the current pandemic, Kido ensures our daughter has her day full of sensory play, learning activities and social interactions. The baby room staff is outstanding, they all love our daughter so much and she loves them. At pick-up she is always giving cuddles and smiling. We also enjoy the live updates via the app and the varied menu during the week. It is comforting to know she is at Kido while we are at work.",
    "user"=>"Vaida V, (Mother of child)",
  ]
  ];

  $faqs = [
    [
        "id"=>"collapse1",
        "cardid"=>"heading1",
        "question"=>"What are your preschool timings?",
        "answer"=>"We are open from 9:00 am to 7:00 pm, Monday to Friday (program timings may vary between locations).",
    ],
    [
        "id"=>"collapse2",
        "cardid"=>"heading2",
        "question"=>"What are the Age Groups?",
        "answer"=>"Our Kido Preschools caters to children in the age groups of 15 months to 6 years. Some centres offer Infant care from 6 months onwards, please check with respective centres.",
    ],
    [
        "id"=>"collapse3",
        "cardid"=>"heading3",
        "question"=>"Do you offer Lunch and Snacks?",
        "answer"=>"We provide meals at selective Kido Centres. This will be outsourced from a third party vendor and not by Kido.",
    ],  
    [
        "id"=>"collapse4",
        "cardid"=>"heading4",
        "question"=>"What is your fee structure?",
        "answer"=>"Our fee structure may vary from city to city - based on the preschool program opted for. Please speak to our Parent Relationship Manager for more information.",
    ],  
    [
        "id"=>"collapse5",
        "cardid"=>"heading5",
        "question"=>"How can I book a tour?",
        "answer"=>"Parents can book a tour by contacting us.",
    ]
    ];

?>

<section class="nursery-head-title mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="title">
                    <h1 class="head-text-blue">Bandra International Preschool & Day Care</h1>
                    <p>India, Maharashtra, Mumbai</p>
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
                <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-Clerkenwell-Upstairs-Classroom_02.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-lg-3 padding-0">
                <img src="https://kido.school/wp-content/uploads/2021/12/Facebook-Kido-Dubai-Meydan-Classroom_12.jpg" class="img-fluid" alt="...">
                <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-London-Wandsworth-Classroom_01.jpg" class="img-fluid mt-2" alt="..."> 
            </div>
            <div class="col-lg-3 padding-0">
                <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-London-Wandsworth-Classroom_01.jpg" class="img-fluid" alt="...">
                <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-Clerkenwell-Upstairs-Classroom_02.jpg" class="img-fluid mt-2" alt="..."> 
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
                        <div class="carousel-item active">
                        <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-London-Wandsworth-Classroom_01.jpg" class="d-block nursery-list-img" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-Clerkenwell-Upstairs-Classroom_02.jpg" class="d-block nursery-list-img" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://kido.school/wp-content/uploads/2021/12/Facebook-Kido-Dubai-Meydan-Classroom_12.jpg" class="d-block nursery-list-img" alt="...">
                        </div>
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
                <div class=" modal-header-full-width  modal-header text-center">
                    <h2 class="modal-title head-text-blue w-100" id="exampleModalPreviewLabel">Bandra International Preschool & Day Care</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row full-width-gallery">
                            <div class="col-lg-12 padding-0 mb-2">
                                <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-Clerkenwell-Upstairs-Classroom_02.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-lg-6 padding-0 mt-2">
                                <img src="https://kido.school/wp-content/uploads/2021/12/Facebook-Kido-Dubai-Meydan-Classroom_12.jpg" class="img-fluid" alt="...">
                                <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-London-Wandsworth-Classroom_01.jpg" class="img-fluid mt-2" alt="..."> 
                            </div>
                            <div class="col-lg-6 padding-0 mt-2">
                                <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-London-Wandsworth-Classroom_01.jpg" class="img-fluid" alt="...">
                                <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-Clerkenwell-Upstairs-Classroom_02.jpg" class="img-fluid mt-2" alt="..."> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer-full-width  modal-footer">
                </div>
            </div>
        </div>
    </div>    
    <!-- Modal start -->
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
        <div class="row">
            <div class="col-lg-7">
                <div class="nursery-desc">
                    <h2 class="nury-head-title head-text-blue mb-4">Welcome to Kido Bandra, Mumbai</h2>
                    <div class="nur-cat d-flex justify-content-between my-4">
                        <div class="lang text-center"><img src="https://storage.googleapis.com/kido-assets/age-range.svg" alt="icons" width="40"><h6>Age range</h6><small>8 months to 5 years</small></div>
                        <div class="lang text-center"><img src="https://storage.googleapis.com/kido-assets/language.svg" alt="icons" width="40"><h6>Languages taught</h6><small>English, Spanish and Hindi</small></div>
                        <div class="lang text-center"><img src="https://storage.googleapis.com/kido-assets/hours.svg" alt="icons" width="40"><h6>Opening hours</h6><small>9:00 am to 7:00 pm</small></div>
                    </div>
                    <p>Kido International Preschool and Day Care (Formerly Safari Kid) is a wonderful 3500 sq ft space in the heart of Bandra, off Carter Road and near Khar & Santa Cruz.</p>
                    <p>It’s a palace of imagination – complete with a large play area, themed spaces, and an indoor stage for drama, music, and dance. Between the reading nooks and creative corners, our international preschool is also furnished with science and tech bays – so children can learn whilst playing with a diverse range of advanced equipment.</p>
                    <p>Each preschool classroom is bright, warm and spacious, keeping your child engaged in a program that’s designed just for them.</p>
                    <p>Our programs are for children between the ages of 8 months and 5 years, including preschool extended days and full days.</p>
                    <p>Give us a call and we can chat about our Bandra Preschool in more detail, or arrange a tour so you can see what the place is like!</p>
                </div>
                <div class="Brochure-download mt-5">
                    <h2 class="nury-head-title head-text-blue mb-4">Our Brochure</h2>
                    <a class="btn-sm btn btn-primary    "><i class="fa fa-download pr-3"></i>Download Our Brochure</a>
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
                        foreach ($reviews as $k => $v) {
                            echo "<p><small>".$v["comment"]."</small></p>";
                            echo "<i class='text-secondary'><small><b>".$v["user"]."</b></small></i><hr>";
                        }
                        ?>
                    </div>
                    <div class="review-data mt-2" id="review-data-more" style="display:none">
                        <?php
                        foreach ($reviews as $k => $v) {
                            echo "<p><small>".$v["comment"]."</small></p>";
                            echo "<i class='text-secondary'><small><b>".$v["user"]."</b></small></i><hr>";
                        }
                        ?>
                    </div>
                    <div>
                        <a id="review-more-btn" class="link-primary">Show More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="nursery-contact">
                    <div class="nur-cont border p-4 shadow text-center bg-white">
                        <h3 class="my-4">Contact Bandra International Preschool & Day Care</h3>
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
<section class="faq mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h2 class="nury-head-title head-text-blue mb-4">FAQs</h2>
                <div class="gallery-area">
                    <div class="accordion" id="accordionExample">
                        <?php
                            foreach ($faqs as $k => $v) {
                                echo "<div class='card1 student-well-being'>
                                        <div class='card-header card-header1 bg-light' id=".$v["cardid"].">
                                            <h2 class='card-text mb-0'>
                                            <button class='btn btn-link btn-block text-left collapsed' type='button' data-toggle='collapse' data-target=#".$v["id"]." aria-expanded='true' aria-controls=".$v["id"].">
                                                ".$v["question"]."
                                            </button>
                                            </h2>
                                        </div>
                                        <div id=".$v["id"]." class='collapse' aria-labelledby=".$v["cardid"]." data-parent='#accordionExample'>
                                        <div class='card-body bg-white'>
                                            <p class='pl-3'>".$v["answer"]."</p>
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
<section class="map-sec mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h2 class="nury-head-title head-text-blue mb-4">Location</h2>
            <div class="map-area">
                    <div id="googleMap" style="width:100%;height:500px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="near-by-nursery my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="nury-head-title head-text-blue mb-4">Other Nurseries Nearby</h2>
                    <?php include 'nearby-nurseries.php';?>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
<script type="text/javascript">
jQuery(document).ready(function () {
    jQuery("#review-more-btn").click(function () {
        jQuery("#review-data-more").toggle();
        jQuery(this).text(jQuery(this).text() == 'Show More' ? 'Show less' : 'Show More')
    });
});
</script>
