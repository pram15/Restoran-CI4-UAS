<?= $this->extend('template/homepage') ?>

<?= $this->section('content') ?>

<div class="row mt-2">
    <div class="col ml-5">
        <h3><?= $judul ?></h3>
    </div>
</div>
<form action="<?= base_url('/front/homepage') ?>" method="POST">
    <div class="form-group ml-5 mt-2">
        <input type="submit" class="btn btn-success" name="kembali" value="Kembali">
        <img src="<?= base_url('icon/back.svg') ?>" alt="">
    </div>
</form>

<?= $this->endSection() ?>
