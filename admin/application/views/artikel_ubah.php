<div class="container">
    <h5>Edit Artikel</h5>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Judul artikel</label>
            <input type="text" class="form-control" name="judul_artikel" value="<?php echo set_value('judul_artikel', $artikel['judul_artikel']) ?>"></input>
            <span>
                <?php echo form_error('judul_artikel') ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="">Isi artikel</label>
            <textarea class="form-control" id="editorku" name="isi_artikel"> <?php echo set_value('isi_artikel', $artikel['isi_artikel']) ?></textarea>
            <span>
                <?php echo form_error('isi_artikel') ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="">Foto Lama</label><br>
            <img src="<?php echo $this->config->item('url_artikel') . $artikel["foto_artikel"] ?>" width="300" alt="">
        </div>
        <div class="mb-3">
            <label for="">Ganti Foto artikel</label>
            <input type="file" name="foto_artikel" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>