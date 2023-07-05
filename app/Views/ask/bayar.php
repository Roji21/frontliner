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
        <div class="containera" style="padding-top: 3cm;border-bottom: solid 2px ;">
            <h1>Pembayaran</h1>
        </div>
        <form action="">
            <div class="container" style="padding-top: 2cm;">
            <h3>Pilih Sesi yang Tersedia</h3>
                <div class="input-group mb-3 ">
                    <div class="custom-select" style="width:200px;">
                        <select>
                            <option value="">Pilih Kategori:</option>
                            <option value="0">All</option>
                            <option value="1">Java</option>
                            <option value="2">Phyton</option>
                            <option value="3">Laravel</option>
                            <option value="4">Data Analis</option>
                            <option value="5">Exel</option>
                            <option value="6">Matlab</option>
                            <option value="4">Acounting</option>
                            <option value="5">Administration</option>
                        </select>
                        <script src="<?= base_url('drop.js') ?>"></script>
                    </div>
                </div>
            </div>
            <div class="containera" style="background:#D9D9D9;">
                <section>
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url('img/bank.png') ?>" alt="">
                        </div>
                        <div class="col">
                            <h2>Bank Transfer</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-container">
                                <img src="<?= base_url('img/mandiri.png') ?>" class="image" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-container">
                                <img src="<?= base_url('img/bni.png') ?>" class="image" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-container">
                                <img src="<?= base_url('img/bca.png') ?>" class="image" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-container">
                                <img src="<?= base_url('img/bri.png') ?>" class="image" alt="...">
                            </div>
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const images = document.querySelectorAll('.image-container');

                            images.forEach(function (image) {
                                image.addEventListener('click', function () {
                                    // Menghapus kelas "selected" dari semua foto
                                    images.forEach(function (img) {
                                        img.classList.remove('selected');
                                    });

                                    // Menambahkan kelas "selected" ke foto yang diklik
                                    image.classList.add('selected');

                                    // Mengatur value foto yang diklik
                                    const selectedImage = image.getAttribute('src');
                                    document.getElementById('selected-image').value = selectedImage;
                                });
                            });
                        });

                    </script>
                </section>
            </div>
            <div class="container" style="padding-top: 2cm;padding-bottom: 2cm;">
                <button type="submit" class="btn1">Order</button>
            </div>
        </form>
    <?php endforeach; ?>

    </div>
    <?= $this->include('Layout/footer') ?>
</body>

</html>