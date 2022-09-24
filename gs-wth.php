<?php
require_once ('config.php');
?>
<!DOCTYPE html>
<html>
  <h1> Withdraw G$ </h1>
  <p> https://v2.thegbot.ml/gdollar-wth <- exchange rates here </p>
    <br>
<form method="post" action="discord-post.php">
  <textarea name="message" placeholder="amountG$ // yourpaypalmail@mail.domain" required></textarea>
  <button type="submit">send</button>
</form>
</html>
