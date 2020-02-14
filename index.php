<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include("templates/head.php"); ?>
</head>

<body ng-app="projetMadera" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script>

  <div class="site-wrap">

    <div ng-include='"templates/header.php"'></div>
    <div ng-view></div>
    <div ng-include='"templates/footer.php"'></div>

  </div>


  <!-- loader -->
  <div id="loader" style="color:#a2c037;" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>

  <script src="js/main.js"></script>
  <script src="mainangular.js"></script>

</body>

</html>