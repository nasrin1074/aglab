<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Soil Microbiota Research | AG-LAB</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: #183b35;
            background: #ffffff;
            line-height: 1.7;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* =========================
           TOP UNIVERSITY BAR
        ========================= */

        .top-bar {
            background: #073c32;
            color: #d9eee8;
            font-size: 13px;
            padding: 9px 6%;
        }

        .top-bar-inner {
            max-width: 1250px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            height: 78px;
            background: #ffffff;
            border-bottom: 1px solid #e5eeeb;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1250px;
            height: 100%;
            margin: auto;
            padding: 0 6%;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .brand-logo {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #0c6b59;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;
            font-weight: 800;
            font-size: 17px;
        }

        .brand-text h3 {
            font-size: 15px;
            color: #123d35;
            font-weight: 800;
            line-height: 1.2;
        }

        .brand-text span {
            font-size: 11px;
            color: #66847d;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
            font-size: 14px;
            font-weight: 600;
            color: #355b53;
        }

        .nav-links a {
            transition: 0.25s;
        }

        .nav-links a:hover {
            color: #0b8068;
        }

        .nav-links .active {
            color: #0b8068;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 560px;
            position: relative;

            background-image:
                linear-gradient(
                    90deg,
                    rgba(3, 40, 33, 0.90) 0%,
                    rgba(3, 54, 44, 0.78) 40%,
                    rgba(3, 54, 44, 0.25) 75%,
                    rgba(3, 54, 44, 0.10) 100%
                ),
                url('{{ asset('images/soil-microbiota-hero.png') }}');

            background-size: cover;
            background-position: center;
        }

        .hero-container {
            max-width: 1250px;
            min-height: 560px;
            margin: auto;
            padding: 70px 6%;

            display: flex;
            align-items: center;
        }

        .hero-content {
            max-width: 700px;
            color: white;
        }

        .hero-label {
            display: inline-block;
            padding: 8px 16px;
            border: 1px solid rgba(255,255,255,0.35);
            border-radius: 30px;

            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;

            margin-bottom: 22px;
            background: rgba(255,255,255,0.08);
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(42px, 5vw, 68px);
            line-height: 1.08;
            margin-bottom: 25px;
        }

        .hero h1 span {
            color: #6ed5a9;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.8;
            max-width: 650px;
            color: #e4f3ee;
            margin-bottom: 32px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: #51bd8d;
            color: #073c32;
            padding: 13px 25px;
            border-radius: 7px;
            font-weight: 700;
            transition: 0.25s;
        }

        .btn-primary:hover {
            background: #6ed5a9;
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 1px solid rgba(255,255,255,0.55);
            color: white;
            padding: 13px 25px;
            border-radius: 7px;
            font-weight: 600;
            transition: 0.25s;
        }

        .btn-outline:hover {
            background: white;
            color: #073c32;
        }

        /* =========================
           SECTION
        ========================= */

        .section {
            padding: 90px 6%;
        }

        .section-container {
            max-width: 1180px;
            margin: auto;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 55px;
        }

        .section-label {
            color: #0b8068;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .section-heading h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            color: #123f36;
            margin-bottom: 14px;
        }

        .section-heading p {
            max-width: 720px;
            margin: auto;
            color: #6b817b;
        }

        /* =========================
           OVERVIEW
        ========================= */

        .overview {
            background: #f5faf8;
        }

        .overview-grid {
            display: grid;
            grid-template-columns: 1.05fr 1fr;
            gap: 65px;
            align-items: center;
        }

        .overview-image {
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(15, 67, 54, 0.15);
        }

        .overview-image img {
            display: block;
            width: 100%;
            height: 480px;
            object-fit: cover;
        }

        .overview-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 38px;
            color: #123f36;
            margin-bottom: 20px;
        }

        .overview-content p {
            color: #61766f;
            margin-bottom: 18px;
        }

        .highlight-box {
            margin-top: 25px;
            padding: 22px 24px;
            background: white;
            border-left: 4px solid #2ca978;
            border-radius: 8px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
        }

        .highlight-box strong {
            display: block;
            color: #0c6b59;
            margin-bottom: 5px;
        }

        /* =========================
           RESEARCH AREAS
        ========================= */

        .research-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .research-card {
            padding: 30px;
            border: 1px solid #e1ece8;
            border-radius: 13px;
            background: white;
            transition: 0.3s;
        }

        .research-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 35px rgba(12, 92, 73, 0.10);
            border-color: #a9d8c7;
        }

        .card-number {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: #e4f5ee;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #08765e;
            font-weight: 800;

            margin-bottom: 20px;
        }

        .research-card h3 {
            font-size: 18px;
            color: #173f37;
            margin-bottom: 10px;
        }

        .research-card p {
            color: #6a7e78;
            font-size: 14px;
        }

        /* =========================
           COMPONENTS
        ========================= */

        .components {
            background: #073c32;
            color: white;
        }

        .components .section-label {
            color: #70d7aa;
        }

        .components .section-heading h2 {
            color: white;
        }

        .components .section-heading p {
            color: #c5ddd6;
        }

        .component-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .component {
            padding: 28px 22px;
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 12px;
        }

        .component h3 {
            color: #78dcb1;
            font-size: 16px;
            margin-bottom: 9px;
        }

        .component p {
            color: #c5ddd6;
            font-size: 13px;
        }

        /* =========================
           OBJECTIVES
        ========================= */

        .objectives-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }

        .objective {
            display: flex;
            gap: 17px;
            padding: 23px;
            background: #f5faf8;
            border-radius: 10px;
        }

        .check {
            flex-shrink: 0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #dff4ea;
            color: #08765e;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: 800;
        }

        .objective p {
            color: #5f756e;
            font-size: 14px;
        }

        /* =========================
           APPROACH
        ========================= */

        .approach {
            background: #f5faf8;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .step {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin: 0 auto 20px;

            background: #0b8068;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;
            font-weight: 800;
        }

        .step h3 {
            color: #173f37;
            font-size: 17px;
            margin-bottom: 8px;
        }

        .step p {
            color: #6a7d77;
            font-size: 13px;
        }

        /* =========================
           CTA
        ========================= */

        .cta {
            padding: 75px 6%;
            background: linear-gradient(135deg, #0a5b4b, #073c32);
            text-align: center;
            color: white;
        }

        .cta h2 {
            font-family: 'Playfair Display', serif;
            font-size: 38px;
            margin-bottom: 15px;
        }

        .cta p {
            max-width: 650px;
            margin: 0 auto 28px;
            color: #cce3dc;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #032820;
            color: #a9c6be;
            padding: 35px 6%;
        }

        .footer-inner {
            max-width: 1180px;
            margin: auto;

            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 20px;
        }

        .footer-brand {
            font-weight: 800;
            color: white;
        }

        .footer-links {
            display: flex;
            gap: 25px;
            font-size: 13px;
        }

        .footer-links a:hover {
            color: white;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1000px) {

            .nav-links {
                gap: 15px;
            }

            .overview-grid {
                grid-template-columns: 1fr;
            }

            .research-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .component-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .steps {
                grid-template-columns: repeat(2, 1fr);
                row-gap: 40px;
            }
        }

        @media (max-width: 700px) {

            .top-bar {
                display: none;
            }

            .navbar {
                height: 70px;
            }

            .nav-links {
                display: none;
            }

            .hero {
                min-height: 620px;
            }

            .hero-container {
                min-height: 620px;
                padding: 50px 7%;
            }

            .hero h1 {
                font-size: 43px;
            }

            .hero p {
                font-size: 15px;
            }

            .section {
                padding: 65px 7%;
            }

            .section-heading h2 {
                font-size: 32px;
            }

            .overview-image img {
                height: 330px;
            }

            .research-grid,
            .component-grid,
            .objectives-grid,
            .steps {
                grid-template-columns: 1fr;
            }

            .footer-inner {
                flex-direction: column;
                text-align: center;
            }

            .footer-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }

    </style>
</head>

<body>

    <!-- =========================
         TOP BAR
    ========================== -->

    <div class="top-bar">
        <div class="top-bar-inner">
            <span>Laboratory of Genomics and Transcriptomics</span>
            <span>Research • Innovation • Collaboration</span>
        </div>
    </div>


    <!-- =========================
         NAVBAR
    ========================== -->

    <nav class="navbar">

        <div class="nav-container">

            <a href="{{ route('home') }}" class="brand">

                <div class="brand-logo">
                    AG
                </div>

                <div class="brand-text">
                    <h3>AG-LAB</h3>
                    <span>Laboratory of Genomics & Transcriptomics</span>
                </div>

            </a>


            <div class="nav-links">

                <a href="{{ route('home') }}">
                    Home
                </a>

                <a href="{{ route('research.focus') }}" class="active">
                    Research Focus
                </a>

                <a href="{{ route('home') }}#outputs">
                    Outputs
                </a>

                <a href="{{ route('home') }}#members">
                    Members & Alumni
                </a>

                <a href="{{ route('home') }}#news">
                    News & Blogs
                </a>

                <a href="{{ route('home') }}#contact">
                    Contact
                </a>

            </div>

        </div>

    </nav>


    <!-- =========================
         HERO
    ========================== -->

    <section class="hero">

        <div class="hero-container">

            <div class="hero-content">

                <div class="hero-label">
                    Research Focus
                </div>

                <h1>
                    Soil <span>Microbiota</span> Research
                </h1>

                <p>
                    Exploring the complex interactions between soil
                    microorganisms, plants, and their surrounding
                    environment to understand microbial diversity,
                    ecosystem functions, and plant health.
                </p>

                <div class="hero-buttons">

                    <a href="#overview" class="btn-primary">
                        Explore Research
                    </a>

                    <a href="{{ route('research.focus') }}" class="btn-outline">
                        All Research Areas
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         OVERVIEW
    ========================== -->

    <section class="section overview" id="overview">

        <div class="section-container">

            <div class="overview-grid">

                <div class="overview-image">

                    <img
                        src="{{ asset('images/soil-microbiota-overview.png') }}"
                        alt="Soil microbiota research laboratory"
                    >

                </div>


                <div class="overview-content">

                    <div class="section-label">
                        Research Overview
                    </div>

                    <h2>
                        Understanding the Hidden World Beneath Our Feet
                    </h2>

                    <p>
                        Soil contains an enormous diversity of microorganisms
                        that influence plant growth, nutrient cycling,
                        soil health, and ecosystem stability.
                    </p>

                    <p>
                        Our research focuses on studying soil microbial
                        communities and their interactions with plants and
                        environmental conditions using modern biological
                        and computational approaches.
                    </p>

                    <div class="highlight-box">

                        <strong>
                            Research Perspective
                        </strong>

                        We investigate microbial diversity, community
                        interactions, and their potential roles in improving
                        plant health and sustainable agricultural systems.

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         KEY RESEARCH AREAS
    ========================== -->

    <section class="section">

        <div class="section-container">

            <div class="section-heading">

                <div class="section-label">
                    Research Areas
                </div>

                <h2>
                    Key Research Areas
                </h2>

                <p>
                    Our soil microbiota research combines microbiology,
                    molecular biology, genomics, and computational analysis.
                </p>

            </div>


            <div class="research-grid">


                <div class="research-card">

                    <div class="card-number">
                        01
                    </div>

                    <h3>
                        Microbial Diversity
                    </h3>

                    <p>
                        Characterization of microbial communities present
                        in different soil environments and their diversity.
                    </p>

                </div>


                <div class="research-card">

                    <div class="card-number">
                        02
                    </div>

                    <h3>
                        Plant–Microbe Interactions
                    </h3>

                    <p>
                        Investigation of interactions between beneficial
                        microorganisms and plants.
                    </p>

                </div>


                <div class="research-card">

                    <div class="card-number">
                        03
                    </div>

                    <h3>
                        Soil Health
                    </h3>

                    <p>
                        Studying microbial indicators and biological
                        processes associated with healthy soil systems.
                    </p>

                </div>


                <div class="research-card">

                    <div class="card-number">
                        04
                    </div>

                    <h3>
                        Microbial Genomics
                    </h3>

                    <p>
                        Applying genomic approaches to understand the
                        functional potential of soil microorganisms.
                    </p>

                </div>


                <div class="research-card">

                    <div class="card-number">
                        05
                    </div>

                    <h3>
                        Microbial Community Analysis
                    </h3>

                    <p>
                        Analysis of microbial community composition,
                        structure, and relationships.
                    </p>

                </div>


                <div class="research-card">

                    <div class="card-number">
                        06
                    </div>

                    <h3>
                        Sustainable Agriculture
                    </h3>

                    <p>
                        Exploring microbial solutions that may contribute
                        to sustainable crop production and soil management.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         RESEARCH COMPONENTS
    ========================== -->

    <section class="section components">

        <div class="section-container">

            <div class="section-heading">

                <div class="section-label">
                    Research Components
                </div>

                <h2>
                    From Soil Samples to Biological Insights
                </h2>

                <p>
                    Our research integrates experimental laboratory work
                    with modern genomic and computational analysis.
                </p>

            </div>


            <div class="component-grid">


                <div class="component">

                    <h3>
                        Soil Sampling
                    </h3>

                    <p>
                        Collection and preparation of representative
                        soil samples for microbial analysis.
                    </p>

                </div>


                <div class="component">

                    <h3>
                        Microbial Isolation
                    </h3>

                    <p>
                        Laboratory-based investigation of microorganisms
                        associated with soil environments.
                    </p>

                </div>


                <div class="component">

                    <h3>
                        Molecular Analysis
                    </h3>

                    <p>
                        Molecular techniques are used to investigate
                        microbial characteristics and diversity.
                    </p>

                </div>


                <div class="component">

                    <h3>
                        Data Analysis
                    </h3>

                    <p>
                        Computational approaches help interpret complex
                        biological and microbial datasets.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         OBJECTIVES
    ========================== -->

    <section class="section">

        <div class="section-container">

            <div class="section-heading">

                <div class="section-label">
                    Research Objectives
                </div>

                <h2>
                    What We Aim to Understand
                </h2>

            </div>


            <div class="objectives-grid">


                <div class="objective">

                    <div class="check">
                        ✓
                    </div>

                    <p>
                        Understand the composition and diversity of
                        soil microbial communities.
                    </p>

                </div>


                <div class="objective">

                    <div class="check">
                        ✓
                    </div>

                    <p>
                        Explore beneficial relationships between
                        microorganisms and plants.
                    </p>

                </div>


                <div class="objective">

                    <div class="check">
                        ✓
                    </div>

                    <p>
                        Identify microbial functions associated with
                        soil health and plant growth.
                    </p>

                </div>


                <div class="objective">

                    <div class="check">
                        ✓
                    </div>

                    <p>
                        Apply genomic and computational approaches
                        to microbial research.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         RESEARCH APPROACH
    ========================== -->

    <section class="section approach">

        <div class="section-container">

            <div class="section-heading">

                <div class="section-label">
                    Research Approach
                </div>

                <h2>
                    Our Workflow
                </h2>

                <p>
                    A structured approach for studying soil microbial
                    communities and their biological significance.
                </p>

            </div>


            <div class="steps">


                <div class="step">

                    <div class="step-number">
                        01
                    </div>

                    <h3>
                        Sample Collection
                    </h3>

                    <p>
                        Collect representative soil samples from
                        selected environments.
                    </p>

                </div>


                <div class="step">

                    <div class="step-number">
                        02
                    </div>

                    <h3>
                        Laboratory Analysis
                    </h3>

                    <p>
                        Perform laboratory investigations of microbial
                        communities and samples.
                    </p>

                </div>


                <div class="step">

                    <div class="step-number">
                        03
                    </div>

                    <h3>
                        Genomic Analysis
                    </h3>

                    <p>
                        Apply molecular and genomic approaches to
                        characterize microbial communities.
                    </p>

                </div>


                <div class="step">

                    <div class="step-number">
                        04
                    </div>

                    <h3>
                        Data Interpretation
                    </h3>

                    <p>
                        Analyze results and develop biological insights
                        from microbial datasets.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         CTA
    ========================== -->

    <section class="cta">

        <h2>
            Explore Our Other Research Areas
        </h2>

        <p>
            Discover our work in plant abiotic stress,
            whole genome analysis, and machine learning
            for diagnostics.
        </p>

        <a
            href="{{ route('research.focus') }}"
            class="btn-primary"
        >
            View Research Focus
        </a>

    </section>


    <!-- =========================
         FOOTER
    ========================== -->

    <footer>

        <div class="footer-inner">

            <div>

                <div class="footer-brand">
                    AG-LAB
                </div>

                <small>
                    Laboratory of Genomics and Transcriptomics
                </small>

            </div>


            <div class="footer-links">

                <a href="{{ route('home') }}">
                    Home
                </a>

                <a href="{{ route('research.focus') }}">
                    Research Focus
                </a>

                <a href="{{ route('home') }}#contact">
                    Contact
                </a>

            </div>

            <div>
                © {{ date('Y') }} AG-LAB
            </div>

        </div>

    </footer>

</body>
</html>