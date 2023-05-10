<?php

$id = $_REQUEST['id'];
$model = new pelanggan();
$pesanan = $model->getPelanggan($id);

?>

<h1 class="mt-4">Detail produk</h1>
<div class="card-body">
    <div class="card mb-4">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama </th>
                                            <th>Tgl Lahir</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $pelanggan['kode']?></td>
                                            <td><?= $pelanggan['nama']?></td>
                                            <td><?= $pelanggan['tgl_lahir']?></td>
                                            <td><?= $pelanggan['email']?></td>
                                        </tr>
                                    </tbody>
                                    </table>
</div>
</div>


<div>
    <h3>
        <?= $pelanggan['kode'] ?>
    </h3>
</div>