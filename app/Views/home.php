<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= base_url('img/logoicon.png') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/header.css') ?>">
    <title>
        <?= esc($title) ?>
    </title>
</head>

<body>
    <header>
        <?= $this->include('Layout/header') ?>

        <div class="heroe">

            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <h2>Welcome to Frontliner </h2>
                        <h1>"Lets Find Out Something New"</h1>
                        <h3>Kami adalah platform yang menghubungkan mentor-mentor terkemuka dan juga pelanggan yang
                            ingin
                            mendapatkan ilmu secara personal dan eksklusif</h3>
                    </div>
                    <div class="col-2" style="margin-top: 1in;">
                        <a href="/login">
                            <p><button type="button" class="btn btn-outline-dark ">
                                    <h5>Login</h5>
                                </button></p>
                        </a>

                        <a href="/create">
                            <p><button type="button" class="btn btn-warning">
                                    <h5>Create Acount</h5>
                                </button></p>
                        </a>
                    </div>
                    <div class="col">
                        <img src="<?= base_url('img/Vectary.png') ?>" alt="">
                    </div>

                </div>
            </div>
        </div>

    </header>

    <!-- CONTENT -->

    <section>

        <div class="containera">
            <div class="row">
                <div class="col">
                    <a href="https://www.youtube.com" style="text-decoration:none">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body1">
                                <h5 class="card-title center">Discuss</h5>
                                <img src="<?= base_url('img/disqus.png') ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card-text">
                                <p>
                                    Your Idea is a insight Drop yout insight here
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/ask" style="text-decoration:none">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body2">
                                <h5 class="card-title">Asked The Expert</h5>
                                <img src="<?= base_url('img/teng.png') ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card-text">
                                <p>
                                    Discuss with profesional and competent expert
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.youtube.com" style="text-decoration:none">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body3">
                                <h5 class="card-title">Bootcamp</h5>
                                <img src="<?= base_url('img/mentor.png') ?>" class="card-img-top" alt="...">

                            </div>
                            <div class="card-text">
                                <p>
                                    Develop your skill here
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </section>

    <div class="further">

        <section>

            <h1>Introduce With Frontliner</h1>

            <div class="row">
                <div class="col">

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img src="<?= base_url('img/v1.png') ?>" class="img" alt="...">
                            <h5 class="card-title center">Begginer Friendly</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel sapien et elit
                                posuere aliquet quis non ante. Integer aliquet ultrices maximus. Ut et dolor id libero
                                lobortis pellentesque. Curabitur molestie metus semper sapien gravida convallis. Ut
                                pretium, augue vitae pretium auctor, risus mi laoreet lectus, vel tempus nibh libero id
                                dui.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img src="<?= base_url('img/v2.png') ?>" class="img" alt="...">
                            <h5 class="card-title center">Make it Smart Make it Know</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel sapien et elit
                                posuere aliquet quis non ante. Integer aliquet ultrices maximus. Ut et dolor id libero
                                lobortis pellentesque. Curabitur molestie metus semper sapien gravida convallis. Ut
                                pretium, augue vitae pretium auctor, risus mi laoreet lectus, vel tempus nibh libero id
                                dui.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img src="<?= base_url('img/v3.png') ?>" class="img" alt="...">
                            <h5 class="card-title ">Get Your new Insight Here</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel sapien et elit
                                posuere aliquet quis non ante. Integer aliquet ultrices maximus. Ut et dolor id libero
                                lobortis pellentesque. Curabitur molestie metus semper sapien gravida convallis. Ut
                                pretium, augue vitae pretium auctor, risus mi laoreet lectus, vel tempus nibh libero id
                                dui.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </div>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
    <footer>
        <?= $this->include('Layout/footer') ?>
    </footer>



    <!-- SCRIPTS -->

    <script>
        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>

    <!-- -->

</body>

</html>