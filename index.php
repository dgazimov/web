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
        <input type="submit" name="calculation" value="calculation">
    </form>

</body>
</html>


<?php

 $connection = mysqli_connect("localhost", "root", "", "test");
 if (!$connection) {
     die ("Связь не установлена: " .mysqli_connect_error());
 }

 $query = mysqli_query($connection, "SELECT * FROM `resul` ORDER BY `id` DESC limit 7");

 $resul = [];
 $num1 = [];
 $num2 = [];
 $operation = [];

 while ($row = mysqli_fetch_assoc($query)){
        
    $resul[] = $row;
 }
    
    if(isset($_POST['calculation'])){
        $num1 = $_POST ['num1'];
        $num2 = $_POST ['num2'];
        $operation = $_POST ['op'];

        if ($operation == '+'){
            $summa = $num1 + $num2;
            echo $summa;
            mysqli_query($connection, "INSERT INTO `resul`(`result`, `num1`, `num2`, `op`) VALUES ('$summa','$num1','$num2','$operation')");
        }else if ($operation == '-'){
            $summa = $num1 - $num2;
            echo $summa;
            mysqli_query($connection, "INSERT INTO `resul`(`result`, `num1`, `num2`, `op`) VALUES ('$summa','$num1','$num2','$operation')");
        }else if ($operation == '/'){
            $summa = $num1 / $num2;
            echo $summa;
            mysqli_query($connection, "INSERT INTO `resul`(`result`, `num1`, `num2`, `op`) VALUES ('$summa','$num1','$num2','$operation')");
        }else if ($operation == '*'){
            $summa = $num1 * $num2;
            echo $summa;
            mysqli_query($connection, "INSERT INTO resul('result', 'num1', 'num2', 'op') VALUES ('$summa', '$num1', '$num2','$operation')");
        }
    }
    foreach ($resul as $result) { ?>
        <div>
            <span><?php echo $result["id"]; ?></span> 
            <?php echo $result ["result"]; ?>
    </div>
    <?php }?>