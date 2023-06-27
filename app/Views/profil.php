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
                    <img src="<?= base_url('img/defimg.png') ?>">
                </div>
                <div class="col">
                    <a href="" style="text-decoration:none"><button type="button" class="btn btn-primary">Join To
                            Expert</button></a>
                    <a href="" style="text-decoration:none"><button type="button" class="btn btn-outline-light">Log out</button></a>
                </div>
            </div>
        </div>
    </section>
    <div class="environmenta">
        <div class="row">
            <div style="margin-left: 5cm;" class="col-3">
                <strong>Joined On</strong><br>
                <p>23 Juni 2023</p>
            </div>
            <div class="col-3">
                <strong>Email</strong><br>
                <p>dedik@gmail.com</p>
            </div>
            <div class="col-2">
                <strong>No. Telp</strong><br>
                <p>083134618300</p>
            </div>
            <div class="col-2">
                <a href="" style="text-decoration:none"><button type="button" class="btn btn-outline-light">Ubah Password</button></a><br>
            </div>
        </div>
    </div>
    <section>
        <div class="box">
            <div class="boxisi">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </section>

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