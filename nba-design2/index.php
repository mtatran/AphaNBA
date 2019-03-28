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
    $sql = "SELECT games.date_time, games.game_location, games.visitor_team, games.home_team FROM games WHERE games.date_time>CURRENT_DATE";
    $search_result = mysqli_query($mysqli, $sql);

    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
    ?>

        <table name="dataTable">
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
                 <td> <a class="waves-effect waves-light btn modal-trigger" href="compareTeams.php?date_time='.$row[date_time].',game_location='.$row[game_location].'">+</a></td>

             </tr>

         <?php endwhile;?>

     </table>






  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  </body>
</html>
