<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Workout Enthusiast - Transformasi Tubuh Anda</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
  <!-- Header -->
  <header class="bg-dark shadow-sm">
    <div class="container d-flex justify-content-between align-items-center py-2">
      <!-- Logo -->
      <a href="#home" class="d-flex align-items-center text-decoration-none">
        <img src="logo.jpeg" alt="Logo" style="height:50px;" class="rounded-pill me-3">
        <span class="fs-4 fw-bold text-white">Workout Enthusiast</span>
      </a>

      <!-- Mobile Menu Button -->
      <button class="btn d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
        aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        ☰
      </button>

      <!-- Navigation -->
<nav class="collapse d-md-block ms-4" id="navbarMenu">
  <ul class="nav align-items-center">

    <li class="nav-item">
      <a class="nav-link text-white" href="#home">Beranda</a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white" href="#tentang">Tentang Kami</a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white" href="#gerakan">Gerakan</a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white" href="#nutrition">Nutrisi</a>
    </li>

    <!-- Sapaan User -->
     <li class="nav-item ms-4 text-white fw-semibold">
 Halo, <?php echo htmlspecialchars($_SESSION['user'] ?? 'User'); ?>

</li>


    <!-- LOGOUT -->
    <li class="nav-item ms-2">
      <a href="logout.php" class="btn btn-outline-danger btn-sm">
        Logout
      </a>
    </li>

  </ul>
