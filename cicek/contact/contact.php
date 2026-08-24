<?php 
require_once '../config.php';
$page_title       = 'Online Sifariş - Çiçəkxalı Xalça Yuma';
$page_canonical   = BASE_URL . 'contact/contact.php';
$page_description = 'Çiçəkxalı ilə online sifariş verin. Xalça, kilim, mebel yuma üçün forma doldurun, biz sizinlə əlaqə saxlayaq. Pulsuz daşınma, peşəkar xidmət.';
$page_keywords    = 'online sifariş xalça yuma, xalça yuma sifariş ver, çiçəkxalı sifariş, xalça yuma qiymət öyrən';
$page_og_image    = BASE_URL . 'assets/images/main1.jpg';
$is_contact_page  = true;
$extra_css        = '<link rel="stylesheet" href="' . BASE_URL . 'contacts/contacts.css">';

include '../includes/header.php'; 
?>

<!-- Order Page Hero -->
<section class="order-hero">
    <div class="container order-hero-inner">
        <div class="order-hero-text">
            <span class="section-badge"><i class="fas fa-calendar-check"></i> Online Sifariş</span>
            <h1 class="order-hero-title">
                Xalca Yuma Sifarişi <br>
                <span class="text-gradient">İndi Verin</span>
            </h1>
            <p class="order-hero-desc">Bütün növ xalçaların peşəkar yuyulması üçün müraciət edin. <br> Formu doldurun, sizinlə dərhal əlaqə saxlayaq.</p>
            <div class="order-hero-badges">
                <span><i class="fas fa-truck"></i> Pulsuz Daşınma</span>
                <span><i class="fas fa-shield-alt"></i> 100% Zəmanət</span>
                <span><i class="fas fa-magic"></i> Ləkə Çıxarma</span>
            </div>
        </div>
    </div>
</section>

