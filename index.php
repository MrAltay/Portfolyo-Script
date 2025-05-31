<?php
$site_title = "altay.cloud";
$tagline = "Dijital Çözümlerimiz";
$copyright = "© " . date("Y") . " Emrullah ALTAY";

$projects = [
    [
        "name" => "emrullahaltay.com",
        "url" => "https://emrullahaltay.com",
        "icon" => "fa-user",
        "color" => "#4285f4",
        "description" => "Kişisel web sitesi"
    ],
    [
        "name" => "teknodiji.net",
        "url" => "https://teknodiji.net",
        "icon" => "fa-laptop-code",
        "color" => "#34a853",
        "description" => "Teknoloji içerikleri ve güncel haberler"
    ],
    [
        "name" => "hissetr.com",
        "url" => "https://hissetr.com",
        "icon" => "fa-chart-line",
        "color" => "#fbbc05",
        "description" => "Finansal analiz ve yatırım platformu"
    ],
    [
        "name" => "guvenlink.net",
        "url" => "https://guvenlink.net",
        "icon" => "fa-shield-alt",
        "color" => "#ea4335",
        "description" => "Güvenli internet araçları"
    ]
];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?> | <?php echo $tagline; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="logo">altay<span>.cloud</span></a>
        </div>
    </nav>

    <button class="theme-toggle" id="themeToggle">
        <i class="fas fa-moon"></i>
    </button>

    <section class="hero-section" id="home">
        <canvas id="networkCanvas"></canvas>
        <div class="hero-content">
            <h1 class="hero-title"><?php echo $site_title; ?></h1>
            <p class="hero-subtitle"><?php echo $tagline; ?></p>
            <a href="#projects" class="hero-button">
                Projeleri Görüntüle
            </a>
        </div>
        <a href="#projects" class="hero-scroll">
            <span class="scroll-text">KAYDIRIN</span>
            <i class="fas fa-chevron-down scroll-icon"></i>
        </a>
    </section>

    <div class="container" id="projects">
        <div style="text-align: center;">
            <h2 class="section-title">Projelerimiz</h2>
        </div>
        <p class="section-description">
            Geliştirdiğimiz ve yönettiğimiz dijital projeler ve web platformları
        </p>

        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <div class="project-content">
                    <div class="project-icon-wrapper" style="border: 3px solid <?php echo $project['color']; ?>">
                        <i class="fas <?php echo $project['icon']; ?> project-icon" style="color: <?php echo $project['color']; ?>"></i>
                    </div>
                    <h2 class="project-name"><?php echo $project['name']; ?></h2>
                    <p class="project-description"><?php echo $project['description']; ?></p>
                    <a href="<?php echo $project['url']; ?>" class="project-link" style="background-color: <?php echo $project['color']; ?>" target="_blank">
                        Ziyaret Et
                        <i class="fas fa-arrow-right project-link-icon"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">altay<span>.cloud</span></div>
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="footer-text"><?php echo $copyright; ?></p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>