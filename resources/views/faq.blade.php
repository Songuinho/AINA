@extends('layouts.mainLayout')

@section('content')


<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
        <div data-aos="zoom-out">
          <h2>We are team of talented designers making websites with Bootstrap</h2>
        </div>
      </div>
    </div>
  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>

</section><!-- End Hero -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>F.A.Q</h2>
      <p>Frequently Asked Questions</p>
    </div>

    <div class="faq-list">
      <ul>
        <li data-aos="fade-up">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
              curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
              non.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc?
            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
              velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
              pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
              turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit?
            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
              pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
              tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
              molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem
            et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
              ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
              adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius
            vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
              integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
              eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
            </p>
          </div>
        </li>

      </ul>
    </div>

  </div>
</section><!-- End F.A.Q Section -->

@endsection