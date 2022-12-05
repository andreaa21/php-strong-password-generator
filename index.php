<?php

/*

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli  da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

*/

var_dump($_GET);

require __DIR__ . '/functions.php';

if (!empty($_GET['length'])) {
    if ($_GET['length'] < 8 || $_GET['length'] > 32) {
        $output = 'errore!';
    } else {
        $password = getPassword($psw_length);
        session_start();
        $_SESSION['password'] = $password;
        header('Location: ./landing.php');
        var_dump($password);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

    <title>Strong Password Generator</title>
</head>

<body>



    <div class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <h1>
                    Strong Password Generator
                </h1>
                <h3>
                    Genera una password sicura
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center p-5">
                <div class="text me-5 d-flex align-items-center h-100">
                    <span>
                        lunghezza Password:
                    </span>
                </div>
                <form class="d-flex" action="./index.php" method="GET">
                    <input type="number" class="form-control" name="length" min="8" max="32">
                    <div class="ms-3">
                        <button class="btn btn-primary" type="submit">
                            invia
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


</body>

</html>