<?php 

require './koneksidb.php';

$sql = "SELECT * FROM halaman_kontak";
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
  
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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

<div class="section-container">
  <!-- Add your site or app content here -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">

        <div class="template-example">
          <h2 class="template-title-example"><?php echo $ambil_data[0]["judul"]; ?></h2>
          <p><?php echo $ambil_data[0]["konten"]; ?></p>
        </div>

      </div>

      <div class="col-xs-12 col-md-6">
        <div class="template-example">
            <div class="col-md-6">
                <ul class="list-icons">
                  <li>
                    <span class="fa-icon">
                      <i class="<?php echo $ambil_data[0]["github"]; ?>"></i>
                    </span>
                  </li>
                  <li>
                    <span class="fa-icon">
                      <i class="<?php echo $ambil_data[0]["instagram"]; ?>"></i>
                    </span>
                  </li>
                  <li>
                    <span class="fa-icon">
                      <i class="<?php echo $ambil_data[0]["email"]; ?>"></i>
                    </span>
                  </li>
                </ul>
            </div>

          </div>

        </div>
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