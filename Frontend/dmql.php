<!DOCTYPE html>
<head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {listt-style: none;}
</style>
</head>
<body>
<h2>Enter information regarding bmi</h2>
<ul>
<form name="insert" action="dmql.php" method="POST" >
<li>bmi_id</li><li><input type="number" name="bmi_id" /></li>
<li>age</li><li><input type="number" name="age" /></li>
<li>height</li><li><input type="number" name="height" /></li>
<li>weight</li><li><input type="number" name="weight" /></li>
<li>bmi</li><li><input type="number" step="0.01" name="bmi" /></li>
<li><input type="submit" /></li>
</form>
</ul>
</body>
</html>
<?php
$db = pg_connect("host=localhost port=5432 dbname=dmql user=postgres password=Vaishnav@123");
if(!$db) {
    echo "Error : Unable to open database\n";
 } else {
    echo "Opened database successfully\n";
 }
// $query = "INSERT INTO book VALUES ('$_POST[bookid]','$_POST[book_name]',
// '$_POST[author]','$_POST[publisher]','$_POST[dop]',
// '$_POST[price]')";
// $result = pg_query($query); 
?>