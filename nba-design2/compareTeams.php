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
  <?php
/*
  error_reporting(E_ALL ^ E_NOTICE);
  // mysqli connection via user-defined function

  include('./my_connect.php');
  $mysqli = get_mysqli_conn();*/
  ?>

  <nav class="white lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="https://www.ticketmaster.ca/" class="brand-logo center"><img src="https://pbs.twimg.com/profile_images/1063091728398323712/zGJd2_dQ_400x400.jpg" alt="ticketmaster" height="50px" width="50px";/></a>
      <a id="logo-container" href="https://mansci-db.uwaterloo.ca/~r2abdall/nba-design2/index.php" class="brand-logo left"><img src="https://img.icons8.com/material/48/000000/back.png alt="back-button";/></a>
    </div>

  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    <br />

    <?php
    session_start();

    error_reporting(E_ALL ^ E_NOTICE);
    include('./my_connect.php');
    $mysqli = get_mysqli_conn();

    ?>

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


          if($game_location) {

          printf ($game_location);

          }
          ?>
          ,       <?php
                $date_time = isset($_GET['date_time']) ? $_GET['date_time'] : false;

                if($date_time){

                printf ($date_time);
                printf (" EST");

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
       <div class="col s6 push-s6">
         <div align="center">
           <div class="card-panel white" align="center">


             <?php

             $home = isset($_GET['home_team']) ? $_GET['home_team'] : false;


             $sql = "SELECT t.img_src "
               . "FROM teams t "
               . "WHERE t.team_name='".$home."'";
             $search_result = mysqli_query($mysqli, $sql);

             while ($row = mysqli_fetch_assoc($search_result))
              {
                 $home_img = $row[img_src];
              }

             echo "<span class='black-text'><img alt='Team1' width='75' height='75' src='".$home_img."'/></span>";
             ?>


               </div>
             </div>
        </div>
     <div class="col s6 pull-s6"> <div align="center">

      <div class="card-panel white" align="center">
        <?php

        $visitor = isset($_GET['visitor_team']) ? $_GET['visitor_team'] : false;


        $sql = "SELECT t.img_src "
          . "FROM teams t "
          . "WHERE t.team_name='".$visitor."'";
        $search_result = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_assoc($search_result))
         {
            $visitor_img = $row[img_src];
         }

        echo "<span class='black-text'><img alt='Team1' width='75' height='75' src='".$visitor_img."'/></span>";
        ?>

             </div></div>
   </div>
   </div>


      <div class="divider"></div>
<br />


<div class="row">
<div class="col s6 push-s6">

<!--  right side -->
<div class="section">
  <h1>
    <?php
    $home = isset($_GET['home_team']) ? $_GET['home_team'] : false;

  //  echo '<p>';
  printf ($home);
    //echo '</p>';
/*
  $sql = "SELECT t.win "
  . "FROM teams t "
  . "WHERE t.team_name='".$home."'";
  $sql2 = "SELECT t.loss "
  . "FROM teams t "
  . "WHERE t.team_name='".$home."'";
  $search_result2 = mysqli_query($mysqli, $sql2);
  while ($row2 = mysqli_fetch_assoc($search_result2))
         {
            $loss = $row2[loss];
         }

         printf ("win:");
         pintf($win);
         printf ("loss:");
         printf ($loss);
?>
</h1>




  <?php
  //gets the date time and location from the href
  $date_time = isset($_GET['date_time']) ? $_GET['date_time'] : false;
  $game_location = isset($_GET['game_location']) ? $_GET['game_location'] : false;


  if($date_time){
    echo '<p>';
//	printf ('<div>%s</div>', $date_time);
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
<div class="divider"></div>
<div class="section">

  <p>Players</p>
  <?php
/*  session_start();

  error_reporting(E_ALL ^ E_NOTICE);
  // mysqli connection via user-defined function

  include('./my_connect.php');
  $mysqli = get_mysqli_conn();*/
  $top_rebounds="SELECT players.player_name, players.rebounds FROM players WHERE players.player_team = '".$team."'  ORDER BY players.rebounds DESC limit 5";
  $rebound_result= mysqli_query($mysqli, $sql);

   ?>
   <table name="dataTable">
       <tr>
           <th>#</th>
           <th>Player</th>
       </tr>
       <?php while($row = mysqli_fetch_array($rebound_result)):?>
           <tr>
            <!-- populate with names of columns in mysql database -->
            <td><?php echo $row[player_name];?></td>

            <td><?php echo $row[rebounds];?></td>

        </tr>

    <?php endwhile;?>

</table>
</div>

</div>
<div class="col s6 pull-s6">


<!--  left side -->
         <div class="section">
           <h5><?php
           $visitor = isset($_GET['visitor_team']) ? $_GET['visitor_team'] : false;

         //  echo '<p>';
         printf ($visitor);
         ?></h5>
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
         <div class="divider"></div>
         <div class="section">

           <p>Players</p>
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
    Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">AlphaBets</a><a href="https://icons8.com/icon/78291/circled-menu">Circled Menu icon by Icons8</a>
    </div>
  </div>
</footer>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  </body>
</html>