<!-- Order Content -->
<section class="order-section">
    <div class="container order-grid">

        <!-- Contact Info Cards -->
        <div class="order-info">
            <h2 class="order-info-title">Birbaşa <span class="text-gradient">Əlaqə</span></h2>
            <p class="order-info-sub">Sifariş formu doldurmaq əvəzinə birbaşa yazın:</p>

            <div class="oinfo-cards">
                <a href="https://wa.me/994554092001" class="oinfo-card whatsapp-card" target="_blank" rel="noopener">
                    <div class="oinfo-icon"><i class="fab fa-whatsapp"></i></div>
                    <div class="oinfo-text">
                        <h3>WhatsApp</h3>
                        <p>+994 55 409 20 01</p>
                        <span class="oinfo-action">Mesaj Göndər <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
                <a href="tel:+994554092001" class="oinfo-card phone-card">
                    <div class="oinfo-icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="oinfo-text">
                        <h3>Zəng Et</h3>
                        <p>+994 55 409 20 01</p>
                        <span class="oinfo-action">Zəng Et <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
                <div class="oinfo-card info-plain">
                    <div class="oinfo-icon"><i class="fas fa-clock"></i></div>
                    <div class="oinfo-text">
                        <h3>İş Saatları</h3>
                        <p>B.e - Şənbə: 09:00 – 20:00</p>
                    </div>
                </div>
                <div class="oinfo-card info-plain">
                    <div class="oinfo-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="oinfo-text">
                        <h3>Ünvan</h3>
                        <p>Bakı şəhəri, Azərbaycan</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Form -->
        <div class="order-form-wrap">
            <div class="order-form-header">
                <i class="fas fa-calendar-check order-form-icon"></i>
                <div>
                    <h2>Sifariş Formu</h2>
                    <p>Məlumatları doldurun, biz sizi arayaq</p>
                </div>
            </div>

            <form action="#" method="POST" class="order-form" id="orderForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name"><i class="fas fa-user"></i> Ad Soyad</label>
                        <input type="text" id="name" name="name" class="form-control"
                               placeholder="Məs: Elnur Məmmədov" required>
                    </div>
                    <div class="form-group">
                        <label for="tel"><i class="fas fa-phone"></i> Telefon</label>
                        <input type="tel" id="tel" name="tel" class="form-control"
                               placeholder="+994 50 XXX XX XX" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="service"><i class="fas fa-concierge-bell"></i> Xidmət Növü</label>
                    <div class="custom-select-wrapper" id="serviceSelect">
                        <div class="custom-select-trigger">
                            <span>Xidmət seçin...</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="custom-options">
                            <span class="custom-option selected" data-value="">Xidmət seçin...</span>
                            <span class="custom-option" data-value="xalca">🏠 Xalça Yuma — ₼2/m²</span>
                            <span class="custom-option" data-value="premium">✨ Premium Yuma (Yun/İpək) — ₼3/m²</span>
                            <span class="custom-option" data-value="kilim">🎨 Kilim Təmizləmə</span>
                            <span class="custom-option" data-value="mebel">🛋️ Mebel Yuma — ₼30/ədəd</span>
                            <span class="custom-option" data-value="perde">🪟 Pərdə Yuma</span>
                            <span class="custom-option" data-value="diger">📦 Digər</span>
                        </div>
                        <input type="hidden" name="service" id="serviceInput" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="size"><i class="fas fa-ruler-combined"></i> Ölçü / Miqdar</label>
                        <input type="text" id="size" name="size" class="form-control"
                               placeholder="Məs: 3x4 m² və ya 2 ədəd">
                    </div>
                    <div class="form-group">
                        <label for="district"><i class="fas fa-map-marker-alt"></i> Rayon / Ünvan</label>
                        <div class="custom-select-wrapper" id="districtSelect">
                            <div class="custom-select-trigger">
                                <span>Rayon seçin...</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="custom-options">
                                <span class="custom-option selected" data-value="">Rayon seçin...</span>
                                <span class="custom-option" data-value="binagadi">Binəqədi (Biləcəri / Sulutəpə)</span>
                                <span class="custom-option" data-value="qaradagh">Qaradağ (Lökbatan / Sahil)</span>
                                <span class="custom-option" data-value="narimanov">Nərimanov</span>
                                <span class="custom-option" data-value="nasimi">Nəsimi (20 Yanvar / Memar Əcəmi)</span>
                                <span class="custom-option" data-value="nizami">Nizami (8-ci km / Neftçilər / Qarayev)</span>
                                <span class="custom-option" data-value="sabunchu">Sabunçu (Bakıxanov / Zabrat / Maştağa)</span>
                                <span class="custom-option" data-value="sabail">Səbail (Bayıl / Badamdar)</span>
                                <span class="custom-option" data-value="surakhani">Suraxanı (Yeni Günəşli / Hövsan)</span>
                                <span class="custom-option" data-value="pirallahi">Pirallahı</span>
                                <span class="custom-option" data-value="khatai">Xətai (Əhmədli / Həzi Aslanov)</span>
                                <span class="custom-option" data-value="khazar">Xəzər (Mərdəkan / Şüvəlan / Binə)</span>
                                <span class="custom-option" data-value="yasamal">Yasamal (Yeni Yasamal)</span>
                                <span class="custom-option" data-value="khirdalan">Xırdalan</span>
                                <span class="custom-option" data-value="masazir">Masazır</span>
                                <span class="custom-option" data-value="sumgayit">Sumqayıt</span>
                                <span class="custom-option" data-value="diger">Digər ərazilər</span>
                            </div>
                            <input type="hidden" name="district" id="districtInput" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message"><i class="fas fa-comment-alt"></i> Əlavə Qeyd (İstəyə bağlı)</label>
                    <textarea id="message" name="message" class="form-control"
                              placeholder="Xalçanız haqqında əlavə məlumat (rəng, material, ləkə var, köhnədir vs.)..."></textarea>
                </div>

                <button type="submit" class="order-submit-btn">
                    <i class="fas fa-paper-plane"></i>
                    <span>Sifariş Göndər</span>
                    <div class="btn-shine"></div>
                </button>

                <p class="form-privacy"><i class="fas fa-lock"></i> Məlumatlarınız gizli saxlanılır. Spam yoxdur.</p>
            </form>
        </div>

    </div>
</section>


<script src="<?php echo BASE_URL; ?>assets/js/order_logic.js"></script>
<?php include '../includes/footer.php'; ?>
