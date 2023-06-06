<?php
session_start();
include('components/header.php');
?>

<!-- Login session -->
<?php if (isset($_SESSION["user_id"])): ?>


  <?php include('navtabs/navtab-thermometer.php'); ?>
  <?php include('sidebar/sidebar-thermometer.php'); ?>


<!-- auto logout/login session -->
<?php else: ?>
<?php include('content/logged_out.php') ?>
<?php endif; ?>

<?php include('components/footer.php'); ?>
