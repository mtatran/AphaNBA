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
      <a id="logo-container" href="https://mansci-db.uwaterloo.ca/~r2abdall/nba-design2/index.php" class="brand-logo left"><img src="https://img.icons8.com/material/24/000000/circled-left--v3.png" alt="back-button";/></a>
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
<<<<<<< HEAD

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
=======

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
>>>>>>> 2a1fa5b80cf5620844a2df850761ae85f67412fb

                printf ($date_time);
                printf (" EST");

<<<<<<< HEAD
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
=======
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
>>>>>>> 2a1fa5b80cf5620844a2df850761ae85f67412fb

             while ($row = mysqli_fetch_assoc($search_result))
              {
                 $home_img = $row[img_src];
              }

<<<<<<< HEAD
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
<?php
=======
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

<<<<<<< HEAD
>>>>>>> 2a1fa5b80cf5620844a2df850761ae85f67412fb
          $sql = "SELECT t.img_src "
            . "FROM teams t "
            . "WHERE t.team_name='".$visitor."'";
          $search_result = mysqli_query($mysqli, $sql);

  //  echo '<p>';
  printf ($home);
    //echo '</p>';
  $sql = "SELECT t.win, t.loss, t.games_played, t.team_points, t.team_FGA, t.team_FGM, t.FG_percent, t.team_FTA, t.team_FTM, t.team_FT_percent, t.team_3PTA, t.team_3PM, t.team_3PT_percent"
  . "FROM teams t "
  . "WHERE t.team_name='".$home."'";
  $search_result = mysqli_query($mysqli, $sql);
  while ($row = mysqli_fetch_assoc($search_result))
         {
           print_r($row);
            $win = $row[win];
            $loss = $row[loss];
            $played = $row[games_played];
            $points = $row[team_points];
            $FGA = $row[team_FGA];
            $FGM = $row[team_FGM];
            $FG = $row[FG_percent];
            $FTA = $row[team_FTA];
            $FTM = $row[team_FTM];
            $FT = $row[team_Ft_percent];
            $PTA = $row[team_3PTA];
            $PTM = $rom[team_PM];
            $PT = $row[team_3PT_percent];
         }
         echo '<p>';
         printf ('Win: %s', $win);
         /*printf (' - Loss: %s', $loss);
         echo '<br>';
         printf('Games Played: %s', $played);
         echo '<br>';
         printf('Team Points: %s', $points);
         echo '<br>';
         printf ( 'FGA: %s', $FGA, ' | FGM: %s', $FGM, ' | FG%: %s', $FG);*/
         echo '</p>';



          while ($row = mysqli_fetch_assoc($search_result))
           {
              $visitor_img = $row[img_src];
           }
=======

<<<<<<< HEAD
  //  echo '<p>';
  printf ($home);
    //echo '</p>';
  $sql = "SELECT t.win, t.loss, t.games_played, t.team_points, t.team_FGA, t.team_FGM, t.FG_percent, t.team_FTA, t.team_FTM, t.team_FT_percent, t.team_3PTA, t.team_3PM, t.team_3PT_percent"
  . "FROM teams t "
  . "WHERE t.team_name='".$home."'";
  $search_result = mysqli_query($mysqli, $sql);
  while ($row = mysqli_fetch_assoc($search_result))
         {
            $win = $row[win];
            $loss = $row[loss];

         }
         echo '<p>';
         printf ('Win: %s', $win);
         printf (' - Loss: %s', $loss);
         /*echo '<br>';
         printf('Games Played: %s', $played);
         echo '<br>';
         printf('Team Points: %s', $points);
         echo '<br>';
         printf ( 'FGA: %s', $FGA, ' | FGM: %s', $FGM, ' | FG%: %s', $FG);
         */
         echo '</p>';
