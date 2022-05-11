<?php
include_once 'inc/autoload.php';
include_once 'inc/config.php';

$db = new db($server, $username, $password, $dbname);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once 'inc/css.php'; ?>
    <title>Interactive Wipeboard</title>
  </head>
  <body>
    <div class="container">
      <h1>Interactive Wipeboard</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-3">Driver</div><div class="col-3">Destination</div><div class="col-3">Bay</div><div class="col-3">Somevalue</div>
      </div>

      <?php
          $board = $db->select('*', 'board');

          $count = 0;
          while($board[$count] > 0) {
            echo '<div class="row">';
              echo '<div class="col-3">' . $board[$count]['driver'] . '</div>';
              echo '<div class="col-3">' . $board[$count]['destination'] . '</div>';
              echo '<div class="col-3">' . $board[$count]['bay'] . '</div>';
              echo '<div class="col-3">' . $board[$count]['value'] . '</div>';
            echo '</div>';
            $count++;
          }


       ?>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
