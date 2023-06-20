<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/header.css') ?>">
    <style>
        body {
            background-image: url("<?= base_url('img/log.png') ?>");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <title>
        <?= esc($title) ?>
    </title>
</head>

<body>
<?= $this->include('Layout/header') ?>
    <section>
        <div class="containerb mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card px-5 py-5" id="form1">
                        <h5 class="card-title center" style="padding-left: 1cm;padding-right: 0.8cm;">Create New Acount
                        </h5>
                        <form action="/create/add" method="post">
                            <p>Nama</p>
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control border-warning  p-2" placeholder="Nama"
                                    name="nama">
                            </div>
                            <p>Email</p>
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control border-warning  p-2" placeholder="Email"
                                    name="email">
                            </div>
                            <p>Password</p>
                            <div class="input-group mb-3 ">
                                <input type="password" class="form-control border-warning  p-2" placeholder="Password"
                                    name="password">
                            </div>
                            <p>No Telepon</p>
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control border-warning  p-2" placeholder="No telepon"
                                    name="note" >
                            </div>
                            <p>Jenis Akun</p>
                            <div class="input-group mb-3 ">
                                <div class="custom-select" style="width:200px;">
                                    <select name="jenis">
                                        <option value="0">Pilih Jenis:</option>
                                        <option value="1">Join Sebagai Mentor</option>
                                        <option value="2">Join Sebagai Mahasiswa</option>
                                    </select>
                                    <script src="<?= base_url('drop.js') ?>"></script>
                                </div>
                            </div>
                            <div class="mb-3"> <button v-on:click.stop.prevent="submit"
                                    class="btn btn-warning w-100">Regristrasi</button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    </div>

    <?= $this->include('Layout/footer') ?>
</body>

</html>