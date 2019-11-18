<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
?><!DOCTYPE html>
<html lang=”en”>
  <head>
      <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <title>Review</title>
  </head>
  <body>
    <h1>Review List</h1>
    <?php foreach ($posts as $post): ?>
      <h2><?php echo $post->nama_user; ?></h2>
      <h3><?php echo "Rating for this book : ".$post->rating, " of 5";?></h3>
      <p><?php echo $post->teks_komen; ?></p>
    <?php endforeach; ?>
  </body>
</html>
