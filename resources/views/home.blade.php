<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home - hotel booking</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="/assets/img/SAVANALogo.png" rel="icon">
  <link href="/assets/img/SAVANALogo" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">
<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="{{ asset('assets/img/logo.jpg') }}" alt="Savana Logo" style="height: 36px; margin-right: 10px;">
      <h1 class="sitename m-0">Savana</h1><span></span>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#rooms">Rooms</a></li>
        <li><a href="#events">Event</a></li>
        <li><a href="#dining">Dining</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    {{-- Login / Selamat Datang --}}
    <div class="d-flex align-items-center">
      @auth
        <span class="btn-getstarted me-2">Selamat datang, {{ Auth::user()->username }}!</span>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
          @csrf
          <button type="submit" class="btn btn-link text-danger p-0 ms-2">Logout</button>
        </form>
      @else
        <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
      @endauth
    </div>

  </div>
</header>

<script>
  function toggleDesc(button) {
    const descContainer = button.parentElement;
    const fullText = descContainer.querySelector('.full-text');
    const shortText = descContainer.querySelector('.short-text');

    if (fullText.classList.contains('d-none')) {
      fullText.classList.remove('d-none');
      shortText.classList.add('d-none');
      button.textContent = 'Less';
    } else {
      fullText.classList.add('d-none');
      shortText.classList.remove('d-none');
      button.textContent = 'More';
    }
  }
