<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Sarina&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Norican&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php
      include("header.php");
    ?> 
    <main>
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img
            src="pictures/restourant1.jpg "
            class="homepagePlaatjes"
          />
        </div>

        <div class="mySlides fade">
          <img
            src="pictures/restourant2.jpeg"
            class="homepagePlaatjes"
          />
        </div>

        <div class="mySlides fade">
          <img
            src="pictures/restourant3.jpeg"
            class="homepagePlaatjes"
          />
        </div>

        <div class="mySlides fade">
          <img
            src="pictures/restourant4.jpeg"
            class="homepagePlaatjes"
          />
        </div>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1440 318"
          class="curved"
        >
          <path
            fill="white"
            fill-opacity="1"
            d="M0,192L40,197.3C80,203,160,213,240,192C320,171,400,117,480,117.3C560,117,640,171,720,165.3C800,160,880,96,960,96C1040,96,1120,160,1200,170.7C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
          ></path>
        </svg>
      </div>

      <div class="informatie">
        <div class="gegevens">
          <h2>gegevens</h2>
          <div class="logo-tekst">
            <img
              src="pictures/telegoonlogo.gif"
              alt="telefoonlogo"
              height="20px"
            />
            <a href="tel:0248904500"><p>024 890 45 00</p></a>
          </div>
          <div class="logo-tekst">
            <img src="pictures/huisjelogo.png" alt="huisjelogo" height="20px" />
            <a
              href="https://www.google.nl/maps/place/ROC+Nijmegen+-+Heyendaalseweg/@51.8270414,5.8666154,17z/data=!3m1!4b1!4m5!3m4!1s0x47c7094758831e59:0x606c614ce9de3505!8m2!3d51.8270206!4d5.8691104"
              target="blank"
            >
              <p class="adres-gegevens">
                Heyendaalseweg 98 <br />
                6525 EE Nijmegen
              </p>
            </a>
          </div>
          <h2>andere locaties</h2>

          <h4>Begijnenstraat Boxmeer</h4>
          <div class="logo-tekst">
            <img
              src="pictures/telegoonlogo.gif"
              alt="telefoonlogo"
              height="20px"
            />
            <a href="tel:0248904500"><p>024 890 4500</p></a>
          </div>
          <div class="logo-tekst">
            <img src="pictures/huisjelogo.png" alt="huisjelogo" height="20px" />
            <a
              href="https://www.google.nl/maps/place/ROC+Nijmegen/@51.6449551,5.9456225,17z/data=!3m1!4b1!4m5!3m4!1s0x47c71309953b9b7f:0xfa9d89d0b7326b51!8m2!3d51.6449579!4d5.947816"
              target="blank"
            >
              <p class="adres-gegevens">
                Begijnenstraat 2 <br />
                5831 EM Boxmeer
              </p>
            </a>
          </div>

          <h4>campusbaan</h4>
          <div class="logo-tekst">
            <img
              src="pictures/telegoonlogo.gif"
              alt="telefoonlogo"
              height="20px"
            />
            <a href="tel:0248904500">
              <p>0248904500</p>
            </a>
          </div>
          <div class="logo-tekst">
            <img src="pictures/huisjelogo.png" alt="huisjelogo" height="20px" />
            <a
              href="https://www.google.nl/maps/place/Campusbaan+6,+6512+BT+Nijmegen/@51.8412685,5.8500498,17z/data=!3m1!4b1!4m5!3m4!1s0x47c70867033758ad:0x82aa20e0380448a5!8m2!3d51.8412685!4d5.8522385"
              target="blank"
            >
              <p class="adres-gegevens">
                Campusbaan 6 <br />
                6512 BT Nijmegen
              </p>
            </a>
          </div>

          <h4>energieweg</h4>
          <div class="logo-tekst">
            <img
              src="pictures/telegoonlogo.gif"
              alt="telefoonlogo"
              height="20px"
            />
            <a href="tel:0248904500">
              <p>024 890 4500</p>
            </a>
          </div>
          <div class="logo-tekst">
            <img src="pictures/huisjelogo.png" alt="huisjelogo" height="20px" />
            <a
              href="https://www.google.nl/maps/place/Energieweg+25,+6541+CW+Nijmegen/@51.8434532,5.8235781,17z/data=!3m1!4b1!4m5!3m4!1s0x47c707d7aabc3361:0x59d301bd0c6dfcc4!8m2!3d51.8434532!4d5.8257668"
              target="blank"
            >
              <p class="adres-gegevens">
                Energieweg 25 <br />
                6541 CW Nijmegen
              </p>
            </a>
          </div>
        </div>
        <div class="openingstijden">
          <h2>openingstijden</h2>
          <p><h4>ma:</h4></p>
          <div class="tijden" >
            <div class="tijd1">
              <p>
              lunch: <br/>
              diner:
            </p>
          </div>
            <div class="tijd2"> 
              <p>
              10:00 - 13:00 <br/>
              13:00 - 21:00
            </p></div>
          </div>
          <p><h4>di:</h4></p>
          <div class="tijden">
            <div class="tijd1">
              <p>
                lunch: <br/>
                diner:
              </p>
            </div>
            <div class="tijd2">
              <p>
                10:00 - 13:00 <br/>
                13:00 - 21:30
              </p>
            </div>
          </div>
          <p><h4>wo:</h4></p>
          <div class="tijden">
            <div class="tijd1">
              <p>
                lunch: <br/>
                diner:
              </p>
            </div>
            <div class="tijd2">
              <p>
              10:00 - 13:00 <br/>
              13:00 - 22:00
            </p>
            </div>
          </div>
          <p><h4>do:</h4></p>
          <div class="tijden">
            <div class="tijd1">
             <p>
              lunch: <br/>
              diner:
            </p>
          </div>
          <div class="tijd2">
            <p>
              10:00 - 13:00 <br/>
              13:00 - 22:00
            </p>
          </div>
          </div>
          <p><h4>vr:</h4></p>
          <div class="tijden">
            <div class="tijd1">
              <p>
                lunch: <br/>
                diner:
              </p>
            </div>
            <div class="tijd2">
              <p>
                10:00 - 13:00 <br/>
                13:00 - 22:30
              </p>
            </div>
          </div>
          <p><h4>za:</h4></p>
          <div class="tijden">
            <div class="tijd1">
              <p>
                lunch: <br/>
                diner:
              </p>
            </div>
            <div class="tijd2">
              <p>
                09:00 - 13:00 <br/>
                13:00 - 23:00
              </p>
            </div>
          </div>
          <p><h4>zo:</h4></p>
          <div class="tijden">
            <div class="tijd1">
              <p>
                lunch: <br/>
                diner:
              </p>
            </div>
            <div class="tijd2">
              <p>
                09:00 - 13:00 <br/>
                13:00 - 23:00
              </p>
            </div>
          </div>
        </div>
        <div class="prijzen">
          <h2>prijzen</h2>
          <h4>lunch:</h4>
          <div class="mens-prijs">
            <div class="soort-mens">
              <p>
                kinderen: <br />
                volwassenen:
              </p>
            </div>
            <div class="prijs">
              <p>
                &euro;9,50 <br />
                &euro;13,00
              </p>
            </div>
          </div>
          <h4>diner:</h4>
          <h5>maaandag - donderdag</h5>
          <div class="mens-prijs">
            <div class="soort-mens">
              <p>
                kinderen: <br />
                volwassenen:
              </p>
            </div>
            <div class="prijs">
              <p>
                &euro;16 <br />
                &euro;28
              </p>
            </div>
          </div>
          <h5>vrijdag - zondag</h5>
          <div class="mens-prijs">
            <div class="soort-mens">
              <p>
                kinderen: <br />
                volwassenen:
              </p>
            </div>
            <div class="prijs">
              <p>
                &euro;18 <br />
                &euro;32
              </p>
            </div>
          </div>
        </div>
       
      </div>
      <div class="menukaart">
        <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 318"
        class="curved1"
      >
        <path
          fill="grey"
          fill-opacity="1"
          d="M0,192L40,197.3C80,203,160,213,240,192C320,171,400,117,480,117.3C560,117,640,171,720,165.3C800,160,880,96,960,96C1040,96,1120,160,1200,170.7C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
      <div class="menutekst"><h1>menukaart</h1></div>
      <div class="producten">
        <div class="lunchkaart">
          <div class="lunchtekst"><h2>lunchkaart</h2></div>
          <div class="product">
              <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
              <div class="producttekst">
              <h4>product1</h4>
              <p>heel lekker sushi</p>
            </div>
            <div class="productprijs">
              <div class="productprijsknop"><p>&euro;10,50</p></div>
            </div>
          </div>
          <div class="product">
            <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
            <div class="producttekst">
            <h4>product1</h4>
            <p>heel lekker sushi</p>
          </div>
          <div class="productprijs">
            <div class="productprijsknop"><p>&euro;10,50</p></div>
          </div>
        </div>
        <div class="product">
          <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
          <div class="producttekst">
          <h4>product1</h4>
          <p>heel lekker sushi</p>
        </div>
        <div class="productprijs">
          <div class="productprijsknop"><p>&euro;10,50</p></div>
        </div>
      </div>
      <div class="product">
        <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
        <div class="producttekst">
        <h4>product1</h4>
        <p>heel lekker sushi</p>
      </div>
        <div class="productprijs">
          <div class="productprijsknop"><p>&euro;10,50</p></div>
        </div>
      </div>
      <div class="product">
        <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
        <div class="producttekst">
        <h4>product1</h4>
        <p>heel lekker sushi</p>
      </div>
        <div class="productprijs">
          <div class="productprijsknop"><p>&euro;10,50</p></div>
        </div>
      </div>
      <div class="product">
        <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
        <div class="producttekst">
        <h4>product1</h4>
        <p>heel lekker sushi</p>
      </div>
        <div class="productprijs">
          <div class="productprijsknop"><p>&euro;10,50</p></div>
        </div>
      </div>
      <div class="product">
        <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
        <div class="producttekst">
        <h4>product1</h4>
        <p>heel lekker sushi</p>
      </div>
        <div class="productprijs">
          <div class="productprijsknop"><p>&euro;10,50</p></div>
        </div>
      </div>
      <div class="product">
        <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
        <div class="producttekst">
        <h4>product1</h4>
        <p>heel lekker sushi</p>
      </div>
        <div class="productprijs">
          <div class="productprijsknop"><p>&euro;10,50</p></div>
        </div>
      </div>
      <div class="product">
        <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
        <div class="producttekst">
        <h4>product1</h4>
        <p>heel lekker sushi</p>
      </div>
        <div class="productprijs">
          <div class="productprijsknop"><p>&euro;10,50</p></div>
        </div>
      </div>
        </div>
        <div class="dinerkaart">
          <div class="dinertekst">
          <h2>dinerkaart</h2>
        </div>
        <div class="product">
          <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
          <div class="producttekst">
          <h4>product1</h4>
          <p>heel lekker sushi</p>
        </div>
          <div class="productprijs">
            <div class="productprijsknop"><p>&euro;10,50</p></div>
          </div>
        </div>
        <div class="product">
          <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
          <div class="producttekst">
          <h4>product1</h4>
          <p>heel lekker sushi</p>
        </div>
          <div class="productprijs">
            <div class="productprijsknop"><p>&euro;10,50</p></div>
          </div>
        </div>
        <div class="product">
          <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
          <div class="producttekst">
          <h4>product1</h4>
          <p>heel lekker sushi</p>
        </div>
          <div class="productprijs">
            <div class="productprijsknop"><p>&euro;10,50</p></div>
          </div>
        </div>
        <div class="product">
          <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
          <div class="producttekst">
          <h4>product1</h4>
          <p>heel lekker sushi</p>
        </div>
          <div class="productprijs">
            <div class="productprijsknop"><p>&euro;10,50</p></div>
          </div>
        </div>
        <div class="product">
          <img src="pictures/sushi1.jpg" alt="sushi1" class="productPlaatje">
          <div class="producttekst">
          <h4>product1</h4>
          <p>heel lekker sushi</p>
        </div>
          <div class="productprijs">
            <div class="productprijsknop"><p>&euro;10,50</p></div>
          </div>
        </div>
        </div>
      </div>

    </div>
    <div class="reserveercontainer">
      <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 1440 318"
      class="curved2"
    >
      <path
        fill="white"
        fill-opacity="1"
        d="M0,192L40,197.3C80,203,160,213,240,192C320,171,400,117,480,117.3C560,117,640,171,720,165.3C800,160,880,96,960,96C1040,96,1120,160,1200,170.7C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>
    <div class="reserveertekst"><h1>reserveren</h1></div>
    <div class="grondvlak">
      <div class="reserveerform">
        <form action="" method="post">
           <div class="naamaantaltel-form">
             <div class="naam-form">
              <label for="naam">naam</label> </br>
              <input type="text" name="naam" id="naam" placeholder="naam: "> </br>
             </div>
             <div class="aantal-form">
              <label for="aantal">aantal personen</label> </br>
              <input type="number" name="aantal" id="aantal" placeholder="aantal: "> </br>
            </div>
            <div class="tel-form">
            <label for="tel">telefoonnummer</label> </br>
            <input type="tel" name="tel" id="tel" placeholder="telefoonnummer: "></br>
          </div>
        </div>
          <div class="berichttijd-form">
            <div class="bericht">
             <label for="bericht">bericht</label> </br>
             <textarea name="bericht" id="" cols="30" rows="10" placeholder="bericht: (niet verplicht) "></textarea> </br>
            </div>
            <div class="tijd">
            <label for="date">tijd-datum</label> </br>
            <input type="datetime-local" name="date" id="date">
          </div>
        </div>
          <input type="submit" name="verzend" placeholder="verzend">
        </form>
      </div>
      <div class="reserveererea">
      <div class="erea1">
        <div class="rij1">
          <div class="tafel" data-id="tafel-1"><p>1</p></div>
          <div class="tafel" data-id="tafel-2"><p>2</p></div>
          <div class="tafel" data-id="tafel-3"><p>3</p></div>
          <div class="tafel" data-id="tafel-4"><p>4</p></div>
          <div class="tafel" data-id="tafel-5"><p>5</p></div>
          <div class="tafel" data-id="tafel-6"><p>6</p></div>
          <div class="tafel" data-id="tafel-7"><p>7</p></div>
          <div class="tafel" data-id="tafel-8"><p>8</p></div>
          <div class="tafel" data-id="tafel-9"><p>9</p></div>
      </div>
      </div>
      <div class="erea2">
        <div class="containeringang">
          <div class="ingang"><p>ingang</p></div>
        </div>
        <div class="rijen">
        <div class="rij1">
          <div class="tafel" data-id="tafel-10"><p>10</p></div>
          <div class="tafel" data-id="tafel-11"><p>11</p></div>
          <div class="tafel" data-id="tafel-12"><p>12</p></div>
          <div class="tafel" data-id="tafel-13"><p>13</p></div>
          <div class="tafel" data-id="tafel-14"><p>14</p></div>
          <div class="tafel" data-id="tafel-15"><p>15</p></div>
          <div class="tafel" data-id="tafel-16"><p>16</p></div>
          <div class="tafel" data-id="tafel-17"><p>17</p></div>
        </div>
        <div class="rij2">
          <div class="tafel" data-id="tafel-18"><p>18</p></div>
          <div class="tafel" data-id="tafel-19"><p>19</p></div>
          <div class="tafel" data-id="tafel-20"><p>20</p></div>
          <div class="tafel" data-id="tafel-21"><p>21</p></div>
          <div class="tafel" data-id="tafel-22"><p>22</p></div>
          <div class="tafel" data-id="tafel-23"><p>23</p></div>
          <div class="tafel" data-id="tafel-24"><p>24</p></div>
          <div class="tafel" data-id="tafel-25"><p>25</p></div>
        </div>
      </div>
    </div>
    <div class="looppad"></div>
    <div class="erea3">
      <div class="box">
        <div class="boxen">
        <div class="tafel" data-id="tafel-26"><p>26</p></div>
        <div class="tafel" data-id="tafel-27"><p>27</p></div>
      </div>
      <div class="boxen onder">
        <div class="tafel" data-id="tafel-28"><p>28</p></div>
        <div class="tafel" data-id="tafel-29"><p>29</p></div>
      </div>
      </div>
      <div class="box">
        <div class="boxen">
          <div class="tafel" data-id="tafel-30"><p>30</p></div>
          <div class="tafel" data-id="tafel-31"><p>31</p></div>
        </div>
        <div class="boxen onder">
          <div class="tafel" data-id="tafel-32"><p>32</p></div>
          <div class="tafel" data-id="tafel-33"><p>33</p></div>
        </div>
      </div>
      <div class="box">
        <div class="boxen">
          <div class="tafel" data-id="tafel-34"><p>34</p></div>
          <div class="tafel" data-id="tafel-35"><p>35</p></div>
        </div>
        <div class="boxen onder">
          <div class="tafel" data-id="tafel-36"><p>36</p></div>
          <div class="tafel" data-id="tafel-37"><p>37</p></div>
        </div>
      </div>
      <div class="box">
        <div class="boxen">
          <div class="tafel" data-id="tafel-38"><p>38</p></div>
          <div class="tafel" data-id="tafel-39"><p>39</p></div>
        </div>
        <div class="boxen onder">
          <div class="tafel" data-id="tafel-40"><p>40</p></div>
          <div class="tafel" data-id="tafel-41"><p>41</p></div>
        </div>
      </div>
      
      

    </div>

    </div>

  </div>
    </div>
    <div class="contact">
      <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 1440 318"
      class="curved3"
      >
      <path
        fill="grey"
        fill-opacity="1"
        d="M0,192L40,197.3C80,203,160,213,240,192C320,171,400,117,480,117.3C560,117,640,171,720,165.3C800,160,880,96,960,96C1040,96,1120,160,1200,170.7C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>
    <div class="contactvlak">
      <div class="contacttekst"><h1>contact</h1></div>
      <div class="contactform">
        <form action="" method="post">
          <label for="naam">naam: </label> </br>
          <input type="text" name="naam" id="naam" placeholder="naam:"> </br>
          <label for="e-mail">e-mail: </label> </br>
          <input type="email" name="e-mail" id="e-mail" placeholder="e-mail"> </br>
          <label for="bericht">bericht</label> </br>
          <textarea name="bericht" id="bericht" cols="30" rows="10" placeholder="bericht:"></textarea> </br>
          <input type="submit" placeholder="verzenden" name="verzend">
        </form>
      </div>
    </div>
    </div>

      


      <!--<form action="test.php" method="post">
        <p>typ je voornaam</p>
        <input type="text" placeholder="naam.." name="naam" />
        <p>typ hier je wachtwoord</p>
        <input type="password" placeholder="wachtwoord" name="wachtwoord" />
        <p>typ hier je leeftijd</p>
        <input type="number" name="leeftijd" placeholder="leeftijd" />
        <input type="submit" placeholder="verzenden" name="verzend" />
      </form>
    </main>-->
    </main>
    <?php
     include("footer.php")
    ?>
    <script src="js/main.js"></script>
  </body>
</html>
