# Çiçəkxalı — Peşəkar Xalça Yuma Saytı

Bu layihə **100% Statik HTML / CSS / JavaScript** əsasında hazırlanıb və **GitHub Pages**, **Vercel**, **Netlify**, **Cloudflare Pages** kimi bütün pulsuz hostinq platformalarında işləməyə tam hazırdır. Heç bir PHP və ya server tələb olunmur!

---

## 🚀 Xüsusiyyətlər

- **100% Statik HTML5/CSS3/JS**: Bütün PHP asılılıqları silinib və statik formata keçirilib.
- **GitHub Pages Uyğunluğu**: Layihənin kök (root) qovluğunda `index.html` yerləşdiyi üçün GitHub Pages-də birbaşa işləyir.
- **WhatsApp Sifariş İnteqrasiyası**: Sifariş formu məlumatları birbaşa müştərinin WhatsApp proqramına yönləndirir (`wa.me`).
- **Tam Mobil & SEO Optimizasiyası**: Responsive dizayn, Open Graph, Sitemap.xml və Google Tag Manager dəstəyi.

---

## 🛠️ GitHub Pages-də Nəşr Etmək (Publishing)

1. Bu repository-ni GitHub hesabınıza `push` edin:
   ```bash
   git add .
   git commit -m "Convert project to pure static HTML for GitHub Pages"
   git branch -M main
   git push -u origin main
   ```
2. GitHub-da repository səhifənizə daxil olun.
3. **Settings** -> **Pages** bölməsinə keçin.
4. **Build and deployment** hissəsində:
   - **Source**: `Deploy from a branch`
   - **Branch**: `main` / Folder: `/ (root)`
5. **Save** düyməsini basın.
6. Bir neçə dəqiqə ərzində saytınız `https://<istifadəçi-adınız>.github.io/<repo-adı>/` ünvanında canlı olacaq.

---

## 💻 Lokal İşə Salmaq

Statik layihə olduğu üçün hər hansı lokal serverə ehtiyac yoxdur.
İstənilən brauzerlə `index.html` faylını açmağınız kifayətdir və ya VS Code **Live Server** eklentisini istifadə edə bilərsiniz.

---

## 📁 Qovluq Strukturu

```
├── index.html                # Ana səhifə
├── sitemap.xml               # SEO Sitemap
├── robots.txt                # Axtarış mühərrikləri üçün təlimat
├── README.md                 # Layihə sənədləşməsi
├── assets/
│   ├── css/                  # CSS stilləri
│   ├── js/                   # JS məntiqləri (Order & Form handling)
│   └── images/               # Şəkillər və loqolar
├── services/                 # Xidmət səhifələri (.html)
├── contact/                  # Əlaqə & Sifariş səhifəsi (.html)
└── admin/                    # Admin paneli interfeysi (.html)
```
