/* ====================================================
   FUTURE RECRUITMENT - MAIN JAVASCRIPT
   Handles: Translations, Theme, RTL/LTR, Counters, UI
   ==================================================== */

/* ============ TRANSLATIONS ============ */
const translations = {
    en: {
        "brand.name": "Future Recruitment",
        "brand.tagline": "Connecting Talent with Opportunity",

        "nav.home": "Home",
        "nav.about": "About Us",
        "nav.services": "Services",
        "nav.countries": "Countries",
        "nav.contact": "Contact Us",
        "nav.whatsapp": "WhatsApp",

        "hero.badge": "Trusted Global Recruitment Partner",
        "hero.title": "Your Career Future Starts With Future Recruitment",
        "hero.subtitle": "Connecting ambitious professionals with world-class opportunities across the Gulf region. Your journey to a brighter career starts here.",
        "hero.cta1": "Browse Opportunities",
        "hero.cta2": "Contact Us",

        "about.tag": "About Us",
        "about.title": "Who We Are",
        "about.subtitle": "Future Recruitment is a leading overseas employment agency, helping thousands of professionals achieve their career dreams.",
        "about.mission.title": "Our Mission",
        "about.mission.text": "To bridge the gap between talented professionals and exceptional career opportunities by providing reliable, transparent, and professional recruitment services.",
        "about.vision.title": "Our Vision",
        "about.vision.text": "To become the most trusted global recruitment agency, recognized for excellence, integrity, and creating life-changing career paths for candidates worldwide.",
        "about.values.title": "Our Values",
        "about.values.text": "Integrity, transparency, professionalism, and commitment to both candidates and employers. We build relationships that last.",

        "services.tag": "Our Services",
        "services.title": "What We Offer",
        "services.subtitle": "Comprehensive recruitment solutions tailored to your needs.",
        "services.overseas.title": "Overseas Recruitment",
        "services.overseas.text": "We connect skilled candidates with top employers across the Gulf region and beyond.",
        "services.visa.title": "Visa & Travel Assistance",
        "services.visa.text": "Complete visa processing, documentation, and travel arrangements handled by our experts.",
        "services.candidate.title": "Candidate Support",
        "services.candidate.text": "End-to-end support from application to arrival, including orientation and settlement.",
        "services.employer.title": "Employer Solutions",
        "services.employer.text": "Tailored recruitment strategies to help employers find the best talent for their organizations.",
        "services.learnMore": "Learn More",

        "countries.tag": "Where We Operate",
        "countries.title": "Countries We Serve",
        "countries.subtitle": "We recruit for prestigious companies across the Gulf region.",

        "stats.candidates": "Candidates Placed",
        "stats.companies": "Partner Companies",
        "stats.years": "Years Experience",
        "stats.countries": "Countries",

        "why.tag": "Why Choose Us",
        "why.title": "The Future Recruitment Advantage",
        "why.trusted.title": "Trusted Opportunities",
        "why.trusted.text": "Verified, legitimate job offers from reputable employers with transparent terms.",
        "why.fast.title": "Fast Processing",
        "why.fast.text": "Streamlined procedures ensure quick turnaround from application to deployment.",
        "why.support.title": "Professional Support",
        "why.support.text": "Dedicated team available 24/7 to assist you at every step of your journey.",
        "why.network.title": "Extensive Network",
        "why.network.text": "Strong partnerships with leading employers across the Gulf region.",

        "testimonials.tag": "Testimonials",
        "testimonials.title": "What Our Clients Say",
        "testimonials.t1.text": "\"Future Recruitment made my dream of working in the Gulf come true. The entire process was smooth, transparent, and professional.\"",
        "testimonials.t1.name": "Ahmed Mohamed",
        "testimonials.t1.role": "Engineer - Saudi Arabia",
        "testimonials.t2.text": "\"As an employer, Future Recruitment delivered exactly the quality of candidates we needed. Their service is unmatched in the region.\"",
        "testimonials.t2.name": "Sarah Al-Khalidi",
        "testimonials.t2.role": "HR Director - UAE",
        "testimonials.t3.text": "\"From the first consultation to my arrival in Qatar, the team supported me at every step. Highly recommended!\"",
        "testimonials.t3.name": "Fatima Hassan",
        "testimonials.t3.role": "Nurse - Qatar",

        "contact.tag": "Get In Touch",
        "contact.title": "Contact Us",
        "contact.subtitle": "Ready to start your journey? Reach out to us today.",
        "contact.form.title": "Send us a message",
        "contact.form.name": "Full Name",
        "contact.form.phone": "Phone Number",
        "contact.form.email": "Email Address",
        "contact.form.message": "Your Message",
        "contact.form.submit": "Send Message",
        "contact.info.address": "Address",
        "contact.info.phone": "Phone",
        "contact.info.email": "Email",

        "footer.about": "Your trusted partner for overseas recruitment, connecting talented professionals with world-class opportunities across the Gulf.",
        "footer.quickLinks": "Quick Links",
        "footer.services": "Services",
        "footer.rights": "All Rights Reserved.",

        "lang.switch": "عربي",
        "form.success": "Thank you! Your message has been sent successfully."
    },
    ar: {
        "brand.name": "فيوتشر للتوظيف",
        "brand.tagline": "نربط الكفاءات بالفرص",

        "nav.home": "الرئيسية",
        "nav.about": "من نحن",
        "nav.services": "خدماتنا",
        "nav.countries": "الدول",
        "nav.contact": "اتصل بنا",
        "nav.whatsapp": "واتساب",

        "hero.badge": "شريكك الموثوق في التوظيف العالمي",
        "hero.title": "مستقبلك المهني يبدأ مع فيوتشر للتوظيف",
        "hero.subtitle": "نربط المحترفين الطموحين بفرص عالمية في منطقة الخليج. رحلتك نحو مستقبل مهني أفضل تبدأ من هنا.",
        "hero.cta1": "تصفح الفرص",
        "hero.cta2": "اتصل بنا",

        "about.tag": "من نحن",
        "about.title": "تعرف علينا",
        "about.subtitle": "فيوتشر للتوظيف هي وكالة رائدة في التوظيف الخارجي، نساعد آلاف المحترفين على تحقيق أحلامهم المهنية.",
        "about.mission.title": "رسالتنا",
        "about.mission.text": "سد الفجوة بين الكفاءات المهنية المتميزة وفرص العمل الاستثنائية من خلال تقديم خدمات توظيف موثوقة وشفافة واحترافية.",
        "about.vision.title": "رؤيتنا",
        "about.vision.text": "أن نصبح وكالة التوظيف العالمية الأكثر ثقة، والمعروفة بالتميز والنزاهة وبناء مسارات مهنية تغير حياة المرشحين حول العالم.",
        "about.values.title": "قيمنا",
        "about.values.text": "النزاهة والشفافية والاحترافية والالتزام تجاه كل من المرشحين وأصحاب العمل. نحن نبني علاقات تدوم.",

        "services.tag": "خدماتنا",
        "services.title": "ما نقدمه",
        "services.subtitle": "حلول توظيف شاملة مصممة وفقاً لاحتياجاتك.",
        "services.overseas.title": "التوظيف الخارجي",
        "services.overseas.text": "نربط الكفاءات المتميزة بأفضل أصحاب العمل في منطقة الخليج وخارجها.",
        "services.visa.title": "خدمات التأشيرات والسفر",
        "services.visa.text": "معالجة كاملة للتأشيرات وإعداد الوثائق وترتيبات السفر بأيدي خبرائنا.",
        "services.candidate.title": "دعم المرشحين",
        "services.candidate.text": "دعم متكامل من التقديم حتى الوصول، بما في ذلك التوجيه والاستقرار.",
        "services.employer.title": "حلول أصحاب العمل",
        "services.employer.text": "استراتيجيات توظيف مصممة لمساعدة أصحاب العمل في إيجاد أفضل الكفاءات لمؤسساتهم.",
        "services.learnMore": "اعرف المزيد",

        "countries.tag": "أين نعمل",
        "countries.title": "الدول التي نخدمها",
        "countries.subtitle": "نوظف للكفاءات في الشركات المرموقة عبر منطقة الخليج.",

        "stats.candidates": "مرشح تم توظيفهم",
        "stats.companies": "شركة شريكة",
        "stats.years": "سنوات من الخبرة",
        "stats.countries": "دول",

        "why.tag": "لماذا نحن",
        "why.title": "ميزة فيوتشر للتوظيف",
        "why.trusted.title": "فرص موثوقة",
        "why.trusted.text": "عروض عمل حقيقية وموثقة من أصحاب عمل مرموعين بشروط شفافة.",
        "why.fast.title": "معالجة سريعة",
        "why.fast.text": "إجراءات مبسطة تضمن سرعة الإنجاز من التقديم حتى السفر.",
        "why.support.title": "دعم احترافي",
        "why.support.text": "فريق متخصص متاح على مدار الساعة لمساعدتك في كل خطوة من رحلتك.",
        "why.network.title": "شبكة واسعة",
        "why.network.text": "شراكات قوية مع كبار أصحاب العمل في منطقة الخليج.",

        "testimonials.tag": "آراء العملاء",
        "testimonials.title": "ماذا يقول عملاؤنا",
        "testimonials.t1.text": "\"حققت فيوتشر للتوظيف حلمي في العمل بالخليج. كانت العملية بأكملها سلسة وشفافة واحترافية.\"",
        "testimonials.t1.name": "أحمد محمد",
        "testimonials.t1.role": "مهندس - المملكة العربية السعودية",
        "testimonials.t2.text": "\"كصاحب عمل، قدمت فيوتشر للتوظيف جودة المرشحين التي نحتاجها بالضبط. خدمتهم لا مثيل لها في المنطقة.\"",
        "testimonials.t2.name": "سارة الخالدي",
        "testimonials.t2.role": "مدير الموارد البشرية - الإمارات",
        "testimonials.t3.text": "\"من الاستشارة الأولى حتى وصولي إلى قطر، دعمني الفريق في كل خطوة. أنصح بهم بشدة!\"",
        "testimonials.t3.name": "فاطمة حسن",
        "testimonials.t3.role": "ممرضة - قطر",

        "contact.tag": "تواصل معنا",
        "contact.title": "اتصل بنا",
        "contact.subtitle": "مستعد لبدء رحلتك؟ تواصل معنا اليوم.",
        "contact.form.title": "أرسل لنا رسالة",
        "contact.form.name": "الاسم الكامل",
        "contact.form.phone": "رقم الهاتف",
        "contact.form.email": "البريد الإلكتروني",
        "contact.form.message": "رسالتك",
        "contact.form.submit": "إرسال الرسالة",
        "contact.info.address": "العنوان",
        "contact.info.phone": "الهاتف",
        "contact.info.email": "البريد الإلكتروني",

        "footer.about": "شريكك الموثوق في التوظيف الخارجي، نربط الكفاءات المتميزة بفرص عالمية في منطقة الخليج.",
        "footer.quickLinks": "روابط سريعة",
        "footer.services": "خدماتنا",
        "footer.rights": "جميع الحقوق محفوظة.",

        "lang.switch": "English",
        "form.success": "شكراً لك! تم إرسال رسالتك بنجاح."
    }
};

