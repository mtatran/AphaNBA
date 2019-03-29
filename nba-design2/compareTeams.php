<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>NBA</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="https://pbs.twimg.com/profile_images/1063091728398323712/zGJd2_dQ_400x400.jpg" alt="ticketmaster" height="50px" width="50px";/></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    <br />
<?php
$visitor = isset($_GET['visitor_team']) ? $_GET['visitor_team'] : false;
$home = isset($_GET['home_team']) ? $_GET['home_team'] : false;
?>
        <h1 class="header center black-text" >
      <?php
      $visitor = isset($_GET['visitor_team']) ? $_GET['visitor_team'] : false;

       if($visitor){
        //  echo '<p>';
        printf ($visitor);
          //echo '</p>';
       }

        ?> vs.
<?php
$home = isset($_GET['home_team']) ? $_GET['home_team'] : false;
if($home){
//  echo '<p>';
printf ( $home);
  //echo '</p>';
}
 ?>
      </h1>
      <div class="row center">
        <h5 class="header col s12 light">
          <?php
          $game_location = isset($_GET['game_location']) ? $_GET['game_location'] : false;


          //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);

          if($game_location){

          printf ($game_location);

          }?>
          ,       <?php
                $date_time = isset($_GET['date_time']) ? $_GET['date_time'] : false;


                //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);

                if($date_time){

                printf ($date_time);

                }?></h5>
      </div>
      <div align="center">
        <table class="striped" style>
    <tbody>
      <tr>
        <td>+100</td>
        <td>+100</td>
        <td>-50</td>
        <td>-50</td>
      </tr>
      <tr>
        <td>+100</td>
        <td>+100</td>
        <td>-50</td>
        <td>-50</td>
      </tr>
      <tr>
        <td>+100</td>
        <td>+100</td>
        <td>-50</td>
        <td>-50</td>
      </tr>
    </tbody>
  </table>
  <br />
  </div>
  <div class="row center">
    <a href="https://www.bet365.com/en/" id="download-button" class="btn-large waves-effect waves-light">Bet</a>
  </div>


    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
     <div class="col s6 push-s6">  <div align="center">

     <div class="card-panel white" align="center">
               <span class="black-text"><img img alt="Team1" width="75" height="75" src="data:image/png;base64,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">
               </span>
             </div></div>
             </div>
     <div class="col s6 pull-s6"> <div align="center">

      <div class="card-panel white" align="center">
               <span class="black-text"><img img alt="Team1" width="75" height="75" src="data:image/png;base64,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">
               </span>
             </div></div>
   </div>
   </div>


      <div class="divider"></div>
<br />


<div class="row">
<div class="col s6 push-s6">

<!--  right side -->
<div class="section">
  <h1><?php $home = isset($_GET['home_team']) ? $_GET['home_team'] : false;
  if($home){
  //  echo '<p>';
  printf ( $home);
    //echo '</p>';
  }
  ?></h1>



  <?php
  session_start();

  error_reporting(E_ALL ^ E_NOTICE);
  // mysqli connection via user-defined function

  include('./my_connect.php');
  $mysqli = get_mysqli_conn();

  //gets the date time and location from the href
  $date_time = isset($_GET['date_time']) ? $_GET['date_time'] : false;
  $game_location = isset($_GET['game_location']) ? $_GET['game_location'] : false;


  if($date_time){
    echo '<p>';
	printf ('<div>%s</div>', $date_time);
    echo '</p>';
  }

?>


<p>stuff</p>
</div>
<div class="divider"></div>
<div class="section">
<h5>Section 2</h5>
<p>Stuff</p>
</div>
<div class="divider"></div>
<div class="section">
<h5>Section 3</h5>
<p>Stuff</p>
</div>

</div>
<div class="col s6 pull-s6">


<!--  left side -->
         <div class="section">
           <h5>Games Played</h5>
           <h5>Team Points</h5>
           <p>Stuff</p>
         </div>
         <div class="divider"></div>
         <div class="section">
           <h5>Section 2</h5>
           <p>Stuff</p>
         </div>
         <div class="divider"></div>
         <div class="section">

           <p>Stuff</p>
         </div>

       </div>
</div>
</div>
    </div>
    <br><br>
  </div>


  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Index Information</h5>
          <p class="grey-text text-lighten-4">This is where we have a link to another index page where there are definitions</p>

        </div>


      </div>
    </div>

  <div class="footer-copyright">
    <div class="container">
    Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">AlphaBets</a>
    </div>
  </div>
</footer>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  </body>
</html>
