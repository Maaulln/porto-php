<?php
include '../../services/database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        die("Data tidak boleh kosong!");
    }

    $stmt = $conn->prepare("INSERT INTO kontak (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
      header("Location: index.php");
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<section class="section contact" id="contact" aria-label="contact">
          <div class="container">

            <div class="contact-content">

              <p class="section-subtitle">Contact</p>

              <h2 class="h2 section-title">Get In Touch</h2>

              <p class="section-text">
                Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. ET,
                Monday through
                Friday
              </p>

              <ul class="contact-list">

                <li class="contact-item">
                  <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                  <address class="contact-link">
                    Malang, East Java, Indonesia
                  </address>
                </li>

                <li class="contact-item">
                  <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

                  <a href="tel:+6282141482282" class="contact-link">+6282141482282</a>
                </li>

                <li class="contact-item">
                  <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

                  <a href="mailto:maulwaan2@gmail.com" class="contact-link">maulwaan2@gmail.com</a>
                </li>
              </ul>

            </div>

            <form action="" class="contact-form" method="POST">

              <input type="text" name="name" aria-label="name" placeholder="Name" required class="input-field">

              <input type="email" name="email" aria-label="email" placeholder="Email" required
                class="input-field">

              <textarea name="message" aria-label="message" placeholder="Message" required class="input-field"></textarea>

              <button type="submit" class="submit-btn" name="submit">
                <span class="span">Submit</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>
        </section>