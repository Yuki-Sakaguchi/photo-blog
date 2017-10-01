<!DOCTYPE html>
<html lang="js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>helo.php</h1>
        <p><?php echo $message ?></p>
        <form action="/helo" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="text" name="str">
            <input type="submit">
        </form>
    </body>
</html>
