# Çiçəkxalı

PHP əsaslı Çiçəkxalı xalça yuma saytı. Layihə GitHub/VS Code üçün təmizlənib.

## Vacib

- Bu layihə **PHP + Apache** tələb edir. GitHub Pages PHP-ni işə salmır.
- GitHub yalnız kodun saxlanması üçün istifadə olunacaqsa, repository-yə birbaşa yükləyə bilərsiniz.
- cPanel/Apache serverdə `.htaccess` işləyir.
- CallMeBot API açarı artıq kodun içində saxlanılmır.

## Lokal işə salmaq

1. `.env.example` faylını `.env` adı ilə kopyalayın.
2. `.env` daxilində lazım olan `BASE_URL`, `CALLMEBOT_PHONE` və `CALLMEBOT_APIKEY` dəyərlərini yazın.
3. XAMPP istifadə edirsinizsə layihəni `htdocs` daxilinə qoyun və Apache-ni başladın.
4. VS Code-da layihənin kök qovluğunu açın.
5. Saytı `http://localhost/cicekxali/` ünvanından açın.

Alternativ olaraq PHP built-in server:
```bash
php -S localhost:8000
```
Sonra `http://localhost:8000` açın.

## GitHub-a göndərmək

```bash
git init
git add .
git commit -m "Prepare project for GitHub and VS Code"
git branch -M main
git remote add origin YOUR_GITHUB_REPOSITORY_URL
git push -u origin main
```

`.env`, ziyarətçi logları və digər lokal məlumatlar `.gitignore` tərəfindən qorunur.

## Hosting

cPanel/Apache üçün layihənin **içindəki faylları** `public_html`-a yerləşdirin. Serverdə environment dəyişənlərini və ya serverdə saxlanan `.env` faylını konfiqurasiya edin.

## Təhlükəsizlik

- GitHub-a API açarı, şifrə və şəxsi log göndərməyin.
- `tracker/logs.json` runtime məlumatıdır və repository-də saxlanmamalıdır.
- Admin paneldəki köhnə frontend şifrəsi silinib; real admin autentifikasiyası server tərəfdə qurulmalıdır.
