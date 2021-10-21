<?php 

require './koneksidb.php';

$sql = "SELECT * FROM halaman_hobi";
$ambil_data = [];
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $ambil_data[] = $row;
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">
  
  <title>Ihsan Baskara</title>  

<link href="./main.3da94fde.css" rel="stylesheet"></head>

<body>

 <!-- Add your content of header -->
 <header>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
        <button type="button" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      <nav class="navbar-fullscreen" id="navbar-middle">
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul class="navbar-fullscreen-links">
          <li><a href="./index.php" title="">Home</a></li>
          <li><a href="./hobbies.php" title="">Hobbies</a></li>
          <li><a href="./about.php" title="">About me</a></li>
          <li><a href="./contact.php" title="">Contact</a></li>
          <li><a href="./message.php" title="">Message</a></li>
        </ul>

        <div class="footer-container">
           
          <p><small>© Portfolio Website | Website created by <a href="http://www.mashup-template.com/" title="Create website with free html template">Ihsan Baskara</a><a href="https://www.unsplash.com/" title="Beautiful Free Images"></a></small></p>
          <p class="footer-share-icons">
              <a href="https://www.twitter.com" class="fa-icon" title="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://www.linkedin.com" class="fa-icon" title="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="https://www.behance.com" class="fa-icon" title="">
                  <i class="fa fa-behance" aria-hidden="true"></i>
              </a>
              <a href="https://www.vimeo.com" class="fa-icon" title="">
                  <i class="fa fa-vimeo" aria-hidden="true"></i>
              </a>
          </p>
                       
        </div>


      </nav> 
    
    </div>
  </nav>
</header>

  
<div class="hero-full-container background-image-container white-text-container" style="background-image:url('<?php echo $ambil_data[0]["url_gambar"]; ?>')">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="hero-full-wrapper">
          <div class="text-content  text-center">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="text-center section-container-spacer">
          <h2 class="with-project-number"><span class="project-number">01</span>Otomotif & Game</h2>
        </div>

        <img src="<?php echo $ambil_data[1]["url_gambar"] ?>" alt="" class="img-responsive">
        <p>Honda PCX - 150</p>

        <blockquote class="text-center large-spacing">
            <p>"Otomotif dan Game merupakan lifestyle dan aktifitas yang saya gemari."</p>
            <small class="pull-right">Ihsan Baskara</small>
        </blockquote>
        
        <div class="row">
            <div class="col-md-6">
            <img src="<?php echo $ambil_data[2]["url_gambar"] ?>" class="img-responsive" alt="">
            <p>Valorant</p>
            </div>
            <div class="col-md-6">
            <img src="<?php echo $ambil_data[3]["url_gambar"] ?>" class="img-responsive" alt="">
            <p>GTA V</p>
            </div>
        </div>

        <img src="<?php echo $ambil_data[4]["url_gambar"] ?>" class="img-responsive" alt="">
        <p>Honda PCX - 150</p>

      </div>
    </div>
  </div>
</div>

<div class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <ul class="navbar-nav nav">
          <li>
            <a href="" title="" class="project-nav left"><span class="project-number">01</span>Previous</a>
          </li>
        </ul>
        <p class="h5 navbar-text">Night Photography <i class="fa fa-chevron-down arrow-down" aria-hidden="true"></i></p>

        <ul class="navbar-nav nav navbar-right">
          <li>
            <a href="" title="" class="project-nav right"><span class="project-number">03</span>Next </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>





<script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navbarToggleSidebar();
      closeMenuBeforeGoingToPage();
      navActivePage();
    });
</script>
 <script type="text/javascript" src="./main.4c6e144e.js"></script></body>
 </body>
</html>