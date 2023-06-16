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

        <div class="containera">
            <p style="padding-top: 1cm;">Kategori</p>
        </div>
        <div class="input-group mb-3 ">
            <div class="custom-select" style="width:200px;">
                <select>
                    <option value="0">Pilih Kategori:</option>
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

    </section>
    
    <?php
    $rand = array('00E0D3', 'F799DD');
    $x =0;
    ?>
    <div class="containera" style="background:#D9D9D9;">
        <section>
            <h1>It'Our Expert</h1>
            <div class="row">
                <?php foreach($isi as $key => $value):
                    
                    if ($x % 2 == 0) {
                        $color1 = '#' . $rand[0];
                        echo "<div class='col'>";
                        echo "<a href='/ask/expert/".$value['slug'] ."' style='text-decoration:none'>";
                        echo "<div class='card' style='width: 18rem;''>";
                        echo "<div class='card-body' style='background:" . $color1 . ";' >";
                        echo "<img src=" . base_url("img/expert/mentor0.png") . " class='card-img-top'>";
                        echo "<h5 class='card-title'  style='color: black;'>Asked The Expert</h5>";
                        echo "<span  style='color: black;'>Phyton,Java</span>";
                        echo "</div>";
                        echo "</div>";
                        echo "</a>";
                        echo "</div>";
                    } else{
                        $color1 = '#' . $rand[1];
                        echo "<div class='col'>";
                        echo "<a href='/ask/expert/".$value['slug'] ."' style='text-decoration:none'>";
                        echo "<div class='card' style='width: 18rem;''>";
                        echo "<div class='card-body' style='background:" . $color1 . ";' >";
                        echo "<img src=" . base_url("img/expert/mentor0.png") . " class='card-img-top'>";
                        echo "<h5 class='card-title'  style='color: black;'>Asked The Expert</h5>";
                        echo "<span  style='color: black;'>Phyton,Java</span>";
                        echo "</div>";
                        echo "</div>";
                        echo "</a>";
                        echo "</div>";
                    }
                    $x++;
                endforeach; ?>
        </section>

    </div>
    <?= $this->include('layout/footer') ?>
</body>

</html>