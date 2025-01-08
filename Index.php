<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Team Profile</title> <!-- Tema Project --> 

    <!-- Import fonts Poppins dari google fonts --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Import library AOS (Animated On Scroll) untuk memberikan animasi efek scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="styles.css">
</head>
<body> 
    
    <!-- navbar Awal -->
    <!-- Tag <a> untuk mendefinisikan hyperlink, yang digunakan untuk menghubungkan dari satu halaman ke halaman lainnya. 
    syaratnya dalam tag <a> harus memiliki href atribut jika tidak maka akan menjadi penampung saja-->

        <nav class="navbar"> <!--Membuat sebuah class navbar-->
<a href="#" 
class="navbar-satu">2023B <span>KELOMPOK 7</span></a> 

<div class="navbar-nav"> 
    <a href="#">Home</a> 
    <a href="#about">Tentang Kami</a>
    <a href="#our_team">Team</a>
    <a href="#support">Support</a>
</div>

</nav>
    
    <!-- home -->
<section class="hero" id="home"> <!--membuat Tag <section> untuk mendefinisikan bagian dalam suatu dokumen html-->
    <main class="content"> <!--Membuat sebuah class navbar-->
        <h1>Anggota</h1> 
            <h1><span> Kelompok 7</span></h1> 
    <ol>
        <li>Rafi Dwi Saputra / 23091397058</li>
        <li>Yusuf Affandi / 23091397045</li>
        <li>Mochammad Irfansyah Ma'arif / 23091397066</li>
    </ol>
    </main>
</section>

<!-- tentang kami -->
<section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row"> <!--Membuat sebuah class row-->
        <div class="about-img" data-aos="zoom-out" data-aos-duration="500" data-aos-delay="90"> <!--Membuat sebuah class navbar-->
            <img src="gambartim.jpg" alt="Tentang Kami"> <!--Membuat sebuah class navbar-->
        </div>

        <div class="content">
            <h3>Siapa Kami ?</h3>
            <p>
                Kami adalah tim yang berdedikasi dalam menciptakan kolaborasi internal yang kuat dan efektif. Melalui kerja sama yang solid, kami tidak hanya meningkatkan sinergi antar anggota, tetapi juga membangun personal branding yang profesional dan terpercaya. 
                <p>Dengan visi untuk terus tumbuh dan berkembang, kami berkomitmen untuk memberikan kontribusi terbaik demi meningkatkan kepercayaan dan mencapai kesuksesan bersama.</p>
            </p>
        </div>
    </div>
</section>

<!-- Team section -->

<section id="our_team" class="our_team">
    <h2><span>Team</span> Kami</h2>
    <p>
        Tim kami masih memiliki 3 anggota.
    </p>

    <div class="row">
            <div class="team-card" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100"> <!--Membuat sebuah class navbar-->
                    <img src="gambar/" alt="" class="team-card-img">
                    <h3 class="team-card-title"></h3>
                    <p class="team-card-nim"></p>
            </div>
    </div>
</section>
<!-- Kontak kami -->
<section id="support" class="support">
    <h2><span>Bantuan</span> Pelanggan</h2>
    <p>
        jika ada kendala atau saran yang ingin disampaikan untuk website ini silahkan. 
        <p>Terima Kasih</p>
    </p>
    <div class="container">
        <form">
        <h3 for="fname">First Name</h3>
        <input type="text" id="fname" name="firstname" placeholder="Your First name..">
    
        <h3 for="lname">Last Name</h3>
        <input type="text" id="Lname" name="lastname" placeholder="Your Last Name..">
    
        <h3 for="body">Body</h3>
        <textarea id="body" name="body" placeholder="Write something.." style="height:200px"></textarea>
    
        <input type="submit" value="Submit" onclick="sendemail()">
        </form>
    </div>
</section>

<!-- navbar akhir -->
<footer>
    <div class="links">
        <a href="#">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#our_team">Team</a>
        <a href="#support">Support</a>
    </div>
    
    <div class="credit">
        <a>Created by kelompok 7 2023B</a>
    </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>
</html>
