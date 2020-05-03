<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show dynamic Drop Down List in PHP by fetching MySQL database data</title>
</head>

<body>


<?php

include 'dbconfig.php';

$subjectName = "SELECT * FROM usuario";

$subject = mysql_query( $subjectName, $conn );

?>
<h2> Dynamic Drop Down List </h2>
 
 <form method="post" action=" ">
 
 <label >Subject</label>
 
 <select name="subject_names">
 
 <option>---Select subject---</option>
 
 <?php while($subjectData = mysql_fetch_array($subject)){ ?>
 
<option value="<?php echo $subjectData['id_usuario'];?>"> <?php echo $subjectData['nombre'];?>

</option>

<?php }?> 

 </select>
 
 </form>

</body>
</html>
