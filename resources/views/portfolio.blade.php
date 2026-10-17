<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bushra Sajid | Aspiring Web Developer</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #09090f;
            color: #ffffff;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            background: rgba(9, 9, 15, 0.94);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .navbar-brand {
            font-size: 27px;
            font-weight: 800;
            color: #ffffff !important;
        }

        .navbar-brand span {
            color: #a855f7;
        }

        .nav-link {
            color: #d5d5dc !important;
            margin-left: 15px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #a855f7 !important;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 100px;

            background:
                radial-gradient(
                    circle at 85% 20%,
                    rgba(168, 85, 247, 0.25),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 10% 80%,
                    rgba(59, 130, 246, 0.12),
                    transparent 30%
                ),
                #09090f;
        }

        .hero-small {
            color: #a855f7;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 3px;
        }

        .hero h1 {
            font-size: clamp(48px, 7vw, 85px);
            font-weight: 800;
            line-height: 1.05;
        }

        .hero h1 span {
            color: #a855f7;
        }

        .hero-text {
            max-width: 650px;
            color: #b9b9c4;
            font-size: 18px;
            line-height: 1.8;
        }

        .btn-main {
            display: inline-block;
            background: #a855f7;
            color: white;
            padding: 13px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 700;
            border: 1px solid #a855f7;
            transition: 0.3s;
        }

        .btn-main:hover {
            background: #9333ea;
            border-color: #9333ea;
            color: white;
            transform: translateY(-3px);
        }

        .btn-outline {
            display: inline-block;
            color: white;
            padding: 13px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 700;
            border: 1px solid #555563;
            transition: 0.3s;
        }

        .btn-outline:hover {
            color: #a855f7;
            border-color: #a855f7;
            transform: translateY(-3px);
        }

        /* =========================
           GENERAL SECTIONS
        ========================= */

        .section {
            padding: 100px 0;
        }

        .section-title {
            font-size: 44px;
            font-weight: 800;
        }

        .section-title span {
            color: #a855f7;
        }

        .section-subtitle {
            max-width: 650px;
            color: #9999a6;
            margin: auto;
            line-height: 1.7;
        }

        /* =========================
           CARDS
        ========================= */

        .about-card,
        .skill-card,
        .education-card,
        .contact-box {
            background: #12121b;
            border: 1px solid #272733;
            border-radius: 22px;
            padding: 32px;
            transition: 0.3s;
        }

        .about-card:hover,
        .skill-card:hover,
        .education-card:hover {
            transform: translateY(-7px);
            border-color: #a855f7;
        }

        .about-card p,
        .education-card p {
            color: #aaaab5;
            line-height: 1.9;
        }

        /* =========================
           SKILLS
        ========================= */

        .skill-icon {
            width: 65px;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(168, 85, 247, 0.12);
            color: #a855f7;

            border-radius: 17px;
            font-size: 30px;

            margin-bottom: 20px;
        }

        .skill-card h5 {
            font-size: 21px;
            font-weight: 700;
        }

        .skill-card p {
            color: #888894;
        }

        /* =========================
           PROJECT
        ========================= */

        .project-card {
            background: #12121b;
            border: 1px solid #292936;
            border-radius: 25px;
            overflow: hidden;
            transition: 0.3s;
        }

        .project-card:hover {
            border-color: #a855f7;
            transform: translateY(-5px);
        }

        .project-image {
            min-height: 350px;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 40px;

            background:
                linear-gradient(
                    135deg,
                    #251032,
                    #101827
                );
        }

        .project-placeholder {
            width: 100%;
            min-height: 260px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            border: 2px dashed #70419b;
            border-radius: 20px;

            color: #d2b4ed;
        }

        .project-placeholder i {
            font-size: 65px;
            color: #a855f7;
        }

        .project-content {
            padding: 40px;
        }

        .project-content h2 {
            font-weight: 800;
        }

        .project-content h5 {
            color: #9999a6 !important;
        }

        .project-content p {
            color: #aaaab5;
            line-height: 1.9;
        }

        .tech-badge {
            display: inline-block;

            padding: 8px 14px;
            margin: 4px;

            background: #21182c;
            color: #d8b4fe;

            border-radius: 30px;

            font-size: 14px;
            font-weight: 600;
        }

        /* =========================
           INTERNSHIP
        ========================= */

        .internship-card {
            background:
                linear-gradient(
                    135deg,
                    rgba(168,85,247,0.18),
                    rgba(59,130,246,0.08)
                ),
                #12121b;

            border: 1px solid #30243c;
            border-radius: 25px;

            padding: 55px 35px;

            text-align: center;
        }

        .internship-icon {
            font-size: 60px;
            color: #a855f7;
        }

        .internship-card p {
            max-width: 700px;
            margin: 20px auto;
            color: #aaaab5;
            line-height: 1.8;
        }

        /* =========================
           CONTACT
        ========================= */

        .contact-box {
            padding: 40px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 18px;

            padding: 18px 0;

            border-bottom: 1px solid #282833;
        }

        .contact-item:last-child {
            border-bottom: none;
        }

        .contact-item i {
            color: #a855f7;
            font-size: 25px;
        }

        .contact-item a {
            color: #ccccd5;
            text-decoration: none;
        }

        .contact-item a:hover {
            color: #a855f7;
        }

        .contact-item span {
            color: #ccccd5;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            padding: 35px 0;
            border-top: 1px solid #24242e;
            color: #777784;
        }

        .footer-name {
            color: white;
            font-size: 22px;
            font-weight: 700;
        }

        .footer-name span {
            color: #a855f7;
        }

        /* =========================
           ANIMATION
        ========================= */

        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-up.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 768px) {

            .hero {
                text-align: center;
            }

            .hero-text {
                margin: auto;
            }

            .section {
                padding: 70px 0;
            }

            .section-title {
                font-size: 35px;
            }

            .project-image {
                min-height: 280px;
                padding: 25px;
            }

            .project-content {
                padding: 28px;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

    <div class="container">

        <a class="navbar-brand" href="#home">
            Bushra<span>.</span>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div
            class="collapse navbar-collapse"
            id="navbarMenu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#home">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#skills">
                        Skills
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#project">
                        Project
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#education">
                        Education
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- =========================
     HERO
========================= -->

<section class="hero" id="home">

    <div class="container">

        <div class="row">

            <div class="col-lg-9">

                <div class="fade-up">

                    <div class="hero-small mb-3">
                        ASPIRING WEB DEVELOPER
                    </div>

                    <h1>
                        Hi, I'm
                        <span>Bushra Sajid</span>
                    </h1>

                    <p class="hero-text mt-4">

                        I am a web development student passionate about
                        creating clean, modern and user-friendly websites.
                        I am currently developing my skills in HTML, CSS,
                        JavaScript, Bootstrap, PHP and Laravel.

                    </p>

                    <div class="mt-4">

                        <a
                            href="#project"
                            class="btn-main me-2">

                            View My Project

                        </a>

                        <a
                            href="#contact"
                            class="btn-outline">

                            Contact Me

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     ABOUT
========================= -->

<section class="section" id="about">

    <div class="container">

        <div class="text-center mb-5 fade-up">

            <div class="hero-small">
                ABOUT ME
            </div>

            <h2 class="section-title">
                Who <span>I Am</span>
            </h2>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="about-card fade-up">

                    <p>

                        My name is Bushra Sajid and I am an aspiring
                        web developer. I am currently studying a
                        3-year ACCP program at Aptech while improving
                        my practical development skills."I am currently looking for a Web Development Internship where I can gain real-world experience, learn from experienced developers and contribute to practical projects."

                    </p>

                    <p>

                        I have learned HTML, CSS, JavaScript,
                        Bootstrap, PHP and Laravel. I enjoy creating
                        websites and learning how frontend and
                        backend technologies work together.

                    </p>

                    <p class="mb-0">

                        I am currently looking for a Web Development
                        Internship where I can gain real-world
                        experience, learn from experienced developers
                        and contribute to practical projects.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     SKILLS
========================= -->

<section class="section" id="skills">

    <div class="container">

        <div class="text-center mb-5 fade-up">

            <div class="hero-small">
                MY SKILLS
            </div>

            <h2 class="section-title">
                Technologies I <span>Know</span>
            </h2>

            <p class="section-subtitle">

                Technologies and tools I have learned during
                my web development journey.

            </p>

        </div>


        <div class="row g-4">


            <!-- HTML -->

            <div class="col-md-6 col-lg-4">

                <div class="skill-card fade-up">

                    <div class="skill-icon">

                        <i class="bi bi-filetype-html"></i>

                    </div>

                    <h5>HTML</h5>

                    <p>
                        Creating structured and semantic web pages.
                    </p>

                </div>

            </div>


            <!-- CSS -->

            <div class="col-md-6 col-lg-4">

                <div class="skill-card fade-up">

                    <div class="skill-icon">

                        <i class="bi bi-filetype-css"></i>

                    </div>

                    <h5>CSS</h5>

                    <p>
                        Designing modern and responsive interfaces.
                    </p>

                </div>

            </div>


            <!-- JAVASCRIPT -->

            <div class="col-md-6 col-lg-4">

                <div class="skill-card fade-up">

                    <div class="skill-icon">

                        <i class="bi bi-filetype-js"></i>

                    </div>

                    <h5>JavaScript</h5>

                    <p>
                        Adding interaction and dynamic functionality.
                    </p>

                </div>

            </div>


            <!-- BOOTSTRAP -->

            <div class="col-md-6 col-lg-4">

                <div class="skill-card fade-up">

                    <div class="skill-icon">

                        <i class="bi bi-bootstrap"></i>

                    </div>

                    <h5>Bootstrap</h5>

                    <p>
                        Building responsive layouts efficiently.
                    </p>

                </div>

            </div>


            <!-- PHP -->

            <div class="col-md-6 col-lg-4">

                <div class="skill-card fade-up">

                    <div class="skill-icon">

                        <i class="bi bi-filetype-php"></i>

                    </div>

                    <h5>PHP</h5>

                    <p>
                        Developing backend functionality for websites.
                    </p>

                </div>

            </div>


            <!-- LARAVEL -->

            <div class="col-md-6 col-lg-4">

                <div class="skill-card fade-up">

                    <div class="skill-icon">

                        <i class="bi bi-code-slash"></i>

                    </div>

                    <h5>Laravel</h5>

                    <p>
                        Learning modern PHP web application development.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     PROJECT
========================= -->

<section class="section" id="project">

    <div class="container">

        <div class="text-center mb-5 fade-up">

            <div class="hero-small">
                FEATURED PROJECT
            </div>

            <h2 class="section-title">
                My <span>Project</span>
            </h2>

            <p class="section-subtitle">

                A practical project created during my
                web development learning journey.

            </p>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="project-card fade-up">


                    <!-- PROJECT VISUAL -->

                    <div class="project-image">

                        <div class="project-placeholder">

                            <div>

                                <i class="bi bi-bag-heart"></i>

                                <h2 class="mt-3">
                                    MIRRORA
                                </h2>

                                <p>
                                    Fashion Website
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- PROJECT INFORMATION -->

                    <div class="project-content">

                        <h2>
                            MIRRORA
                        </h2>

                        <h5 class="mb-3">
                            Fashion Website
                        </h5>


                        <p>

                            Mirrora is a fashion-focused web project
                            created as part of my web development
                            learning journey. The project focuses on
                            product presentation, user interaction
                            and a modern shopping-style interface.

                        </p>


                        <div class="mb-4">

                            <span class="tech-badge">
                                PHP
                            </span>

                            <span class="tech-badge">
                                HTML
                            </span>

                            <span class="tech-badge">
                                CSS
                            </span>

                            <span class="tech-badge">
                                JavaScript
                            </span>

                            <span class="tech-badge">
                                Bootstrap
                            </span>

                        </div>


                        <!-- MIRRORA BUTTON -->

                        
                           <!-- Button 1 - GitHub ke liye -->
<a href="https://github.com/bushracreats-wq/mirrora-project" 
   target="_blank" 
   class="btn-main">View Code</a>

<!-- Button 2 - Agar live demo localhost pe hi rakhna hai to -->
<a href="http://localhost/mirrora/mirrora/" 
   target="_blank" 
   class="btn-outline">Live Demo</a>

                        

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     EDUCATION
========================= -->

<section class="section" id="education">

    <div class="container">

        <div class="text-center mb-5 fade-up">

            <div class="hero-small">
                EDUCATION
            </div>

            <h2 class="section-title">
                My <span>Education</span>
            </h2>

        </div>


        <div class="row g-4">


            <!-- APTECH -->

            <div class="col-md-6">

                <div class="education-card fade-up">

                    <i
                        class="bi bi-mortarboard-fill"
                        style="font-size:45px;color:#a855f7;">
                    </i>

                    <h3 class="mt-4">
                        ACCP Program
                    </h3>

                    <h6 class="text-secondary">
                        Aptech
                    </h6>

                    <p>

                        Currently studying a 3-year ACCP program
                        and developing practical skills in
                        web development.

                    </p>

                </div>

            </div>


            <!-- COMMERCE -->

            <div class="col-md-6">

                <div class="education-card fade-up">

                    <i
                        class="bi bi-book-fill"
                        style="font-size:45px;color:#a855f7;">
                    </i>

                    <h3 class="mt-4">
                        Commerce
                    </h3>

                    <h6 class="text-secondary">
                        1st Year — Private, Sindh Board
                    </h6>

                    <p>

                        I have appeared for my 1st year
                        Commerce examinations through
                        the Sindh Board.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     INTERNSHIP
========================= -->

<section class="section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="internship-card fade-up">

                    <i
                        class="bi bi-briefcase internship-icon">
                    </i>

                    <h2 class="mt-3">
                        Looking for a Web Development Internship
                    </h2>

                    <p>

                        I am looking for an internship opportunity
                        where I can gain practical industry experience,
                        improve my development skills and work on
                        real-world web projects.

                    </p>

                    <a
                        href="#contact"
                        class="btn-main">

                        Contact Me

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     CONTACT
========================= -->

<section class="section" id="contact">

    <div class="container">

        <div class="text-center mb-5 fade-up">

            <div class="hero-small">
                CONTACT
            </div>

            <h2 class="section-title">
                Let's <span>Connect</span>
            </h2>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="contact-box fade-up">


                    <!-- EMAIL -->

                    <div class="contact-item">

                        <i class="bi bi-envelope-fill"></i>

                        <a href="mailto:bushracreats@gmail.com">

                            bushracreats@gmail.com

                        </a>

                    </div>


                    <!-- PHONE -->

                    <div class="contact-item">

                        <i class="bi bi-telephone-fill"></i>

                        <a href="tel:03101205366">

                            03101205366

                        </a>

                    </div>


                    <!-- LOCATION -->

                    <div class="contact-item">

                        <i class="bi bi-geo-alt-fill"></i>

                        <span>
                            Garden West
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <div class="container text-center">

        <div class="footer-name">
            Bushra<span>.</span>
        </div>

        <p class="mt-2">
            Aspiring Web Developer
        </p>

        <a
            href="mailto:bushracreats@gmail.com"
            class="social-link">

            <i class="bi bi-envelope"></i>

        </a>

        <a
            href="#home"
            class="social-link">

            <i class="bi bi-arrow-up-circle"></i>

        </a>

        <div class="mt-3">

            <small>
                © {{ date('Y') }} Bushra Sajid. All Rights Reserved.
            </small>

        </div>

    </div>

</footer>


<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


<!-- =========================
     JAVASCRIPT
========================= -->

<script>

    // Scroll Animation

    const elements =
        document.querySelectorAll('.fade-up');


    const observer =
        new IntersectionObserver(

            (entries) => {

                entries.forEach(

                    (entry) => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add('show');

                        }

                    }

                );

            },

            {
                threshold: 0.15
            }

        );


    elements.forEach(

        (element) => {

            observer.observe(element);

        }

    );


    // Mobile Navbar Close

    document
        .querySelectorAll('.nav-link')
        .forEach(

            (link) => {

                link.addEventListener(

                    'click',

                    () => {

                        const navbar =
                            document.querySelector(
                                '.navbar-collapse'
                            );


                        if (
                            navbar.classList.contains('show')
                        ) {

                            const collapse =
                                bootstrap.Collapse
                                    .getInstance(navbar);


                            if (collapse) {

                                collapse.hide();

                            }

                        }

                    }

                );

            }

        );

</script>


</body>
</html>
