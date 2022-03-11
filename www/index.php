<?php 
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDI3</title>
</head>
<body>

<!--<form method="POST">
    <label for="search">Busqueda</label>
    <input type="text" name="search">
    <input type="submit" value="Buscar">
    <a href="index.php">Limpiar busqueda</a>
</form>-->
<h1>Busqueda de eventos por zonas</h1>
<form method="POST">
<label for="localidades">Filtrar por localidades</label>
<input list="localidades" name="search">
<datalist id="localidades">
<?php $QUERY = 'SELECT * FROM localidades';?>
    <?php $result = mysqli_query($link, $QUERY);?>
    <?php
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo '<option value="'.$row['localidad'].'">
            '; 
        }
    }
    ?>

</datalist>
<input type="submit" value="Buscar">
<a href="index.php">Limpiar busqueda</a>
</form>


<form method="POST">
<label for="categorias">Filtrar por categorias</label>
<input list="categorias" name="search2">
<datalist id="categorias">
<?php $QUERY = 'SELECT * FROM categorias';?>
    <?php $result = mysqli_query($link, $QUERY);?>
    <?php
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo '<option value="'.$row['categoria'].'">
            '; 
        }
    }
    ?>

</datalist>
<input type="submit" value="Buscar">
<a href="index.php">Limpiar busqueda</a>
</form>

<?php

$busqueda = htmlspecialchars($_POST['search2']);



$QUERY = 'SELECT * FROM actividades_vista' ;?>
<?php $result = mysqli_query($link, $QUERY);?>
<?php
if($result){
    while($row = mysqli_fetch_assoc($result)){
        if($row["categoria"] == $busqueda){
        echo '  <table>
                <tr>
                <td>'.$row["categoria"].'<td/>
                <td>'.$row["nombre"].'<td/>
              <tr/>
              </table>
        '; 
        }
    }

    
}



?>

<?php

$busqueda = htmlspecialchars($_POST['search']);



$QUERY = 'SELECT * FROM actividades_vista' ;?>
<?php $result = mysqli_query($link, $QUERY);?>
<table>
<tr>
                <th>Categoria</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Mail</th>
                <th>Web</th>
                
</tr>
<?php
if($result){
    while($row = mysqli_fetch_assoc($result)){
        if($row["localidad"] == $busqueda){
        echo ' 
                
                <tr>
                <td>'.$row["categoria"].'<td/>
                <td>'.$row["nombre"].'<td/>
                <td>'.$row["direccion"].'<td/>
                <td>'.$row["telefono"].'<td/>
                <td>'.$row["mail"].'<td/>
                <td>'.$row["web"].'<td/>
              </tr>
              
        '; 
        }
    }

    
}

?>

</table>

<?php /*$QUERY = 'SELECT * FROM actividades_vista';?>
    <?php $result = mysqli_query($link, $QUERY);?>
    <?php
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>
                    <td>'.$row["localidad"].'<td/>
                    <td>'.$row["categoria"].'<td/>
                  <tr/>
            '; 
        }
    }
    */?>
   

   

   
</body>
</html>
