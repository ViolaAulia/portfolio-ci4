<?= $this->extend('Layouts/main') ?>

<?= $this->section('content') ?>

<h2>Edit Skill</h2>

<form action="/skill/update/<?= $skill['id'] ?>" method="post">

    <div class="mb-3">

        <label>Nama Skill</label>

        <input

            type="text"

            name="nama_skill"

            class="form-control"

            value="<?= $skill['nama_skill'] ?>"

        >

    </div>

    <button type="submit" class="btn btn-warning">

        Update

    </button>

</form>

<?= $this->endSection() ?>