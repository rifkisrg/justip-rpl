<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tulis Review</title>
  </head>
  <body>
    <h1>Tulis reviewmu</h1>
    <form action="<?php echo base_url('review/create_process'); ?>" method="post">
      <label>
        Nama: <input type="text" name="nama_user" autofocus>
      </label>
      <br>
      <label>
        Comment:<br>
        <textarea name="teks_komen"></textarea>
      </label>
      <fieldset class="rating">
        <legend>Please rate:</legend>
        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
        </fieldset>
      <br>
      <input type="submit" value="Simpan">
    </form>
  </body>
</html>
