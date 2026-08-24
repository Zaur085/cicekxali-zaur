<?php 
$page_title       = 'Yun Xalça Yuma Xidməti Bakı';
$page_canonical   = 'https://cicekxali.az/services/yun-xalca-yuma.php';
$page_description = 'Çiçəkxalı – Yun xalçaların soyuq su və pH-neyral şampunlarla xüsusi texnologiya ilə yuyulması. Rənglər solmur, ölçü dəyişmir. Bakıda yun xalça yuma. ☎ +994 55 409 20 01';
$page_keywords    = 'yun xalça yuma Bakı, yun xalça təmizləmə, yun xalça yuma xidməti, peşəkar yun xalça yuma, wool carpet cleaning Baku, çiçəkxalı yun xalça, yun xalça qiyməti';
$page_og_image    = 'https://cicekxali.az/assets/images/yunxalca.png';
$is_service_page  = true;
$extra_css = "
<style>
    .service-page-hero {
        padding: 160px 0 100px;
        background: #ffffff;
        color: var(--text-primary);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .service-page-hero::before {
        content: '';
        position: absolute;
        top: -80px;
        right: -80px;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(227, 31, 38, 0.06) 0%, transparent 70%);
        pointer-events: none;
    }

    .service-page-hero::after {
        content: '';
        position: absolute;
        bottom: -60px;
        left: -60px;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(255, 215, 0, 0.06) 0%, transparent 70%);
        pointer-events: none;
    }

    .video-container {
        position: relative;
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        border: 4px solid var(--primary);
        aspect-ratio: 9/16;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .content-section {
        padding: 80px 0;
    }

    .process-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .process-item {
        background: var(--bg-card);
        padding: 40px;
        border-radius: var(--radius);
        border-left: 5px solid var(--primary);
        box-shadow: var(--shadow);
        transition: var(--transition);
    }

    .process-item:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }

    .process-number {
        font-size: 3rem;
        font-weight: 800;
        color: rgba(227, 31, 38, 0.1);
        line-height: 1;
        margin-bottom: 10px;
    }

    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 40px;
        color: var(--primary);
        font-weight: 600;
    }

    .back-btn:hover {
        gap: 15px;
    }