?>

  <?php
  /*
  //gets the date time and location from the href
  $date_time = isset($_GET['date_time']) ? $_GET['date_time'] : false;
  $game_location = isset($_GET['game_location']) ? $_GET['game_location'] : false;

=======
<div class="row">
<div class="col s6 push-s6">

<!--  right side -->
<div class="section">
  <h1>
    <?php
    $home = isset($_GET['home_team']) ? $_GET['home_team'] : false;
>>>>>>> parent of d1bfa58... added js and css files for collapsible

  //  echo '<p>';
  printf ($home);
    //echo '</p>';
  $sql = "SELECT t.win, t.loss, t.games_played, t.team_points, t.team_FGA, t.team_FGM, t.FG_percent, t.team_FTA, t.team_FTM, t.team_FT_percent, t.team_3PTA, t.team_3PM, t.team_3PT_percent"
  . "FROM teams t "
  . "WHERE t.team_name='".$home."'";
  $search_result = mysqli_query($mysqli, $sql);
  while ($row = mysqli_fetch_assoc($search_result))
         {
            $win = $row[win];
            $loss = $row[loss];

         }
         echo '<p>';
         printf ('Win: %s', $win);
         printf (' - Loss: %s', $loss);
         /*echo '<br>';
         printf('Games Played: %s', $played);
         echo '<br>';
         printf('Team Points: %s', $points);
         echo '<br>';
         printf ( 'FGA: %s', $FGA, ' | FGM: %s', $FGM, ' | FG%: %s', $FG);
         */
         echo '</p>';
?>
</h1>
>>>>>>> 2a1fa5b80cf5620844a2df850761ae85f67412fb

  if($date_time){
    echo '<p>';
//	printf ('<div>%s</div>', $date_time);
    echo '</p>';
  }

<<<<<<< HEAD
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
?>

