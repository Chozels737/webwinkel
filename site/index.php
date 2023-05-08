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
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
  </head>
  <body>
    <header>
      <img class="logo" src="/images/logo.png" />
      <nav>
       <?php include 'nav.php'?>
      </nav>
      <a class="cta" href="contact.php"><button>Contact</button></a>
    </header>
    <main>
      <img class="Frontpage" src="/images/Main.png" />
    </main>
    <div class="Productlijst">
      <div class="Product">
        <p>Gigabyte GeForce RTX 3060 Ti OC 8G</p>
        <a href="product-detail.php"><img src="/images/3060ti.png"></a>
        <div class="Prijs">
        </div>
      </div>  
      <div class="Product">
        <p>INNO3D GeForce RTX 3060 NVIDIA 8 GB</p>
        <a href="product-detail.php"><img src="/images/3060.png"></a>
      </div>
      <div class="Product">
        <p>Gigabyte GeForce RTX 3070 GAMING OC 8G</p>
        <a href="product-detail.php"><img src="/images/3070.png"></a>
      </div>
      <div class="Product">
        <p>MSI GeForce GTX 1660 SUPER VENTUS OC 6GB</p>  
        <a href="product-detail.php"><img src="/images/1660Super.png"></a>
      </div>
    </div>
    <div class="Productlijst">
      <div class="Product">
        <p>MSI GeForce GTX 1660 SUPER VENTUS OC 6GB</p>
        <a href="product-detail.php"><img src="/images/1660Super.png"></a>
      </div>
      <div class="Product">
        <p>Gigabyte GeForce RTX 3070 GAMING OC 8G</p>
        <a href="product-detail.php"><img src="/images/3070.png"></a>
      </div>
      <div class="Product">
        <p>INNO3D GeForce RTX 3060 NVIDIA 8 GB</p>
        <a href="product-detail.php"><img src="/images/3060.png"></a>
      </div>
      <div class="Product">
        <p>Gigabyte GeForce RTX 4090 OC 24G</p>
        <a href="product-detail.php"><img src="/images/4090.png"></a>
      </div>
    </div>
    <br><br><br><br>
    <footer>
      <?php include 'footer.php'?>
    </footer>
  </body>
</html>
