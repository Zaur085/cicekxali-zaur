<?php 
$page_title       = 'Xalça Yuma Xidməti Bakı';
$page_canonical   = 'https://cicekxali.az/services/xalca-yuma.php';
$page_description = 'Çiçəkxalı – Bakıda peşəkar xalça yuma xidməti. Dərin ləkə çıxarma, antibakterial təmizləmə, pulsuz daşınma. Xalçalarınızı ilk günkü kimi geri qaytarırıq. ☎ +994 55 409 20 01';
$page_keywords    = 'xalça yuma Bakı, xalça yuma xidməti, xalça yuma qiyməti, dərin ləkə çıxarma xalça, peşəkar xalça yuma, çiçəkxalı xalça yuma, xalça dezinfeksiya';
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
            <span class="section-badge">Premium Xidmət</span>
            <h1 class="hero-title" style="color: var(--text-primary); margin: 24px auto; max-width: 700px; text-align: center;">
                Xalça Yuma
                <span style="display: block; background: linear-gradient(135deg, #e31f26 20%, #ff5e00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-style: italic; letter-spacing: -1px;">Xidməti</span>
            </h1>
            <p class="hero-subtitle" style="color: var(--text-secondary); margin: 0 auto; max-width: 560px; text-align: center;">
                Xalçalarınızı ilk günkü parlaqlığına qaytarırıq.
            </p>
                    <div style="margin-top: 40px;">
                        <a href="<?php echo BASE_URL; ?>contact/contact" class="btn btn-primary">
                            <i class="fab fa-whatsapp"></i> WhatsApp ilə Əlaqə
                        </a>
                    </div>
        </div>
    </header>

    <section class="content-section">
        <div class="container">
            <a href="<?php echo BASE_URL; ?>index#services" class="back-btn"><i class="fas fa-arrow-left"></i> Xidmətlərə qayıt</a>
            
            <div class="about-grid">
                <div class="video-side">
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <span class="section-badge">Video İcmal</span>
                        <h2 class="section-title">İşimizə <span class="text-gradient">Baxın</span></h2>
                        <p class="section-desc" style="margin: 0;">Xalçalarınızın necə təmizləndiyini canlı izləyin.</p>
                    </div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/CiN7nVdwgG4" title="Xalça Yuma" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="text-side">
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <span class="section-badge">Xidmət Haqqında</span>
                        <h2 class="section-title">Niyə Peşəkar <span class="text-gradient">Yuma</span>?</h2>
                    </div>
                    <p class="about-text">
                        Xalçalar evimizin ən çox çirklənən və bakteriya toplayan əşyalarıdır. Adi tozsoran xalçanın dərinliyindəki ləkələri və tozları təmizləyə bilmir. <strong>Çiçəkxalı</strong> olaraq biz, xüsusi avadanlıqlar və ekoloji sertifikatlı şampunlar istifadə edərək xalçalarınızı 100% dezinfeksiya edirik.
                    </p>
                    <ul class="price-features" style="margin-top: 20px;">
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Dərin ləkələrin tam çıxarılması</li>
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Antibakterial və antiallergik təmizləmə</li>
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Rənglərin qorunması və parlaqlıq</li>
                        <li><i class="fas fa-check-circle" style="color: var(--primary);"></i> Heç bir kimyəvi qoxu qalmır</li>
                    </ul>
                    <div style="margin-top: 40px;">
                        <a href="<?php echo BASE_URL; ?>contact/contact" class="btn btn-primary">
                            <i class="fab fa-whatsapp"></i> WhatsApp ilə Əlaqə
                        </a>
                    </div>
                </div>
            </div>

            <div class="process-section" style="margin-top: 50px;">
                <div class="section-header">
                    <span class="section-badge">Mərhələlər</span>
                    <h2 class="section-title">Yuma <span class="text-gradient">Prosesimiz</span></h2>
                    <p class="section-desc">Hər bir xalça bizim üçün dəyərlidir</p>
                </div>
                
                <div class="process-grid">
                    <div class="process-item">
                        <div class="process-number">01</div>
                        <h4>Tozdan Təmizləmə</h4>
                        <p>Xalçalarınız tozsoran yox, xüsusi çırpma maşınları ilə quru tozdan tam azad edilir.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">02</div>
                        <h4>Avtomatik Yuma</h4>
                        <p>12 fırçalı avtomatik maşınlarda hər iki tərəfi bərabər şəkildə yuyulur.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">03</div>
                        <h4>Sıxma və Qurutma</h4>
                        <p>Sentrafuqa sistemi ilə 95% su kənarlaşdırılır və qapalı otaqlarda qurudulur.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-number">04</div>
                        <h4>Ətirləmə və Paketləmə</h4>
                        <p>Tam quruduqdan sonra xüsusi ətir vurulur və paketlənərək ünvanınıza çatdırılır.</p>
                    </div>
                </div>
            </div>

            <div class="detailed-desc reveal" style="margin-top: 50px; background: rgba(227, 31, 38, 0.03); padding: 40px; border-radius: var(--radius); border: 1px dashed var(--primary);">
                <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                    <span class="section-badge">Peşəkar Yanaşma</span>
                    <h2 class="section-title">Nə üçün Peşəkar <span class="text-gradient">Yuyulma</span> Vacibdir?</h2>
                </div>
                <div style="line-height: 1.8; color: var(--text-secondary);">
                    <p style="margin-bottom: 25px;">
                        Xalçaların təmizliyi evimizin rahatlığı və sağlamlığımız üçün vacibdir. Lakin xalçalar zamanla toz, ləkə və müxtəlif bakteriyaların toplanması nəticəsində həm görünüşünü, həm də gigiyenikliyini itirir. Məhz bu səbəbdən xalçaların peşəkar yuyulması vacibdir.
                    </p>
                    <p style="margin-bottom: 25px;">
                        <strong>Çiçəkxalı</strong> olaraq xalçaların yuyulmasını ən son texnologiyalara malik, avtomatlaşdırılmış avadanlıqlar və illərin təcrübəsinə əsaslanan peşəkar komanda ilə həyata keçiririk. Ənənəvi, məişət şəraitində istifadə edilən yuma üsullarından fərqli olaraq, bizim avadanlıqlar xalçaları dərindən təmizləyir, rənglərini soldurmadan və toxumasını zədələmədən ilk günkü təravətinə qaytarır.
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Tozdan təmizləmə</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Ləkələrdən təmizlənmə</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Avtomatik yuma</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Sıxılma və qurutma</span>
                        <span style="display: flex; align-items: center; gap: 10px; font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--primary);"></i> Ətirləmə və paketlənmə</span>
                    </div>
                    <p style="margin-top: 25px;">
                        Xidmətlərimiz bütün növ xalçaları əhatə edir. Hər növ xalçanın material və quruluşuna uyğun olaraq fərdi yanaşma tətbiq olunur.
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>
