<!-- Include necessary CSS and JavaScript files for Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<style>
  /* Add your custom styles here */
  .shadow-effect {
		    background: #fff;
		    padding: 20px;
		    border-radius: 4px;
		    text-align: center;
	border:1px solid #ECECEC;
		    box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
		}
		#customers-testimonials .shadow-effect p {
		    font-family: inherit;
		    font-size: 17px;
		    line-height: 1.5;
		    margin: 0 0 17px 0;
		    font-weight: 300;
		}
		.testimonial-name {
		    margin: -17px auto 0;
		    display: table;
		    width: auto;
		    background: #3190E7;
		    padding: 9px 35px;
		    border-radius: 12px;
		    text-align: center;
		    color: #fff;
		    box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
		}
		#customers-testimonials .item {
		    text-align: center;
		    padding: 50px;
				margin-bottom:80px;
		    opacity: .2;
		    -webkit-transform: scale3d(0.8, 0.8, 1);
		    transform: scale3d(0.8, 0.8, 1);
		    -webkit-transition: all 0.3s ease-in-out;
		    -moz-transition: all 0.3s ease-in-out;
		    transition: all 0.3s ease-in-out;
		}
		#customers-testimonials .owl-item.active.center .item {
		    opacity: 1;
		    -webkit-transform: scale3d(1.0, 1.0, 1);
		    transform: scale3d(1.0, 1.0, 1);
		}
		.owl-carousel .owl-item img {
		    transform-style: preserve-3d;
		    max-width: 90px;
    		margin: 0 auto 17px;
		}
		#customers-testimonials.owl-carousel .owl-dots .owl-dot.active span,
#customers-testimonials.owl-carousel .owl-dots .owl-dot:hover span {
		    background: #3190E7;
		    transform: translate3d(0px, -50%, 0px) scale(0.7);
		}
#customers-testimonials.owl-carousel .owl-dots{
	display: inline-block;
	width: 100%;
	text-align: center;
}
#customers-testimonials.owl-carousel .owl-dots .owl-dot{
	display: inline-block;
}
		#customers-testimonials.owl-carousel .owl-dots .owl-dot span {
		    background: #3190E7;
		    display: inline-block;
		    height: 20px;
		    margin: 0 2px 5px;
		    transform: translate3d(0px, -50%, 0px) scale(0.3);
		    transform-origin: 50% 50% 0;
		    transition: all 250ms ease-out 0s;
		    width: 20px;
		}
</style>

<section class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="customers-testimonials" class="owl-carousel">
          <!--TESTIMONIAL 1 -->
          <div class="item">
            <div class="shadow-effect">
              <img class="img-circle" src="path/to/testimonial1.jpg" alt="">
              <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
            </div>
            <div class="testimonial-name">EMILIANO AQUILANI</div>
          </div>
          <!--END OF TESTIMONIAL 1 -->
          <!--TESTIMONIAL 2 -->
          <div class="item">
            <div class="shadow-effect">
              <img class="img-circle" src="path/to/testimonial2.jpg" alt="">
              <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
            </div>
            <div class="testimonial-name">ANNA ITURBE</div>
          </div>
          <!--END OF TESTIMONIAL 2 -->
          <!--TESTIMONIAL 3 -->
          <div class="item">
            <div class="shadow-effect">
              <img class="img-circle" src="path/to/testimonial3.jpg" alt="">
              <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
            </div>
            <div class="testimonial-name">LARA ATKINSON</div>
          </div>
          <!--END OF TESTIMONIAL 3 -->
          <!--TESTIMONIAL 4 -->
          <div class="item">
            <div class="shadow-effect">
              <img class="img-circle" src="path/to/testimonial4.jpg" alt="">
              <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
            </div>
            <div class="testimonial-name">IAN OWEN</div>
          </div>
          <!--END OF TESTIMONIAL 4 -->
          <!--TESTIMONIAL 5 -->
          <div class="item">
            <div class="shadow-effect">
              <img class="img-circle" src="path/to/testimonial5.jpg" alt="">
              <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
            </div>
            <div class="testimonial-name">MICHAEL TEDDY</div>
          </div>
          <!--END OF TESTIMONIAL 5 -->
        </div>
      </div>
    </div>
  </div>
</section>


<script>
  jQuery(document).ready(function($) {
    "use strict";
    // TESTIMONIALS CAROUSEL HOOK
    $('#customers-testimonials').owlCarousel({
      loop: true,
      center: true,
      items: 3,
      margin: 0,
      autoplay: true,
      dots: true,
      autoplayTimeout: 8500,
      smartSpeed: 450,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1170: {
          items: 3
        }
      }
    });
  });
</script>
