  <nav class="navbar navbar-area navbar-expand-lg">
      <div class="container-fluid nav-container navbar-bg">
        <div class="responsive-mobile-menu">
          <button
            class="menu toggle-btn d-block d-lg-none"
            data-target="#itech_main_menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="icon-left"></span>
            <span class="icon-right"></span>
          </button>
        </div>
        <div class="logo">
          <a href="index.html"><img src="assets/img/logo.png" alt="img" /></a>
        </div>
        <div class="nav-right-part nav-right-part-mobile">
          <a class="search-bar-btn" href="#">
            <i class="fa fa-search"></i>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="itech_main_menu">
          <ul class="navbar-nav menu-open text-lg-end">
            <li><a href="{{ url('index') }}">Home</a></li>
            <li><a href="{{ url('services') }}">Service</a></li>
            <li><a href="{{ url('about') }}">About Us</a></li>
            <li><a href="{{ url('team') }}">Team</a></li>
            <li><a href="{{ url('contact') }}">Contact Us</a></li>
          </ul>
        </div>
        <div class="nav-right-part nav-right-part-desktop align-self-center">
          <a class="navbar-phone" href="tel:">
            <span class="icon">
              <img src="assets/img/icon/1.png" alt="img" />
            </span>
            <span>Need help?</span>
            <h5>+977 9841172655</h5>
          </a>
        </div>
      </div>
    </nav>