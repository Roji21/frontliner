<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('css/header.css') ?>">
</head>

<body>
    <select id="my-dropdown">
        <option value="">Pilih opsi</option>
        <option value="https://www.example.com">Opsi 1</option>
        <option value="https://www.example2.com">Opsi 2</option>
        <option value="https://www.example3.com">Opsi 3</option>
    </select>


    <script src="<?= base_url('drop.js') ?>">
        document.addEventListener('DOMContentLoaded', function () {
            const dropdown = document.getElementById('my-dropdown');
            dropdown.addEventListener('change', function () {
                const selectedValue = dropdown.value;
                if (selectedValue) {
                    window.location.href = "/ask/" + selectedValue;
                }
            });
        });
    </script>

</body>

</html>