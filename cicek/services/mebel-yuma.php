<?php 
$page_title       = 'Mebel Yuma Xidməti Bakı';
$page_canonical   = 'https://cicekxali.az/services/mebel-yuma.php';
$page_description = 'Çiçəkxalı – Divan, kreslo, matras və yumşaq mebellərin yerində təmizlənməsi. Deep clean texnologiyası ilə 99.9% bakteriya məhvi. Bakıda mebel yuma xidməti. ☎ +994 55 409 20 01';
$page_keywords    = 'mebel yuma Bakı, divan yuma, kreslo yuma, matras təmizlənməsi, yumşaq mebel yuma Bakı, mebel dezinfeksiya, çiçəkxalı mebel yuma, sofa cleaning Baku';
$page_og_image    = 'https://cicekxali.az/assets/images/mebel.png';
$is_service_page  = true;
$extra_css = "
<style>
    .service-page-hero {
        padding: 120px 0 60px;
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
        max-width: 450px;
        margin: 0 auto;
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        border: 4px solid var(--primary);
        aspect-ratio: 9/16;
        background: #000;
    }

    .video-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .content-section {
        padding: 100px 0;
    }

    .process-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 60px;
    }

    .process-item {
        background: var(--bg-card);
        padding: 45px 35px;
        border-radius: var(--radius);
        border-bottom: 5px solid var(--primary);
        box-shadow: var(--shadow);
        transition: var(--transition);
        text-align: center;
    }

    .process-item:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
        border-bottom-color: var(--accent);
    }

    .process-icon {
        width: 70px;
        height: 70px;
        background: rgba(227, 31, 38, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: var(--primary);
        font-size: 1.8rem;
    }

    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 50px;
        color: var(--primary);
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 1px;
    }

    .back-btn:hover {
        gap: 18px;
    }

    .mebel-type-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 20px;
        margin-top: 40px;
    }

    .mebel-type-card {
        background: white;
        padding: 24px;
        border-radius: var(--radius-sm);
        text-align: center;
        border: 1px solid var(--border);
        transition: var(--transition);
    }

    .mebel-type-card:hover {
        border-color: var(--primary);
        background: var(--bg-card-hover);
    }

    .mebel-type-card i {
        font-size: 2rem;
        color: var(--primary);
        margin-bottom: 12px;
        display: block;
    }
