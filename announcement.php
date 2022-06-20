<?php
 include "connection.php";
 include "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Page Banner</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="Css/announcement.css" rel="stylesheet">
</head>

<body>
  <div class="banner">
    <div class="banner__content">
      <div class="banner__text">
        <strong>Reminder:</strong> your subscription expires in 22 days. Renew to avoid account suspension.
      </div>
      <button class="banner__close" type="button">
        <span class="material-icons">
          close
        </span>
      </button>
    </div>
  </div>
</body>
<script>
document.querySelector(".banner__close").addEventListener("click", function () {
  this.closest(".banner").style.display = "none";
});
</script>

</html>