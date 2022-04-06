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
                    <div id="carouselExampleSlidesOnly mobile-banner-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="banner-tarea">
                            <h2 class="banner-text">early years, reimagined</h2>
                            <a href="/" class="btn-banner">Find a nursery near you</a>
                        </div>
                            <img src="https://storage.googleapis.com/kido-assets/Website-Hero-1.jpg" class="banner-hero-img" alt="banner-img">
                        </div>
                        <div class="carousel-item">
                        <div class="banner-tarea">
                            <h2 class="banner-text">early years, reimagined</h2>
                            <a href="/" class="btn-banner">Find a nursery near you</a>
                        </div>
                        <img src="https://storage.googleapis.com/kido-assets/Website-Hero-2.jpg" class="banner-hero-img" alt="banner-img">
                        </div>
                        <div class="carousel-item">
                        <div class="banner-tarea">
                            <h2 class="banner-text">early years, reimagined</h2>
                            <a href="/" class="btn-banner">Find a nursery near you</a>
                        </div>
                        <img src="https://storage.googleapis.com/kido-assets/Website-Hero-3.jpg" class="banner-hero-img" alt="banner-img">
                        </div>
                        <div class="carousel-item">
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
                <div class="col-lg-10">
                    <div class="data text-center">
                        <!-- <?php
                            echo $uri_segments[2];
                            foreach ($homedata as $k => $v) {
                                if($uri_segments[2] == $v["name"])
                                echo "<h1 class='head-text-blue mb-4'>".$v["section1-head"]."</h1>";
                            }
                        ?> -->
                        <h1 class="head-text-blue mb-4">Welcome to Kido India</h1>
                        <p class="text-center">We’re integrating advances in design, technology and pedagogy and creating the highest quality nurseries and preschools across the world. Magical places, where children play, learn, grow and thrive. We’ve combined classical philosophies like Montessori and Reggio Emilia with latest research and created the most advanced early years program anywhere. Our exceptional people, program and nurseries nurture and enhance every child’s innate curiosity, creativity, and ability to be a lifelong learner. Since 2014, over 15,000 families across the world have entrusted their children to Kido nurseries for our customised and unique early childhood education and care programs</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="data text-center">
                        <div class="d-flex justify-content-center pt-4">
                            <div class="col-lg-2"><img src="../images/day-nurseries-award.png"  width="80" class="img-fluid" alt=""></div>
                            <div class="col-lg-2"><img src="../images/ofsted-award.png" width="70" class="img-fluid" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="welcome-text py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="data text-center">
                        <video width="1200" id="vid"  class="img-fluid" controls autoPlay loop muted>
                            <source src="https://storage.googleapis.com/kido-assets/banner-video-Mp4.mp4" type="video/mp4"/>
                            Your browser does not support HTML video.
                        </video> 
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="data text-center">
                        <h1 class="head-text-blue mb-4">Our Pedagogy</h1>
                        <p class="text-center">We believe that a combination of free and structured play, an engaging and interactive environment, and an abundance of love, care and attention provide the most solid foundation in the early years. We include thinking based, project based and problem based learning for the first time in the early years, developing the full potential of each child. Proprietary curricula in art, physical development, literacy, mathematics and much more ensure that children are more than school ready when they leave our nurseries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="photo-gallery py-5">
    <div class="container">
      <div class="row">
        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item">
                        <div class="pad15">
                            <img src="https://kido.school/wp-content/uploads/2020/11/Kido-Greenwich_internal-scaled.jpg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                        <img src="https://kido.school/wp-content/uploads/2021/06/What-else-do-we-do.jpg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="https://kido.school/wp-content/uploads/2019/09/Crouch-End-Centre-Pages-2-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="https://kido.school/wp-content/uploads/2020/04/Windsor-Centre-Pages-Header-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="https://kido.school/wp-content/uploads/2020/04/Golders-Green-Centre-Pages-Header-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="https://kido.school/wp-content/uploads/2021/08/Large-shutterstock_238308907.jpg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="https://kido.school/wp-content/uploads/2021/06/What-else-do-we-do.jpg" alt="">
                        </div>
                    </div>
                </div>
                <button class="btn btn-info leftLst"><</button>
                <button class="btn btn-info rightLst">></button>
            </div>
      </div>
    </div>
    </section>

    <section class="near-by-nursery py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
            <h1 class="nury-head-title head-text-blue text-center mb-2">Where to find our India Preschools</h1>
            <div class="getlocation-btn">
            <ul class="list-inline d-flex justify-content-center py-5">
              <li class="list-inline-item pr-3"><a class="btn btn-outline-primary" href="/ourcentres?srch-trm=austin">Austin</a></li>
              <li class="list-inline-item pr-3"><a class="btn btn-outline-primary" href="/ourcentres?srch-trm=houston">Houston</a></li>
              <li class="list-inline-item pr-3"><a class="btn btn-outline-primary" href="/ourcentres?srch-trm=greater-london">Greater London</a></li>
              <li class="list-inline-item pr-3"><a class="btn btn-outline-primary" href="/ourcentres?srch-trm=india">India</a></li>
              <li class="list-inline-item"><a class="btn btn-outline-primary" href="/ourcentres?srch-trm=hong-kong">China</a></li>
            </ul>
            </div>
            <?php include 'nearby-nurseries.php';?>

            <!-- <div class="all-preschools mt-4">
            <div class="card-deck">
                <div class="card shadow allprenurcard">
                    <img src="https://kido.school/wp-content/uploads/2020/11/Borivali-centre.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title text-secondary">Mumbai</h2>
                        <small>8 preschools</small>
                    </div>
                </div>
                <div class="card  shadow allprenurcard">
                    <img src="https://kido.school/wp-content/uploads/2021/12/Facebook-Kido-Dubai-Meydan-Classroom_12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title text-secondary">Pune</h2>
                        <small>2 Preschools</small>
                    </div>
                </div>
                <div class="card shadow allprenurcard">
                    <img src="https://kido.school/wp-content/uploads/2019/04/3A3A5650.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title text-secondary">Banglore</h2>
                        <small>5 Preschools</small>
                    </div>
                </div>
                <div class="card shadow allprenurcard">
                    <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Kido-Trivandrum-Outdoor-Playarea_02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title text-secondary">Kerala</h2>
                        <small>1 Preschools</small>
                    </div>
                </div>
                <div class="card shadow allprenurcard">
                    <img src="https://kido.school/wp-content/uploads/2020/11/Facebook-Tooting-High-Res-Render-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title text-secondary">Gurgaon</h2>
                        <small>2 Preschools</small>
                    </div>
                </div>
                </div>
                <div class="text-center mt-5">
                    <a href="search.php" class="my-btn btn-primary btn-sm center" id="" target="_blank">Find all preschools</a>
                </div>
            </div> -->

        </div>
    </div>
</section>
<section class="testimonial py-5">
<div class="container">
	<div class="row">
		<div class="col-lg-8 mx-auto">
			<h1 class="head-text-blue text-center my-4">What our parents say about our schools</h1>
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
						<p class="testimonial text-center">Both my children go to nursery and are very happy there.</p>
						<p class="overview float-right"><b>Parent</b>, Parent, Chiswick</p>
					</div>
					<div class="carousel-item">
						<div class="img-box"><img src="https://storage.googleapis.com/kido-assets/Parent-Testimonial-2.jpg" class="img-fluid" alt="testimonial-img"></div>
						<p class="testimonial text-center">This is hands down the best nursery we have visited.</p>
						<p class="overview float-right"><b>Parent</b>, Parent, Windsor</p>
					</div>
					<div class="carousel-item">
						<div class="img-box"><img src="https://storage.googleapis.com/kido-assets/Parent-Testimonial-1.jpg" class="img-fluid" alt="testimonial-img"></div>
						<p class="testimonial text-center">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
						<p class="overview float-right"><b>Michael Holz</b>, Seo Analyst</p>
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
