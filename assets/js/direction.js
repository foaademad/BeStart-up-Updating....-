
        // اختيار عنصر select من الـ DOM
        const languageSelector = document.getElementById('language-selector');
        // عند تغيير اللغة
        languageSelector.addEventListener('change', (e) => {
            const selectedLanguage = e.target.value;

            // إذا تم اختيار "ar" نضيف كلاس rtl ونحفظ الاختيار في localStorage
            if (selectedLanguage === 'ar') {
                document.body.classList.add('rtl');
                localStorage.setItem('language', 'ar');
            } else {
                // إزالة كلاس rtl إذا تم اختيار لغة أخرى
                document.body.classList.remove('rtl');
                localStorage.setItem('language', 'ltr');
            }
        });

        // عند تحميل الصفحة، استرجاع اللغة من localStorage
        document.addEventListener('DOMContentLoaded', () => {
            const savedLanguage = localStorage.getItem('language');

            if (savedLanguage === 'ar') {
                document.body.classList.add('rtl');
                languageSelector.value = 'ar'; // تحديد الاختيار في القائمة
            } else {
                document.body.classList.remove('rtl');
                languageSelector.value = 'en';
            }
        });
   