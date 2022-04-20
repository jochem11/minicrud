<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Sarina&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Norican&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Norican&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <h1 class="hoofdtekst">admin page</h1>
    <main>
      <div class="reserveertekst_admin">
        <h2>reserveringen</h2>
      </div>
      <div class="waartekst_admin">
        <div class="id_reserveringen">id</div>
        <div class="naam_reserveringen">naam</div>
        <div class="aantal_reserveringen">aantal</div>
        <div class="telnummer_reserveringen">tel</div>
        <div class="bericht_reserveringen">bericht</div>
        <div class="datum_reserveringen">datum</div>
        <div class="tafel_reserveringen">tafel</div>
        <div class="update_reserveringen">update</div>
        <div class="delete_reserveringen">delete</div>
      </div>
      <div class="reserveercontainer_admin">
          <?php
            include_once("connect.php");

            $query = "SELECT * FROM reserveringen";
            $stmt = $connect->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll();

            foreach($result as $product) {
          ?>
        <div class="reserveerRow">
          <form action="admin_reserveerDB.php" method="post">
            <div class="id_reservering">
              <input type="text" value="<?php echo $product['ID']?>" name="ID" readonly />
            </div>
            <div class="naam_reservering">
              <input type="text" value="<?php echo $product['naam']?>" name="naam" />
            </div>
            <div class="aantal_reservering">
              <input type="text" value="<?php echo $product['aantal']?>" name="aantal" />
            </div>
            <div class="telnummer_reservering">
              <input type="text" value="<?php echo $product['telefoonnummer']?>" name="tel"/>
            </div>
            <div class="bericht_reservering">
              <input type="text" value="<?php echo $product['bericht']?>" name="bericht"/>
            </div>
            <div class="datum_reservering">
              <input type="text" value="<?php echo $product['datum']?>" name="datum" />
            </div>
            <div class="tafel_reservering">
              <input type="text" value="<?php echo $product['tafel']?>" name="tafel"/>
            </div>
            <div class="update_reservering">
                <button type="submit" name="update">update</button>
            </div>
            <div class="delete_reservering">
                <button type="submit" name="delete">delete</button>
            </div>
          </form>
        </div>
        <?php
        }
        ?>
      </div>
    </main>
  </body>
</html>
