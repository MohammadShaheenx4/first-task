<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css">
  <title>Contact Us</title>
</head>

<body>

<?php include 'header.html'; ?>

  <main>
    <div class="contactus">
      <h1>Contact Us</h1>
      <p>If you have any questions or inquiries, please feel free to contact us:</p>
      <p>
        Email:
        <a href="mailto:Mohammad_Shaheen@gmail.com">Mohammad_Shaheen@gmail.com</a>
      </p>

      <p>You can also use the form below to send us a message:</p>

      <form action="#" method="get">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br>
        <input type="submit" value="Send">
      </form>
    </div>
  </main>

  <?php include 'footer.html'; ?>

</body>

</html>
