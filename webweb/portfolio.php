<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Kaisyah</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/animasi.js"></script>
</head>
<body>
    <div class="portfolio-wrapper">
        <div class="portfolio-container">
            <!-- Marquee untuk "Hello Kaisyah" -->
            <div class="marquee-container">
                <marquee behavior="scroll" direction="left" class="marquee-text">Hello Kaisyah, This is my Portfolio! 🌸</marquee>
            </div>

            <!-- Foto Profil -->
            <div class="profile">
                <img src="images/profile.jpeg" alt="Profile Picture" class="profile-img">
                <h1>Kaisyah Azzahra</h1>
                <p>Desain Grafis | Web Developer | Kreatif & Berkomitmen</p>
            </div>

            <!-- Kotak untuk Kontak Saya -->
            <div class="contact">
                <h2>Kontak Saya</h2>
                <div class="contact-info">
                    <p><span>📧</span> Email: <a href="mailto:kaisyah@example.com">kaisyah@example.com</a></p>
                    <p><span>📱</span> Instagram: <a href="https://instagram.com/kaisyah" target="_blank">@kaisyah</a></p>
                </div>
            </div>

            <!-- Kotak untuk Pendidikan -->
            <div class="education">
                <h2>Pendidikan</h2>
                <div class="education-info">
                    <ul>
                        <li><strong>Universitas Sriwijaya</strong> – Sarjana Sistem Informasi (2018-2022)</li>
                        <li><strong>SMA Negeri 1 Indralaya</strong> – Teknologi Informasi dan Komunikasi (2015-2018)</li>
                    </ul>
                </div>
            </div>

            <!-- Kotak untuk Pengalaman Kerja -->
            <div class="experience">
                <h2>Pengalaman Kerja</h2>
                <div class="experience-info">
                    <ul>
                        <li><strong>Web Developer Intern</strong> – PT. WebCorp (2021-2022)</li>
                        <li><strong>Freelance Graphic Designer</strong> (2020-sekarang)</li>
                    </ul>
                </div>
            </div>

            <!-- Kotak untuk Keahlian -->
            <div class="skills">
                <h2>Keahlian</h2>
                <div class="skills-info">
                    <ul>
                        <li>Desain Grafis: Photoshop, Illustrator, Figma</li>
                        <li>Web Development: HTML, CSS, JavaScript, PHP</li>
                        <li>Manajemen Proyek: Trello, Jira</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>