<nav id="main-nav" class="navbar navbar-expand-lg fixed-top" role="navigation">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img class="img-fluid" alt="Hebert Thomas Law" src="https://res.cloudinary.com/empuls3/image/upload/v1541696833/Hebert%20Thomas/web-logo.svg"
          width="50"><span class="ml-2">Hebert-Thomas Law, PLLC</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="menu-wrapper">
            <div class="hamburger-menu"></div>	  
        </div>
        </button>   

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if (is_page('/')) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo site_url('/'); ?>">Home</a>
          </li>
          <li class="nav-item <?php if (is_page('/about-us')) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo site_url('/about-us'); ?>">About</a>
          </li>
          <li class="nav-item <?php if (is_page('/practice-areas')) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo site_url('/practice-areas'); ?>">Practice Areas</a>
          </li>
          <li class="nav-item <?php if (is_page('/insight')) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo site_url('/insight'); ?>">Insight</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://secure.lawpay.com/pages/hebertthomaslaw/trust" target="_blank">Pay Here</a>
          </li>
          <li class="nav-item <?php if (is_page('/contact-us')) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo site_url('/contact-us'); ?>">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="<?php echo site_url('/contact-us'); ?>" class="btn btn-pink ml-5">Request A Consultation</a>
        </form>
      </div>
    </div>
  </nav>