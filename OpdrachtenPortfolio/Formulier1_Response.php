<?php 
include 'header.php'; 

$naam = $_POST['naam'] ?? '';
$geboortedatumInput = $_POST['geboortedatum'] ?? '';

$leeftijd = null;
$isJarig = false;
$veldenGevuld = false;

if (!empty($naam) && !empty($geboortedatumInput)) {
    $veldenGevuld = true;

    $geboortedatum = new DateTime($geboortedatumInput);
    $vandaag = new DateTime();
    $leeftijdInterval = $geboortedatum->diff($vandaag);
    $leeftijd = $leeftijdInterval->y;

    // 4. Controleren of de gebruiker jarig is (dag en maand komen overeen)
    if ($geboortedatum->format('m-d') === $vandaag->format('m-d')) {
        $isJarig = true;
    }
}
?>

<div class="container mt-5">
    <div class="card" style="max-width: 600px;">
        <div class="card-header bg-white">
            <strong>Response</strong>
        </div>
        <div class="card-body">
            <?php if ($veldenGevuld): ?>
                <!-- Resultaten zoals op de afbeelding -->
                <h2>Hi <?php echo htmlspecialchars($naam); ?></h2>
                <p class="fs-5">Je bent <?php echo $leeftijd; ?> jaar oud.</p>

                <?php if ($isJarig): ?>
                    <p class="text-success fw-bold">Gefeliciteerd, je bent vandaag jarig!</p>
                <?php endif; ?>

            <?php else: ?>
                <!-- Foutmelding als niet alles is ingevuld -->
                <p class="text-danger">Fout: Niet alle velden zijn ingevuld.</p>
            <?php endif; ?>
        </div>
    </div>
    
    <a href="formulier.php" class="btn btn-secondary mt-3">Terug naar formulier</a>
</div>

<?php include 'footer.php'; ?>