/* ============ APP STATE ============ */
const App = {
    currentLang: localStorage.getItem('fr_lang') || 'en',
    currentTheme: localStorage.getItem('fr_theme') || null,

    init() {
        this.detectTheme();
        this.applyTheme();
        this.applyLanguage();
        this.bindEvents();
        this.initNavbar();
        this.initAOS();
        this.initCounters();
        this.initContactForm();
        this.initSmoothScroll();
    },

    /* ---------- THEME ---------- */
    detectTheme() {
        if (this.currentTheme) return;
        const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        this.currentTheme = prefersDark ? 'dark' : 'light';
    },

    applyTheme() {
        document.documentElement.setAttribute('data-theme', this.currentTheme);
        const icon = document.getElementById('themeIcon');
        if (icon) {
            icon.className = this.currentTheme === 'dark' ? 'bi bi-sun-fill' : 'bi bi-moon-stars-fill';
        }
        const themeColor = document.querySelector('meta[name="theme-color"]');
        if (themeColor) {
            themeColor.setAttribute('content', this.currentTheme === 'dark' ? '#0F172A' : '#0D6EFD');
        }
    },

    toggleTheme() {
        this.currentTheme = this.currentTheme === 'dark' ? 'light' : 'dark';
        localStorage.setItem('fr_theme', this.currentTheme);
        this.applyTheme();
    },

    /* ---------- LANGUAGE ---------- */
    applyLanguage() {
        const lang = this.currentLang;
        const isAr = lang === 'ar';

        document.documentElement.setAttribute('lang', lang);
        document.documentElement.setAttribute('dir', isAr ? 'rtl' : 'ltr');

        // Toggle bootstrap RTL vs LTR
        const bootstrapLink = document.getElementById('bootstrap-css');
        if (bootstrapLink) {
            bootstrapLink.href = isAr
                ? 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css'
                : 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css';
        }

        // Apply translations
        const dict = translations[lang];
        document.querySelectorAll('[data-i18n]').forEach(el => {
            const key = el.getAttribute('data-i18n');
            if (dict[key]) el.textContent = dict[key];
        });

        // Update lang button
        const langLabel = document.getElementById('langLabel');
        if (langLabel) langLabel.textContent = dict['lang.switch'];

        // Update <title>
        if (isAr) {
            document.title = 'فيوتشر للتوظيف | نربط الكفاءات بالفرص';
        } else {
            document.title = 'Future Recruitment | Connecting Talent with Opportunity';
        }

        // Re-init AOS for new direction
        if (typeof AOS !== 'undefined') AOS.refresh();
    },

    toggleLanguage() {
        this.currentLang = this.currentLang === 'en' ? 'ar' : 'en';
        localStorage.setItem('fr_lang', this.currentLang);
        this.applyLanguage();
    },

    /* ---------- EVENTS ---------- */
    bindEvents() {
        const themeBtn = document.getElementById('themeToggle');
        const langBtn = document.getElementById('langToggle');
        if (themeBtn) themeBtn.addEventListener('click', () => this.toggleTheme());
        if (langBtn) langBtn.addEventListener('click', () => this.toggleLanguage());
    },

    /* ---------- NAVBAR SCROLL ---------- */
    initNavbar() {
        const nav = document.getElementById('mainNav');
        if (!nav) return;
        const onScroll = () => {
            if (window.scrollY > 50) nav.classList.add('scrolled');
            else nav.classList.remove('scrolled');
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();

        // Active nav link on scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        const updateActive = () => {
            const scrollPos = window.scrollY + 120;
            sections.forEach(sec => {
                const top = sec.offsetTop;
                const bottom = top + sec.offsetHeight;
                const id = sec.getAttribute('id');
                if (scrollPos >= top && scrollPos < bottom) {
                    navLinks.forEach(l => l.classList.remove('active'));
                    const activeLink = document.querySelector(`.nav-link[href="#${id}"]`);
                    if (activeLink) activeLink.classList.add('active');
                }
            });
        };
        window.addEventListener('scroll', updateActive, { passive: true });

        // Close mobile menu on link click
        const navCollapse = document.getElementById('navbarNav');
        navLinks.forEach(l => {
            l.addEventListener('click', () => {
                if (navCollapse && navCollapse.classList.contains('show')) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
                    if (bsCollapse) bsCollapse.hide();
                }
            });
        });
    },

    /* ---------- AOS ---------- */
    initAOS() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 80,
                disable: window.matchMedia('(prefers-reduced-motion: reduce)').matches
            });
        }
    },

    /* ---------- COUNTERS ---------- */
    initCounters() {
        const counters = document.querySelectorAll('.stat-number[data-count]');
        if (!counters.length) return;

        const animate = (el) => {
            const target = parseInt(el.getAttribute('data-count'), 10);
            const duration = 2000;
            const startTime = performance.now();

            const step = (now) => {
                const progress = Math.min((now - startTime) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.floor(target * eased).toLocaleString();
                if (progress < 1) requestAnimationFrame(step);
                else el.textContent = target.toLocaleString();
            };
            requestAnimationFrame(step);
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animate(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        counters.forEach(c => observer.observe(c));
    },

    /* ---------- CONTACT FORM ---------- */
    initContactForm() {
        const form = document.getElementById('contactForm');
        if (!form) return;

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            const btn = form.querySelector('button[type="submit"]');
            const originalHTML = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Sending...';

            // Simulate async submission (replace with real AJAX to your Laravel route)
            setTimeout(() => {
                form.reset();
                form.classList.remove('was-validated');
                btn.disabled = false;
                btn.innerHTML = originalHTML;

                const dict = translations[App.currentLang];
                const alert = document.createElement('div');
                alert.className = 'alert alert-success mt-3 fade show';
                alert.setAttribute('role', 'alert');
                alert.innerHTML = `<i class="bi bi-check-circle-fill"></i> ${dict['form.success']}`;
                form.appendChild(alert);
                setTimeout(() => alert.remove(), 5000);
            }, 1200);
        });
    },

    /* ---------- SMOOTH SCROLL (fallback) ---------- */
    initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#' || targetId.length < 2) return;
                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    }
};

/* ============ BOOT ============ */
document.addEventListener('DOMContentLoaded', () => App.init());