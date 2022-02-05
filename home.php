<?php
require_once('connect.php');
session_start();
if(!isset($_SESSION['key'])){
header('Location:index.php');
}include('header.php');
?>
<div class="main-content-inner">
<div class="row">
<div class="col-lg-6 col-ml-12">
<div class="row">
</div>
</div>
</div>
</div>
