<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Photo Album - AutoCare</title>
</head>

<body>
    <?php include 'header.html'; ?>

    <main>
        <div class="album-container">
            <h1>Photo Album</h1>
            <section class="album-introduction">
                <p>
                    Welcome to our photo album! Here you can explore a collection of photos showcasing our work, events, and highlights from AutoCare. Enjoy browsing through the moments we've captured.
                </p>
            </section>

            <section class="photo-gallery">
                <div class="photo-card">
                    <img src="sorento.png" alt="Photo 1" class="photo-image">
                    <p>Classic Car Restoration</p>
                </div>

                <div class="photo-card">
                    <img src="picanto.jpg" alt="Photo 2" class="photo-image">
                    <p>Performance Tuning Session</p>
                </div>

                <div class="photo-card">
                    <img src="bmw.jpg" alt="Photo 3" class="photo-image">
                    <p>Electric Vehicle Conversion</p>
                </div>

               
            </section>
        </div>
    </main>

    <?php include 'footer.html'; ?>
</body>

</html>
