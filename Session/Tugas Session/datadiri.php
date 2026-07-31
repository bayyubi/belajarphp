<?php
session_start();
$error_msg = "";

if (isset($_SESSION['error'])) {
    $error_msg = $_SESSION['error'];
    unset($_SESSION['error']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $telepon = trim($_POST['telepon']);

    if (empty($nama) || empty($email) || empty($telepon)) {
        $error_msg = "Semua field wajib diisi!";
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = "Format email tidak valid!";
    } else {
        // Simpan data ke sesi
        $_SESSION['step1'] = [
            'nama' => $nama,
            'email' => $email,
            'telepon' => $telepon
        ];
        // Lanjut ke Langkah 2
        header("Location: step2.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Langkah 1: Data Diri</title></head>
<body>
    <h2>Langkah 1: Data Diri</h2>
    <?php if ($error_msg) echo "<p style='color:red;'>$error_msg</p>"; ?>
    <form method="POST" action="">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" value="<?php echo $_SESSION['step1']['nama'] ?? ''; ?>"><br><br>
        
        <label>Email:</label><br>
        <input type="text" name="email" value="<?php echo $_SESSION['step1']['email'] ?? ''; ?>"><br><br>
        
        <label>Nomor Telepon:</label><br>
        <input type="text" name="telepon" value="<?php echo $_SESSION['step1']['telepon'] ?? ''; ?>"><br><br>
        
        <button type="submit">Lanjut ke Langkah 2</button>
    </form>
</body>
</html>