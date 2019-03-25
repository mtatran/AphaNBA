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
                 <?php
                 $row[1]= $date_time;
                 ?>
                 <td><?php echo $row[game_location];?></td>
                 <?php
                 $row[1]= $game_location;
                 ?>
                 <td><?php echo $row[visitor_team];?></td>
                 <td><?php echo $row[home_team];?></td>
                 <td> <a class="waves-effect waves-light btn modal-trigger" href="compareTeams.php?date_time='.$date_time.',game_location='.$game_location.'">+</a></td>
<?php
                 echo '<p>';
             	printf ('<div>%s</div>', $date_time);
                 echo '</p>';
?>
             </tr>

         <?php endwhile;?>

     </table>

     while ($stmt->fetch())
     {
     	$something[$project_id] = $project_name;
     }
     foreach($something as $id => $name) {
     	$projectSql = "SELECT t.taskName"
     	." FROM in_task it,has_task ht,task t"
     	." WHERE ht.task_Id=it.task_Id AND it.member_Id=".$memberId." AND ht.projects_Id=".$id." AND it.task_id=t.task_id";
     	$projectStmnt = $mysqli->prepare($projectSql);
     	$projectStmnt->execute();
     	$projectStmnt->bind_result($task_name);
     	echo '<p>';
     	printf ('<div>%s</div>', $name);
       echo '<a class="waves-effect waves-light btn modal-trigger" href="projectoverview.php?project_id='.$id.'">+</a>';
     	echo '</p>';
     	echo '<p3>';
     	echo '<ul>';
     	while($projectStmnt->fetch()) {
     		printf('<li>%s</li>', $task_name);
     	}
     	echo '</ul>';
     echo '</p3>';
     }
     echo '</div><br>';
     /* close statement and connection*/
     $stmt->close();
     $mysqli->close();
     ?>





  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  </body>
</html>
