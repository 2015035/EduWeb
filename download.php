<?php
    include 'fileslogic.php';
    session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Download</title>
  <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/dynamic.css">
    <link rel="stylesheet" type="text/css" href="css/upload.css">
</head>
<body>
  <div class="container">
    <div class="row dynhead">
      <div id="headerleft" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      
      </div>
      <div id="headercenter" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align: center;">
            <p><?php 
                  if(isset($_SESSION["username"])) {
                    $username = $_SESSION['username'];
                  if ($username == "admin01") {
                    echo "Admin";
                  }else{
                      echo "USER";
                  }
              }
              else
                echo "GUEST"; ?>
            </p>
      </div>
      <div id="headerright" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      </div>
    </div>
  </div>
  <nav class="main-nav-outer" id="test">  
    <div class="container">
      <ul class="main-nav"> 
        <li><a href="index.html">Home</a></li>
        <li><a href="LOGIN.php">portal</a></li>
        <li><a href="download.php">download</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
    </div>
  </nav>
  <div class="container" id="content">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="mainpanel">
          <table>
            <thead>
              <th>ID</th>
              <th>Filename</th>
              <th>Size (in mb)</th>
              <th>Downloads</th>
              <th>Action</th>
           </thead>
            <tbody>
              <?php foreach ($files as $file): ?>
              <tr>
                <td><?php echo $file['id']; ?></td>
                <td><?php echo $file['name']; ?></td>
                <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                <td><?php echo $file['downloads']; ?></td>
                <td><a href="download.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
              </tr>
              <?php endforeach;?>

            </tbody>
          </table>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="sidebar">
        <div>
          <a href="#"> LOREM IPSUM</a>
        </div>
        <div>
          <a href="#"> LOREM IPSUM</a>
        </div>
        <div>
          <a href="#"> LOREM IPSUM</a>
        </div>
        <div>
          <a href="#"> LOREM IPSUM</a>
        </div>
        <div>
          <a href="#"> LOREM IPSUM</a>
        </div>
        <div>
          <a href="#"> LOREM IPSUM</a>
        </div>
      </div>
    </div>
  </div>
  <footer>
    COPYRIGHT<BR> &#169 BY EDUWEB
  </footer>
</body>
</html>