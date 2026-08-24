<?php 
require_once 'config.php';
$page_title       = 'Ana Səhifə';
$page_canonical   = BASE_URL . 'index.php';
$page_description = 'Çiçəkxalı – Bakıda peşəkar xalça yuma xidməti. Xalça, kilim, mebel, yun xalça yuma. Pulsuz daşınma, ekoloji vasitələr, 15+ il təcrübə. ☎ +994 55 409 20 01';
$page_keywords    = 'xalça yuma Bakı, peşəkar xalça yuma, xalça yuma xidməti, kilim təmizləmə, mebel yuma Bakı, yun xalça yuma, çiçəkxalı, xalça yuma qiymeti, pulsuz daşınma xalça yuma';
$page_og_image    = BASE_URL . 'assets/images/main1.jpg';
$extra_css        = '<link rel="stylesheet" href="' . BASE_URL . 'contacts/contacts.css">';
include 'includes/header.php'; 
?>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-bg">
            <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80" alt="Xalça yuma"
                class="hero-img">
            <div class="hero-overlay"></div>
            <!-- Decorative logo watermark - CENTERED -->
            <div class="hero-logo-watermark">
                <img src="assets/images/image2.png" alt="" aria-hidden="true">
            </div>
        </div>
        <div class="container hero-content">
            <div class="hero-badge floating">
                <i class="fas fa-shield-alt"></i> Peşəkar Xalça Yuma Xidməti
            </div>
            <h1 class="hero-title">
                Çiçəkxalı xalçanın üzünü deyil <span class="text-gradient">özünü yuyur!</span>
            </h1>
            <p class="hero-subtitle">
                Peşəkar avadanlıq və ekoloji təmiz vasitələrlə xalçalarınızı ilk günkü kimi təmizləyirik. Pulsuz daşınma
                xidməti ilə.
            </p>
            <div class="hero-buttons">
                <a href="https://wa.me/994554092001" class="btn btn-primary" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp"></i> WhatsApp ilə Sifariş
                </a>
                <a href="#pricing" class="btn btn-outline">
                    <i class="fas fa-tag"></i> Qiymətlərə Bax
                </a>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <span class="stat-number">5000+</span>
                    <span class="stat-label">Razı Müştəri</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat">
                    <span class="stat-number">15+</span>
                    <span class="stat-label">İllik Təcrübə</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Zəmanət</span>
                </div>
            </div>
        </div>
        <div class="hero-scroll">
            <a href="#about"><i class="fas fa-chevron-down"></i></a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about section" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-images">
                    <div class="about-img-main">
                        <img src="assets/images/cicekxali.png"
                            alt="Peşəkar xalça yuma" loading="lazy">
                    </div>
                    <div class="about-img-secondary">
                        <img src="assets/images/cicekxali.png"
                            alt="Təmiz xalça" loading="lazy">
                    </div>
                    <div class="about-experience">
                        <span class="exp-number">15+</span>
                        <span class="exp-text">İllik Təcrübə</span>
                    </div>
                </div>
                <div class="about-content">
                    <span class="section-badge">Haqqımızda</span>
                    <h2 class="section-title">Niyə <span class="text-gradient">Çiçəkxalı</span>?</h2>
                    <p class="about-text">
                        Çiçəkxalı olaraq 15 ildən artıq təcrübəmizlə xalçalarınızı ən yüksək keyfiyyətlə təmizləyirik.
                        Müasir texnologiya və ekoloji təmiz vasitələrdən istifadə edərək xalçalarınızın ömrünü uzadırıq.
                    </p>
                    <div class="about-features">
                        <div class="feature reveal" style="transition-delay: 0s;">
                            <div class="feature-icon"><i class="fas fa-leaf"></i></div>
                            <div>
                                <h4>Ekoloji Təmiz</h4>
                                <p>Uşaqlar və heyvanlar üçün təhlükəsiz vasitələr</p>
                            </div>
                        </div>
                        <div class="feature reveal" style="transition-delay: 0.08s;">
                            <div class="feature-icon"><i class="fas fa-truck"></i></div>
                            <div>
                                <h4>Pulsuz Daşınma</h4>
                                <p>Götürmə və çatdırılma pulsuz</p>
                            </div>
                        </div>
                        <div class="feature reveal" style="transition-delay: 0.16s;">
                            <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                            <div>
                                <h4>Zəmanət</h4>
                                <p>Keyfiyyətə 100% zəmanət veririk</p>
                            </div>
                        </div>
                        <div class="feature reveal" style="transition-delay: 0.24s;">
                            <div class="feature-icon"><i class="fas fa-clock"></i></div>
                            <div>
                                <h4>Sürətli Xidmət</h4>
                                <p>1-3 gün ərzində hazır</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services section" id="services">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Xidmətlərimiz</span>
                <h2 class="section-title">Nə <span class="text-gradient">Təklif</span> Edirik?</h2>
                <p class="section-desc">Hər növ xalça və kilim üçün peşəkar təmizləmə xidmətləri</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <img src="assets/images/main1.jpg"
                            alt="Xalça yuma" loading="lazy">
                    </div>
                    <h3>Xalça Yuma</h3>
                    <p>Hər növ xalçaların dərin təmizlənməsi, ləkə çıxarılması və dezinfeksiyası</p>
                    <a href="services/xalca-yuma" class="service-link">Ətraflı <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="assets/images/klim.png"
                            alt="Kilim təmizləmə" loading="lazy">
                    </div>
                    <h3>Kilim Təmizləmə</h3>
                    <p>İncə və qiymətli kilimlərin xüsusi qayğı ilə təmizlənməsi</p>
                    <a href="services/kilim-temizleme" class="service-link">Ətraflı <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="assets/images/mebel.png"
                            alt="Mebel təmizləmə" loading="lazy">
                    </div>
                    <h3>Mebel Yuma</h3>
                    <p>Divan, kreslo və digər yumşaq mebellərin yerində təmizlənməsi</p>
                    <a href="services/mebel-yuma" class="service-link">Ətraflı <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="assets/images/yunxalca.png"
                            alt="Yun xalça" loading="lazy">
                    </div>
                    <h3>Yun Xalça Yuma</h3>
                    <p>Yun xalçaların xüsusi texnologiya ilə zərər vermədən yuyulması</p>
                    <a href="services/yun-xalca-yuma" class="service-link">Ətraflı <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing section" id="pricing">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Qiymətlər</span>
                <h2 class="section-title">Münasib <span class="text-gradient">Qiymətlər</span></h2>
                <p class="section-desc">Keyfiyyətli xidmət, əlverişli qiymətlərlə</p>
            </div>
            <div class="pricing-grid">
                <div class="price-card">
                    <div class="price-header">
                        <div class="price-icon"><i class="fas fa-broom"></i></div>
                        <h3>Standart Yuma</h3>
                        <p class="price-desc">Adi xalçalar üçün</p>
                    </div>
                    <div class="price-amount">
                        <span class="currency">₼</span>
                        <span class="amount">2</span>
                        <span class="unit">/ m²</span>
                    </div>
                    <ul class="price-features">
                        <li><i class="fas fa-check"></i> Dərin təmizləmə</li>
                        <li><i class="fas fa-check"></i> Ləkə çıxarma</li>
                        <li><i class="fas fa-check"></i> Dezinfeksiya</li>
                        <li><i class="fas fa-check"></i> Pulsuz daşınma</li>
                        <li><i class="fas fa-check"></i> 2-3 gün müddət</li>
                    </ul>
                    <div class="price-actions">
                        <a href="contact/contact" class="price-btn primary">
                            <i class="fas fa-calendar-check"></i> Sifariş Ver
                        </a>
                        <a href="https://wa.me/994554092001?text=Salam!%20Xalça%20yuma%20ilə%20bağlı%20sualım%20var" class="price-btn secondary" target="_blank" rel="noopener">
                            <i class="fab fa-whatsapp"></i> Əlaqə
                        </a>
                    </div>
                </div>

                <div class="price-card popular">
                    <div class="popular-badge">Ən Çox Seçilən</div>
                    <div class="price-header">
                        <div class="price-icon"><i class="fas fa-magic"></i></div>
                        <h3>Premium Yuma</h3>
                        <p class="price-desc">Yun və ipək xalçalar</p>
                    </div>
                    <div class="price-amount">
                        <span class="currency">₼</span>
                        <span class="amount">3</span>
                        <span class="unit">/ m²</span>
                    </div>
                    <ul class="price-features">
                        <li><i class="fas fa-check"></i> Xüsusi yuma texnologiyası</li>
                        <li><i class="fas fa-check"></i> Dərin ləkə çıxarma</li>
                        <li><i class="fas fa-check"></i> Antibakterial işləmə</li>
                        <li><i class="fas fa-check"></i> Pulsuz daşınma</li>
                        <li><i class="fas fa-check"></i> 1-2 gün müddət</li>
                        <li><i class="fas fa-check"></i> Ətir xidməti</li>
                    </ul>
                    <div class="price-actions">
                        <a href="contact/contact" class="price-btn primary">
                            <i class="fas fa-magic"></i> Sifariş Ver
                        </a>
                        <a href="https://wa.me/994554092001?text=Salam!%20Premium%20xalça%20yuma%20ilə%20bağlı%20sualım%20var" class="price-btn secondary" target="_blank" rel="noopener">
                            <i class="fab fa-whatsapp"></i> Əlaqə
                        </a>
                    </div>
                </div>

                <div class="price-card">
                    <div class="price-header">
                        <div class="price-icon"><i class="fas fa-couch"></i></div>
                        <h3>Mebel Yuma</h3>
                        <p class="price-desc">Divan və kreslo</p>
                    </div>
                    <div class="price-amount">
                        <span class="currency">₼</span>
                        <span class="amount">30</span>
                        <span class="unit">/ ədəd</span>
                    </div>
                    <ul class="price-features">
                        <li><i class="fas fa-check"></i> Yerində təmizləmə</li>
                        <li><i class="fas fa-check"></i> Ləkə çıxarma</li>
                        <li><i class="fas fa-check"></i> Dezinfeksiya</li>
                        <li><i class="fas fa-check"></i> Qoxu aradan qaldırma</li>
                        <li><i class="fas fa-check"></i> Eyni gün xidmət</li>
                    </ul>
                    <div class="price-actions">
                        <a href="contact/contact" class="price-btn primary">
                            <i class="fas fa-couch"></i> Sifariş Ver
                        </a>
                        <a href="https://wa.me/994554092001?text=Salam!%20Mebel%20yuma%20ilə%20bağlı%20sualım%20var" class="price-btn secondary" target="_blank" rel="noopener">
                            <i class="fab fa-whatsapp"></i> Əlaqə
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="section" id="reviews" style="background: var(--bg-section);">
        <div class="container">
            <div class="section-header">
                <span class="section-badge"><i class="fas fa-star"></i> Müştəri Rəyləri</span>
                <h2 class="section-title">Müştərilərimiz <span class="text-gradient">Nə Deyir?</span></h2>
                <p class="section-desc">Minlərlə razı müştərimizin təcrübəsi</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 28px;">

                <div class="review-card" style="background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius); padding: 32px; transition: var(--transition); position: relative;">
                    <div style="display: flex; gap: 4px; margin-bottom: 16px; color: #FFD700;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 0.97rem; line-height: 1.8; margin-bottom: 24px; font-style: italic;">
                        "Xalçam 10 illik idi, heç ümid etmirdim bu qədər təmiz olsun. Çiçəkxalı həm çox peşəkar, həm də çox ədəbli xidmət göstərdi. Pulsuz daşınma xidməti ayrıca əla idi!"
                    </p>
                    <div style="display: flex; align-items: center; gap: 14px;">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), var(--primary-light)); display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.1rem; flex-shrink: 0;">N</div>
                        <div>
                            <div style="font-weight: 700; color: var(--text-primary);">Nigar Əliyeva</div>
                            <div style="font-size: 0.82rem; color: var(--text-muted);">Bakı, Yasamal</div>
                        </div>
                    </div>
                    <div style="position: absolute; top: 20px; right: 24px; font-size: 3rem; color: rgba(227,31,38,0.06); font-family: Georgia; line-height: 1;">"</div>
                </div>

                <div class="review-card" style="background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius); padding: 32px; transition: var(--transition); position: relative;">
                    <div style="display: flex; gap: 4px; margin-bottom: 16px; color: #FFD700;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 0.97rem; line-height: 1.8; margin-bottom: 24px; font-style: italic;">
                        "Divanımı da yudular, mebel hissəsini. İki gündə hazır oldu, iy qalmadı heç. Qiymət münasib, keyfiyyət super. Mütləq tövsiyə edirəm!"
                    </p>
                    <div style="display: flex; align-items: center; gap: 14px;">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, #ff8c00, #FFD700); display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.1rem; flex-shrink: 0;">R</div>
                        <div>
                            <div style="font-weight: 700; color: var(--text-primary);">Rauf Həsənov</div>
                            <div style="font-size: 0.82rem; color: var(--text-muted);">Bakı, Nəsimi</div>
                        </div>
                    </div>
                    <div style="position: absolute; top: 20px; right: 24px; font-size: 3rem; color: rgba(227,31,38,0.06); font-family: Georgia; line-height: 1;">"</div>
                </div>

                <div class="review-card" style="background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius); padding: 32px; transition: var(--transition); position: relative;">
                    <div style="display: flex; gap: 4px; margin-bottom: 16px; color: #FFD700;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 0.97rem; line-height: 1.8; margin-bottom: 24px; font-style: italic;">
                        "Kilimimiz əl toxuması idi, çox narahat idik. Amma ustalar çox diqqətlə işlədilər, rənglər heç solmadı. Şəkillər çəkib WhatsApp-da göndərdilər, çox xoşuma gəldi."
                    </p>
                    <div style="display: flex; align-items: center; gap: 14px;">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, #6a0dad, #9b59b6); display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.1rem; flex-shrink: 0;">S</div>
                        <div>
                            <div style="font-weight: 700; color: var(--text-primary);">Sevinc Məmmədova</div>
                            <div style="font-size: 0.82rem; color: var(--text-muted);">Sumqayıt</div>
                        </div>
                    </div>
                    <div style="position: absolute; top: 20px; right: 24px; font-size: 3rem; color: rgba(227,31,38,0.06); font-family: Georgia; line-height: 1;">"</div>
                </div>

                <div class="review-card" style="background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius); padding: 32px; transition: var(--transition); position: relative;">
                    <div style="display: flex; gap: 4px; margin-bottom: 16px; color: #FFD700;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 0.97rem; line-height: 1.8; margin-bottom: 24px; font-style: italic;">
                        "Üç dəfədir müraciət edirəm, hər dəfə qiymətindən razıyam, keyfiyyətindən razıyam. Xalçam sanki yeni olur hər dəfə. Çox sağ olun, işinizə uğurlar!"
                    </p>
                    <div style="display: flex; align-items: center; gap: 14px;">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, #1a7a4a, #27ae60); display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.1rem; flex-shrink: 0;">E</div>
                        <div>
                            <div style="font-weight: 700; color: var(--text-primary);">Elnur Quliyev</div>
                            <div style="font-size: 0.82rem; color: var(--text-muted);">Bakı, Binəqədi</div>
                        </div>
                    </div>
                    <div style="position: absolute; top: 20px; right: 24px; font-size: 3rem; color: rgba(227,31,38,0.06); font-family: Georgia; line-height: 1;">"</div>
                </div>

                <div class="review-card" style="background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius); padding: 32px; transition: var(--transition); position: relative;">
                    <div style="display: flex; gap: 4px; margin-bottom: 16px; color: #FFD700;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 0.97rem; line-height: 1.8; margin-bottom: 24px; font-style: italic;">
                        "Matrasımı yudular, evə gətirəndə sanki yeni kimi idi. Uşaqlar allergiyadan əziyyət çəkirdi, ondan sonra çox yaxşılaşdı. Çox razıyam, minnətdaram!"
                    </p>
                    <div style="display: flex; align-items: center; gap: 14px;">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), #ff8c00); display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.1rem; flex-shrink: 0;">A</div>
                        <div>
                            <div style="font-weight: 700; color: var(--text-primary);">Aynur İsmayılova</div>
                            <div style="font-size: 0.82rem; color: var(--text-muted);">Bakı, Sabunçu</div>
                        </div>
                    </div>
                    <div style="position: absolute; top: 20px; right: 24px; font-size: 3rem; color: rgba(227,31,38,0.06); font-family: Georgia; line-height: 1;">"</div>
                </div>

                <div class="review-card" style="background: linear-gradient(135deg, var(--primary), var(--primary-light)); border-radius: var(--radius); padding: 32px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; gap: 16px;">
                    <div style="font-size: 3rem; font-weight: 800; color: white; line-height: 1;">5000+</div>
                    <div style="color: rgba(255,255,255,0.9); font-size: 1rem; font-weight: 500;">Razı Müştəri</div>
                    <div style="display: flex; gap: 4px; color: #FFD700; font-size: 1.2rem;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div style="color: rgba(255,255,255,0.85); font-size: 0.9rem;">Google Reytinqi: 4.9/5</div>
                    <a href="https://wa.me/994554092001" style="margin-top: 8px; background: white; color: var(--primary); padding: 12px 24px; border-radius: var(--radius-sm); font-weight: 700; font-size: 0.95rem; display: inline-flex; align-items: center; gap: 8px;">
                        <i class="fab fa-whatsapp"></i> Sifariş Ver
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Gallery / Before-After -->
    <section class="gallery section" id="gallery">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Digər</span>
                <h2 class="section-title">Digər <span class="text-gradient">Xidmətlərimiz</span></h2>
                <p class="section-desc">Pərdə, divan, kreslo, stul və digər təmizlik xidmətlərimiz</p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="assets/images/divan.png" alt="Divan Yuma" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Divan Yuma</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/perde.png" alt="Pərdə Yuma" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Pərdə Yuma</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/kreslo.png" alt="Kreslo Yuma" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Kreslo Yuma</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/stul.png" alt="Stul Yuma" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Stul Yuma</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Əlaqə</span>
                <h2 class="section-title">Bizimlə <span class="text-gradient">Əlaqə</span> Saxlayın</h2>
                <p class="section-desc">Suallarınız var? Bizimlə əlaqə saxlayın, sizə kömək edək!</p>
            </div>
            <div class="contact-grid">
                <div class="contact-cards">
                    <a href="https://wa.me/994554092001" class="contact-card whatsapp" target="_blank" rel="noopener"
                        id="whatsapp-link">
                        <div class="contact-card-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h3>WhatsApp</h3>
                        <p>+994 55 409 20 01</p>
                        <span class="contact-card-action">Mesaj Göndər <i class="fas fa-arrow-right"></i></span>
                    </a>
                    <a href="https://www.instagram.com/cicek_xali" class="contact-card instagram" target="_blank"
                        rel="noopener" id="instagram-link">
                        <div class="contact-card-icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <h3>Instagram</h3>
                        <p>@cicek_xali</p>
                        <span class="contact-card-action">Bizi İzlə <i class="fas fa-arrow-right"></i></span>
                    </a>
                    <a href="tel:+994554092001" class="contact-card phone" id="phone-link">
                        <div class="contact-card-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3>Mobil Telefon</h3>
                        <p>+994 55 409 20 01</p>
                        <span class="contact-card-action">Zəng Et <i class="fas fa-arrow-right"></i></span>
                    </a>
                    <a href="tel:+994124509090" class="contact-card phone" id="office-phone-link">
                        <div class="contact-card-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3>İş Telefonu</h3>
                        <p>012 450 90 90</p>
                        <span class="contact-card-action">Zəng Et <i class="fas fa-arrow-right"></i></span>
                    </a>
                    <div class="contact-card location">
                        <div class="contact-card-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Ünvan</h3>
                        <p>Bakı şəhəri</p>
                        <span class="contact-card-action">Xəritədə Bax <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Lightbox for Gallery -->
    <div class="lightbox" id="lightbox">
        <span class="lightbox-close" id="lightbox-close">&times;</span>
        <button class="lightbox-prev" id="lightbox-prev"><i class="fas fa-chevron-left"></i></button>
        <img class="lightbox-content" id="lightbox-img">
        <button class="lightbox-next" id="lightbox-next"><i class="fas fa-chevron-right"></i></button>
    </div>

<?php include 'includes/footer.php'; ?>