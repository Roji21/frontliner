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
    <section>

        <div class="containera">
            <p style="padding-top: 1cm;">Kategori</p>
        </div>
        <div class="input-group mb-3 ">
            <div class="custom-select" style="width:200px;">
                <select id="my-dropdown">
                    <option value="">Pilih Kategori:</option>
                    <option value="0">All</option>
                    <option value="1">Microsoft Office</option>
                    <option value="2">Codeigniter</option>
                    <option value="3">Laravel</option>
                    <option value="4">Administrasi</option>
                    <option value="5">Excel</option>
                    <option value="6">Matlab</option>
                    <option value="7">Acounting</option>
                    <option value="8">Java</option>
                    <option value="6">Data Analis</option>
                </select>
                <script src="<?= base_url('droplink.js') ?>"></script>
            </div>
        </div>

    </section>

    <?php
    $rand = array('00E0D3', 'F799DD');
    $x = 0;
    ?>
    <div class="containera" style="background:#D9D9D9;">
        <section>
            <h1>It'Our Expert</h1>
            <div class="row">
                <?php foreach ($isi as $row):

                    if ($x % 2 == 0) {
                        $color1 = '#' . $rand[0];
                        $formattedAmount = number_format($row->AHLI_BIAYA, 2, ',', '.');
                        echo "<div class='col'>";
                        echo "<a href='/ask/expert/" . $row->SLUG . "' style='text-decoration:none'>";
                        echo "<div class='card' style='width: 18rem;''>";
                        echo "<div class='card-body' style='background:" . $color1 . ";' >";
                        echo "<img src=" . base_url("img/expert/" . $row->USER_IDFOTO) . " class='card-img-top'>";
                        echo "<h5 class='card-title'  style='color: black;'>" . $row->USER_NAMA . "</h5>";
                        echo "<p  style='color: black;'>" . $row->ahli_Skill . "</p>";
                        echo "<h4  '>Rp. " . $formattedAmount . "/sesi</h4>";
                        echo "</div>";
                        echo "</div>";
                        echo "</a>";
                        echo "</div>";
                    } else {
                        $color1 = '#' . $rand[1];
                        $formattedAmount = number_format($row->AHLI_BIAYA, 2, ',', '.');
                        echo "<div class='col'>";
                        echo "<a href='/ask/expert/" . $row->SLUG . "' style='text-decoration:none'>";
                        echo "<div class='card' style='width: 18rem;''>";
                        echo "<div class='card-body' style='background:" . $color1 . ";' >";
                        echo "<img src=" . base_url("img/expert/" . $row->USER_IDFOTO) . " class='card-img-top'>";
                        echo "<h5 class='card-title'  style='color: black;'>" . $row->USER_NAMA . "</h5>";
                        echo "<p  style='color: black;'>" . $row->ahli_Skill . "</p>";
                        echo "<h4  '>Rp. " . $formattedAmount . "/sesi</h4>";
                        echo "</div>";
                        echo "</div>";
                        echo "</a>";
                        echo "</div>";
                    }
                    $x++;
                endforeach; ?>
        </section>

    </div>
    <?= $this->include('Layout/footer') ?>
</body>

</html>