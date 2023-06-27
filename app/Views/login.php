<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= base_url('img/logoicon.png') ?>">
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
    <?= $this->include('layout/header') ?>
    <section>
        <div class="containerb mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card px-5 py-5" id="form1">
                        <h5 class="card-title center">Sign In To Your Acount</h5>
                        <form action="/auth/login" method="post">
                            <p>Email</p>
                            <div class="input-group mb-4 ">
                                <input type="text" class="form-control border-warning  p-2" placeholder="Email"
                                    aria-label="Email"name="email">
                            </div>
                            <p>Password</p>
                            <div class="input-group mb-4 ">
                                <input type="password" class="form-control border-warning  p-2" placeholder="Password"
                                    aria-label="password"name="password">
                            </div>
                            <div class="mb-3"> <button v-on:click.stop.prevent="submit"
                                    class="btn btn-warning w-100">Login</button> </div>
                            <div class="row">
                                <div class="col" style="text-align: left;">
                                    <a href="/forgot">
                                        <p>Forgot Your Password?</p>
                                    </a>
                                </div>
                                <div class="col" style="text-align: right;">
                                    <a href="/create">
                                        <p>Create New Acount</p>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    </div>
</body>

</html>