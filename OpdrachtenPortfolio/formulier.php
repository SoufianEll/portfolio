<?php include 'header.php'; ?>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Vul hier je gegevens in</h1>
 
        <!-- Formulier om naam en geboortedatum in te vullen -->
        <form method="POST" action="Formulier1_Response.php">
            <div class="mb-3">
                <label for="naam" class="form-label">Naam:</label>
                <input type="text" class="form-control" id="naam" name="naam" required>
            </div>
            <div class="mb-3">
                <label for="E-mailadres" class="form-label">E-mailadres</label>
                <input type="email" class="form-control" id="E-mailadres" Naam="email" required>
            </div>
            <div class="mb-3">
                <label for="geboortedatum" class="form-label">Geboortedatum:</label>
                <input type="date" class="form-control" id="geboortedatum" name="geboortedatum" required>
            </div>
            <button type="submit" class="btn btn-primary">Verstuur</button>
        </form>
    </div>
</body>
 
<?php include 'footer.php'; ?>