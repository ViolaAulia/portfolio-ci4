<?= $this->extend('Layouts/main') ?>

<?= $this->section('content') ?>

<div class="card shadow-sm p-4">


    <div class="text-center mb-4">

        <img src="<?= base_url('images/foto.jpg') ?>"

             class="rounded-circle shadow"

             width="120" height="120">

        <h1 class="fw-bold mt-3"><?= $nama; ?></h1>

        <p class="text-muted"><?= $jurusan; ?></p>

        <a href="mailto:ramadhanaaulia461@gmail.com" class="btn btn-primary btn-sm">

            Hubungi Saya

        </a>

    </div>

    <hr>


    <h5 class="fw-bold">Tentang Saya</h5>

    <p>

        Saya adalah mahasiswa yang fokus pada pengembangan website modern menggunakan

        HTML, CSS, Bootstrap, dan CodeIgniter 4. Saat ini saya sedang membangun

        portofolio untuk persiapan magang.

    </p>

    <hr>



    <h5 class="fw-bold">Keahlian</h5>

    <a href="/skill/tambah" class="btn btn-success btn-sm mb-3">

        + Tambah Keahlian

    </a>

    <div class="mb-3">

        <?php foreach ($skill as $s): ?>

            <div class="d-flex align-items-center justify-content-between mb-2 p-2 border rounded">

                <span class="badge bg-primary fs-6">

                    <?= $s['nama_skill'] ?>

                </span>

                <div>

                    <a href="/skill/edit/<?= $s['id'] ?>" class="btn btn-warning btn-sm">

                        Ubah

                    </a>

                    <a href="/skill/delete/<?= $s['id'] ?>"

                       class="btn btn-danger btn-sm"

                       onclick="return confirm('Apakah kamu yakin ingin menghapus keahlian ini?')">

                        Hapus

                    </a>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

    <hr>



    <h5 class="fw-bold">Proyek</h5>

    <?php foreach ($proyek as $p): ?>

        <div class="card mb-2 border-0 shadow-sm">

            <div class="card-body">

                <?= $p ?>

            </div>

        </div>

    <?php endforeach; ?>

    <hr>



    <h5 class="fw-bold">Kontak</h5>

    <ul class="list-unstyled">

        <li>Email: <b>ramadhanaaulia461@gmail.com</b></li>

        <li>

            GitHub:

            <a href="https://github.com/ViolaAulia" target="_blank">

                github.com/ViolaAulia

            </a>

        </li>

        <li>

            Project CodeIgniter 4:

            <a href="https://github.com/ViolaAulia/portfolio-ci4.git" target="_blank">

                Lihat Proyek

            </a>

        </li>

    </ul>

</div>

<?= $this->endSection() ?>