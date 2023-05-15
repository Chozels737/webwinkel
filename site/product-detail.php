<!DOCTYPE html>
<html>
  <head>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Navbar</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/style.css"/>
  </head>
<body>
    <header>
        <img class="logo" src="/images/logo.png" />
        <nav>
       <?php include 'nav.php'?>
      </nav>
      <a class="cta" href="registratie.php"><button>registreren</button></a>
      </header>
    <div class="Webshop">
     <a href="product-detail.php"><img src="/images/web4090.png"></a>
        <div class="spec">
            <style>
                table {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  width: 110%;
                }
                
                td, th {
                  border: 1px solid #000000;
                  text-align: left;
                  padding: 1px;
                }
                td{
                    background-color: #ffffff;
                }
                tr:nth-child(even) {
                  background-color: #ffffff;
                }
                th{
                    background-color: #696969;
                }
                </style>
                </head>
                <body>
                <table>
                  <tr>
                    <th>Belangrijkste</th>
                    <th>specificaties</th>
                  </tr>
                  <tr>
                    <td>Merk</td>
                    <td>Gigabyte</td>
                  </tr>
                  <tr>
                    <th>Graphics Engine </th>
                    <th>GeForce RTX 4070ti</th>
                  </tr>
                  <tr>
                    <td>Videogeheugn</td>
                    <td>12 GB</td>
                  </tr>
                  <tr>
                    <th>CUDA cores</th>
                    <th>7680</th>
                  </tr>
                  <tr>
                    <td>VGA Geheugen type</td>
                    <td>GDDR6X</td>
                  </tr>
                  <tr>
                    <th>DLSS versie</th>
                    <th>DLSS 3</th>
                  </tr>
                  <tr>
                    <td>EAN</td>
                    <td>4719331312565</td>
                  </tr>
                  <tr>
                    <th>Vendorcode</th>
                    <th>GV-N407TGAMING 0C-12GD</th>
                  </tr>
                  <tr>
                    <td>Garantie</td>
                    <td>36 Maanden</td>
                  </tr>
                </table>
                <br>
                <table>
                  <tr>
                    <td>Alle </td>
                    <td>specificaties</td>
                  </tr>
                  <tr>
                    <th>Kleur product</th>
                    <th>Grijs, Zwart</th>
                  </tr>
                  <tr>
                    <td>Type koeling</td>
                    <td>Luchtkoeling</td>
                  </tr>
                  <tr>
                    <th>Minimale voeding</th>
                    <th>750 Watt</th>
                  </tr>
                  <tr>
                    <td>Geheugen interface</td>
                    <td>192 bit</td>
                  </tr>
                  <tr>
                    <th>Breedte</th>
                    <th>140mm</th>
                  </tr>
                  <tr>
                    <td>lengte</td>
                    <td>336mm</td>
                  </tr>
                  <tr>
                    <th>Hoogte</th>
                    <th>58mm</th>
                  </tr>
                  <tr>
                    <td>DisplayPort uit</td>
                    <td>3x</td>
                  </tr>
                  <tr>
                    <th>HDMI uit </th>
                    <th>1x</th>
                  </tr>
                  <tr>
                    <td>PCI Express versie</td>
                    <td>PCI-E 4.0</td>
                  </tr>
                  <tr>
                    <th>DirectX versie</th>
                    <th>12.0</th>
                  </tr>
                  <tr>
                    <td>GPU snelheid (base)</td>
                    <td>2640</td>
                  </tr>
                  <tr>
                    <th>OpenGL versie</th>
                    <th>4.6</th> 
                  </tr>
                </table>
         </div>
    </div>  
    <br><br><br><br>
<footer>
<?php include 'footer.php'?>
</footer>
</body>
</html>