</nav>


    </div>
  </header>

  <!-- Hero Section -->
  <section id="home" class="hero" data-aos="zoom-in" data-aos-duration="1500">
    <div class="hero-content">
      <h1>Transformasi Tubuh Anda di Workout Enthusiast</h1>
      <p>Temukan rutinitas latihan, pola makan, dan inspirasi untuk hidup sehat yang berkelanjutan.</p>

      </a>
    </div>
  </section>

  <section id="tentang" class="section bg-light py-5" data-aos="zoom-in-down" data-aos-duration="1500" >
    <div class="container">
      <div class="row align-items-center g-4">
        <!-- Gambar -->
        <div class="col-lg-6 order-lg-1 order-2">
          <img src="gymm.jpg" alt="Gym Workout Enthusiast" class="img-fluid rounded shadow-lg tentang-img">
        </div>

        <!-- Teks -->
        <div class="col-lg-6 order-lg-2 order-1">
          <div class="tentang-content px-3">
            <h2 class="fw-bold mb-3 text-success">Tentang Kami</h2>
            <p class="text-secondary mb-3">
              <strong>Workout Enthusiast</strong> hadir sebagai panduan bagi siapa pun yang ingin memulai
              atau meningkatkan program latihan mereka. Kami menyediakan berbagai menu dan program workout
              yang disusun untuk berbagai tujuan mulai dari membentuk otot, menurunkan berat badan,
              hingga menjaga kebugaran tubuh.

              Melalui informasi yang praktis dan mudah dipahami, kami berkomitmen membantu Anda menemukan
              program latihan yang tepat sesuai kebutuhan, tingkat kemampuan, dan gaya hidup Anda. Karena
              kami percaya, setiap orang berhak memiliki tubuh sehat dan bugar dengan cara yang
              menyenangkan dan efektif.
            </p>
            <p class="text-secondary">
              Misi kami adalah membantu setiap individu menemukan program workout yang tepat dan
              berkelanjutan. Dengan panduan latihan yang terstruktur, tips nutrisi, dan rekomendasi
              program yang jelas, kami ingin menjadi sumber inspirasi utama bagi siapa pun yang ingin
              memulai perjalanan menuju tubuh yang lebih sehat dan bugar.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Gerakan Section -->
  <section id="gerakan" class="section" data-aos="zoom-in-down" data-aos-duration="1500">
    <div class="container">
      <div class="section-title">
        <h2>Gerakan Workout</h2>
        <p>Pelajari berbagai gerakan latihan berdasarkan kelompok otot utama untuk hasil yang optimal</p>
      </div>

      <div class="facilities-grid">

        <!-- Card 1: Otot Dada -->
        <div class="card">
          <div class="image">
            <img src="dadaa.png" alt="Latihan otot dada seperti push-up dan bench press">
          </div>
          <div class="content">
            <span class="title">Otot Dada</span>
            <p class="desc">
              Kumpulan gerakan seperti push-up, bench press, dan chest fly untuk membentuk serta memperkuat otot dada
              Anda.
            </p>
            <a href="dada.html" class="btn-main mt-2">Lihat Selengkapnya <span>→</span></a>
          </div>
        </div>

        <!-- Card 2: Otot Bahu -->
        <div class="card">
          <div class="image">
            <img src="bahuu.jpg" alt="Latihan otot bahu seperti shoulder press dan lateral raise">
          </div>
          <div class="content">
            <span class="title">Otot Bahu</span>
            <p class="desc">
              Gerakan efektif seperti shoulder press, lateral raise, dan front raise untuk memperkuat serta memperindah
              bentuk bahu.
            </p>
            <a href="bahu.html" class="btn-main mt-2">Lihat Selengkapnya <span>→</span></a>
          </div>
        </div>

        <!-- Card 3: Otot Back -->
        <div class="card">
          <div class="image">
            <img src="back.jpg" alt="Latihan otot punggung seperti pull-up dan deadlift">
          </div>
          <div class="content">
            <span class="title">Otot Back</span>
            <p class="desc">
              Latihan seperti pull-up, bent-over row, dan deadlift yang membantu memperkuat otot punggung dan
              memperbaiki postur tubuh.
            </p>
            <a href="back.html" class="btn-main mt-2">Lihat Selengkapnya <span>→</span></a>
          </div>
        </div>

        <!-- Card 4: Otot Kaki -->
        <div class="card">
          <div class="image">
            <img src="leg.png" alt="Latihan otot kaki seperti squat dan lunges">
          </div>
          <div class="content">
            <span class="title">Otot Kaki</span>
            <p class="desc">
              Rangkaian gerakan seperti squat, lunges, dan leg press yang dirancang untuk memperkuat otot paha, betis,
              dan bokong.
            </p>
            <a href="kaki.html" class="btn-main mt-2">Lihat Selengkapnya <span>→</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Style -->
  <style>
    /* Container & Section Title */
    #gerakan {
      padding: 60px 0;
      background-color: #f8f9fa;
    }

    .section-title {
      text-align: center;
      margin-bottom: 2rem;
    }

    .section-title h2 {
      font-size: 2rem;
      color: #111827;
      margin-bottom: 0.5rem;
    }

    .section-title p {
      color: #6B7280;
      font-size: 1rem;
    }

    /* Facilities Grid Layout */
    .facilities-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      justify-items: center;
    }

    /* Card Style (From Uiverse.io) */
    .card {
      width: 100%;
      max-width: 300px;
      border-radius: 0.5rem;
      background-color: #fff;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
      border: 1px solid #e5e7eb;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
    }

    .card a {
      text-decoration: none;
    }

    .image {
      width: 100%;
      height: 180px;
      overflow: hidden;
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    .image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s ease;
    }

    .card:hover .image img {
      transform: scale(1.05);
    }

    .content {
      padding: 1.1rem;
    }

    .title {
      color: #111827;
      font-size: 1.125rem;
      line-height: 1.75rem;
      font-weight: 600;
    }

    .desc {
      margin-top: 0.5rem;
      color: #6B7280;
      font-size: 0.9rem;
      line-height: 1.4rem;
    }

    .action {
      display: inline-flex;
      margin-top: 1rem;
      color: #ffffff;
      font-size: 0.875rem;
      font-weight: 500;
      align-items: center;
      gap: 0.25rem;
      background-color: #2563EB;
      padding: 6px 10px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .action:hover {
      background-color: #1d4ed8;
    }

    .action span {
      transition: transform 0.3s ease;
    }

    .action:hover span {
      transform: translateX(4px);
    }
  </style>
  

  <!-- Nutrisi Section -->
  <section id="nutrition" class="section bg-light py-5" data-aos="zoom-in-down"
     data-aos-easing="linear"
     data-aos-duration="1000">
</div>
    
    <div class="container text-center">
      <div class="section-title mb-5">
        <h2 class="fw-bold text-success">Panduan Nutrisi Seimbang</h2>
        <p class="text-muted">
          Nutrisi yang tepat membantu Anda mencapai hasil latihan maksimal.
          Temukan asupan terbaik untuk mendukung energi, pemulihan, dan pertumbuhan otot Anda.
        </p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card border-0 shadow-lg h-100 p-15 hover-zoom rounded-4">
            <div class="card-body">
              <div class="text-success mb-3">
                <i class="bi bi-basket2-fill display-3"></i>
              </div>
              <h5 class="fw-bold mb-3">Asupan Protein</h5>
              <p class="text-secondary">
                Protein berperan penting dalam membangun dan memperbaiki jaringan otot.
                Konsumsi makanan kaya protein seperti ayam, telur, dan ikan
              </p>
              <a href="protein.html" class="btn-main mt-3">Lihat Detail <span>→</span></a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card border-0 shadow-lg h-100 p-10 hover-zoom rounded-4">
            <div class="card-body">
              <div class="text-warning mb-3">
                <i class="bi bi-lightning-charge-fill display-3"></i>
              </div>
              <h5 class="fw-bold mb-3">Karbohidrat Sehat</h5>
              <p class="text-secondary">
                Karbohidrat memberi energi untuk latihan. Pilih sumber sehat seperti oats,
                nasi merah, atau kentang untuk menjaga performa dan daya tahan tubuh.
              </p>
              <a href="karbohidrat.html" class="btn-main btn-yellow mt-3">Lihat Detail <span>→</span></a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card border-0 shadow-lg h-100 p-10 hover-zoom rounded-4">
            <div class="card-body">
              <div class="text-primary mb-3">
                <i class="bi bi-droplet-half display-3"></i>
              </div>
              <h5 class="fw-bold mb-3">Vitamin & Mineral</h5>
              <p class="text-secondary">
                Vitamin dan mineral membantu metabolisme dan menjaga daya tahan tubuh.
                Pastikan Anda mendapatkannya dari buah, sayur, dan air yang cukup.
              </p>
              <a href="vitamin.html" class="btn-main btn-blue mt-3">Lihat Detail <span>→</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
 
  </section>


  <!-- Tambahkan ini di bawah link Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <script>
    // Mobile menu toggle
    document.querySelector('.mobile-menu-btn').addEventListener('click', function () {
      document.getElementById('mobile-menu').classList.toggle('show');
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          // Close mobile menu if open
          document.getElementById('mobile-menu').classList.remove('show');

          window.scrollTo({
            top: targetElement.offsetTop - 80,
            behavior: 'smooth'
          });
        }
      });
    });
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
const bahasa = {
  id: {
    home: "Beranda",
    tentang: "Tentang Kami",
    gerakan: "Gerakan",
    nutrition: "Nutrisi",
    artikel: "Artikel",
    hero_title: "Transformasi Tubuh Anda di Workout Enthusiast",
    hero_desc: "Temukan rutinitas latihan, pola makan, dan inspirasi untuk hidup sehat yang berkelanjutan.",
  },
  en: {
    home: "Home",
    tentang: "About Us",
    gerakan: "Movements",
    nutrition: "Nutrition",
    artikel: "Articles",
    hero_title: "Transform Your Body with Workout Enthusiast",
    hero_desc: "Find workout routines, meal plans, and inspiration for a sustainable healthy lifestyle.",
  }
};


