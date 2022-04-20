<?php include 'header.php';?>
<?php
// $url.= $_SERVER['REQUEST_URI'];    
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);


    $homedata = [
        [
            "name"=>"india",
            "section1-head"=>"Welcome to Kido India",
            "section1-para"=>"We’re integrating advances in design, technology and pedagogy and creating the highest quality nurseries and preschools across the world. Magical places, where children play, learn, grow and thrive. We’ve combined classical philosophies like Montessori and Reggio Emilia with latest research and created the most advanced early years program anywhere. Our exceptional people, program and nurseries nurture and enhance every child’s innate curiosity, creativity, and ability to be a lifelong learner. Since 2014, over 15,000 families across the world have entrusted their children to Kido nurseries for our customised and unique early childhood education and care programs",
            "section2-head"=>"Our philosophy",
            "section2-para"=>"We believe that a combination of free and structured play, an engaging and interactive learning environment, and an abundance of love, care and attention provide the most solid foundation for children in the early years."
        ],
        [
            "name"=>"uk",
            "section1-head"=>"Welcome to Kido Uk",
            "section1-para"=>"We’re integrating advances in design, technology and pedagogy and creating the highest quality nurseries and preschools across the world. Magical places, where children play, learn, grow and thrive. We’ve combined classical philosophies like Montessori and Reggio Emilia with latest research and created the most advanced early years program anywhere. Our exceptional people, program and nurseries nurture and enhance every child’s innate curiosity, creativity, and ability to be a lifelong learner. Since 2014, over 15,000 families across the world have entrusted their children to Kido nurseries for our customised and unique early childhood education and care programs",
            "section2-head"=>"Our philosophy",
            "section2-para"=>"We believe that a combination of free and structured play, an engaging and interactive learning environment, and an abundance of love, care and attention provide the most solid foundation for children in the early years."
        ],
  ];
  
?>
    <section class="home-banner-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                    <div id="carouselExampleSlidesOnly mobile-banner-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="2000">
                        <div class="banner-tarea">
                            <h2 class="banner-text">early years, reimagined</h2>
                            <a href="/" class="btn-banner">Find a nursery near you</a>
                        </div>
                            <img src="https://storage.googleapis.com/kido-assets/Website-Hero-1.jpg" class="banner-hero-img" alt="banner-img">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                        <div class="banner-tarea">
                            <h2 class="banner-text">early years, reimagined</h2>
                            <a href="/" class="btn-banner">Find a nursery near you</a>
                        </div>
                        <img src="https://storage.googleapis.com/kido-assets/Website-Hero-2.jpg" class="banner-hero-img" alt="banner-img">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                        <div class="banner-tarea">
                            <h2 class="banner-text">early years, reimagined</h2>
                            <a href="/" class="btn-banner">Find a nursery near you</a>
                        </div>
                        <img src="https://storage.googleapis.com/kido-assets/Website-Hero-3.jpg" class="banner-hero-img" alt="banner-img">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                        <div class="banner-tarea">
                            <h2 class="banner-text">early years, reimagined</h2>
                            <a href="/" class="btn-banner">Find a nursery near you</a>
                        </div>
                        <img src="https://storage.googleapis.com/kido-assets/Website-Hero-4.jpg" class="banner-hero-img" alt="banner-img">
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </section> 

    <section class="welcome-text py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="data text-center">
                        <h1 class="head-text-blue mb-4">Welcome to Kido</h1>
                        <p>We’re integrating advances in design, technology and pedagogy and creating the highest quality nurseries and preschools across the world. Magical places, where children play, learn, grow and thrive. We’ve combined classical philosophies like Montessori and Reggio Emilia with latest research and created the most advanced early years program anywhere. Our exceptional people, program and nurseries nurture and enhance every child’s innate curiosity, creativity, and ability to be a lifelong learner. Since 2014, over 15,000 families across the world have entrusted their children to Kido nurseries for our customised and unique early childhood education and care programs</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="data text-center">
                        <div class="d-flex justify-content-center pt-4">
                            <div class="mx-3"><img src="../images/day-nurseries-award.png"  width="70" class="img-fluid" alt=""></div>
                            <div class="mx-3"><img src="../images/ofsted-award.png" width="70" class="img-fluid" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="welcome-text py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="data text-center">
                        <iframe width="710" height="400" src="https://www.youtube.com/embed/NgoodAfg0Sg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <div class="data text-center">
                        <h1 class="head-text-blue mb-4">Our Pedagogy</h1>
                        <p>We believe that a combination of free and structured play, an engaging and interactive environment, and an abundance of love, care and attention provide the most solid foundation in the early years. We include thinking based, project based and problem based learning for the first time in the early years, developing the full potential of each child. Proprietary curricula in art, physical development, literacy, mathematics and much more ensure that children are more than school ready when they leave our nurseries</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="photo-gallery pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel photo-gal-owl">
                        <div class="item">
                            <img src="https://kido.school/wp-content/uploads/2020/11/Kido-Greenwich_internal-scaled.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="https://kido.school/wp-content/uploads/2021/06/What-else-do-we-do.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="https://kido.school/wp-content/uploads/2019/09/Crouch-End-Centre-Pages-2-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="https://kido.school/wp-content/uploads/2020/04/Windsor-Centre-Pages-Header-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="https://kido.school/wp-content/uploads/2020/04/Golders-Green-Centre-Pages-Header-3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="https://kido.school/wp-content/uploads/2021/08/Large-shutterstock_238308907.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="https://kido.school/wp-content/uploads/2021/06/What-else-do-we-do.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="near-by-nursery pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="nury-head-title head-text-blue text-center mb-5">Where to find Our Nurseries</h1>
                   
                    <div class="uk-nur">
                        <?php include 'nearby-nurseries.php';?> 
                        <div class="text-center">
                            <a href="search.php" class="my-btn btn-primary btn-sm center" id="" target="_blank">Find all preschools</a>
                        </div>
                    </div>
