<?php
/*
Template Name: back

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Введите артикул товара:</h1>
        <input type="text" name="art">
        <input type="submit" name="search_art" value="OK" />
    </form>
    <?php
if (isset($_POST['search_art'])) {
    $art = $_POST['art'];

    $client = new SoapClient('https://api.forum-auto.ru/wsdl', ["exceptions" => false]);

    $login = '493358_stroyzar';
    $pass = 'sAVDkrEbqd';
    
    $result = $client->listGoods($login, $pass, $art);
    if (is_soap_fault($result)) {
        echo "Ошибка SOAP: (Код ошибки: {$result->faultcode}, строка: {$result->faultstring}, детали: {$result->detail})";

    } else {
        echo '<pre>' . var_export($result, true) . '</pre>';
    }

}
?>
</body>
</html>