<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>The Perfect Cup - Blog</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/business-casual.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div class="brand">The Perfect Cup</div>
  <div class="address-bar">26C K-J St. Corner K7th St., Brgy. East Kamias, Quezon City, Philippines</div>

  <!-- Navigation -->
  <?php include "nav.php" ?>

  <div class="container">

    <div class="row">
      <div class="box">
        <div class="col-lg-12">

          <p class="text-center">Welcome <span class="fw-normal"><?php echo $fname; echo " "; echo $lname; ?></span> - <a href="logout.php">Logout</a></p>

          <hr>
          <h2 class="intro-text text-center">The Perfect Cup
            <strong>blog</strong>
          </h2>
          <hr>
        </div>
        <div class="col-lg-12 text-center">
          <img class="img-responsive img-border img-full" src="img/slide-5.jpg" alt="">
          <h2>Coconut Oil Coffee
            <br>
            <small>February 29, 2024</small>
          </h2>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <button type="button" class="btn btn-primary  btn-lg" data-toggle="modal" data-target='#myModal1'>Read More</button>
          <hr>
        </div>
        <div class="col-lg-12 text-center">
          <img class="img-responsive img-border img-full" src="img/slide-8.jpg" alt="">
          <h2>Irish Coffee
            <br>
            <small>March 21, 2024</small>
          </h2>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <button type="button" class="btn btn-primary  btn-lg" data-toggle="modal" data-target='#myModal2'>Read More</button>

          <hr>
        </div>
        <div class="col-lg-12 text-center">
          <img class="img-responsive img-border img-full" src="img/slide-7.jpg" alt="">
          <h2>Frozen Caramel Latte
            <br>
            <small>April 25, 2024</small>
          </h2>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <button type="button" class="btn btn-primary  btn-lg" data-toggle="modal" data-target='#myModal3'>Read More</button>
          <hr>
        </div>
        <div class="col-lg-12 text-center">
          <ul class="pager">
            <li class="previous"><a href="#">&larr; Older</a>
            </li>
            <li class="next"><a href="#">Newer &rarr;</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Modals -->

  <!-- Modal 1 -->
  <div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Coconut Oil Coffee</h4>
        </div>
        <div class="modal-body">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit minus nesciunt harum libero rerum sit voluptatem error delectus iusto reiciendis labore illum aperiam praesentium quibusdam voluptatibus recusandae quae commodi hic, consequuntur nobis voluptas ipsum maiores! Laudantium fuga nostrum quae dicta iusto ratione, impedit veritatis delectus officia consequuntur provident dolorem quibusdam.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal 2 -->
  <div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Irish Coffee</h4>
        </div>
        <div class="modal-body">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit minus nesciunt harum libero rerum sit voluptatem error delectus iusto reiciendis labore illum aperiam praesentium quibusdam voluptatibus recusandae quae commodi hic, consequuntur nobis voluptas ipsum maiores! Laudantium fuga nostrum quae dicta iusto ratione, impedit veritatis delectus officia consequuntur provident dolorem quibusdam.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal 3 -->
  <div id="myModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Frozen Caramel Latte</h4>
        </div>
        <div class="modal-body">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit minus nesciunt harum libero rerum sit voluptatem error delectus iusto reiciendis labore illum aperiam praesentium quibusdam voluptatibus recusandae quae commodi hic, consequuntur nobis voluptas ipsum maiores! Laudantium fuga nostrum quae dicta iusto ratione, impedit veritatis delectus officia consequuntur provident dolorem quibusdam.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p>Copyright &copy; jeffmikhail <?php echo date("Y"); ?></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>