</style>
";
include '../includes/header.php'; 
?>

    <header class="service-page-hero">
        <div class="container" style="position: relative; z-index: 2;">
            <span class="section-badge">Xüsusi Texnologiya</span>
            <h1 class="hero-title" style="color: var(--text-primary); margin: 24px auto; max-width: 700px; text-align: center;">
                Yun Xalça
                <span style="display: block; background: linear-gradient(135deg, #e31f26 20%, #ff5e00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-style: italic; letter-spacing: -1px;">Yuma</span>
            </h1>
            <p class="hero-subtitle" style="color: var(--text-secondary); margin: 0 auto; max-width: 560px; text-align: center;">
                Yun xalçaların xüsusi texnologiya ilə zərər vermədən yuyulması.
            </p>
            <div style="margin-top: 36px;">
                <a href="https://wa.me/994554092001" class="btn btn-primary">
                    <i class="fab fa-whatsapp"></i> İndi Sifariş Ver
                </a>
            </div>
        </div>
    </header>

    <section class="content-section">
        <div class="container">
            <a href="<?php echo BASE_URL; ?>index.php#services" class="back-btn"><i class="fas fa-arrow-left"></i> Xidmətlərə qayıt</a>
            
            <div class="about-grid">
                <div class="video-side">
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <span class="section-badge">Video İcmal</span>
                        <h2 class="section-title">İşimizə <span class="text-gradient">Baxın</span></h2>
                        <p class="section-desc" style="margin: 0;">Yun xalçaların necə həssas şəkildə yuyulduğunu izləyin.</p>
                    </div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/DSixsYlKXMg" title="Yun Xalça Yuma" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="text-side">
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <span class="section-badge">Xidmət Haqqında</span>
                        <h2 class="section-title">Niyə Xüsusi <span class="text-gradient">Yanaşma</span>?</h2>
                    </div>
                    <p class="about-text">
                        Yun xalçalar adi sintetik xalçalardan fərqli olaraq həddindən artıq həssas bir quruluşa malikdir. Yanlış temperatur, güclü kimyəvi maddələr və ya standart yuma üsulları yunun lifini zədələyə, xalçanın ölçüsünü dəyişdirə və rənglərini soldurar bilər. <strong>Çiçəkxalı</strong> olaraq biz, yun xalçaların xüsusiyyətlərini nəzərə alaraq soyuq su, pH-neyral şampunlar və yumşaq fırçalar istifadə edirik.
                    </p>
                    <ul class="price-features" style="margin-top: 20px;">
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Liflər zədələnmədən həssas təmizlənmə</li>
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Soyuq su və pH-neyral şampunlar</li>
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Rəng sabitliyi qorunur</li>
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Ölçü dəyişikliyi olmur</li>
                    </ul>
                    <div style="margin-top: 40px;">
                        <a href="https://wa.me/994554092001" class="btn btn-primary">
                            <i class="fab fa-whatsapp"></i> WhatsApp ilə Əlaqə
                        </a>
                    </div>
                </div>
            </div>

            <div class="process-section" style="margin-top: 100px;">
                <div class="section-header">
                    <span class="section-badge">Mərhələlər</span>
                    <h2 class="section-title">Yun Xalça <span class="text-gradient">Yuma Prosesi</span></h2>
                    <p class="section-desc">Hər yunlu lifdə xüsusi həssaslıq</p>
                </div>
                
                <div class="process-grid">
                    <div class="process-item">
                        <div class="process-number">01</div>
                        <h4>Material Analizi</h4>
                        <p>Xalçanın yun növü, toxuma sıxlığı və rənglərinin sabitliyi yoxlanılır, uyğun proqram seçilir.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">02</div>
                        <h4>Soyuq Su ilə Yuma</h4>
                        <p>İsti suyun yunun lifini büzdüyündən yalnız soyuq su və pH-neyral şampun istifadə olunur.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">03</div>
                        <h4>Yumşaq Fırçalama</h4>
                        <p>Xüsusi yumşaq fırçalarla liflər incə şəkildə işlənir, ləkələr zərər vermədən çıxarılır.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">04</div>
                        <h4>Kölgədə Qurutma</h4>
                        <p>Yun xalçalar günəş şüasından kənarda, üfüqi vəziyyətdə qurudulur ki, ölçüsü dəyişməsin.</p>
                    </div>
                </div>
            </div>

            <div class="detailed-desc reveal" style="margin-top: 100px; background: rgba(227, 31, 38, 0.03); padding: 50px; border-radius: var(--radius); border: 1px dashed var(--primary);">
                <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                    <span class="section-badge">Nəzərə Alın</span>
                    <h2 class="section-title">Yun Xalçalar Niyə <span class="text-gradient">Xüsusi Qayğı</span> Tələb Edir?</h2>
                </div>
                <div style="line-height: 1.8; color: var(--text-secondary);">
                    <p style="margin-bottom: 25px;">
                        Yun, təbii protein lifi olduğundan kimyəvi maddələrə, həddindən artıq istiyə və mexaniki təzyiqə qarşı olduqca həssasdır. Evdə adi yuma maşınında yuyulan yun xalça yığışa, uzana və ya rəngi sola bilər. Buna görə peşəkar yuna özel usullar tətbiq etmək vacibdir.
                    </p>
                    <p style="margin-bottom: 25px;">
                        <strong>Çiçəkxalı</strong> olaraq yun xalçaları sintetiklərdən ayrı qiymətləndirir, hər birini fərdi olaraq işləyirik. Bizim metodikamız beynəlxalq yun standartlarına uyğundur və xalçanızın ömrünü uzadır.
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Həssas fırçalama</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> pH-neyral şampun</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Soyuq su texnologiyası</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Kölgədə qurutma</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Ölçü saxlanılır</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>
