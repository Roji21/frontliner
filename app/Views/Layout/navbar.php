<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SITOHANG navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <?php
      $router = service('router');
      $method = $router->methodName();
    ?>
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
      <li class="nav-item">
          <a class="nav-link <?php if($method=="index"){echo "active";}?>" aria-current="page" href="<?= base_url('/') ?>">Home</a>
      </li>
        <li class="nav-item">
        <a class="nav-link <?php if($method=="about"){echo "active";}?>" aria-current="page" href="<?= base_url('about') ?>">About</a>
        </li>
		<li class="nav-item">
          <a class="nav-link <?php if($method=="contact"){echo "active";}?>" aria-current="page" href="<?= base_url('contact') ?>">Contact</a>
        </li>
		<li class="nav-item">
          <a class="nav-link <?php if($method=="faq"){echo "active";}?>" aria-current="page" href="<?= base_url('faq') ?>">Faqs</a>
        </li>
        <li class="user-profile">
            <img src="<?php echo base_url("img/expert/mentor0.png"); ?>" alt="User Photo">
            <span><?php echo $username; ?></span>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>