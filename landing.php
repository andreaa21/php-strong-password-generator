<?php

session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

    <title>Landing page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col p-5">
                <div class="alert alert-success">
                    <?php echo $_SESSION['password']; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>