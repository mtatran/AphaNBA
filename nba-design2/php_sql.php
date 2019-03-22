<?php
// (1) Connection parameters
$dbhost = 'mansci-db.uwaterloo.ca';
$dbuser = 'r2abdall';
$dbpassword = 'H3llo$#@!';
$dbname = 'r2abdall';
// (2) mysqli connection variable
$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if ($mysqli->connect_errno)
{
echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
}
echo '<p>' . $mysqli->host_info . '</p>';
// (3) SQL statement
$sql = "SELECT a.aid, a.aname "
	. "FROM aircraft a "
	. "WHERE a.aname LIKE CONCAT(?, '%')";
	// LIKE with prepared statement
// (4a) Prepared statement, stage 1: prepare
$stmt = $mysqli->prepare($sql);
// (4b) Bind a PHP variable, $search as a string parameter
$search = 'Boeing';
// "i" for integer, "d" for double, "s" for string, "b" for blob
$stmt->bind_param('s', $search);
// (5) Execute prepared statement
$stmt->execute();
// (6) Bind selected columns to PHP variables
$stmt->bind_result($aircraft_id, $aircraft_name);
// (7) fetch values
// <ul> is unordered list
echo '<ul>';
while ($stmt->fetch())
{
// printf is print format, <li> is list item
printf ('<li>%s (%s)</li>', $aircraft_name, $aircraft_id);
}
echo '</ul>';
// (8) close statement and mysqli connection
$stmt->close();
$mysqli->close();
?>
