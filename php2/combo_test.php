

<HTML>

<head>

<title>Dynamic Drop Down List</title>

</head>

<Body background="as.jpg">

<form id="form1" name="form1" method="post" action="<?php $_SERVER['PHP_SELF']?>">

Usuarios:

<select name='NEW'>

<option value="">--- Select ---</option>

<?php

mysql_connect("127.0.0.1","root","Camaro1$");

mysql_select_db("reservascourt2");

$select="usuario";

if(isset($select)&&$select!=""){

$select=$_POST['NEW'];

}

?>

<?php

$list=mysql_query("select * from usuario order by nombre asc");

while($row_list=mysql_fetch_assoc($list)){

?>

<option value="<?php echo $row_list['id_usuario']; ?>">

 <?php if($row_list['id_usuario']==$select){ echo "selected"; } ?>

 <?php echo $row_list['nombre']; ?>

</option>

<?php

}

?>

</select>

</form>

</body>

</html>
