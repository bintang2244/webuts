<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Profil Pengguna</h1>
    </header>
    
    <main>
        <section id="input-form">
            <h2>Input Data</h2>
            <form id="userForm">
                <label for="name">Nama:</label>
                <input type="text" id="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" required>
                
                <label for="gender">Jenis Kelamin:</label>
                <select id="gender" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                
                <label for="phone">Nomor Telepon:</label>
                <input type="tel" id="phone" required>
                
                <label for="address">Alamat:</label>
                <textarea id="address" required></textarea>
                
                <label for="description">Deskripsi:</label>
                <textarea id="description" required></textarea>
                
                <button type="submit">Kirim</button>
            </form>
        </section>

        <section id="output">
            <h2>Output Data</h2>
            <div id="userData"></div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Tim Developer Aplikasi</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .item {
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Data Diri</h1>
        <div class="item"><strong>Nama:</strong> bintang.ahmad</div>
        <div class="item"><strong>NIM:</strong> 2023071073</div>
        <div class="item"><strong>Jenis Kelamin:</strong> Laki-laki</div>
        <div class="item"><strong>No Telepon:</strong> 0812-3456-7890</div>
        <div class="item"><strong>Alamat:</strong> Jl. Contoh No. 123, Kota ABC</div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bootstrap Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <!-- content will go here -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
</nav>


<!DOCTYPE html>
<html>
<head>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
      </ul>
    </div>
  </nav>

  
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Akun email anda</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan alamat email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Kata Sandi</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan kata sandi">
    </div>
    <button type="submit" class="btn btn-primary">Masuk</button>
  </form>

  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Layanan kami</h5>
      <p class="card-text">Kami menawarkan berbagai layanan profesional yang di rancang untuk membantu anda.</p>
      <a href="#" class="btn btn-primary">Lihat Detail</a>
    </div>
  </div>

  <h1>Kontak Kami</h1>
  <form action="proses_kontak.php" method="post"> 
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="Doni"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="doni@upjacid"><br><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" id="laki-laki" name="gender" value="L">
    <label for="laki-laki">Laki-laki</label><br>
    <input type="radio" id="perempuan" name="gender" value="P" checked>
    <label for="perempuan">Perempuan</label><br><br>

    <label for="tgl_lahir">Tanggal Lahir:</label>
    <input type="date" id="tgl_lahir" name="tgl_lahir" value="1994-05-08"><br><br>

    <input type="submit" value="Submit">
  </form> 
</body>
</html>


<!DOCTYPE html>
<html>
<head>
<title>Website</title>
<style>
body {
  font-family: Arial, sans-serif;
}

.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

.nav-links {
  display: flex;
  gap: 20px;
}

.nav-links a {
  text-decoration: none;
  color: #000;
}

.content {
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-top: 20px;
}

.image-container {
  width: 200px;
  height: 200px;
  border: 1px solid #ccc;
  overflow: hidden;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.text {
  padding: 20px;
  border: 1px solid #ccc;
}

footer {
  text-align: center;
  padding: 20px;
  background-color: #f0f0f0;
}
</style>
</head>
<body>

<div class="container">
  <h1>Website</h1>
  <div class="nav-links">
    <a href="#">Home</a>
    <a href="#">About Us</a>
  </div>
</div>
  
</p>
<a href="#">Selengkapnya</a>
</div>
</div>

<footer>
<p>Copyright &copy; 2023 Website. All rights reserved.</p>
<p>Link: <a href="https://www.google.com/">Google</a>, <a href="https://www.facebook.com/">Facebook</a></p>
<p>Link kampus: <a href="https://www.upj.edu/">UPJ</a></p>
</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami | Zahid</title>
</head>
<body>
    
<form action="konfirmasi.php" method="POST">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="gender">Jenis Kelamin:</label><br><br>
    <input type="radio" name="gender" value="Laki-Laki">Laki-laki<br>
    <input type="radio" name="gender" value="Perempuan">Perempuan<br>

    <label for="birthday">Tanggal Lahir:</label>
    <input type="date" id="birthday" name="birthday">

    <input type="submit" value="submit">
</form>

</body>
</html>



<css
/* Reset dasar */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Gaya umum */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
    margin: 20px;
}

/* Header */
header {
    background: #007bff;
    color: white;
    padding: 20px 0;
    text-align: center;
    border-radius: 5px;
}

/* Bagian utama */
main {
    margin-top: 20px;
}

/* Section */
section {
    background: white;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
}

/* Form */
form {
    display: flex;
    flex-direction: column;
}

/* Label */
label {
    margin-bottom: 5px;
    font-weight: bold;
}

/* Input dan textarea */
input, select, textarea {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    transition: border-color 0.3s;
}

/* Fokus pada input */
input:focus, select:focus, textarea:focus {
    border-color: #007bff;
    outline: none;
}

/* Tombol */
button {
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

/* Hover pada tombol */
button:hover {
    background-color: #218838;
}

/* Output data */
#userData {
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 4px;
    background: #f9f9f9;
}

/* Footer */
footer {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}



<?php
// Koneksi ke database
$conn = new mysqli("localhost", "username", "password", "database");

// Periksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel
$sql = "SELECT * FROM `nama_tabel`";
$result = $conn->query($sql);

// Periksa hasil query
if ($result->num_rows > 0) {
  // Tampilkan data dalam tabel HTML
  echo "<table>
  <tr>
  <th>id</th>
  <th>nama</th>
  <th>email</th>
  <th>jenis_kelamin</th>
  <th>no_telepon</th>
  <th>alamat</th>
  <th>deskripsi</th>
  <th>latitude</th>
  <th>longitude</th>
  </tr>";

  // Loop melalui setiap baris data
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["id"] . "</td>
    <td>" . $row["nama"] . "</td>
    <td>" . $row["email"] . "</td>
    <td>" . $row["jenis_kelamin"] . "</td>
    <td>" . $row["no_telepon"] . "</td>
    <td>" . $row["alamat"] . "</td>
    <td>" . $row["deskripsi"] . "</td>
    <td>" . $row["latitude"] . "</td>
    <td>" . $row["longitude"] . "</td>
    </tr>";
  }

  echo "</table>";
} else {
  echo "Tidak ada data.";
}


// Tutup koneksi
$conn->close();
?>
 
 
