// ===== Custom Select Logic (Generalized) =====
document.addEventListener('DOMContentLoaded', () => {
    const customSelects = document.querySelectorAll('.custom-select-wrapper');
    
    customSelects.forEach(wrapper => {
        const trigger = wrapper.querySelector('.custom-select-trigger');
        const options = wrapper.querySelectorAll('.custom-option');
        const input = wrapper.querySelector('input[type="hidden"]');
        const span = trigger.querySelector('span');

        if(trigger) {
            trigger.addEventListener('click', (e) => {
                e.stopPropagation();
                customSelects.forEach(other => {
                    if (other !== wrapper) other.classList.remove('open');
                });
                wrapper.classList.toggle('open');
                
                // Prevent body scroll if opening
                if (wrapper.classList.contains('open')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            });
        }

        options.forEach(option => {
            option.addEventListener('click', function() {
                options.forEach(opt => opt.classList.remove('selected'));
                this.classList.add('selected');
                span.textContent = this.textContent;
                input.value = this.dataset.value;
                wrapper.classList.remove('open');
                document.body.style.overflow = '';
            });
        });
    });

    document.addEventListener('click', () => {
        customSelects.forEach(w => w.classList.remove('open'));
        document.body.style.overflow = '';
    });

    // ===== Phone Number Mask (Azerbaijan) =====
    const phoneInput = document.getElementById('tel');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (!value.startsWith('994')) value = '994' + value;
            let x = value.match(/(\d{0,3})(\d{0,2})(\d{0,3})(\d{0,2})(\d{0,2})/);
            if (!x[2]) {
                e.target.value = '+994 ';
            } else {
                e.target.value = '+994 (' + x[2] + (x[3] ? ') ' + x[3] : '') + (x[4] ? '-' + x[4] : '') + (x[5] ? '-' + x[5] : '');
            }
        });
        phoneInput.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && phoneInput.value.length <= 5) e.preventDefault();
        });
        phoneInput.addEventListener('focus', () => {
            if (phoneInput.value === '') phoneInput.value = '+994 ';
        });
    }

    // ===== Order Form to WhatsApp (Static HTML Mode) =====
    const orderForm = document.getElementById('orderForm');
    if (orderForm) {
        orderForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const submitBtn = this.querySelector('.order-submit-btn');
            const btnText = submitBtn.querySelector('span');
            const originalText = btnText.textContent;
            submitBtn.disabled = true;
            btnText.textContent = 'Yönləndirilir...';

            const name = document.getElementById('name')?.value || '';
            const tel = document.getElementById('tel')?.value || '';
            const serviceText = document.querySelector('#serviceSelect .custom-select-trigger span')?.textContent || 'Qeyd edilməyib';
            const size = document.getElementById('size')?.value || 'Qeyd edilməyib';
            const districtText = document.querySelector('#districtSelect .custom-select-trigger span')?.textContent || 'Qeyd edilməyib';
            const message = document.getElementById('message')?.value || 'Yoxdur';

            if (!name || !tel) {
                alert('Lütfən ad və telefon nömrəsini daxil edin.');
                submitBtn.disabled = false;
                btnText.textContent = originalText;
                return;
            }

            let waMsg = `🚨 *YENİ SİFARİŞ (cicekxali.az)* 🚨\n\n`;
            waMsg += `👤 *Müştəri:* ${name}\n`;
            waMsg += `📞 *Telefon:* ${tel}\n`;
            waMsg += `🏠 *Xidmət:* ${serviceText}\n`;
            waMsg += `📍 *Ünvan:* ${districtText}\n`;
            waMsg += `📏 *Ölçü:* ${size}\n`;
            waMsg += `📝 *Qeyd:* ${message}\n\n---`;

            const whatsappUrl = `https://wa.me/994554092001?text=${encodeURIComponent(waMsg)}`;

            orderForm.innerHTML = `
                <div style="text-align: center; padding: 40px 0;">
                    <div style="font-size: 50px; color: #25D366; margin-bottom: 20px;">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h2 style="margin-bottom: 15px;">Təşəkkür Edirik!</h2>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Sifarişiniz WhatsApp üzərindən mütəxəssislərimizə yönləndirilir. <br>
                        Əgər pəncərə avtomatik açılmadısa, aşağıdakı düyməyə klikləyin.
                    </p>
                    <a href="${whatsappUrl}" target="_blank" class="btn btn-primary" style="margin-top: 20px; display: inline-flex; background: #25D366; border-color: #25D366;">
                        <i class="fab fa-whatsapp"></i> WhatsApp ilə Göndər
                    </a>
                    <br>
                    <a href="../index.html" class="btn btn-outline" style="margin-top: 15px; display: inline-flex;">Ana Səhifəyə Dön</a>
                </div>`;

            window.open(whatsappUrl, '_blank');
        });
    }
});
