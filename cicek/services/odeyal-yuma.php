<?php 
$page_title       = 'Odeyal Yuma Xidməti Bakı';
$page_canonical   = 'https://cicekxali.az/services/odeyal-yuma.php';
$page_description = 'Çiçəkxalı – Bakıda peşəkar odeyal və örtüklərin yuma xidməti. Qış örtüklərinin və odeyalların təmizlənməsi. ☎ +994 55 409 20 01';
$page_keywords    = 'odeyal yuma Bakı, odeyal yuma xidməti, qış örtüklərinin yuyulması, peşəkar odeyal yuma, adyal yuma, adiyal yuma';
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
            <span class="section-badge">Geniş Ölçülü Yuma</span>
            <h1 class="hero-title" style="color: var(--text-primary); margin: 24px auto; max-width: 700px; text-align: center;">
                Odeyal Yuma
                <span style="display: block; background: linear-gradient(135deg, #e31f26 20%, #ff5e00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-style: italic; letter-spacing: -1px;">Xidməti</span>
            </h1>
            <p class="hero-subtitle" style="color: var(--text-secondary); margin: 0 auto; max-width: 560px; text-align: center;">
                Hər növ böyük ölçülü və fəsillik odeyallarınızın peşəkar avadanlıqlarda yuyulması.
            </p>
            <div style="margin-top: 36px;">
                <a href="<?php echo BASE_URL; ?>contact/contact" class="btn btn-primary">
                    <i class="fab fa-whatsapp"></i> İndi Sifariş Ver
                </a>
            </div>
        </div>
    </header>

    <section class="content-section">
        <div class="container">
            <a href="<?php echo BASE_URL; ?>index#services" class="back-btn"><i class="fas fa-arrow-left"></i> Xidmətlərə qayıt</a>
            
            <div class="about-grid" style="margin-bottom: 80px; align-items: start;">
                <div class="image-side" style="position: relative;">
                    <span class="section-badge" style="position: absolute; top: 20px; left: 20px; z-index: 2; background: rgba(255,255,255,0.9); border-color: transparent;">Premium Yuma</span>
                    <img src="<?php echo BASE_URL; ?>assets/images/odeyal.png" alt="Odeyal Yuma Xidməti" style="width: 100%; border-radius: var(--radius); box-shadow: var(--shadow-lg); object-fit: cover; aspect-ratio: 4/5;">
                </div>
                <div class="text-side detailed-desc" style="background: rgba(227, 31, 38, 0.03); padding: 40px; border-radius: var(--radius); border: 1px dashed var(--primary); height: 100%;">
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <span class="section-badge">Xidmət Haqqında</span>
                        <h2 class="section-title">Evinizə Təmizlik, Yuxunuza <span class="text-gradient">Rahatlıq</span></h2>
                    </div>
                    <div style="line-height: 1.8; color: var(--text-secondary);">
                        <p style="margin-bottom: 25px;">
                            Gündəlik istifadə etdiyimiz odeyallar çox tez ləkələnir və bakteriyalar üçün əlverişli mühitə çevrilir. Evdəki adi paltaryuyan maşınlar həm tutum olaraq kiçik ola bilər, həm də odeyalların içindəki dolqunu (tük, pambıq və s.) düzgün formaya qaytarmaq üçün uyğun qurutma imkanlarına malik deyillər.
                        </p>
                        <p style="margin-bottom: 25px;">
                            <strong>Çiçəkxalı</strong> sənaye tipli, böyük barabanlı sistemlərində odeyallarınızı növünə və rənginə görə təmizləyir. Sintetik, pambıq və ya bambuk odeyallarınız tam təmiz, heç bir qoxu və nəm olmadan geri təhvil verilir.
                        </p>
                        
                        <ul class="price-features" style="margin-top: 20px; display: grid; gap: 15px;">
                            <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Ləkə və saç/tük tapıntılarına qarşı dərindən analiz</li>
                            <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> İstiyə dözümlülük və material testindən sonra əlverişli temperatur seçimi</li>
                            <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Tam rütubətsiz qapalı qurutma kamerasında sürətli qurutma</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="process-section" style="margin-top: 100px;">
                <div class="section-header">
                    <span class="section-badge">Mərhələlər</span>
                    <h2 class="section-title">Yuma <span class="text-gradient">Prosesimiz</span></h2>
                    <p class="section-desc">Emin adımlarla tam təmizlik</p>
                </div>
                
                <div class="process-grid">
                    <div class="process-item">
                        <div class="process-number">01</div>
                        <h4>Təsnifatlaşdırma</h4>
                        <p>Odeyallar teksturuna görə ayrılır, rəng solmasına qarşı yoxlanılır.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">02</div>
                        <h4>İntensiv Yuma</h4>
                        <p>Daha böyük həcmli maşınlarda hər iki üzü diqqətlə, orqanik şampunlarla yuyulur.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">03</div>
                        <h4>Havasız Qurutma</h4>
                        <p>Yuyulduqdan sonra havalandırma mühitində 100% nəm çıxarılaraq qurudulur və ətirlənir.</p>
                    </div>
                </div>
            </div>
            
            <div style="margin-top: 60px; text-align: center;">
                <a href="<?php echo BASE_URL; ?>contact/contact" class="btn btn-primary" style="padding: 16px 36px; font-size: 1.1rem;">
                    <i class="fab fa-whatsapp"></i> Sifariş Üçün Yazın
                </a>
            </div>

        </div>
    </section>

<?php include '../includes/footer.php'; ?>
