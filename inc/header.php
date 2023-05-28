<?php include'db.php' ?>
<?php ob_start(); ?>

<!doctype html>
<html data-theme="emerald" lang="en">

<head>
  <title>Users Panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Location" content="http://localhost/userpanel/">
    <!-- CDN links for tailwind & DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link href="./CSS/style.css" rel="stylesheet" type="text/css" /> 
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" /> 

</head>
<body>
    <header>
      <?php include'navbar.php' ?>
    </header>