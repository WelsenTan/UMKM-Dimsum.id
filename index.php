<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <script src="index.js" defer></script>
  </head>
  <body>
  <?php

$host       = "localhost";
$usename    = "root";
$password   = "";
$database   = "dimsum.id";

$koneksi    = new mysqli($host, $usename, $password, $database);


?>
    <header>
      <div class="headerLeft">
        <img src="Gambar/Logo_dimsum.png" alt="" />
        <h2>Dimsum.id</h2>
      </div>
      <ul class="headerRight">
        <li class="headerLink"><a href="#Home">Home</a></li>
        <li class="headerLink bold"><a href="#product">Product</a></li>
        <li class="headerLink"><a href="#about">About Us</a></li>
      </ul>
    </header>
    <main>
      <section class="landingPage" id="Home">
        <div class="left">
          <img
            src="Gambar/Logo_dimsum.png"
            alt=""
            class="brandImg"
          />
          <div class="brand">
            <h1>Dimsum.id</h1>
            <h2>One Bite, A Million Delights</h2>
          </div>
        </div>
        <div class="right">
          <img
            src="Gambar/ambil dr google/Dimsum_Piring_2-removebg-preview.png"
            alt=""
          />
        </div>
        <img
          src="Gambar/chick_icon-removebg-preview.png"
          alt=""
          class="hewan ayam"
        />
        <img
          src="Gambar/shrimp_icon-removebg-preview.png"
          alt=""
          class="hewan udang"
        />
        <img
          src="Gambar/crab_icon-removebg-preview.png"
          alt=""
          class="hewan kepiting"
        />
      </section>
      <section class="productPage" id="product">
        <div class="imgContainer">
          <img class="mainImg"
            src="Gambar/ambil dr google/Dimsum_Piring-removebg-preview.png"
            alt=""
          />
          <div class="menuReview">
            <img src="Gambar/Avatar/acc1.webp" alt="" />
            <img src="Gambar/Avatar/acc2.png" alt="" />
            <img src="Gambar/Avatar/acc2.webp" alt="" />
          </div>
        </div>
        <ul class="menuList">
          <li class="menu">
            <img class="menuImg"
              src="Gambar/ambil dr google/Dimsum_Piring_2-removebg-preview.png"
              alt=""
            />
            <p class="name">Dimsum Ayam</p>
          </li>
          <li class="menu active">
            <img class="menuImg"
              src="Gambar/ambil dr google/Dimsum_Piring-removebg-preview.png"
              alt=""
            />
            <p class="name">Dimsum + Kepiting</p>
          </li>
          <li class="menu">
            <img class="menuImg"
              src="Gambar/ambil dr google/Dimsum_Piring_3-removebg-preview.png"
              alt=""
            />
            <p class="name">Dimsum Udang</p>
          </li>
        </ul>
        <div class="description">
          <p class="origin">
            Dimsum is a popular type of cuisine in Asian culinary culture
            ,particulary in countries such as China, Hong Kong, and much of
            Southeast Asia...
          </p>
          <p class="flavor">Fresh, flavorful Dimsum Delight</p>
        </div>
      </section>
      <section class="aboutUs" id="about">
        <div class="about">
          <div class="desc">
            <p>
              owner pemilik dimsum.id batam adalah Didan Tirta, UMKM ini berdiri
              pada tanggal 12 januari 2021 yang artinya saat ini sudah berdiri
              selama 4 tahun, Selain penjualan langsung yang terletak di
              berbagai tempat UMKM ini juga memanfaatkan platform online populer
              atau media sosial seperti Instagram
            </p>
            <img
              class="descImg"
              src="/Gambar/ambil dr google/dimsum-3-removebg-preview.png"
              alt=""
            />
          </div>
          <h2 class="aboutTitle">About Us</h2>
        </div>
        <div class="contact">
          <h2 class="aboutTitle">Contact</h2>
          <div class="desc contactDesc">
            <div class="text">
              <div class="group">
                <img
                  class="contactImg"
                  src="Gambar/instagram.png"
                  alt="Instagram icons created by cobynecz"
                />
                <p>@dimsum.id_batam</p>
              </div>
              <div class="group">
                <img
                  class="contactImg"
                  src="Gambar/telephone-symbol-button.png"
                  alt="Phone icons created by Dave Gandy"
                />
                <p>+62 822 8711 3834</p>
              </div>
              <div class="group">
                <img
                  class="contactImg"
                  src="Gambar/whatsapp.png"
                  alt="Whatsapp icons created by riajulislam"
                />
                <p>+62 822 8711 3834</p>
              </div>
            </div>
            <img
              class="descImg"
              src="Gambar/ambil dr google/Dimsum_4-removebg-preview.png"
              alt=""
            />
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
