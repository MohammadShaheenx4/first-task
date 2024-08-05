<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Car Listings - AutoCare</title>
</head>

<body>
    <?php include 'header.html'; ?>

    <main>
        <div class="car-listings">
            <div class="car-card">
                <img src="picanto.jpg" alt="Picanto" class="car-image">
                <h3>Picanto</h3>
                <p>Compact and efficient</p>
                <div class="car-details">
                    <span class="car-seats">5 seats</span>
                    <span class="car-year">2022</span>
                    <span class="car-price">$44.00/day</span>
                </div>
            </div>
            <div class="car-card">
                <img src="bmw.jpg" alt="Sedan" class="car-image">
                <h3>BMW</h3>
                <p>Comfortable and spacious</p>
                <div class="car-details">
                    <span class="car-seats">5 seats</span>
                    <span class="car-year">2021</span>
                    <span class="car-price">$55.00/day</span>
                </div>
            </div>
            <div class="car-card">
                <img src="sorento.png" alt="SUV" class="car-image">
                <h3>SORENTO</h3>
                <p>Rugged and powerful</p>
                <div class="car-details">
                    <span class="car-seats">7 seats</span>
                    <span class="car-year">2023</span>
                    <span class="car-price">$75.00/day</span>
                </div>
            </div>
            <!-- Add more car-card divs as needed -->
        </div>
    </main>

    <?php include 'footer.html'; ?>
</body>

</html>
