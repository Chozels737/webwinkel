<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style3.css" />
</head>
<body>
        <header>
        <img class="logo" src="/images/logo.png" />
        <nav>
          <ul class="nav__links">
            <li><a href="index.php">contact</a></li>
            <li><a href="index.php">contact</a></li>
            <li><a href="index.php">contact</a></li>
          </ul>
        </nav>
        <a class="cta" href="#"><button>Contact</button></a>
      </header>
<main> 
    <div class="container"> 
        <form action="verwerk.php" method="get"> 
            <ul> 
                <li> 
                    <label for="txtVoornaam">Voornaam</label><br> 
                    <input type="text" id="txtVoornaam" name="txtVoornaam" 
placeholder="Voornaam" autofocus> 
                </li> 
                <li> 
                    <label 
for="txtTussenvoegsels">Tussenvoegsels</label><br> 
                    <input type="text" id="txtTussenvoegsels" 
name="txtTussenvoegsels" placeholder="Tussenvoegsels"> 
                </li> 
                <li> 
                    <label for="txtAchternaam">Achternaam</label><br> 
                    <input type="text" id="txtAchternaam" 
                    name="txtAchternaam" placeholder="Achternaam"> 
                </li> 
            </ul> 
            <ul> 
                <li> 
                    <label for="txtStraat">Straat</label><br> 
                    <input type="text" id="txtStraat" name="txtStraat" 
                    placeholder="Straat" autofocus> 
                </li> 
                <li> 
                    <label for="txtHuisnummer">Huisnummer</label><br> 
                    <input type="text" id="txtHuisnummer" 
                     name="txtHuisnummer" placeholder="Huisnummer"> 
                </li> 
            </ul> 
            <ul> 
                <li> 
                    <label for="txtPostcode">Postcode</label><br> 
                    <input type="text" id="txtPostcode" name="txtPostcode" 
                    placeholder="Postcode" autofocus> 
                </li> 
                <li> 
                    <label for="txtPlaats">Plaats</label><br> 
                    <input type="text" id="txtPlaats" name="txtPlaats" 
                    placeholder="Plaats"> 
                </li> 
                <li> 
                    <label for="txtLand">Land</label><br> 
                    <input type="text" id="txtLand" name="txtLand" 
                    laceholder="Land"> 
                </li> 
            </ul> 
            <ul> 
                <li> 
                    <button type="submit">Verstuur</button> 
                </li> 
            </ul> 
        </form> 
    </div> 
</main> 
</body>
</html>



