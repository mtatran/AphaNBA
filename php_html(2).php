<?php
 $name = 'Only PHP';
 echo 'Learning '. $name;
 ?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<p>
 <?php
 $name = 'PHP embedded in HTML';
 echo 'Learning '. $name;
 ?>
</p>
</body>
</html>

<p>
 <label for="learn">Learning</label>
 <input type="text" name="learn" style="width: 300px;" value="<?php echo $name . ' way 2';?>">
 <p>

<?php
$name = 'HTML embedded in PHP';
echo '<p>Learning ' . $name . '.</p>';
?>
