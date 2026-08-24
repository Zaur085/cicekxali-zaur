<?php 
$page_title       = 'Kilim Təmizləmə Xidməti Bakı';
$page_canonical   = 'https://cicekxali.az/services/kilim-temizleme.php';
$page_description = 'Çiçəkxalı – Əl toxuması və antik kilimlərin peşəkar təmizlənməsi. Rənglərin qorunması, həssas yuma texnologiyası. Bakıda kilim təmizləmə xidməti. ☎ +994 55 409 20 01';
$page_keywords    = 'kilim təmizləmə Bakı, kilim yuma xidməti, əl toxuma kilim yuma, antik kilim təmizləmə, peşəkar kilim yuma, kilim qiymeti Bakı, çiçəkxalı kilim';
$page_og_image    = 'https://cicekxali.az/assets/images/klim.png';
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
            <span class="section-badge">Özəl Qayğı</span>
            <h1 class="hero-title" style="color: var(--text-primary); margin: 24px auto; max-width: 700px; text-align: center;">
                Kilim
                <span style="display: block; background: linear-gradient(135deg, #e31f26 20%, #ff5e00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-style: italic; letter-spacing: -1px;">Təmizləmə</span>
            </h1>
            <p class="hero-subtitle" style="color: var(--text-secondary); margin: 0 auto; max-width: 560px; text-align: center;">
                İncə və qiymətli kilimləriniz üçün peşəkar təmizlik.
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
                        <span class="section-badge">Həssas Təmizlik</span>
                        <h2 class="section-title">Kiliminizə <span class="text-gradient">Dəyər</span> Veririk</h2>
                        <p class="section-desc" style="margin: 0;">Kilimlər xüsusi incə fırçalarla və zərər verməyən vasitələrlə təmizlənir.</p>
                    </div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/JCwT_Iq2h38" title="Kilim Təmizləmə" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="text-side">
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <span class="section-badge">Xidmət Haqqında</span>
                        <h2 class="section-title">İncə <span class="text-gradient">Yanaşma</span></h2>
                    </div>
                    <p class="about-text">
                        Kilimlər öz incə toxuması və rəngarəngliyi ilə hər zaman xüsusi qayğı tələb edir. <strong>Çiçəkxalı</strong> olaraq, biz hər bir kilimin materialını və toxuma üsulunu nəzərə alaraq fərdi yanaşma tətbiq edirik. Bizim istifadə etdiyimiz vasitələr kilimlərinizin rəngini qoruyur və toxumasını zəiflətmir.
                    </p>
                    <ul class="price-features" style="margin-top: 20px;">
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Təbii boyaların rəng qoruması</li>
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> İncə liflərin xüsusi təmizlənməsi </li>
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Antik və əl işi kilimlər üçün uyğunluq</li>
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Alçaq temperaturlu və incə yuma</li>
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
                    <h2 class="section-title">Kilim <span class="text-gradient">Prosesimiz</span></h2>
                    <p class="section-desc">Hər bir kilim sənət əsəridir</p>
                </div>
                
                <div class="process-grid">
                    <div class="process-item">
                        <div class="process-number">01</div>
                        <h4>İlkin Qiymətləndirmə</h4>
                        <p>Kilimin materialı, toxunma texnikası və rənglərinin davamlılığı yoxlanılır.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">02</div>
                        <h4>Həssas Təmizləmə</h4>
                        <p>Xüsusi incə fırçalar və neytral PH-a malik şampunlarla təmizləmə aparılır.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">03</div>
                        <h4>Təbii Qurutma</h4>
                        <p>Kilimlər günəş şüasından kənarda, xüsusi havalandırma otaqlarında qurudulur.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">04</div>
                        <h4>Keyfiyyət Nəzarəti</h4>
                        <p>Ləkələrin tam çıxdığından və kilimin toxumasının qorunduğundan əmin olduqdan sonra təslim edilir.</p>
                    </div>
                </div>
            </div>

            <div class="detailed-desc reveal" style="margin-top: 100px; background: rgba(227, 31, 38, 0.03); padding: 50px; border-radius: var(--radius); border: 1px dashed var(--primary);">
                <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                    <span class="section-badge">Kilim Gigiyenası</span>
                    <h2 class="section-title">Kilimlərin Təmizliyi Niyə <span class="text-gradient">Vacibdir</span>?</h2>
                </div>
                <div style="line-height: 1.8; color: var(--text-secondary);">
                    <p style="margin-bottom: 25px;">
                        Kilimlər evinizin estetik görünüşünü tamamlayan ən dəyərli əşyalardan biridir. Lakin sıx toxuma quruluşuna görə kilimlər asanlıqla toz və allergenləri özünə çəkir. Zamanında və düzgün şəkildə təmizlənməyən kilimlər həm sağlamlığınıza zərər verə bilər, həm də toxumaları zədələnərək istifadə müddəti qısalar.
                    </p>
                    <p style="margin-bottom: 25px;">
                        <strong>Çiçəkxalı</strong> olaraq kilim təmizləmədə illərin təcrübəsi və ən müasir avadanlıqlarla xidmətinizdəyik. Bizim yanaşmamız sadəcə səthi təmizlik deyil, kilimin hər bir lifinin dərindən və təhlükəsiz təmizlənməsidir.
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Rənglərin stabilləşdirilməsi</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Ləkəyə qarşı fərdi yanaşma</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Həssas fırçalama texnikası</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Təbii qurutma metodu</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Dezinfeksiya və ətir</span>
                    </div>
                    <p style="margin-top: 25px;">
                        İstər antik, istərsə də müasir kilimləriniz bizim əllərimizdə ilk günkü parlaqlığını tapacaq. Biz hər bir kilimi öz əşyamız kimi qoruyuruq.
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>
