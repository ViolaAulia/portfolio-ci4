<?= $this->extend('Layouts/main') ?>

<?= $this->section('content') ?>

<h2>Tambah Skill</h2>

<form action="/skill/simpan" method="post">

    <div class="mb-3">

        <label>Nama Skill</label>

        <input type="text" name="nama_skill" class="form-control">

    </div>

    <button class="btn btn-primary">

        Simpan

    </button>

</form>

<?= $this->endSection() ?>