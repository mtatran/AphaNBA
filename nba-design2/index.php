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
    session_start();

    error_reporting(E_ALL ^ E_NOTICE);
    // mysqli connection via user-defined function

    include('./my_connect.php');
    $mysqli = get_mysqli_conn();

    //gets all users orders
    $sql = "SELECT teamgame.date_time, teamgame.game_location, teamgame.visitor_team, teamgame.home_team FROM teamgame WHERE teamgame.date_time>CURRENT_DATE";
    $search_result = mysqli_query($mysqli, $sql);

    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
    ?>
    <nav class="white lighten-1" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="https://www.ticketmaster.ca/" class="brand-logo center"><img src="https://pbs.twimg.com/profile_images/1063091728398323712/zGJd2_dQ_400x400.jpg" alt="ticketmaster" height="50px" width="50px";/></a>
        </div>

    </nav>
    <div class="section no-pad-bot" id="index-banner">
      <div class="container centered centered-align">
        <table align="center" class="highlight center-align">
            <tr>
                <th>Date</th>
                <th>Location</th>
                <th>Visitor</th>
                <th>Home</th>
                <th>Compare</th>
            </tr>

            <?php

            $sum=0;

            ?>
            <!-- populate table from mysql database -->
            <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                 <!-- populate with names of columns in mysql database -->
                 <td><?php echo $row[date_time];?></td>

                 <td><?php echo $row[game_location];?></td>

                 <td><?php echo $row[visitor_team];?></td>
                 <td><?php echo $row[home_team];?></td>
                 <td>
                   <?php echo
                    "
                      <a class='waves-effect waves-light btn modal-trigger'
                      href='compareTeams.php?date_time=".$row[date_time]."&game_location=".$row[game_location]."&visitor_team=".$row[visitor_team]."&home_team=".$row[home_team]."'>+</a>
                    "
                   ?>
                 </td>

             </tr>

         <?php endwhile;?>

     </table>
   </div>
   </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  </body>
</html>
