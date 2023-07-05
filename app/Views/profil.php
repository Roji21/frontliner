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
    <?= $this->include('Layout/header') ?>
    <section>
        <div class="containerb">
            <div class="row">
                <div class="col3">
                    <img src="<?= base_url('img/expert/' . $user['USER_IDFOTO']) ?>">
                </div>
                <div class="col">
                    <a href="" style="text-decoration:none"><button type="button" class="btn btn-primary">Join To
                            Expert</button></a>
                    <a href="/logout" style="text-decoration:none"><button type="button"
                            class="btn btn-outline-light">Log out</button></a>
                </div>
                <h2>
                    <?php echo $user['USER_NAMA'] ?>
                </h2>
            </div>
        </div>
    </section>
    <div class="environmenta">
        <div class="row">
            <div style="margin-left: 5cm;" class="col-3">
                <h4>Joined On</h4><br>
                <h5>
                    <?php echo $user['USER_JOIN'] ?>
                </h5>
            </div>
            <div class="col-3">
                <h4>Email</h4><br>
                <h5>
                    <?php echo $user['USER_EMAIL'] ?>
                </h5>
            </div>
            <div class="col-2">
                <h4>No. Telp</h4><br>
                <h5>
                    <?php echo $user['USER_TELP']; ?>
                </h5>
            </div>
            <div class="col-2">
                <a href="" style="text-decoration:none"><button style="width: 4cm;
    margin-top: 2mm;
    margin-bottom: 2mm;" type="button" class="btn btn-outline-light">Ubah
                        Password</button></a><br>
                <a href="" style="text-decoration:none;"><button style="width: 4cm;
    margin-top: 2mm;
    margin-bottom: 2mm;" type="button" class="btn btn-outline-light">Ubah
                        Profil </button></a><br>
            </div>
        </div>
        <h1>Expert History</h1>
    </div>
    <div class="container" style="padding-top: 2cm;padding-bottom: 2cm;">
        
    </div>
    <div class="environmenta">
        <h1 s>Bootcamp History</h1>
    </div>
    <div class="container" style="padding-top: 2cm;padding-bottom: 2cm;">
        
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