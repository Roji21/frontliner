<?= $this->extend('layout/page') ?>
<?= $this->section('content') ?>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <b>Data User Yang Telah Terdaftar</b>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                    <?php
                    foreach ($userdata as $row) : ?>
                        <tr>
                            <td><?php echo $row->id_user; ?></td>
                            <td><?php echo $row->username; ?></td>
                            <td><?php echo $row->password; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
     
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>