<?php
require_once __DIR__ . '/function.php';

session_start();

    if(!empty($_GET['pass-lenght'])){
        $pass_lenght= intval($_GET['pass-lenght']) ? intval($_GET['pass-lenght']) : rand(10,13);
        $password= generatePassword($_GET['pass-lenght']);
        echo $password;
        $_SESSION['password']=$password;
        header('Location: ./response.php');
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Password generator</title>
</head>
<body>
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <form action="index.php" method="GET">
                    <input type="number" name="pass-lenght">
                    <button>Genera password</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>