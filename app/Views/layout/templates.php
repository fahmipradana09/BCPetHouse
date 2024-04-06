<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url("assets/img/bcpet_logo.png") ?>">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/bcpet_logo.png') ?>">
  <title>
    BCPet House - Malang
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url('assets/css/nucleo-icons.css') ?>" rel="stylesheet" />
<link href="<?= base_url('assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
<!-- Font Awesome Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link href="<?= base_url('assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
<!-- CSS Files -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jspreadsheet-ce/dist/jspreadsheet.min.css" type="text/css" />
<link rel="stylesheet" href="https://bossanova.uk/jspreadsheet/v4/jexcel.css" type="text/css" />
<link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />

<link id="pagestyle" href="<?= base_url('assets/css/argon-dashboard.css?v=2.0.4') ?>" rel="stylesheet">
<link id="pagestyle" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link id="pagestyle" href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<script type="text/javascript" defer src="https://cdn.jsdelivr.net/npm/jspreadsheet-ce/dist/index.min.js"></script>
<script defer src="https://bossanova.uk/jspreadsheet/v4/jexcel.js"></script>
<script defer src="https://jsuites.net/v4/jsuites.js"></script>

<script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script defer src="<?= base_url('assets/js/script.js') ?>"></script>
<script defer src="<?= base_url('assets/js/tableDetail.js') ?>"></script>
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <?= $this->include('layout/_sidebar'); ?>
    <main class="main-content position-relative border-radius-lg ">
      <?= $this->include('layout/_navbar'); ?>
      <?= $this->renderSection('content') ?>
      <?= $this->include('layout/_footer'); ?>
    </main>


    <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/chartjs.min.js') ?>"></script>
</body>

</html>