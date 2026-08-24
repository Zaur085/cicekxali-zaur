<?php
require_once dirname(__DIR__) . '/config.php';

// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// SEO defaults (pages can override these before including header)
$seo_title       = isset($page_title) ? $page_title . ' | Çiçəkxalı – Peşəkar Xalça Yuma Xidməti Bakı' : 'Çiçəkxalı | Peşəkar Xalça Yuma Xidməti Bakı';
$seo_description = isset($page_description) ? $page_description : 'Çiçəkxalı – Bakıda peşəkar xalça, kilim, mebel və yun xalça yuma xidməti. Pulsuz daşınma, ekoloji vasitələr, 15+ il təcrübə. WhatsApp: +994 55 409 20 01';
$seo_keywords    = isset($page_keywords) ? $page_keywords : 'xalça yuma, xalça yuma Bakı, xalça yuma xidməti, çiçəkxalı, kilim təmizləmə, mebel yuma, yun xalça yuma, peşəkar xalça yuma';
$seo_canonical   = isset($page_canonical) ? $page_canonical : BASE_URL . 'index.php';
$seo_og_image    = isset($page_og_image) ? $page_og_image : BASE_URL . 'assets/images/image2.png';
?>
<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Disable Browser Cache -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N8HPVZ7KZC"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-N8HPVZ7KZC');
    </script>

    <!-- Primary SEO -->
    <title><?php echo htmlspecialchars($seo_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($seo_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($seo_keywords); ?>">
    <meta name="author" content="Çiçəkxalı">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo htmlspecialchars($seo_canonical); ?>">

    <!-- Open Graph (Facebook, WhatsApp preview) -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="az_AZ">
    <meta property="og:site_name" content="Çiçəkxalı">
    <meta property="og:title" content="<?php echo htmlspecialchars($seo_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($seo_description); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($seo_canonical); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($seo_og_image); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($seo_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($seo_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($seo_og_image); ?>">

    <!-- JSON-LD Structured Data (Local Business) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Çiçəkxalı",
        "description": "Bakıda peşəkar xalça, kilim, mebel və yun xalça yuma xidməti",
        "url": "<?php echo BASE_URL; ?>",
        "telephone": "+994554092001",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Bakı",
            "addressCountry": "AZ"
        },
        "openingHours": "Mo-Sa 09:00-19:00",
        "priceRange": "₼₼",
        "image": "<?php echo $seo_og_image; ?>",
        "sameAs": [
            "https://www.instagram.com/cicek_xali",
            "https://wa.me/994554092001"
        ]
    }
    </script>

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css?v=<?php echo filemtime(dirname(__DIR__) . '/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/pricing-buttons.css?v=<?php echo filemtime(dirname(__DIR__) . '/assets/css/pricing-buttons.css'); ?>">
    <?php if (isset($extra_css)) echo $extra_css; ?>
</head>

<body>

    <!-- Custom Cursor -->
    <div id="cursor-dot"></div>
    <div id="cursor-ring"></div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="<?php echo BASE_URL; ?>index.php" class="logo">
                <img src="<?php echo BASE_URL; ?>assets/images/image2.png" alt="Çiçək xalı" class="logo-img">
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="<?php echo BASE_URL; ?>index#home" class="nav-link <?php echo !isset($is_service_page) ? "active" : ""; ?>">Ana Səhifə</a></li>
                <li><a href="<?php echo BASE_URL; ?>index#about" class="nav-link">Haqqımızda</a></li>
                <li class="has-dropdown">
                    <a href="<?php echo BASE_URL; ?>index#services" class="nav-link <?php echo (isset($is_service_page) && $is_service_page) ? "active" : ""; ?>">
                        Xidmətlər <i class="fas fa-chevron-down dropdown-icon"></i>
                    </a>
                    <div class="mega-menu">
                        <div class="mega-menu-header">
                            <h4>Nə Təklif Edirik?</h4>
                            <p>Hər növ xalça və kilim üçün peşəkar təmizləmə xidmətləri</p>
                        </div>
                        <div class="mega-menu-grid">
                            <a href="<?php echo BASE_URL; ?>services/xalca-yuma" class="mega-menu-item">
                                <div class="mega-icon"><i class="fas fa-rug"></i></div>
                                <div class="mega-content">
                                    <h5>Xalça Yuma</h5>
                                    <p>Hər növ xalçaların dərin təmizlənməsi, ləkə çıxarılması və dezinfeksiyası</p>
                                    <span class="mega-link">Ətraflı <i class="fas fa-arrow-right"></i></span>
                                </div>
                            </a>
                            <a href="<?php echo BASE_URL; ?>services/kilim-temizleme" class="mega-menu-item">
                                <div class="mega-icon"><i class="fas fa-scroll"></i></div>
                                <div class="mega-content">
                                    <h5>Kilim Təmizləmə</h5>
                                    <p>İncə və qiymətli kilimlərin xüsusi qayğı ilə təmizlənməsi</p>
                                    <span class="mega-link">Ətraflı <i class="fas fa-arrow-right"></i></span>
                                </div>
                            </a>
                            <a href="<?php echo BASE_URL; ?>services/mebel-yuma" class="mega-menu-item">
                                <div class="mega-icon"><i class="fas fa-couch"></i></div>
                                <div class="mega-content">
                                    <h5>Mebel Təmizləmə</h5>
                                    <p>Divan, kreslo və digər yumşaq mebellərin yerində təmizlənməsi</p>
                                    <span class="mega-link">Ətraflı <i class="fas fa-arrow-right"></i></span>
                                </div>
                            </a>
                            <a href="<?php echo BASE_URL; ?>services/yun-xalca-yuma" class="mega-menu-item">
                                <div class="mega-icon"><i class="fas fa-water"></i></div>
                                <div class="mega-content">
                                    <h5>Yun Xalça Yuma</h5>
                                    <p>Yun xalçaların xüsusi texnologiya ilə zərər vermədən yuyulması</p>
                                    <span class="mega-link">Ətraflı <i class="fas fa-arrow-right"></i></span>
                                </div>
                            </a>
                            <a href="<?php echo BASE_URL; ?>services/perde-yuma" class="mega-menu-item">
                                <div class="mega-icon"><i class="fas fa-soap"></i></div>
                                <div class="mega-content">
                                    <h5>Pərdə Yuma</h5>
                                    <p>Tül, jalüz və qalın pərdələrin zərər görmədən yuyulub qurudulması</p>
                                    <span class="mega-link">Ətraflı <i class="fas fa-arrow-right"></i></span>
                                </div>
                            </a>
                            <a href="<?php echo BASE_URL; ?>services/yastiq-yuma" class="mega-menu-item">
                                <div class="mega-icon"><i class="fas fa-cloud"></i></div>
                                <div class="mega-content">
                                    <h5>Yastıq Yuma</h5>
                                    <p>Tük və sintetik yastıqların antiallergik təmizlənməsi</p>
                                    <span class="mega-link">Ətraflı <i class="fas fa-arrow-right"></i></span>
                                </div>
                            </a>
                            <a href="<?php echo BASE_URL; ?>services/odeyal-yuma" class="mega-menu-item">
                                <div class="mega-icon"><i class="fas fa-layer-group"></i></div>
                                <div class="mega-content">
                                    <h5>Odeyal Yuma</h5>
                                    <p>Hər ölçüdə qış örtükləri və odeyalların xüsusi maşınlarda təmizlənməsi</p>
                                    <span class="mega-link">Ətraflı <i class="fas fa-arrow-right"></i></span>
                                </div>
                            </a>
                            <a href="<?php echo BASE_URL; ?>services/yorgan-dosek-yuma" class="mega-menu-item">
                                <div class="mega-icon"><i class="fas fa-bed"></i></div>
                                <div class="mega-content">
                                    <h5>Yorğan-Döşək Yuma</h5>
                                    <p>Yun, pambıq və ya sintepon olan yorğan-döşəklərin yuyulması</p>
                                    <span class="mega-link">Ətraflı <i class="fas fa-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li><a href="<?php echo BASE_URL; ?>index#pricing" class="nav-link">Qiymətlər</a></li>
                <li><a href="<?php echo BASE_URL; ?>index#reviews" class="nav-link">Müştəri Rəyləri</a></li>
                <li><a href="<?php echo BASE_URL; ?>index#gallery" class="nav-link">Digər</a></li>
                <li><a href="<?php echo BASE_URL; ?>index#contact" class="nav-link">Əlaqə</a></li>
                <li class="mobile-only-ctas">
                    <a href="<?php echo BASE_URL; ?>contact/contact" class="nav-cta order-cta">
                        <i class="fas fa-calendar-check"></i> Sifariş Ver
                    </a>
                    <a href="<?php echo BASE_URL; ?>contact/contact" class="nav-cta wa-cta">
                        <i class="fab fa-whatsapp"></i> Əlaqə
                    </a>
                </li>
            </ul>
            <div class="nav-actions">
                <a href="<?php echo BASE_URL; ?>contact/contact" class="nav-cta order-cta">
                    <i class="fas fa-calendar-check"></i> Sifariş Ver
                </a>
                <a href="<?php echo BASE_URL; ?>contact/contact" class="nav-cta wa-cta">
                    <i class="fab fa-whatsapp"></i> Əlaqə
                </a>
            </div>
            <button class="hamburger" id="hamburger" aria-label="Menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>
