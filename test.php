<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $db = mysqli_connect('localhost', 'root', '', 'portfiolo');
    if (mysqli_error($db)) {
        die('Their was an error in your code');
    }else {
        if (isset($_POST['login'])) {
            echo 'me';
            //   $messages = 'You have been connected to your database sucessfuly';
            // $_POST;

        }

    }
    ?>
    <input type="submit" value="Log in" name='login'>
</body>
</html>