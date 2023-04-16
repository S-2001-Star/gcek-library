<?php require('CMS/connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>GCEK LIBRARY</title>
  <link rel="icon" href="CSS/tab-icon.png">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" > 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){ 
      $("#table-id").DataTable()({
        "autoWidth": false, // might need this
          "columns": [{ "width": "20%" }, null, null]
      });
    });
  </script>
  
</head>
<!-------------Top Bar------------->
<header>
  <nav class="navbar navbar-inverse" id="bar">
      <div class="container-fluid">
          <ul class="nav navbar-nav navbar-right" id="left-1">
              <li><a href="index.php" class="navbar_link"><span class="material-icons" id="nav-icon">home</span>Home</a></li>
            </ul>
            <ul class="col nav navbar-nav navbar-right" id="left-2">
              <li><a href="https://gcekbpatna.ac.in/" class="navbar_link"><span class="material-icons" id="nav-icon">info</span>About&nbsp;GCEK</a></li>
            </ul>
            <ul class="col"></ul>
            <ul class="col"></ul>
            <ul class="col"></ul>
            <ul class="col"></ul>
            <ul class="col"></ul>
            <ul class="nav navbar-nav navbar-right" id="right-1">
              <li><a href="index.php" class="navbar_link-1"><span class="material-icons" id="nav-icon">public</span>www.library.gcekbpatna.ac.in</a></li>
            </ul>
      </div>
  </nav>
</header>
<!-------------Main Bar------------->
<div class="row"> 
  <div class="bgi">
    <h1 class="header-1">CENTRAL LIBRARY</h1>
    <h2 class="header-2">GOVERNMENT COLLEGE OF ENGINEERING KALAHANDI</h2>
    <h2 class="header-3">Libraries were full of ideas - perhaps the most dangerous and powerful of all weapons</h2>
    <h2 class="header-4">- SARAH J. MAAS</h2>
</div>
</div>
<!-------------Notice Section------------->
<nav class="navbar navbar-inverse" id="scrolling-text">
  <div class="container-fluid" id="cssmarquee">
    <button class="test-btn"><a href="noticeboard.php" class="test-btn2">Notice</a></button>
    <p><img class="img-fluid" src="CSS/new.gif">WELCOME TO CENTRAL LIBRARY GCE KALAHANDI</p>
  </div>
</nav>
<!-------------Navigation Section------------->
<div class="navigation-section">
  <button class="nav-btn1"><a href="index.php" class="nav-btn2">Home</a></button>
  <button class="nav-btn1"><a href="library-section.php" class="nav-btn2">Library&nbsp;Section</a></button>
  <button class="nav-btn1"><a href="library-services.php" class="nav-btn2">Library&nbsp;Services</a></button>
  <button class="nav-btn1"><a href="digital-library.php" class="nav-btn2">Digital&nbsp;Library</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="staff-members.php" class="nav-btn2">Staff&nbsp;Members</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="opac.php" class="nav-btn2">OPAC</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="online-registration.php" class="nav-btn2">Online&nbsp;Registration</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="e-newspaper.php" class="nav-btn2">e&nbsp;-&nbsp;newspapers</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="Student-repository.php" class="nav-btn2">Student&nbsp;Repository</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="request-books.php"class="nav-btn2">Suggest&nbsp;Books</a></button>
  <!-- The Modal -->
<div id="my_Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
</div> 
</div>
<script src="JAVASCRIPT/modalbox.js"></script>
</div>
<!-------------NOTICE BOARD SECTION------------->
<div class="about">
    <p class="wiki">
        <a href="noticeboard.php" id="wiki-1">NOTICE&nbsp;BOARD</a>
    </p>
</div>
<table class="notice-table" id="table-id">
  <thead>
    <tr>
      <th class="notice-id"><h1 class="notice-header">ID</h1></th>
      <th><h1 class="notice-header">TITLE</h1></th>
      <th><h1 class="notice-header">DATE</h1></th>
      <th><h1 class="notice-header">DOWNLOAD</h1></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="notice-id">1</td>
      <td>WELCOME TO CENTRAL LIBRARY GCE KALAHANDI</td>
      <td>05-12-2022</td>
      <td><a href="#"><i class="fas fa-cloud-download-alt"></i></a></td>
    </tr>
  </tbody>
