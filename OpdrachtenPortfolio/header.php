<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mijn Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<!-- Navigatiebalk -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Talland</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="home1.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="PHP1_opdracht.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutme.php">Over Mij</a></li>
               
                <!-- Dropdownmenu voor Opdrachten -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="opdrachtenDropdown" role="button" data-bs-toggle="dropdown">Opdrachten</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="php3_variabelen.php">PHP3 Variabelen</a></li>
                        <li><a class="dropdown-item" href="formulier.php">PHP4 Formulier</a></li>
                        <li><a class="dropdown-item" href="calculator.php">PHP5 Calculator</a></li>
                        <li><a class="dropdown-item" href="fruit.php">PHP Laatste opdracht</a></li>
                        <li><a class="dropdown-item" href="php7_arrays.php">PHP7 Arrays</a></li>
                    </ul>
 
                </li>
            </ul>
           
            <!-- Zoekbalk -->
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
</head>
<body>