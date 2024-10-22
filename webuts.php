<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <script src="script.js" defer></script> <!-- Link to your JavaScript file -->
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Home Section</h2>
            <p>This is the home section of your website.</p>
        </section>

        <section id="about">
            <h2>About Section</h2>
            <p>This section contains information about you or your website.</p>
        </section>

        <section id="contact">
            <h2>Contact Section</h2>
            <p>Here’s how people can get in touch with you.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Your Name. All rights reserved.</p>
    </footer>
</body>
</html>

<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // sesuaikan dengan username MySQL Anda
$password = ""; // sesuaikan dengan password MySQL Anda
$dbname = "portofolio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data proyek
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- Link ke CSS -->
    <title>Portofolio Pribadi</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="services.php">Services</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Selamat Datang di Portofolio Saya</h1>
        <section>
            <h2>Proyek Saya</h2>
            <ul>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a href='" . $row["link"] . "'>" . $row["title"] . "</a> - " . $row["description"] . "</li>";
                    }
                } else {
                    echo "Tidak ada proyek yang ditemukan.";
                }
                ?>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Portofolio Pribadi</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>