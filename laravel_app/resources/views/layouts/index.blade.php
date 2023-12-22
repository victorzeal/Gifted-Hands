@extends("layouts.layout")
@section("content")



  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(css/img/slide1.jpeg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>WELCOME </span> TO HANDS OF HOPE </h2>
                <p class="animate__animated animate__fadeInUp">A place aimed at helping hundreds
					and thousands of orphans in need accross
					the country, thereby ensuring quality of life
					for the average orphan child.</p>
                <div>
                  <a href="/register" class="btn-menu animate__animated animate__fadeInUp scrollto">REGISTER</a>
                  <a href="/log" class="btn-book animate__animated animate__fadeInUp scrollto">LOGIN</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(css/img/slide2.jpeg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>WELCOME </span> TO HANDS OF HOPE </h2>
                <p class="animate__animated animate__fadeInUp"> A place aimed at helping hundreds
					and thousands of orphans in need accross
					the country, thereby ensuring quality of life
					for the average orphan child.
				.</p>
                <div>
                  <a href="user_reg.blade.php" class="btn-menu animate__animated animate__fadeInUp scrollto">REGISTER</a>
                  <a href="user_reg.blade.php" class="btn-book animate__animated animate__fadeInUp scrollto">DONATE</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(css/img/slide3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>WELCOME </span> TO HANDS OF HOPE </h2>
                <p class="animate__animated animate__fadeInUp"> and thousands of orphans in need accross
					the country, thereby ensuring quality of life
					for the average orphan child.</p>
                <div>
                  <a href="/" class="btn-menu animate__animated animate__fadeInUp scrollto">REGISTER</a>
                  <a href="/" class="btn-book animate__animated animate__fadeInUp scrollto">DONATE</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container-fluid">

    <div class="row">

      <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("css/img/aboutt.jpg");'>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
      </div>

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

        <div class="content">
          <h3> <strong>CHANGING THE LIVES OF THE ORPHAN CHILD ONE PENNY AT A TIME.</strong></h3>
          <p>
            Our project is aimed at helping hundreds
          and thousands of orphans in need accross
          the country, thereby ensuring quality of life
          for the average orphan chil.
          </p>
          <p class="fst-italic">
            Our project is aimed at helping hundreds
            and thousands of orphans in need accross
            the country, thereby ensuring quality of life
            for the average orphan chil.
          </p>
          <ul>
            <li><i class="bx bx-check-double"></i>Our project is aimed at helping hundreds
              and thousands of orphans in need accross
              the country </li>
            <li><i class="bx bx-check-double"></i> Our project is aimed at helping hundreds
              and thousands of orphans in need accross
              the country</li>
            <li><i class="bx bx-check-double"></i> Our project is aimed at helping hundreds
              and thousands of orphans in need accross
              the country</li>
          </ul>
          <p>
            Our project is aimed at helping hundreds
            and thousands of orphans in need accross
            the country, thereby ensuring quality of life
            for the average orphan chil.
          </p>
        </div>

      </div>

    </div>

  </div>
</section><!-- End About Section -->

    <!-- ======= Our work Section ======= -->
    <section id="events" class="events">
      <div class="container">
  
        <div class="section-title">
          <h2>OUR WORK <span>ACCROSS</span> THE COUNTRY</h2>
        </div>
  
        <div class="events-slider swiper">
          <div class="swiper-wrapper">
  
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="css/img/education.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>EDUCTION</h3>
                  <div class="price">
                    <p><span></span></p>
                  </div>
                  <p class="fst-italic">
                      When we open the door to education,
                      we unlock the future for children, 
                      and the possibilities of what could
                      be  possible for them.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> When we open the door to education,
                      we unlock the future for children</li>
                    <li><i class="bi bi-check-circle"></i> When we open the door to education,
                      we unlock the future for children</li>
                    <li><i class="bi bi-check-circle"></i> When we open the door to education,
                      we unlock the future for children.</li>
                  </ul>
                  <p>
                      When we open the door to education,<br>
                      we unlock the future for children, 
                      and <br>the possibilities of what could
                      be  <br>possible for them. Being an orphan<br>
                      shouldn't  and must not be the reason<br> for
                      not experiencing formal education.
                  </p>
                </div>
              </div>
            </div><!-- End our work -->
  
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="css/img/health.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>HEALTH CARE</h3>
                  <div class="price">
                    <p><span></span></p>
                  </div>
                  <p class="fst-italic">
                      he need for health care includes childhood
                      immunizations and vitamin supplements for children 
                      under five, routine health care for all and 
                      reproductive health services for older
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> he need for health care includes childhood
                      immunizations and vitamin supplements for children 
                      under five, routine health care for all and 
                      reproductive health services for older</li>
                    <li><i class="bi bi-check-circle"></i> he need for health care includes childhood
                      immunizations and vitamin supplements for children 
                      under five, routine health care for all and 
                      reproductive health services for older</li>
                    <li><i class="bi bi-check-circle"></i> he need for health care includes childhood
                      immunizations and vitamin supplements for children 
                      under five, routine health care for all and 
                      reproductive health services for older.</li>
                  </ul>
                  <p>
                      he need for health care includes childhood
                      immunizations and vitamin supplements for children 
                      under five, routine health care for all and 
                      reproductive health services for older
                  </p>
                </div>
              </div>
            </div><!-- End our work -->
  
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="css/img/food.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>FOOD</h3>
                  <div class="price">
                    <p><span></span></p>
                  </div>
                  <p class="fst-italic">
                      Food and clean water are the most basic need 
                      for all children.
                  <ul>
                    <li><i class="bi bi-check-circle"></i>  Food and clean water are the most basic need 
                      for all children.</li>
                    <li><i class="bi bi-check-circle"></i>  Food and clean water are the most basic need 
                      for all children.</li>
                    <li><i class="bi bi-check-circle"></i> Food and clean water are the most basic need 
                      for all children.</li>
                  </ul>
                  <p>
                      Food and clean water are the most basic need 
                      for all children. Undoubtedly, being an orphan 
                      child should not, and must not be the reason while 
                      a child starves or goes to bed on an empty stomach.
                  </p>
                </div>
              </div>
            </div><!-- End our work  -->
  
          </div>
          <div class="swiper-pagination"></div>
        </div>
  
      </div>
    </section><!-- End Events Section -->
   <!-- ======= Whu it matters Section ======= -->
   <section id="why-us" class="why-us">
    <div class="container">

      <div class="section-title">
        <h2>WHY IT <span> MATTERS</span></h2>
        <p>Beyond the orphanage is a journey full of hopes and aspiration.
          The orphnage has more than one definition. It is many things, It is loss and it is gain.
          It is fear and security.
        </p>
      </div>

      <div class="row">

        <div class="col-lg-4">
          <div class="box">
            <span>01</span>
            <h4>WELFARE</h4>
            <p>Helping to improve the quality of welfare of the orphan child in need projects hope for humanity.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box">
            <span>02</span>
            <h4>THE FUTURE</h4>
            <p>A generous hand doesn't just impact on the welfare of the orphan child inneed, but also shapes their future.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box">
            <span>03</span>
            <h4> SAFETY</h4>
            <p>Each one extending a hand of kindness contributes to safer and secured social environment</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Why it matters Section -->

   <!-- ======= Testimonials Section ======= -->
   <section id="testimonials" class="testimonials">
    <div class="container position-relative">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="css/img/norman.jpg" class="testimonial-img" alt="">
              <h3>Norman Macewen</h3>
              <h4>Formal Royal Air Force air marshals </h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Happiness is not so much in having as sharing. We make a living by what we get, but we make a life by what we give.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="css/img/motherteresa.jpeg" class="testimonial-img" alt="">
              <h3>Mother Teresa</h3>
              <h4>Catholic nun and the founder of the Missionaries of Charity.</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                It’s not how much we give but how much love we put into giving.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="css/img/Billygraham.jpg" class="testimonial-img" alt="">
              <h3>Billy Graham</h3>
              <h4>American evangelist </h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                God has given us two hands: one to receive with and the other to give with.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2><span>Contact</span> Us</h2>
        <p>.</p>
      </div>
    </div>

    <div class="container mt-5">

      <div class="info-wrap">
        <div class="row">
          

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@handofhope.com.com<br>handsofhope@gmail.com</p>
          </div>

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+234 810 946 3618<br>+234 816 933 3186</p>
          </div>
        </div>
      </div>

      <form action="" method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  @endsection
