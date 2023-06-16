<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/header.css') ?>">
    <title>
        <?= esc($title) ?>
    </title>
</head>

<body>
    <?= $this->include('layout/header') ?>
    <section>

        <div class="containera"style="padding-top: 1cm;">
            <?= esc($isi['Nama'])?>
            <img src="<?= base_url('img/expert/'.$isi['foto'].'.png') ?>" alt="">
        </div>
    </section>

    </div>
    <?= $this->include('layout/footer') ?>
</body>

</html>