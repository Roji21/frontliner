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
    <title>
        <?= esc($title) ?>
    </title>
</head>

<body>
    <?= $this->include('Layout/header') ?>
    <?php foreach ($isi as $row):
        $formattedAmount = number_format($row->AHLI_BIAYA, 2, ',', '.'); ?>
        <section>
            <div class="containera" style="padding-top: 3cm;">
                <div class="row">
                    <div class="col1" style='width:3px;'>
                        <img src="<?= base_url('img/expert/' . $row->USER_IDFOTO) ?>" alt="">
                    </div>
                    <div class="col2">
                        <div class="row">
                            <div class="col">
                                <h3 class="nama">
                                    <?php echo $row->USER_NAMA ?>
                                </h3>
                            </div>
                            <div class="col">
                                <a href="/ask/bayar/<?php echo $row->SLUG?>" style="text-decoration:none"><button type="button" class="btn1">Order</button></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3 class="skil">Skill :
                                    <?php echo $row->ahli_Skill ?>
                                </h3>
                                <h3 class="skil">
                                    <a style="color:#1453F8;" href="">Klik Untuk melihat CV</a>
                                </h3>
                                <h3 class="skil">
                                    <img src="<?= base_url('img/time.png') ?>" alt=""> 1 Sesi = 60 Menit
                                </h3>
                                <h3 class="skil">
                                    <img src="<?= base_url('img/dolar.png') ?>" alt=""> 1 Sesi = Rp. <?php echo $formattedAmount ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="tam2baw">
            <h1>Waktu Konsultasi</h1>
        </div>
        <div class="tam2baw2">
            <div class="container">
                <div class="row">
                    <div class="col4">
                        <img src="<?= base_url('img/time.png') ?>" alt="">
                        <h3>
                            <?php echo $row->AHLI_SESI1 ?>
                        </h3>
                    </div>
                    <div class="col4">
                        <img src="<?= base_url('img/time.png') ?>" alt="">
                        <h3>
                            <?php echo $row->AHLI_SESI2 ?>
                        </h3>
                    </div>
                    <div class="col4">
                        <img src="<?= base_url('img/time.png') ?>" alt="">
                        <h3>
                            <?php echo $row->AHLI_SESI3 ?>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>*Diperbolehkan merekam layar selama Virtual Meeting <br>*Dilarang melakukan hal berbau Pornografi
                            <br>*Expert berhak mematikan Virtual Meeting ketika waktu telah usai<br>*Segala bentuk hal
                            berbau pelecehan dapat dipidanakan sesuai UU yang berlaku
                        </p>
                    </div>
                    <div class="col4 ">
                        <div class="box">
                            <div class="boxisi">
                                <h5>Hari yang tersedia</h5>
                                <h3><?php echo $row->hari ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

    </div>
    <?= $this->include('Layout/footer') ?>
</body>

</html>