<?php 
require "config/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $BeratBadan = $_POST["Berat Badan"];
    $TinggiBadan = $_POST["Tinggi Badan"];
    $LingkarKepala = $_POST["Lingkar Kepala"];
    $JenisKelamin = $_POST["Jenis Kelamin"];
    
    $sql = "INSERT INTO bayi (BeratBadan, TinggiBadan, LingkarKepala, JenisKelamin) values (?, ?, ?)";
    // php 8.2
    $row = $koneksi->execute_query($sql, [$BeratBadan, $TinggiBadan, $LingkarKepala, $JenisKelamin]);



    header("location:bayi.php")

}
?> 
