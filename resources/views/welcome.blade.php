<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0D6EFD">

    <!-- SEO Meta -->
    <title>Future Recruitment | Connecting Talent with Opportunity</title>
    <meta name="description" content="Future Recruitment is a leading overseas employment agency connecting skilled candidates with top employers across Saudi Arabia, UAE, Qatar, Kuwait, Bahrain, and Oman.">
    <meta name="keywords" content="recruitment, overseas employment, jobs in Gulf, Saudi jobs, UAE jobs, Qatar jobs, Future Recruitment, overseas recruitment">
    <meta name="author" content="Future Recruitment">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Future Recruitment | Connecting Talent with Opportunity">
    <meta property="og:description" content="Your career future starts with Future Recruitment. Trusted overseas recruitment agency.">
    <meta property="og:locale" content="en_US">
    <meta property="og:locale:alternate" content="ar_AR">

    <!-- Schema.org Structured Data (Using @@ to prevent Blade parsing errors) -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "EmploymentAgency",
      "name": "Future Recruitment",
      "description": "Overseas recruitment and employment agency serving the Gulf region.",
      "areaServed": ["SA","AE","QA","KW","BH","OM"],
      "foundingDate": "2016"
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' rx='20' fill='%230D6EFD'/%3E%3Ctext x='50' y='68' font-size='55' font-family='Arial' font-weight='bold' fill='white' text-anchor='middle'%3EFR%3C/text%3E%3C/svg%3E">

    <!-- Bootstrap 5.3 -->
    <link id="bootstrap-css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>

    <!-- ========== NAVBAR ========== -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-glass" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <div class="brand-logo">
                    <i class="bi bi-globe-americas"></i>
                </div>
                <div class="brand-text">
                    <span class="brand-name" data-i18n="brand.name">Future Recruitment</span>
                    <span class="brand-tagline" data-i18n="brand.tagline">Connecting Talent with Opportunity</span>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#home" data-i18n="nav.home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about" data-i18n="nav.about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services" data-i18n="nav.services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#countries" data-i18n="nav.countries">Countries</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" data-i18n="nav.contact">Contact Us</a></li>
                </ul>

                <div class="nav-actions d-flex align-items-center gap-2">
                    <button class="btn btn-outline-primary btn-sm action-btn" id="langToggle" title="Language">
                        <i class="bi bi-translate"></i> <span id="langLabel">عربي</span>
                    </button>
                    <button class="btn btn-outline-primary btn-sm action-btn" id="themeToggle" title="Theme">
                        <i class="bi bi-moon-stars-fill" id="themeIcon"></i>
                    </button>
                    <a href="https://wa.me/201000000000" target="_blank" class="btn btn-success btn-sm action-btn whatsapp-btn" title="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                        <span class="d-none d-md-inline" data-i18n="nav.whatsapp">WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ========== HERO ========== -->
    <section id="home" class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-particles" aria-hidden="true"></div>
        <div class="container hero-content">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <span class="hero-badge" data-aos="fade-down">
                        <i class="bi bi-stars"></i>
                        <span data-i18n="hero.badge">Trusted Global Recruitment Partner</span>
                    </span>
                    <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                        <span data-i18n="hero.title">Your Career Future Starts With Future Recruitment</span>
                    </h1>
                    <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200" data-i18n="hero.subtitle">
                        Connecting ambitious professionals with world-class opportunities across the Gulf region. Your journey to a brighter career starts here.
                    </p>
                    <div class="hero-cta" data-aos="fade-up" data-aos-delay="300">
                        <a href="#services" class="btn btn-primary btn-lg btn-glow">
                            <i class="bi bi-briefcase-fill"></i>
                            <span data-i18n="hero.cta1">Browse Opportunities</span>
                        </a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-envelope-fill"></i>
                            <span data-i18n="hero.cta2">Contact Us</span>
                        </a>
                    </div>

                    <div class="hero-stats-row" data-aos="fade-up" data-aos-delay="400">
                        <div class="hero-stat">
                            <div class="hero-stat-number">5000+</div>
                            <div class="hero-stat-label" data-i18n="stats.candidates">Candidates</div>
                        </div>
                        <div class="hero-stat-divider"></div>
                        <div class="hero-stat">
                            <div class="hero-stat-number">120+</div>
                            <div class="hero-stat-label" data-i18n="stats.companies">Partners</div>
                        </div>
                        <div class="hero-stat-divider"></div>
                        <div class="hero-stat">
                            <div class="hero-stat-number">10+</div>
                            <div class="hero-stat-label" data-i18n="stats.years">Years</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-scroll-indicator">
            <a href="#about"><i class="bi bi-chevron-double-down"></i></a>
        </div>
    </section>

    <!-- ========== ABOUT US ========== -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-tag" data-i18n="about.tag">About Us</span>
                <h2 class="section-title" data-i18n="about.title">Who We Are</h2>
                <p class="section-subtitle mx-auto" data-i18n="about.subtitle">
                    Future Recruitment is a leading overseas employment agency, helping thousands of professionals achieve their career dreams.
                </p>
            </div>

            <div class="row g-4 mt-3">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="mvv-card glass-card h-100">
                        <div class="mvv-icon"><i class="bi bi-bullseye"></i></div>
                        <h3 data-i18n="about.mission.title">Our Mission</h3>
                        <p data-i18n="about.mission.text">To bridge the gap between talented professionals and exceptional career opportunities by providing reliable, transparent, and professional recruitment services.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="mvv-card glass-card h-100">
                        <div class="mvv-icon"><i class="bi bi-eye-fill"></i></div>
                        <h3 data-i18n="about.vision.title">Our Vision</h3>
                        <p data-i18n="about.vision.text">To become the most trusted global recruitment agency, recognized for excellence, integrity, and creating life-changing career paths for candidates worldwide.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="mvv-card glass-card h-100">
                        <div class="mvv-icon"><i class="bi bi-heart-fill"></i></div>
                        <h3 data-i18n="about.values.title">Our Values</h3>
                        <p data-i18n="about.values.text">Integrity, transparency, professionalism, and commitment to both candidates and employers. We build relationships that last.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SERVICES ========== -->
    <section id="services" class="section-padding section-alt">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-tag" data-i18n="services.tag">Our Services</span>
                <h2 class="section-title" data-i18n="services.title">What We Offer</h2>
                <p class="section-subtitle mx-auto" data-i18n="services.subtitle">
                    Comprehensive recruitment solutions tailored to your needs.
                </p>
            </div>

            <div class="row g-4 mt-3">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card glass-card h-100">
                        <div class="service-icon"><i class="bi bi-globe2"></i></div>
                        <h3 data-i18n="services.overseas.title">Overseas Recruitment</h3>
                        <p data-i18n="services.overseas.text">We connect skilled candidates with top employers across the Gulf region and beyond.</p>
                        <a href="#contact" class="service-link" data-i18n="services.learnMore">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card glass-card h-100">
                        <div class="service-icon"><i class="bi bi-airplane-fill"></i></div>
                        <h3 data-i18n="services.visa.title">Visa & Travel Assistance</h3>
                        <p data-i18n="services.visa.text">Complete visa processing, documentation, and travel arrangements handled by our experts.</p>
                        <a href="#contact" class="service-link" data-i18n="services.learnMore">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card glass-card h-100">
                        <div class="service-icon"><i class="bi bi-person-check-fill"></i></div>
                        <h3 data-i18n="services.candidate.title">Candidate Support</h3>
                        <p data-i18n="services.candidate.text">End-to-end support from application to arrival, including orientation and settlement.</p>
                        <a href="#contact" class="service-link" data-i18n="services.learnMore">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card glass-card h-100">
                        <div class="service-icon"><i class="bi bi-building-fill-gear"></i></div>
                        <h3 data-i18n="services.employer.title">Employer Solutions</h3>
                        <p data-i18n="services.employer.text">Tailored recruitment strategies to help employers find the best talent for their organizations.</p>
                        <a href="#contact" class="service-link" data-i18n="services.learnMore">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== COUNTRIES ========== -->
    <section id="countries" class="section-padding">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-tag" data-i18n="countries.tag">Where We Operate</span>
                <h2 class="section-title" data-i18n="countries.title">Countries We Serve</h2>
                <p class="section-subtitle mx-auto" data-i18n="countries.subtitle">
                    We recruit for prestigious companies across the Gulf region.
                </p>
            </div>

            <div class="row g-4 mt-3">
                @php
                    $countries = [
                        ['code'=>'sa','ar'=>'المملكة العربية السعودية','en'=>'Saudi Arabia','icon'=>'bi-kaaba'],
                        ['code'=>'ae','ar'=>'الإمارات العربية المتحدة','en'=>'UAE','icon'=>'bi-building'],
                        ['code'=>'qa','ar'=>'دولة قطر','en'=>'Qatar','icon'=>'bi-bank'],
                        ['code'=>'kw','ar'=>'دولة الكويت','en'=>'Kuwait','icon'=>'bi-building-check'],
                        ['code'=>'bh','ar'=>'مملكة البحرين','en'=>'Bahrain','icon'=>'bi-building-gear'],
                        ['code'=>'om','ar'=>'سلطنة عمان','en'=>'Oman','icon'=>'bi-geo-alt-fill'],
                    ];
                @endphp

                @foreach($countries as $index => $country)
                <div class="col-6 col-md-4 col-lg-2" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                    <div class="country-card glass-card">
                        <div class="country-flag">
                            <img src="https://flagcdn.com/w160/{{ $country['code'] }}.png"
                                 srcset="https://flagcdn.com/w320/{{ $country['code'] }}.png 2x"
                                 alt="{{ $country['en'] }} flag" loading="lazy">
                        </div>
                        <div class="country-icon"><i class="bi {{ $country['icon'] }}"></i></div>
                        <h5 class="country-name">
                            <span class="d-inline d-ar-none">{{ $country['en'] }}</span>
                            <span class="d-none d-ar-inline">{{ $country['ar'] }}</span>
                        </h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========== STATISTICS ========== -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
                        <div class="stat-number" data-count="5000">0</div>
                        <div class="stat-suffix">+</div>
                        <div class="stat-label" data-i18n="stats.candidates">Candidates Placed</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="bi bi-briefcase-fill"></i></div>
                        <div class="stat-number" data-count="120">0</div>
                        <div class="stat-suffix">+</div>
                        <div class="stat-label" data-i18n="stats.companies">Partner Companies</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="bi bi-award-fill"></i></div>
                        <div class="stat-number" data-count="10">0</div>
                        <div class="stat-suffix">+</div>
                        <div class="stat-label" data-i18n="stats.years">Years Experience</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="bi bi-globe-americas"></i></div>
                        <div class="stat-number" data-count="6">0</div>
                        <div class="stat-suffix"></div>
                        <div class="stat-label" data-i18n="stats.countries">Countries</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== WHY CHOOSE US ========== -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-tag" data-i18n="why.tag">Why Choose Us</span>
                <h2 class="section-title" data-i18n="why.title">The Future Recruitment Advantage</h2>
            </div>

            <div class="row g-4 mt-3">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-card glass-card h-100 text-center">
                        <div class="why-icon"><i class="bi bi-shield-check"></i></div>
                        <h4 data-i18n="why.trusted.title">Trusted Opportunities</h4>
                        <p data-i18n="why.trusted.text">Verified, legitimate job offers from reputable employers with transparent terms.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="why-card glass-card h-100 text-center">
                        <div class="why-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h4 data-i18n="why.fast.title">Fast Processing</h4>
                        <p data-i18n="why.fast.text">Streamlined procedures ensure quick turnaround from application to deployment.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="why-card glass-card h-100 text-center">
                        <div class="why-icon"><i class="bi bi-headset"></i></div>
                        <h4 data-i18n="why.support.title">Professional Support</h4>
                        <p data-i18n="why.support.text">Dedicated team available 24/7 to assist you at every step of your journey.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="why-card glass-card h-100 text-center">
                        <div class="why-icon"><i class="bi bi-diagram-3-fill"></i></div>
                        <h4 data-i18n="why.network.title">Extensive Network</h4>
                        <p data-i18n="why.network.text">Strong partnerships with leading employers across the Gulf region.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== TESTIMONIALS ========== -->
    <section class="section-padding section-alt">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-tag" data-i18n="testimonials.tag">Testimonials</span>
                <h2 class="section-title" data-i18n="testimonials.title">What Our Clients Say</h2>
            </div>

            <div id="testimonialsCarousel" class="carousel slide mt-4" data-bs-ride="carousel" data-aos="fade-up">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-card glass-card">
                            <div class="testimonial-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="testimonial-text" data-i18n="testimonials.t1.text">
                                "Future Recruitment made my dream of working in the Gulf come true. The entire process was smooth, transparent, and professional."
                            </p>
                            <div class="testimonial-author">
                                <div class="author-avatar">AM</div>
                                <div>
                                    <h6 data-i18n="testimonials.t1.name">Ahmed Mohamed</h6>
                                    <small data-i18n="testimonials.t1.role">Engineer - Saudi Arabia</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card glass-card">
                            <div class="testimonial-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="testimonial-text" data-i18n="testimonials.t2.text">
                                "As an employer, Future Recruitment delivered exactly the quality of candidates we needed. Their service is unmatched in the region."
                            </p>
                            <div class="testimonial-author">
                                <div class="author-avatar">SK</div>
                                <div>
                                    <h6 data-i18n="testimonials.t2.name">Sarah Al-Khalidi</h6>
                                    <small data-i18n="testimonials.t2.role">HR Director - UAE</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card glass-card">
                            <div class="testimonial-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="testimonial-text" data-i18n="testimonials.t3.text">
                                "From the first consultation to my arrival in Qatar, the team supported me at every step. Highly recommended!"
                            </p>
                            <div class="testimonial-author">
                                <div class="author-avatar">FH</div>
                                <div>
                                    <h6 data-i18n="testimonials.t3.name">Fatima Hassan</h6>
                                    <small data-i18n="testimonials.t3.role">Nurse - Qatar</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                <div class="carousel-indicators position-relative mt-4">
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="2"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CONTACT ========== -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-tag" data-i18n="contact.tag">Get In Touch</span>
                <h2 class="section-title" data-i18n="contact.title">Contact Us</h2>
                <p class="section-subtitle mx-auto" data-i18n="contact.subtitle">
                    Ready to start your journey? Reach out to us today.
                </p>
            </div>

            <div class="row g-4 mt-3">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="glass-card p-4 p-md-5 h-100">
                        <h4 class="mb-4" data-i18n="contact.form.title">Send us a message</h4>
                        <form id="contactForm" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" data-i18n="contact.form.name">Full Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" data-i18n="contact.form.phone">Phone Number</label>
                                    <input type="tel" class="form-control" name="phone" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" data-i18n="contact.form.email">Email Address</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" data-i18n="contact.form.message">Your Message</label>
                                    <textarea class="form-control" name="message" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">
                                        <i class="bi bi-send-fill"></i>
                                        <span data-i18n="contact.form.submit">Send Message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="d-flex flex-column gap-3 h-100">
                        <div class="glass-card contact-info-card p-4">
                            <div class="contact-info-item">
                                <div class="contact-info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                <div>
                                    <h6 data-i18n="contact.info.address">Address</h6>
                                    <p>Cairo, Egypt • Gulf Offices</p>
                                </div>
                            </div>
                        </div>
                        <div class="glass-card contact-info-card p-4">
                            <div class="contact-info-item">
                                <div class="contact-info-icon"><i class="bi bi-telephone-fill"></i></div>
                                <div>
                                    <h6 data-i18n="contact.info.phone">Phone</h6>
                                    <p dir="ltr">+20 100 000 0000</p>
                                </div>
                            </div>
                        </div>
                        <div class="glass-card contact-info-card p-4">
                            <a href="https://wa.me/201000000000" target="_blank" class="text-decoration-none">
                                <div class="contact-info-item">
                                    <div class="contact-info-icon text-success"><i class="bi bi-whatsapp"></i></div>
                                    <div>
                                        <h6>WhatsApp</h6>
                                        <p dir="ltr">+20 100 000 0000</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="glass-card contact-info-card p-4">
                            <div class="contact-info-item">
                                <div class="contact-info-icon"><i class="bi bi-envelope-fill"></i></div>
                                <div>
                                    <h6 data-i18n="contact.info.email">Email</h6>
                                    <!-- Use @@ to prevent Blade parsing error on email -->
                                    <p>info@@futurerecruitment.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12" data-aos="fade-up">
                    <div class="glass-card p-2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.123456!2d31.2357!3d30.0444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDAyJzM5LjgiTiAzMcKwMTQnMDguNSJF!5e0!3m2!1sen!2seg!4v1700000000000"
                            width="100%" height="350" style="border:0; border-radius: 12px;"
                            allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Future Recruitment Location"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="site-footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand">
                        <div class="brand-logo"><i class="bi bi-globe-americas"></i></div>
                        <div class="brand-text">
                            <span class="brand-name">Future Recruitment</span>
                            <span class="brand-tagline" data-i18n="brand.tagline">Connecting Talent with Opportunity</span>
                        </div>
                    </div>
                    <p class="footer-about mt-3" data-i18n="footer.about">
                        Your trusted partner for overseas recruitment, connecting talented professionals with world-class opportunities across the Gulf.
                    </p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://wa.me/201000000000" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title" data-i18n="footer.quickLinks">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#home" data-i18n="nav.home">Home</a></li>
                        <li><a href="#about" data-i18n="nav.about">About Us</a></li>
                        <li><a href="#services" data-i18n="nav.services">Services</a></li>
                        <li><a href="#countries" data-i18n="nav.countries">Countries</a></li>
                        <li><a href="#contact" data-i18n="nav.contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title" data-i18n="footer.services">Services</h5>
                    <ul class="footer-links">
                        <li><a href="#services" data-i18n="services.overseas.title">Overseas Recruitment</a></li>
                        <li><a href="#services" data-i18n="services.visa.title">Visa & Travel Assistance</a></li>
                        <li><a href="#services" data-i18n="services.candidate.title">Candidate Support</a></li>
                        <li><a href="#services" data-i18n="services.employer.title">Employer Solutions</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title" data-i18n="contact.title">Contact Us</h5>
                    <ul class="footer-contact">
                        <li><i class="bi bi-geo-alt-fill"></i> Cairo, Egypt</li>
                        <li><i class="bi bi-telephone-fill"></i> <span dir="ltr">+20 100 000 0000</span></li>
                        <li><i class="bi bi-envelope-fill"></i> info@@futurerecruitment.com</li>
                    </ul>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="footer-bottom text-center">
                <p>&copy; 2026 <strong>Future Recruitment</strong>. <span data-i18n="footer.rights">All Rights Reserved.</span></p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/201000000000" target="_blank" class="floating-whatsapp" aria-label="WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>