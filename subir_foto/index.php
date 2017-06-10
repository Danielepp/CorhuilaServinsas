<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

            <table>
        <center>    
        
        <br><br>
        <?php
        require_once 'conexion.php';
        $sql=  mysql_query("select * from obligacion1");
        while($res=  mysql_fetch_array($sql)){
            echo $res["nombre"]."<br>";
            echo '<img src="'.$res["foto"].'" width="100" heigth="100"><br>';
        }
        ?>
    </body>
</html>
