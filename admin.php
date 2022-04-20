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
            $stmt = $connect->prepare($query); $stmt->execute(); $result =
        $stmt->fetchAll(); foreach($result as $product) { ?>
        <div class="reserveerRow">
          <form action="admin_reserveerDB.php" method="post">
            <div class="id_reservering">
              <input
                type="text"
                value="<?php echo $product['ID']?>"
                name="ID"
                readonly
              />
            </div>
            <div class="naam_reservering">
              <input
                type="text"
                value="<?php echo $product['naam']?>"
                name="naam"
              />
            </div>
            <div class="aantal_reservering">
              <input
                type="text"
                value="<?php echo $product['aantal']?>"
                name="aantal"
              />
            </div>
            <div class="telnummer_reservering">
              <input
                type="text"
                value="<?php echo $product['telefoonnummer']?>"
                name="tel"
              />
            </div>
            <div class="bericht_reservering">
              <input
                type="text"
                value="<?php echo $product['bericht']?>"
                name="bericht"
              />
            </div>
            <div class="datum_reservering">
              <input
                type="text"
                value="<?php echo $product['datum']?>"
                name="datum"
              />
            </div>
            <div class="tafel_reservering">
              <input
                type="text"
                value="<?php echo $product['tafel']?>"
                name="tafel"
              />
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
      <div class="reserveertekst_admin">
        <h2>contact</h2>
      </div>
      <div class="waartekst_admin">
        <div class="id_contacts">id</div>
        <div class="naam_contacts">naam</div>
        <div class="eMail_contacts">e-mail</div>
        <div class="bericht_contacts">bericht</div>
        <div class="update_contacts">update</div>
        <div class="delete_contacts">delete</div>
      </div>
      <div class="reserveercontainer_admin">
        <?php
            $query = "SELECT * FROM contact";

            $stmt = $connect->prepare($query);
            $stmt->execute();
            $result =$stmt->fetchAll();
            foreach($result as $contact) { 
        ?>
        <div class="reserveerRow">
          <form action="admin_contactDB.php" method="post">
            <div class="id_contact">
              <input
                type="text"
                value="<?php echo $contact['ID']?>"
                name="ID"
                readonly
              />
            </div>
            <div class="naam_contact">
              <input
                type="text"
                name="naam"
                value="<?php echo $contact['naam']?>"
              />
            </div>
            <div class="eMail_contact">
              <input
                type="text"
                value="<?php echo $contact['eMail']?>"
                name="eMail"
              />
            </div>
            <div class="bericht_contact">
              <input
                type="text"
                value="<?php echo $contact['bericht']?>"
                name="bericht"
              />
            </div>
            <div class="update_contact">
                <button type="submit"name="update">update</button>
            </div>
            <div class="delete_contact">
                <button type="submit" name="delete">delete</button>
            </div>
          </form>
        </div>
        <?php
            }
          ?>
      </div>
      <div class="reserveertekst_admin">
          <h2>lunchgerechten</h2>
      </div>
      <div class="waartekst_admin">
          <div class="id_lunchgerechten">id</div>
          <div class="naam_lunchgerechten">naam</div>
          <div class="plaatje_lunchgerechten">plaatje</div>
          <div class="prijs_lunchgerechten">prijs</div>
          <div class="beschrijving_lunchgerechten">beschrijving</div>
          <div class="update_lunchgerechten">update</div>
          <div class="delete_lunchgerechten">delete</div>
      </div>
      <div class="reserveercontainer_admin">
          <?php
                $query = "SELECT * FROM lunchgerechten";

                $stmt = $connect->prepare($query);
                $stmt->execute();
                $result =$stmt->fetchAll();
                foreach($result as $lunchgerecht) { 
          ?>
            <div class="reserveerRow">
                <form action="admin_lunchgerechtenDB.php" method="post">
                    <div class="id_lunchgerecht">
                        <input
                        type="text"
                        value="<?php echo $lunchgerecht['ID']?>"
                        name="ID"
                        readonly
                        />
                    </div>
                    <div class="naam_lunchgerecht">
                        <input
                         type="text"
                         name="naam"
                         value="<?php echo $lunchgerecht['naam']?>"
                         />
                    </div>
                    <div class="plaatje_lunchgerecht">
                        <input
                         type="text"
                         name="plaajte"
                         value="<?php echo $lunchgerecht['plaatje']?>"
                         />
                    </div>
                    <div class="prijs_lunchgerecht">
                        <input
                         type="text"
                         name="prijs"
                         value="<?php echo $lunchgerecht['prijs']?>"
                        />
                    </div>
                    <div class="beschrijving_lunchgerecht">
                        <input
                         type="text"
                         name="beschrijving"
                         value="<?php echo $lunchgerecht['beschrijving']?>"
                         />
                    </div>
                    <div class="update_lunchgerecht">
                        <button type="submit" name="update">update</button>
                    </div>
                    <div class="delete_lunchgerecht">
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
