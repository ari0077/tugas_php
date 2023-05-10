<?php

$id = $_REQUEST['id'];
$model = new Kartu();
$pesanan = $model->getKartu($id);

?>

<h1 class="mt-4">Detail produk</h1>
<div class="card-body">
    <div class="card mb-4">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama </th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $kartu['kode']?></td>
                                            <td><?= $kartu['nama']?></td>
                                            <td><?= $kartu['diskon']?></td>
                                            <td><?= $kartu['iuran']?></td>
                                        </tr>
                                    </tbody>
                                    </table>
</div>
</div>


<div>
    <h3>
        <?= $kartu['kode'] ?>
    </h3>
</div>