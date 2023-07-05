<header>
  <nav class="navbar navbar-expand-lg  fixed-top  ">
    <div class="container-fluid">
      <li class="logo">
        <a href="/">
          <img src="<?= base_url('img/logo.png') ?>" alt="" height="70">
        </a>
      </li>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

        </ul>
        <form class="d-flex">
          <ul>
            <li class="menu-item hidden"><a href="/">Home</a></li>
            <li class="menu-item hidden"><a href="/team">Our Team</a>
            </li>
            <li class="menu-item hidden"><a href="/about">About us</a></li>
            <li class="menu-item hidden"><a href="/service">Our Service</a>
            </li>
            <?php
            if (isset($user)) {
              echo '<li class="menu-item hidden">';
              echo '<a href="/profil">';
              echo '<div class="user">';
              echo "<span>". $user['USER_NAMA']."</span>";
              echo "<img src=" . base_url("img/expert/". $user['USER_IDFOTO']) . ">";
              echo '</div>';
              echo '</a>';
              echo '</li>';
            }else {
              echo '<li class="menu-item hidden"><a href="/login">Log in</a></li>';
            }
            ?>
          </ul>
        </form>
      </div>
    </div>
  </nav>

</header>