<!-- ======= Header ======= -->
  <header id="header" class="fixed-top mb-5">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="<?php echo base_url; ?>"><img  src="<?php echo base_url.'uploads/images/logo.png'; ?>" /></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link logout" href="<?php echo base_url.'logout.php'; ?>">Logout</a></li>
          <li><a class="nav-link" href="<?php echo base_url.'profile'; ?>"><img class="img-responsive profile" width="50" height="50" src="<?php if(!empty($user_data[0]['profile'])){echo base_url.$user_data[0]['profile'];}else{echo base_url.'uploads/profile/profile.png';} ?>" /></a>
          </li>
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto o" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->