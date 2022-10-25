<?php

 $connection = mysqli_connect("localhost", "root", "", "test");
 if (!$connection) {
     die ("Связь не установлена: " .mysqli_connect_error());
 }

 $query = mysqli_query($connection, "SELECT * FROM `resul`");

 $resul = [];

 while ($row = mysqli_fetch_assoc($query)){
        
    $resul[] = $row;
 }
    ?>

<html>
    <head>
    <title>Калькулятор</title>
    </head>
<body>
    <form method="post">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <select name="op">
            <option value="+">Сложение</option>
            <option value="-">Вычитание</option>
            <option value="/">Деление</option>
            <option value="*">Умножение</option>
        </select>
        <input type="submit" name="Вычисление" value="Вычисление">
    </form>

<?php foreach ($resul as $result) { ?>
    <div>
        <span><?php echo $result["id"]; ?></span> 
        <?php echo $result ["result"]; ?>
</div>
<?php }?>
        
</body>
</html>

<?php 
    if(isset($_POST['Вычисление'])){
        $num1 = $_POST ['num1'];
        $num2 = $_POST ['num2'];
        $operation = $_POST ['op'];

        if ($operation == '+'){
        echo $num1 + $num2;
        mysqli_query($connection, "INSERT INTO resul(result) VALUES ('" . $_REQUEST['op'] . "')");
        }else if ($operation == '-'){
        echo $num1 - $num2;
        mysqli_query($connection, "INSERT INTO resul(result) VALUES ('" . $_REQUEST ['op'] . "')");
        }else if ($operation == '/'){
        echo $num1 / $num2;
        mysqli_query($connection, "INSERT INTO resul(result) VALUES ('" . $_REQUEST ['op'] . "')");
        }else if ($operation == '*')
        echo $num1 * $num2;
        mysqli_query($connection, "INSERT INTO resul(result) VALUES ('" . $_REQUEST ['op'] . "')");

        }

?>

    