function ubahBahasa(lang) {
  document.querySelectorAll("[data-translate]").forEach(el => {  
    let key = el.getAttribute("data-translate");
    el.textContent = bahasa[lang][key];
  });
}

document.getElementById("btn-id").onclick = () => ubahBahasa("id");
document.getElementById("btn-en").onclick = () => ubahBahasa("en");
</script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const user = JSON.parse(localStorage.getItem("user"));

    const userNameEl = document.getElementById("userName");
    const avatarEl = document.getElementById("userAvatar");

    if (user && user.name) {
      userNameEl.textContent = user.name;
      avatarEl.textContent = user.name.charAt(0).toUpperCase();
    } else {
      userNameEl.textContent = "Guest";
      avatarEl.textContent = "G";
    }
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const greeting = document.getElementById("user-greeting");
    const user = JSON.parse(localStorage.getItem("user"));

    if (user && user.name) {
      greeting.textContent = "Halo, " + user.name;
    } else {
      greeting.textContent = "Halo, Guest";
    }
  });
</script>

<script>
  window.addEventListener("load", function () {
    const loading = document.getElementById("loading");
    loading.style.opacity = "0";
    loading.style.transition = "opacity 0.4s ease";

    setTimeout(() => {
      loading.style.display = "none";
    }, 400);
  });
</script>

<script>
  function logout() {
    localStorage.removeItem("user");
    window.location.href = "login.html";
  }
</script>


</body>
<!-- LOADING SCREEN -->
<div id="loading">
  <img src="logo.jpeg" alt="Loading Logo" class="loading-logo">
  <p>Memuat Workout Enthusiast...</p>
</div>



</html>