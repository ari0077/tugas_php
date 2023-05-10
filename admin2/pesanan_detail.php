<?php

$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);

?>

<h1 class="mt-4">Detail produk</h1>
<div class="card-body">
    <div class="card mb-4">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama </th>
                                            <th>Pelanggan </th>
                                            <th>Keterangank</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $pesanan['tanggal']?></td>
                                            <td><?= $pesanan['total']?></td>
                                            <td><?= $pesanan['pelanggan_id']?></td>
                                            <td><?= $pesanan['ket']?></td>
                                        </tr>
                                    </tbody>
                                    </table>
</div>
</div>


<div>
    <h3>
        <?= $pesanan['tanggal'] ?>
    </h3>
</div>