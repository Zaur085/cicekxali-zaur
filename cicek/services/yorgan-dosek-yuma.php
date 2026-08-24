<?php 
$page_title       = 'Yorğan-Döşək Yuma Xidməti Bakı';
$page_canonical   = 'https://cicekxali.az/services/yorgan-dosek-yuma.php';
$page_description = 'Çiçəkxalı – Bakıda peşəkar yorğan və döşəklərin yuma xidməti. İçi yun və pambıq olan qış yorğan və döşəklərinin keyfiyyətli təmizlənməsi. ☎ +994 55 409 20 01';
$page_keywords    = 'yorğan yuma Bakı, döşək yuma xidməti, yun yorğan, pambıq döşək, yorğan döşək təmizləmə, peşəkar yuma xidməti';
$page_og_image    = 'https://cicekxali.az/assets/images/main1.jpg';
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
            <span class="section-badge">Dərin Ənənəvi Yuma</span>
            <h1 class="hero-title" style="color: var(--text-primary); margin: 24px auto; max-width: 700px; text-align: center;">
                Yorğan və Döşək Yuma
                <span style="display: block; background: linear-gradient(135deg, #e31f26 20%, #ff5e00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-style: italic; letter-spacing: -1px;">Xidməti</span>
            </h1>
            <p class="hero-subtitle" style="color: var(--text-secondary); margin: 0 auto; max-width: 560px; text-align: center;">
                İçi yun, pambıq və ya sintepon olan yorğan-döşəklərinizin sağlamlıqla təmizlənməsi.
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
            
            <div class="about-grid" style="margin-bottom: 80px; align-items: start;">
                <div class="image-side" style="position: relative;">
                    <span class="section-badge" style="position: absolute; top: 20px; left: 20px; z-index: 2; background: rgba(255,255,255,0.9); border-color: transparent;">Premium Yuma</span>
                    <img src="<?php echo BASE_URL; ?>assets/images/yorgan.png" alt="Yorğan-Döşək Yuma Xidməti" style="width: 100%; border-radius: var(--radius); box-shadow: var(--shadow-lg); object-fit: cover; aspect-ratio: 4/5;">
                </div>
                <div class="text-side detailed-desc" style="background: rgba(227, 31, 38, 0.03); padding: 40px; border-radius: var(--radius); border: 1px dashed var(--primary); height: 100%;">
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <span class="section-badge">Xidmət Haqqında</span>
                        <h2 class="section-title">Ənənəvi Yorğanların <span class="text-gradient">Peşəkar Yuyulması</span></h2>
                    </div>
                    <div style="line-height: 1.8; color: var(--text-secondary);">
                        <p style="margin-bottom: 25px;">
                            Azərbaycanda qış aylarında istifadə edilən ağır və qqalın yun, pambıq yorğan-döşəklərin ənənəvi üsullarla yuyulması həm çətindir, həm də çox vaxt aparır. Əgər bu əşyalar düzgün qurudulmazsa, içində kif, bakteriya və xoşagəlməz qoxular yarana bilər.
                        </p>
                        <p style="margin-bottom: 25px;">
                            <strong>Çiçəkxalı</strong> istənilən çəki və material tutumuna malik yorğan və döşəklərinizi sənaye tipli maşınlarda təmizləyir. Yünün daralması, çürüməsi və ya pambığın yığılmasının qarşısını almaq üçün lazımi kimyəvi qatqısız maddələrdən istifadə edilir.
                        </p>
                        
                        <ul class="price-features" style="margin-top: 20px; display: grid; gap: 15px;">
                            <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Dolqu maddəsinin öz xüsusiyyətini və yumşaqlığını qoruması</li>
                            <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Nəm və kifin qarşısını alan qurutma və isitmə boksları</li>
                            <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Alt və üst üzlüklərin ləkələrinin də çıxarılması</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="process-section" style="margin-top: 100px;">
                <div class="section-header">
                    <span class="section-badge">Mərhələlər</span>
                    <h2 class="section-title">Yuma <span class="text-gradient">Prosesimiz</span></h2>
                    <p class="section-desc">Həssas yorğan döşək baxımı</p>
                </div>
                
                <div class="process-grid">
                    <div class="process-item">
                        <div class="process-number">01</div>
                        <h4>Detal Analizi</h4>
                        <p>Döşəyin və ya yorğanın növünün təyin edilməsi və astarın yoxlanılması.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">02</div>
                        <h4>Təmizlənmə və Dezinfeksiya</h4>
                        <p>Qırışmalara və yığılmalara qarşı spesifik fırlanma dərəcələrində anti-bakterial yuma.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">03</div>
                        <h4>Avtomatik Qurutma</h4>
                        <p>Kondensasiya və istilik otaqlarında təmizləndikdən sonra uzunmüddətli tam qurutma.</p>
                    </div>
                </div>
            </div>
            
            <div style="margin-top: 60px; text-align: center;">
                <a href="https://wa.me/994554092001" class="btn btn-primary" style="padding: 16px 36px; font-size: 1.1rem;">
                    <i class="fab fa-whatsapp"></i> Sifariş Üçün Yazın
                </a>
            </div>

        </div>
    </section>

<?php include '../includes/footer.php'; ?>
