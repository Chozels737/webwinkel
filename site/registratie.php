<!DOCTYPE html>
<html lang="en">
<head>
<link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header>
        <img class="logo" src="images/logo.png" />
        <nav>
         <?php include 'nav.php'?>
        </nav>
        <a class="cta" href="registratie.php"><button>registreren</button></a>
      </header>
    <main> 
    <div class="container1"> 
        <form action="verwerk.php" method="post"> 
            <ul> 
                <ul> 
                <h1><label for="txtVoornaam">Voornaam</label><br> 
                    <input type="text" id="txtVoornaam" 
                        name="txtvoornaam" placeholder="Voornaam"> 
                </ul> 
                <ul> 
                     <h1><label 
                        for="txtTussenvoegsels">Tussenvoegsels</label><br> 
                    <input type="text" id="txtTussenvoegsels" 
                        name="txtTussenvoegsels" placeholder="Tussenvoegsels"> 
                </ul> 
                <ul> 
                     <h1><label for="txtAchternaam">Achternaam</label><br> 
                    <input type="text" id="txtAchternaam" 
                        name="txtAchternaam" placeholder="Achternaam"> 
                </ul> 
            </ul> 
            <ul> 
                <ul> 
                     <h1><label for="txtStraat">Straat</label><br> 
                    <input type="text" id="txtStraat" name="txtStraat" 
                        placeholder="Straat" autofocus> 
                </ul> 
                <ul> 
                     <h1><label for="txtHuisnummer">Huisnummer</label><br> 
                    <input type="text" id="txtHuisnummer" 
                         name="txtHuisnummer" placeholder="Huisnummer"> 
                </ul> 
            </ul>
            <ul> 
                <ul> 
                     <h1><label for="txtPostcode">Postcode</label><br> 
                    <input type="text" id="txtPostcode" name="txtPostcode" 
                    placeholder="Postcode" autofocus> 
                </ul> 
                <ul> 
                     <h1><label for="txtPlaats">Plaats</label><br> 
                    <input type="text" id="txtPlaats" name="txtPlaats" 
                    placeholder="Plaats">
                </ul> 
            </ul>
            <ul><br>    
                <li> 
                    <button type="submit">Verstuur</button> 
                </li> 
            </ul> 
        </form> 
    </div> 
</main> 
</body>
<br><br><br><br>
<footer>
<?php include 'footer.php'?>
</footer>
</html>