</script>


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Enjoy Your Room<br>Comfortable Place</h1>
            <p data-aos="fade-up" data-aos-delay="100">Savana not just a place to rest, but a stay experience wrapped in nature and exeptional</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#book-a-table" class="btn-get-started">Booka a Room</a>
              <a href="https://youtu.be/_VHaGm_Zg2E?feature=shared" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="/assets/img/SAVANALogo.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p><span>Learn More</span> <span class="description-title">About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="/assets/img/about (1).jpg" class="img-fluid mb-4" alt="">
            <div class="book-a-table">
              <h3>Book a Room</h3>
              <p>+62 1122040626 05</p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Savana Gunung Pangrango <br> Providing an amazing mountain views will make your stay more enjoyable. Seruni Pangrango offers a waterpark where you can spend time with your kids here, to make them happy is one of the main reason on your vacation.
                  </span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Savana Gunung Gede <br> Stunning mountain view will make your stay more enjoyable. Savana Gunung Gede offers comfort during your stay, you do not have to leave the hotel room to enjoy the beauty of nature. You can enjoy it in your balcony room.
                  </span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Savana Gunung Salak<br> The newest and largest building among the others. Seruni Gunung Salak presents breathtaking scenery. You do not need to go to the beach to play sand, here the only one available in the peak area. Beach Pool. You can play with your kids and create an unforgettable new experience.</span></li>
              </ul>
              <p>

              </p>

              <div class="position-relative mt-4">
                <img src="/assets/img/about-2 (2).jpg" class="img-fluid" alt="">
                <a href="https://youtu.be/1H_EDiNNOks?si=Kx7VB1MzmHeCabQ2" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Savana</h3>
              <p>
                Savana is more than just a place to stay it's an experience. With elegant interior design, a calm and relaxing atmosphere, and warm, professional service, Savana is the perfect choice for those who value quality and comfort in every moment. We offer a seamless blend of modern luxury and personal touches, ensuring every guest feels truly special. From thoughtfully designed rooms and high-quality dining options to complete facilities for both relaxation and business needs everything at Savana is made with you in mind.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

            <div class="col-xl-4">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-house-door"></i>
                <h4>Elegant Rooms & Modern Comfort</h4>
                <p>Stay in beautifully crafted rooms with classic design and modern features from plush bedding to high-speed Wi-Fi.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-image-alt"></i>
                <h4>Breathtaking Mountain View</h4>
                <p>Wake up to serene views of Mount Salak & Mount Gede right from your private balcony pure natural tranquility.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-emoji-smile"></i>
                <h4>Warm Service & Authentic Cuisine</h4>
                <p>Enjoy personalized hospitality and delicious local dishes like Nasi Bali Handayani and Pisang Epe made by our expert chefs.</p>
              </div>
            </div><!-- End Icon Box -->


            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

      <img src="/assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- rooms Section -->
    <section id="rooms" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Hotels</h2>
        <p><span>Check Our</span> <span class="description-title">Hotels</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Savana Gunung Pangrango</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Savana Gunung Gede</h4>
            </a><!-- End tab nav item -->

          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Savana Gunung Salak</h4>
            </a>

          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Rooms</p>
              <h3>Savana Gunung Pangrango</h3>
            </div>

            <div class="villa-image text-center">
              <img src="/assets/img/villapangrango.png" alt="Villa Pangrango" class="img-fluid mb-4" style="max-width: 100%; border-radius: 12px;">
            </div>
            <p class="desc-hotel">
              Providing an amazing mountain views will make your stay more enjoyable. Seruni Pangrango offers a waterpark where you can spend time with your kids here, to make them happy is one of the main reason on your vacation.
            </p>            
            <!--pilihan menu-->
            <div class="row gy-5 justify-content-center"> 
              <div class="col-lg-4">
                <div class="menu-item bordered-container">
                <!-- Gambar utama -->
                <a href="\assets\img\pangrango\DeluxePangrango.jpg" class="glightbox">
                  <img src="\assets\img\pangrango\DeluxePangrango.jpg" class="menu-img img-fluid" alt="">
                </a>

                <h4>Deluxe Room</h4>
                <p class="ingredients">
                  2 beds, twins bed
                </p>

                <!-- Deskripsi ringkas + tombol More -->
                <div class="room-description">
                  <p class="short-text">
                    These sightly hotel rooms are decorated in an old style surrounded by Bali vector carvings.
                  </p>
                  <div class="full-text d-none">
                    <p>
                      Deluxe Room comes with two-bed choices, Double bed or Twin bed and private balcony with an amazing mountain views. Relax in the fresh mountain air on your own private balcony.
                    </p>
                    <ul>
                      <li><b>Room Ammenities:</b></li>
                      <li>WiFi</li>
                      <li>TV</li>
                      <li>Safe</li>
                      <li>Coffee & Tea Maker</li>
                      <li>Hair Dryer</li>
                      <li>Room Service</li>
                      <li>Double Bed (180x200)</li>
                      <li>Twin Bed (120x200)</li>
                      <li>Max Capacity: 2 Adult & 2 Child</li>
                      <li>Breakfast Included for 2 person</li>
                    </ul>
                  </div>
                  <button class="btn btn-sm btn-outline-secondary mt-2 toggle-btn" onclick="toggleDesc(this)">More</button>
                </div>

                <!-- Carousel thumbnail -->
                <div class="facility-carousel">
                  <a href="\assets\img\pangrango\TwinPangrango.jpg" class="glightbox" title="Balkon">
                    <img src="\assets\img\pangrango\TwinPangrango.jpg" alt="Balkon">
                  </a>
                  <a href="\assets\img\pangrango\BalconPangrango.jpg" class="glightbox" title="Kamar Mandi">
                    <img src="\assets\img\pangrango\BalconPangrango.jpg" alt="Kamar Mandi">
                  </a>
                  <a href="\assets\img\pangrango\BathroomPangrango.jpg" class="glightbox" title="Tempat Tidur">
                    <img src="\assets\img\pangrango\BathroomPangrango.jpg" alt="Tempat Tidur">
                  </a>
                </div>

                <p class="price">IDR 700,000/nett</p>

              </div> <!--end pilihan menu-->

            </div>
          </div><!-- End Starter Menu Content -->
        </div>

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Facilities</p>
              <h3>Savana Gunung Gede</h3>
            </div>
            <div class="villa-image text-center">
              <img src="/assets/img/villagede.png" alt="Villa gede" class="img-fluid mb-4" style="max-width: 100%; border-radius: 12px;">
            </div>
            <p class="desc-hotel">
              Stunning mountain view will make your stay more enjoyable. Savana Gunung Gede offers comfort during your stay, you do not have to leave the hotel room to enjoy the beauty of nature. You can enjoy it in your balcony room.
            </p> 

            <div class="row gy-5">

              <div class="col-lg-4">
                <div class="menu-item bordered-container">
                <!-- Gambar utama -->
                <a href="\assets\img\gede\kamar.jpg" class="glightbox">
                  <img src="\assets\img\gede\kamar.jpg" class="menu-img img-fluid" alt="">
                </a>

                <h4>Deluxe Room</h4>
                <p class="ingredients">
                  2 beds, twins bed
                </p>

                <!-- Deskripsi ringkas + tombol More -->
                <div class="room-description">
                  <p class="short-text">
                  These sightly hotel rooms are decorated in an old style surrounded by Bali vector carvings.
                  </p>
                  <div class="full-text d-none">
                    <p>
                    Deluxe Room comes with two-bed choices, Double bed or/ Twin bed and private balcony with an amazing mountain views. Relax in the fresh mountain air on your own private balcony.
                    </p>
                    <ul>
                      <li><b>Room Ammenities:</b></li>
                      <li>WiFi</li>
                      <li>TV</li>
                      <li>Safe</li>
                      <li>Coffee & Tea Maker</li>
                      <li>Hair Dryer</li>
                      <li>Room Service</li>
                      <li>Double Bed (180x200)</li>
                      <li>Twin Bed (120x200)</li>
                      <li>Max Capacity: 2 Adult & 2 Child</li>
                      <li>Breakfast Included for 2 person</li>
                    </ul>
                  </div>
                  <button class="btn btn-sm btn-outline-secondary mt-2 toggle-btn" onclick="toggleDesc(this)">More</button>
                </div>

                <!-- Carousel thumbnail -->
                <div class="facility-carousel">
                  <a href="\assets\img\gede\bathroom.jpg" class="glightbox" title="Balkon">
                    <img src="\assets\img\gede\bathroom.jpg" alt="bathroom">
                  </a>
                  <a href="\assets\img\gede\twins.jpg" class="glightbox" title="Kamar Mandi">
                    <img src="\assets\img\gede\twins.jpg" alt="Kamar Mandi">
                  </a>
                </div>

                <p class="price">IDR 800,000/nett</p>

              </div> <!--end pilihan menu-->
              </div>

              <div class="col-lg-4">
                <div class="menu-item bordered-container">
                <!-- Gambar utama -->
                <a href="\assets\img\gede\suite.jpg" class="glightbox">
                  <img src="\assets\img\gede\suite.jpg" class="menu-img img-fluid" alt="">
                </a>

                <h4>Suite Room</h4>
                <p class="ingredients">
                  2 beds
                </p>

                <!-- Deskripsi ringkas + tombol More -->
                <div class="room-description">
                  <p class="short-text">
                    These sightly hotel rooms are decorated in an old style surrounded by Bali vector carvings.
                  </p>
                  <div class="full-text d-none">
                    <p>
                      Suite Room comes with Double bed and private balcony with an amazing mountain views. Relax in the fresh mountain air on your own private balcony.
                    </p>
                    <ul>
                      <li><b>Room Ammenities:</b></li>
                      <li>WiFi</li>
                      <li>TV</li>
                      <li>Safe</li>
                      <li>Coffee & Tea Maker</li>
                      <li>Hair Dryer</li>
                      <li>Room Service</li>
                      <li>Double Bed (180x200)</li>
                      <li>Max Capacity: 2 Adult & 2 Child</li>
                      <li>Breakfast Included for 2 person</li>
                    </ul>
                  </div>
                  <button class="btn btn-sm btn-outline-secondary mt-2 toggle-btn" onclick="toggleDesc(this)">More</button>
                </div>

                 <!-- Carousel thumbnail -->
                <div class="facility-carousel">
                  <a href="\assets\img\gede\bathroom.jpg" class="glightbox" title="Balkon">
                    <img src="\assets\img\gede\bathroom.jpg" alt="bathroom">
                  </a>
                </div>
                <p class="price">IDR 850,000/nett</p>


              </div> <!--end pilihan menu-->
              </div>

              <div class="col-lg-4">
                <div class="menu-item bordered-container">
                <!-- Gambar utama -->
                <a href="\assets\img\gede\family.jpg" class="glightbox">
                  <img src="\assets\img\gede\family.jpg" class="menu-img img-fluid" alt="">
                </a>

                <h4>Family Room</h4>
                <p class="ingredients">
                  2 beds, twins bed
                </p>

                <!-- Deskripsi ringkas + tombol More -->
                <div class="room-description">
                  <p class="short-text">
                    These sightly hotel rooms are decorated in an old style surrounded by Bali vector carvings.
                  </p>
                  <div class="full-text d-none">
                    <p>
                     Family Room Living comes with two rooms connected and private balcony in every room with an amazing mountain views. Relax in the fresh mountain air on your own private balcony.
                    </p>
                    <ul>
                      <li><b>Room Ammenities:</b></li>
                      <li>WiFi</li>
                      <li>TV</li>
                      <li>Safe</li>
                      <li>Coffee & Tea Maker</li>
                      <li>Hair Dryer</li>
                      <li>Room Service</li>
                      <li>Double Bed (180x200)</li>
                      <li>Twin Bed (120x200)</li>
                      <li>Max Capacity: 2 Adult & 2 Child</li>
                      <li>Breakfast Included for 2 person</li>
                    </ul>
                  </div>
                  <button class="btn btn-sm btn-outline-secondary mt-2 toggle-btn" onclick="toggleDesc(this)">More</button>
                </div>

                <!-- Carousel thumbnail -->
                <div class="facility-carousel">
                  <a href="\assets\img\gede\twins2.jpg" class="glightbox" title="Balkon">
                    <img src="\assets\img\gede\twins2.jpg" alt="Balkon">
                  </a>
                </div>

                <p class="price">IDR 2,100,000/nett</p>

              </div> <!--end pilihan menu-->
            </div>

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Facilities</p>
              <h3>Savana Gunung Salak</h3>
            </div>

            <div class="villa-image text-center">
              <img src="\assets\img\villasalak.png" alt="Villa Pangrango" class="img-fluid mb-4" style="max-width: 100%; border-radius: 12px;">
            </div>
            <p class="desc-hotel">
              The newest and largest building among the others. Seruni Gunung Salak presents breathtaking scenery. You do not need to go to the beach to play sand, here the only one available in the peak area. Beach Pool. You can play with your kids and create an unforgettable new experience.
            </p>

            <div class="row gy-5">

              <div class="col-lg-4">
                <div class="menu-item bordered-container">

                <!-- Gambar utama -->
                <a href="\assets\img\salak\deluxe.jpg" class="glightbox">
                  <img src="\assets\img\salak\deluxe.jpg" class="menu-img img-fluid" alt="">
                </a>

                <h4>Deluxe Room</h4>
                <p class="ingredients">
                  2 beds, twins bed
                </p>

                <!-- Deskripsi ringkas + tombol More -->
                <div class="room-description">
                  <p class="short-text">
                    These sightly hotel rooms are decorated in an old style surrounded by Bali vector carvings.
                  </p>
                  <div class="full-text d-none">
                    <p>
                      Deluxe Room comes with two-bed choices, Double bed or/ Twin bed and private balcony with an amazing mountain views. Relax in the fresh mountain air on your own private balcony.
                    </p>
                    <ul>
                      <li><b>Room Ammenities:</b></li>
                      <li>WiFi</li>
                      <li>TV</li>
                      <li>Safe</li>
                      <li>Coffee & Tea Maker</li>
                      <li>Hair Dryer</li>
                      <li>Room Service</li>
                      <li>Double Bed (180x200)</li>
                      <li>Twin Bed ( 120x200 )</li>
                      <li>Max Capacity: 2 Adult & 2 Child</li>
                      <li>Breakfast Included for 2 person</li>
                    </ul>
                  </div>
                  <button class="btn btn-sm btn-outline-secondary mt-2 toggle-btn" onclick="toggleDesc(this)">More</button>
                </div>

                 <!-- Carousel thumbnail -->
                <div class="facility-carousel">
                  <a href="\assets\img\salak\twinsdeluxe.jpg" class="glightbox" title="Balkon">
                    <img src="\assets\img\salak\twinsdeluxe.jpg" alt="twins">
                  </a>
                  <a href="\assets\img\salak\balcondeluxe.jpg" class="glightbox" title="Balkon">
                    <img src="\assets\img\salak\balcondeluxe.jpg" alt="balcon">
                  </a>
                  <a href="\assets\img\salak\bathroom.jpg" class="glightbox" title="Balkon">
                    <img src="\assets\img\salak\bathroom.jpg" alt="bathroom">
                  </a>
                </div>
                <p class="price">IDR 800.000,00/nett</p>


              </div> <!--end pilihan menu-->
              </div>

                <div class="col-lg-4">
                  <div class="menu-item bordered-container">

                <!-- Gambar utama -->
                <a href="\assets\img\salak\suite.jpg" class="glightbox">
                  <img src="\assets\img\salak\suite.jpg" class="menu-img img-fluid" alt="">
                </a>

                <h4>Suite Room</h4>
                <p class="ingredients">
                2 beds
                </p>

                <!-- Deskripsi ringkas + tombol More -->
                <div class="room-description">
                  <p class="short-text">
                    These sightly hotel rooms are decorated in an old style surrounded by Bali vector carvings.
                  </p>
                  <div class="full-text d-none">
                    <p>
                      Suite Room comes with two bed choices, Double bed or/ Twin Bed and private balcony with an amazing mountain views. Relax in the fresh mountain air on your own private balcony.
                    </p>
                      <ul>
                      <li><b>Room Ammenities:</b></li>
                      <li>WiFi</li>
                      <li>TV</li>
                      <li>Safe</li>
                      <li>Coffee & Tea Maker</li>
                      <li>Hair Dryer</li>
                      <li>Room Service</li>
                      <li>Double Bed (180x200)</li>
                      <li>Twin Bed ( 120x200 )</li>
                      <li>Max Capacity: 2 Adult & 2 Child</li>
                      <li>Breakfast Included for 2 person</li>
                    </ul>
                  </div>
                  <button class="btn btn-sm btn-outline-secondary mt-2 toggle-btn" onclick="toggleDesc(this)">More</button>
                </div>

                 <!-- Carousel thumbnail -->
                <div class="facility-carousel">
                  <a href="\assets\img\salak\twinssuite.jpg" class="glightbox" title="Balkon">
                    <img src="\assets\img\salak\twinssuite.jpg" alt="twins">
                  </a>
                  <a href="\assets\img\salak\balconsuite.jpg" class="glightbox" title="Balkon">
                    <img src="\assets\img\salak\balconsuite.jpg" alt="balcon">
                  </a>
                  <a href="\assets\img\salak\bathroom.jpg" class="glightbox" title="Balkon">
                    <img src="\assets\img\salak\bathroom.jpg" alt="bathroom">
                  </a>
                </div>
                <p class="price">IDR 900.000,00/nett</p>


              </div> <!--end pilihan menu-->
                </div>

              <div class="col-lg-4">
                <div class="menu-item bordered-container">

                <!-- Gambar utama -->
                <a href="\assets\img\gede\suite.jpg" class="glightbox">
                  <img src="\assets\img\gede\suite.jpg" class="menu-img img-fluid" alt="">
                </a>

                <h4>Superior Room</h4>
                <p class="ingredients">
                  2 beds, twins bed
                </p>

                <!-- Deskripsi ringkas + tombol More -->
                <div class="room-description">
                  <p class="short-text">
                    These sightly hotel rooms are decorated in an old style surrounded by Bali vector carvings.
                  </p>
                  <div class="full-text d-none">
                    <p>
                      Suite Room comes with Double bed and private balcony with an amazing mountain views. Relax in the fresh mountain air on your own private balcony.
                    </p>
                    <ul>
                      <li><b>Room Ammenities:</b></li>
                      <li>WiFi</li>
                      <li>TV</li>
                      <li>Safe</li>
                      <li>Coffee & Tea Maker</li>
                      <li>Hair Dryer</li>
                      <li>Room Service</li>
                      <li>Double Bed (180x200)</li>
                      <li>Max Capacity: 2 Adult & 2 Child</li>
                      <li>Breakfast Included for 2 person</li>
                    </ul>
                  </div>
                  <button class="btn btn-sm btn-outline-secondary mt-2 toggle-btn" onclick="toggleDesc(this)">More</button>
                </div>

                 <!-- Carousel thumbnail -->
                <div class="facility-carousel">
                  <a href="\assets\img\gede\bathroom.jpg" class="glightbox" title="Balkon">
                    <img src="\assets\img\gede\bathroom.jpg" alt="bathroom">
                  </a>
                </div>
                <p class="price">IDR 950,000/nett</p>


              </div> <!--end pilihan menu-->
              </div>

            </div>
          </div><!-- End Lunch Menu Content -->
            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>

    </section><!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TESTIMONIALS</h2>
        <p>What Are They <span class="description-title">Saying About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span> Bagus sekali Hotelnya</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Lintang Fajar</h3>
                      <h4>Florist</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="/assets/img/testimonials/linjar.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Nyaman untuk dikunjungi keluarga dan teman BM-4B</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Syarah Nizma</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="/assets/img/testimonials/syarah.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <!-- Feedback Section -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center align-items-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content text-center text-lg-start">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Apakah Anda ingin membagikan pengalaman Anda bersama kami? Kami sangat senang mendengar cerita Anda!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Bagikan Ulasan Anda</h3>
                      <h4>Kami menghargai setiap feedback</h4>
                      <div class="mt-3">
                        <a href="mailto:lintang.fajar.kinanti.te23@stu/pnj.ac.id" class="btn rounded-pill px-4 py-2" style="background-color:#50493d; color: #fff;">
                          <i class="bi bi-envelope-fill me-2"></i>Kirim Ulasan Sekarang
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                      <div class="email-icon-box">
                        <i class="bi bi-envelope-paper-fill" style="font-size: 64px; color:  #50493d;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

        <div class="container section-title" data-aos="fade-up">
        <h2>Join Event</h2>
        <p><span>Join Our</span> <span class="description-title">Event<br></span></p>
      </div><!-- End Section Title -->
      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(/assets/img/events-1.jpg)">
              <h3>Custom Parties</h3>
              <div class="price align-self-start">IDR 1.600.000,00</div>
              <p class="description">
                Design your own celebration with our fully customizable party package. From themed décor to personalized menus, our team will help bring your vision to life.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(/assets/img/events-2.jpg)">
              <h3>Private Parties</h3>
              <div class="price align-self-start">IDR 4.700.000,00</div>
              <p class="description">
                Enjoy the luxury of privacy in an exclusive setting. Ideal for reunions, special dinners, or any event where privacy and comfort matter most.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(/assets/img/events-3.jpg)">
              <h3>Birthday Parties</h3>
              <div class="price align-self-start">IDR 8.133.700,00 </div>
              <p class="description">
                Make birthdays extra special for both kids and adults. Celebrate with festive decorations, cakes, and entertainment in a joyful setting.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(/assets/img/events-4.jpg)">
              <h3>Wedding Parties</h3>
              <div class="price align-self-start">IDR 14.657.700,00</div>
              <p class="description">
                Say "I do" in a breathtaking venue with personalized services to make your day truly magical. Choose from indoor elegance or scenic outdoor views.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Events Section -->

    <!-- Chefs Section -->
    <section id="dining" class="dining section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Dining</h2>
        <p><span>Our</span> <span class="description-title">Specials Menu<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="/assets/img/foods/nasigoreng.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Nasi Goreng</h4>
                  <span class="text-muted">Klasik Favorit</span>
                  <p><em>Nasi goreng spesial dengan telur mata sapi, sayuran segar, dan bumbu tradisional yang menggugah selera.</em></p>

              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="/assets/img/foods/nasibali.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Nasi Bali Handayani</h4>
                <span class="text-muted">Cita Rasa Bali</span>
                <p><em>Disajikan lengkap dengan ayam suwir pedas, sambal matah, telur pindang, dan urap segar khas Bali.</em></p>

              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="/assets/img/foods/pisangepe.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Pisang Epe</h4>
                <span class="text-muted">Manis Tradisional</span>
                <p><em>Pisang bakar lembut yang disiram saus gula merah kental, disajikan hangat dengan taburan kelapa parut.</em></p>
            </div>
          </div><!-- End Chef Team Member -->

        </div>

      </div>

    </section><!-- /Chefs Section -->
