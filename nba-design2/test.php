
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>NBA</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<head>
  <style>
.collapsible {
  background-color: #D00509;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
</style>

  <?php
  session_start();

  error_reporting(E_ALL ^ E_NOTICE);
  // mysqli connection via user-defined function

  include('./my_connect.php');

  ?>
  <button class=collapsible> Rebounds </button>
  <div class="content">
  <?php
  $mysqli = get_mysqli_conn();
  $team="Atlanta Hawks";
  //gets all users orders
  $sql = "SELECT players.player_name, players.rebounds FROM players WHERE players.player_team = '".$team."'  ORDER BY players.rebounds DESC limit 5";
  $search_result = mysqli_query($mysqli, $sql);

  //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
  ?>

      <table name="dataTable">
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
 </div>
   <button class=collapsible> Assists </button>
   <div class="content">
<?php
   $mysqli = get_mysqli_conn();
   $team="Atlanta Hawks";
   //gets all users orders
   $sql = "SELECT players.player_name, players.assists FROM players WHERE players.player_team = '".$team."'  ORDER BY players.assists DESC limit 5";
   $search_result = mysqli_query($mysqli, $sql);

   //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
   ?>

       <table name="dataTable">
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


            </tr>

        <?php endwhile;?>

    </table>
</div>
    <button class=collapsible> Steals </button>
    <div class="content">
    <?php
       $mysqli = get_mysqli_conn();
       $team="Atlanta Hawks";
       //gets all users orders
       $sql = "SELECT players.player_name, players.steals FROM players WHERE players.player_team = '".$team."'  ORDER BY players.steals DESC limit 5";
       $search_result = mysqli_query($mysqli, $sql);

       //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
       ?>

           <table name="dataTable">
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

                    <td><?php echo $row[steals];?></td>


                </tr>

            <?php endwhile;?>

        </table>
</div>
<button class=collapsible> Blocks </button>
<div class="content">
      <?php
         $mysqli = get_mysqli_conn();
         $team="Atlanta Hawks";
         //gets all users orders
         $sql = "SELECT players.player_name, players.blocks FROM players WHERE players.player_team = '".$team."'  ORDER BY players.blocks DESC limit 5";
         $search_result = mysqli_query($mysqli, $sql);

         //echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
         ?>

             <table name="dataTable">
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
          <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
</script>
</head>
</html>