<!-- 
                    <div class="india-nur">
                        <div class="owl-carousel near-by-nurseries-india">
                        <div class="card shadow-sm allprenurcard">
                            <img src="https://kido.school/wp-content/uploads/2020/11/Borivali-centre.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h1 class="subhead-text-blue">Mumbai</h1>
                            </div>
                        </div>
                        <div class="card  shadow-sm allprenurcard">
                            <img src="https://kido.school/wp-content/uploads/2021/12/Facebook-Kido-Dubai-Meydan-Classroom_12.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h1 class="subhead-text-blue">Pune</h1>
                            </div>
                        </div>
                        <div class="card shadow-sm allprenurcard">
                            <img src="https://kido.school/wp-content/uploads/2019/04/3A3A5650.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h1 class="subhead-text-blue">Banglore</h1>
                            </div>
                        </div>
                        <div class="card shadow-sm allprenurcard">
                            <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-Trivandrum-Outdoor-Playarea_02.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h1 class="subhead-text-blue">Kerala</h1>
                            </div>
                        </div>
                        <div class="card shadow-sm allprenurcard">
                            <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Tooting-High-Res-Render-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h1 class="subhead-text-blue">Gurgaon</h1>
                            </div>
                        </div>
                        </div>
                        <div class="text-center">
                            <a href="search.php" class="my-btn btn-primary btn-sm center" id="" target="_blank">Find all preschools</a>
                        </div>
                    </div> -->
               

                </div>
            </div>
        </div>
    </section>

<section class="testimonial py-5">
<div class="container">
	<div class="row">
		<div class="col-lg-8 mx-auto">
			<h1 class="head-text-blue text-center my-4">What our parents say about our Nurseries</h1>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="img-box"><img src="https://storage.googleapis.com/kido-assets/Parent-Testimonial-1.jpg" class="img-fluid" alt="testimonial-img"></div>
						<p class="testimonial text-center">Kido has been amazing with our pre-schooler. We can tell she is learning something new everyday. Communication is great via the Kido parent app.</p>
						<p class="overview float-right"><b>Parent</b>, Hsuu Vierling</p>
					</div>
					<div class="carousel-item">
						<div class="img-box"><img src="https://storage.googleapis.com/kido-assets/Parent-Testimonial-2.jpg" class="img-fluid" alt="testimonial-img"></div>
						<p class="testimonial text-center">My son loves the school!! I am really impressed with how my child has started speaking Spanish in 6 months of him starting at Kido.</p>
						<p class="overview float-right"><b>Parent</b>, Nisha Rattan,</p>
					</div>
					<div class="carousel-item">
						<div class="img-box"><img src="https://storage.googleapis.com/kido-assets/Parent-Testimonial-1.jpg" class="img-fluid" alt="testimonial-img"></div>
						<p class="testimonial text-center">We’ve had a wonderful experience at Kido thus far. My son has been in Discoverers 2 and 3 and has loved both classes. They send pictures constantly throughout the day of the kids doing a wide variety of activities.</p>
						<p class="overview float-right"><b>Parent</b>,Ali Gannon</p>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</section>

<footer>
<?php include 'footer.php';?>