<!-- Book A Room Section -->
<section id="book-a-table" class="book-a-table section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Book A Room</h2>
    <p><span>Book Your Room</span> <span class="description-title">Stay With Us<br></span></p>
  </div>

  <div class="container">
    <div class="row g-0" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-4 reservation-img" style="background-image: url('/assets/img/reservation.jpg');"></div>

      <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up" data-aos-delay="200">

        <!-- PERHATIKAN: action sudah route POST ke Laravel, class JS dihapus -->
        <form action="{{ route('book.room') }}" method="POST">
          @csrf

          @if(session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
          @endif

          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" name="phone" class="form-control" placeholder="Your Phone" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="date" name="date" class="form-control" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="time" name="time" class="form-control" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="number" name="people" class="form-control" placeholder="# of people" required min="1">
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (optional)"></textarea>
          </div>

          <div class="text-center mt-3">
            <button type="submit">Book a Room</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>



    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="/assets/img/gallery/gallery-1.jpg"><img src="/assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="/assets/img/gallery/gallery-2.jpg"><img src="/assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="/assets/img/gallery/gallery-3.jpg"><img src="/assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="/assets/img/gallery/gallery-4.jpg"><img src="/assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="/assets/img/gallery/gallery-5.jpg"><img src="/assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="/assets/img/gallery/gallery-6.jpg"><img src="/assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="/assets/img/gallery/gallery-7.jpg"><img src="/assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="/assets/img/gallery/gallery-8.jpg"><img src="/assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7925.347767182409!2d106.93768886970012!3d-6.687257081198426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8395455aa9b%3A0x692b4679ab657e47!2sPuncak%20Rd%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1750233391388!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Jalan Puncak RD No 22</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <a href="tel:+62112204062605">+62 1122040626 05</a><br>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <a href="mailto:syarah.nizma.soraya.te23@stu.pnj.ac.id">savanavilla@gmail.com</a>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>Jalan Puncak RD No 22</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong>
              <a href="tel:+62112204062605">+62 1122040626 05</a><br>
              <strong>Email:</strong>
              <a href="mailto:syarah.nizma.soraya.te23@stu.pnj.ac.id">syarah nizma soraya</a>

            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://x.com/SeruniHotelOffi?t=aau32IG6hE2kMXb2Srb1ow&s=09" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.instagram.com/hotelseruniofficial?igsh=MW1tcTBrOHNoZ3Y1OA==" class="instagram"><i class="bi bi-instagram"></i></a>

          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">syajar</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by syarah and linjar</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>