</style>
";
include '../includes/header.php'; 
?>

    <header class="service-page-hero">
        <div class="container" style="position: relative; z-index: 2;">
            <span class="section-badge">Deep Clean Texnologiyası</span>
            <h1 class="hero-title" style="color: var(--text-primary); margin: 24px auto; max-width: 700px; text-align: center;">
                Mebel
                <span style="display: block; background: linear-gradient(135deg, #e31f26 20%, #ff5e00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-style: italic; letter-spacing: -1px;">Yuma</span>
            </h1>
            <p class="hero-subtitle" style="color: var(--text-secondary); margin: 0 auto; max-width: 560px; text-align: center;">
                Divan, kreslo və digər yumşaq mebellərinizin dərindən təmizlənməsi və dezinfeksiyası.
            </p>
            <div style="margin-top: 36px;">
                <a href="<?php echo BASE_URL; ?>contact/contact" class="btn btn-primary">
                    <i class="fas fa-calendar-check"></i> Indi Sifariş Ver
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
                        <span class="section-badge">Yerində Xidmət</span>
                        <h2 class="section-title">Evinizdən <span class="text-gradient">Çıxmadan</span></h2>
                        <p class="section-desc" style="margin: 0;">Mebellərinizi daşımırıq, birbaşa ünvanınızda peşəkar avadanlıqlarla təmizləyirik.</p>
                    </div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/IM-DrYBMHPo" title="Mebel Yuma" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="text-side">
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <span class="section-badge">Nə üçün Biz?</span>
                        <h2 class="section-title">Gigiyenik <span class="text-gradient">Təmizlik</span></h2>
                    </div>
                    <p class="about-text">
                        Yumşaq mebellər toz, tər, ləkə və bakteriyaların ən çox toplandığı yerdir. Ev şəraitində adi təmizləmə bu çirki daha da dərini yeridir. <strong>Çiçəkxalı</strong> olaraq biz, yüksək vakuum gücünə malik aparatlarla çirki tamamilə toxumadan çəkirik.
                    </p>
                    
                    <div class="mebel-type-grid">
                        <div class="mebel-type-card">
                            <i class="fas fa-couch"></i>
                            <span>Divanlar</span>
                        </div>
                        <div class="mebel-type-card">
                            <i class="fas fa-chair"></i>
                            <span>Kreslolar</span>
                        </div>
                        <div class="mebel-type-card">
                            <i class="fas fa-bed"></i>
                            <span>Matraslar</span>
                        </div>
                        <div class="mebel-type-card">
                            <i class="fas fa-utensils"></i>
                            <span>Yumşaq Stullar</span>
                        </div>
                    </div>

                    <div style="margin-top: 50px;">
                        <a href="<?php echo BASE_URL; ?>contact/contact" class="btn btn-primary">
                            <i class="fab fa-whatsapp"></i> WhatsApp ilə Yerində Sifariş
                        </a>
                    </div>
                </div>
            </div>

            <div class="process-section" style="margin-top: 40px;">
                <div class="section-header">
                    <span class="section-badge">Peşəkar Metodlar</span>
                    <h2 class="section-title">Təmizlik <span class="text-gradient">Mərhələləri</span></h2>
                    <p class="section-desc">Mebellərinizin materialına uyğun fərdi yanaşma</p>
                </div>
                
                <div class="process-grid">
                    <div class="process-item">
                        <div class="process-icon"><i class="fas fa-compress-arrows-alt"></i></div>
                        <h4>İlkin Sorultu</h4>
                        <p>Mebelin səthindəki quru toz və qırıntılar güclü vakuumla təmizlənir.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-icon"><i class="fas fa-spray-can"></i></div>
                        <h4>Ləkə İşlənməsi</h4>
                        <p>İnadkar ləkələr üçün xüsusi bitki mənşəli ləkəçıxarıcılar tətbiq olunur.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-icon"><i class="fas fa-water"></i></div>
                        <h4>Buxarlı Yuma</h4>
                        <p>İsti buxar və şampun qarışığı ilə liflər dərindən yuyulur.</p>
                    </div>
                    <div class="process-item">
                        <div class="process-icon"><i class="fas fa-wind"></i></div>
                        <h4>Vakuumla Qurulama</h4>
                        <p>Suyun 90%-i geri çəkilir, mebel cəmi bir neçə saat ərzində tam quruyur.</p>
                    </div>
                </div>
            </div>

            <div class="detailed-desc reveal" style="margin-top: 40px; background: rgba(227, 31, 38, 0.03); padding: 40px; border-radius: var(--radius); border: 2px solid var(--border);">
                <div class="section-header" style="text-align: left; margin-bottom: 40px;">
                    <span class="section-badge">Sağlamlıq Üçün</span>
                    <h2 class="section-title">Niyə Matras və Divan <span class="text-gradient">Yumalısınız</span>?</h2>
                </div>
                <div style="line-height: 2; color: var(--text-secondary); font-size: 1.1rem;">
                    <p style="margin-bottom: 30px;">
                        İnsan gününün orta hesabla 8 saatını matrasda, bir neçə saatını isə divanda keçirir. Bu zaman ərzində tökülən dəri qalıqları toz gənələri (mites) üçün əla mühit yaradır. Bu isə allergik reaksiyalara, asmaya və dəri xəstəliklərinə səbəb ola bilər.
                    </p>
                    <p style="margin-bottom: 30px;">
                        <strong>Çiçəkxalı</strong> təmizlikdə sadəcə vizual gözəlliyi deyil, həm də tam dezinfeksiyanı hədəfləyir. Bizim istifadə etdiyimiz Kärcher avadanlıqları çirki ən dərindən çəkərək ailənizin sağlamlığını qoruyur.
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-top: 30px;">
                        <span style="display: flex; align-items: center; gap: 12px; font-weight: 700; color: var(--text-primary);"><i class="fas fa-shield-virus" style="color: var(--primary);"></i> 99.9% Bakteriya məhvi</span>
                        <span style="display: flex; align-items: center; gap: 12px; font-weight: 700; color: var(--text-primary);"><i class="fas fa-wind" style="color: var(--primary);"></i> Pis qoxuların silinməsi</span>
                        <span style="display: flex; align-items: center; gap: 12px; font-weight: 700; color: var(--text-primary);"><i class="fas fa-magic" style="color: var(--primary);"></i> Rənglərin canlanması</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>