</table>
<!-----------FOOTER SECTION----------->
<footer>
  <div class="row" id="footer-row">
      <div class="col" id="footer-col">
          <h3>GCEK LIBRARY GOOGLE MAP</h3>
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15004.951177114173!2d83.10630481057814!3d19.914381742444927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a24ef3382020aa3%3A0x6720328dfbfd451a!2sGovernment%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1640851692727!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="col" id="footer-col-1">
          <h3>CONTACT US</h3>
          <p>CENTRAL LIBRARY<br>GCE KALAHANDI<br>AT/PO- Bandopala, Bhawanipatna<br>Dist- Kalahandi<br>Odisha<br>Pin- 766002</p>
          <div class="email-id">
              <a href="mailto:librarian@gcekbpatna.ac.in">librarian@gcekbpatna.ac.in</a>
          </div>
          <!-- <div class="email-id">
              <a href="mailto:info@gcekbpatna.ac.in">info@gcekbpatna.ac.in</a>
          </div> -->
          <p>+91 9692383708</p>
      </div>
      <div class="col" id="footer-link">
          <h3>LINKS</h3>
          <a href="index.php">Home</a><br>
          <a href="library-section.php">Library&nbsp;Section</a><br>
          <a href="library-services.php">Library&nbsp;Services</a><br>
          <a href="digital-library.php">Digital Library</a><br>
          <a href="staff-members.php">Staff&nbsp;Members</a><br>
          <a href="opac.php">OPAC</a><br>
          <a href="online-registration.php">Online&nbsp;Registration</a><br>
          <a href="e-newspaper.php">e&nbsp;-&nbsp;newspapers</a><br>
          <a href="Student-repository.php">Student&nbsp;Repository</a><br>
          <a href="request-books.php">Suggest Books</a><br>
      </div>
      <div class="col" id="footer-social">
          <h3>SOCIAL MEDIA</h3>
          <div class="social-icons">
              <i class="fab fa-facebook"></i>
              <a href="https://www.instagram.com/gcek.library/" target="blank"><i class="fab fa-instagram"></i></a>
              <i class="fab fa-youtube"></i>
              <i class="fab fa-google"></i>
              <div class="footer-cookies">

                <?php
              $query = "SELECT * FROM opacmanual";
              $query_run = mysqli_query($con2,$query);
              ?>
              <?php
              if(mysqli_num_rows($query_run)>0){
                foreach($query_run as $row)
                {
                  ?>
                  <div class="download-btn"><a href="#" class="download-btn1"><i class="fa fa-download"></i></a><a class="download-btn2" id="download-btn3" href="<?php echo "CMS/src/" . $row['opac_manual_file'];?>">OPAC&nbsp;Manual</a></i></div>
                  <?php
                }
              }
              ?>

              <div class="privacy"><a class="privacy2" id="privacy3" href="privacy.html">Privacy&nbsp;Policy</a></div>
              <div class="disclaimer"><a class="boat" id="My"><h4 class="disclaimer2" id="disclaimer3" href="#myModal10">Disclaimer</h4></a></div>
              </div>
              <!-- <div class="page-viewers"><div class="visitor"><h6>VIEWERS&nbsp;:</h6></div><div class="visitor-counter"><i class="fa fa-eye" id="visitor-eye"></i></div><div class="website-counter" id="count"></div></div>
              <script src="JAVASCRIPT/visitors.js"></script> -->
          </div>
      </div>
      <div class="modal" id="myModal10">
        <div class="modal-content">
          <div class="modal-body">
           <p class="disclaimer_content">A collection of publicly accessible, institutionally provided, donated, or publisher-managed contents may be found at CENTRAL LIBRARY GCE KALAHANDI. The vast majority of these contents are hosted by and accessed via the appropriate sources. The appropriate organisation is responsible for the authenticity, relevance, completeness, accuracy, reliability, and suitability of these contents; CENTRAL LIBRARY GCE KALAHANDI has no obligation or liability in this regard.</p>
           <span class="close" id="disclaimer_close"><button id="dis_close">OK</button></span>
          </div>
        </div>
        <script src="JAVASCRIPT/lightbox.js"></script>  
      </div>
      <hr class="footer-hr">
  <p class="copyright" id="copy">Copyrights © 2022 GOVERNMENT COLLEGE OF ENGINEERING KALAHANDI</p>
  <p class="copyright-1" id="copy-1">Website Designed & Developed by <a href="https://elitesurya4.github.io/portfolio/" id="suryanshu" target="blank">Suryanshu Patnaik </a> & <a href="https://s-2001-star.github.io/portfolio/" id="suprita" target="blank">Suprita Panda</a> (ELECTRICAL BATCH OF 2019-23) - All Rights Reserved</p>    </div>
</footer> 
</body>
</html>