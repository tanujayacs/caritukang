<div class="container-fluid mt-4">
    <h5>Data Artikel</h5>
   
        <div class=" d-flex justify-content-end mb-3">
            <a href="<?php echo base_url('artikel/tambah'); ?>" class="btn link-btn btn-primary">
                <i class="bi bi-plus"></i>
                <span>Tambah Data</span>
            </a>
        </div>
        <table class="table table-bordered" id="tableku">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Foto</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($artikel as $k => $v) : ?>

                    <tr>
                        <td><?php echo $k + 1; ?></td>
                        <td><?php echo $v['judul_artikel'];  ?></td>
                        <td>
                            <img src="<?php echo $this->config->item("url_artikel") . $v["foto_artikel"] ?>" width="300">
                        </td>
                        <td>
                            <a href="<?php echo base_url("artikel/ubah/" . $v["id_artikel"]) ?>" class="btn btn-warning">Ubah</a>
                            <a href="<?php echo base_url("artikel/hapus/" . $v["id_artikel"]) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>



        </table>
   
</div>