</div>
<?php
$mysqli = get_mysqli_conn();
$team="Atlanta Hawks";
//gets all users orders
$sql = "SELECT players.player_name, players.rebounds FROM players WHERE players.player_team = '".$team."'  ORDER BY players.rebounds DESC limit 5";
$search_result = mysqli_query($mysqli, $sql);
=======


  <?php
  /*
  //gets the date time and location from the href
  $date_time = isset($_GET['date_time']) ? $_GET['date_time'] : false;
  $game_location = isset($_GET['game_location']) ? $_GET['game_location'] : false;


  if($date_time){
    echo '<p>';
//	printf ('<div>%s</div>', $date_time);
    echo '</p>';
  }

?>
>>>>>>> 2a1fa5b80cf5620844a2df850761ae85f67412fb

//echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
?>

<<<<<<< HEAD
    <table name="dataTable" class="table2">
        <tr>
            <th>name</th>
            <th>rebound</th>

        </tr>

        <!-- populate table from mysql database -->
        <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
             <!-- populate with names of columns in mysql database -->
             <td><?php echo $row[player_name];?></td>

             <td><?php echo $row[rebounds];?></td>
=======
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
?>

</div>
<?php
$mysqli = get_mysqli_conn();
$team="Atlanta Hawks";
//gets all users orders
$sql = "SELECT players.player_name, players.rebounds FROM players WHERE players.player_team = '".$team."'  ORDER BY players.rebounds DESC limit 5";
$search_result = mysqli_query($mysqli, $sql);
>>>>>>> 2a1fa5b80cf5620844a2df850761ae85f67412fb

//echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
?>

<<<<<<< HEAD
         </tr>

     <?php endwhile;?>

 </table>

<?php
 $mysqli = get_mysqli_conn();
 $team="Atlanta Hawks";
 //gets all users orders
 $sql = "SELECT players.player_name, players.assists FROM players WHERE players.player_team = '".$team."'  ORDER BY players.assists DESC limit 5";
 $search_result = mysqli_query($mysqli, $sql);

 //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
 ?>

     <table name="dataTable" class="table2">
         <tr>
             <th>name</th>
             <th>assists</th>

         </tr>

         <?php

       //  $sum=0;

         ?>
         <!-- populate table from mysql database -->
         <?php while($row = mysqli_fetch_array($search_result)):?>
             <tr>
              <!-- populate with names of columns in mysql database -->
              <td><?php echo $row[player_name];?></td>

              <td><?php echo $row[assists];?></td>
=======
    <table name="dataTable" class="table2">
        <tr>
            <th>name</th>
            <th>rebound</th>

        </tr>

        <!-- populate table from mysql database -->
        <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
             <!-- populate with names of columns in mysql database -->
             <td><?php echo $row[player_name];?></td>

             <td><?php echo $row[rebounds];?></td>


         </tr>

     <?php endwhile;?>

 </table>

<?php
 $mysqli = get_mysqli_conn();
 $team="Atlanta Hawks";
 //gets all users orders
 $sql = "SELECT players.player_name, players.assists FROM players WHERE players.player_team = '".$team."'  ORDER BY players.assists DESC limit 5";
 $search_result = mysqli_query($mysqli, $sql);

 //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
 ?>
>>>>>>> 2a1fa5b80cf5620844a2df850761ae85f67412fb

     <table name="dataTable" class="table2">
         <tr>
             <th>name</th>
             <th>assists</th>

<<<<<<< HEAD
          </tr>

      <?php endwhile;?>

=======
         </tr>

         <?php

       //  $sum=0;

         ?>
         <!-- populate table from mysql database -->
         <?php while($row = mysqli_fetch_array($search_result)):?>
             <tr>
              <!-- populate with names of columns in mysql database -->
              <td><?php echo $row[player_name];?></td>

              <td><?php echo $row[assists];?></td>


          </tr>

      <?php endwhile;?>

>>>>>>> 2a1fa5b80cf5620844a2df850761ae85f67412fb
  </table>

  <?php
     $mysqli = get_mysqli_conn();
     $team="Atlanta Hawks";
     //gets all users orders
     $sql = "SELECT players.player_name, players.steals FROM players WHERE players.player_team = '".$team."'  ORDER BY players.steals DESC limit 5";
     $search_result = mysqli_query($mysqli, $sql);

     //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
     ?>

         <table name="dataTable" class="table2">
             <tr>
                 <th>name</th>
                 <th>steals</th>

             </tr>

             <?php

           //  $sum=0;

             ?>
             <!-- populate table from mysql database -->
             <?php while($row = mysqli_fetch_array($search_result)):?>
                 <tr>
                  <!-- populate with names of columns in mysql database -->
                  <td><?php echo $row[player_name];?></td>
<<<<<<< HEAD

                  <td><?php echo $row[steals];?></td>
=======

                  <td><?php echo $row[steals];?></td>

>>>>>>> 2a1fa5b80cf5620844a2df850761ae85f67412fb

              </tr>

<<<<<<< HEAD
              </tr>

          <?php endwhile;?>

=======
          <?php endwhile;?>

>>>>>>> 2a1fa5b80cf5620844a2df850761ae85f67412fb
      </table>


    <?php
       $mysqli = get_mysqli_conn();
       $team="Atlanta Hawks";
       //gets all users orders
       $sql = "SELECT players.player_name, players.blocks FROM players WHERE players.player_team = '".$team."'  ORDER BY players.blocks DESC limit 5";
       $search_result = mysqli_query($mysqli, $sql);

       //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
       ?>

           <table name="dataTable" class="table2">
               <tr>
                   <th>name</th>
                   <th>blocks</th>

               </tr>

               <?php

             //  $sum=0;

               ?>
               <!-- populate table from mysql database -->
               <?php while($row = mysqli_fetch_array($search_result)):?>
                   <tr>
                    <!-- populate with names of columns in mysql database -->
                    <td><?php echo $row[player_name];?></td>

                    <td><?php echo $row[blocks];?></td>


                </tr>

            <?php endwhile;?>

        </table>
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

          <p class="grey-text text-lighten-4">Learn More</p>
          <a href="https://mansci-db.uwaterloo.ca/~r2abdall/nba-design2/learnMore.php">Learn More</a>

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
