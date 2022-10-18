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
</body>
</html>

<?php 
    if(isset($_POST['Вычисление'])){
        $num1 = $_POST ['num1'];
        $num2 = $_POST ['num2'];
        $operation = $_POST ['op'];

        if ($operation == '+'){
            echo $num1 + $num2;
        }else if ($operation == '-'){
            echo $num1 - $num2;
        }else if ($operation == '/'){
        echo $num1 / $num2;
        }else if ($operation == '*')
        echo $num1 * $num2;

        }
?>


    