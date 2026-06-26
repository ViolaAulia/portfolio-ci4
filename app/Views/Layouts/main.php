<!DOCTYPE html>

<html>

<head>

    <title><?= $title ?? 'Portofolio'; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

</head>

<body>
<?= $this->include('Partials/navbar') ?>

<div class="container mt-4">

<?= $this->renderSection('content') ?>

</div>

<?= $this->include('Partials/footer') ?>

</body>

</html>