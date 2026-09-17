<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Whole Genome Analysis | AG-Lab</title>

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
            font-family: Arial, Helvetica, sans-serif;
            color: #123f43;
            background: #ffffff;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            height: 76px;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            border-bottom: 1px solid #e5eeee;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 25px;
            font-weight: 800;
            color: #07595b;
        }

        .logo-mark {
            font-size: 30px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 34px;
            font-size: 14px;
            font-weight: 600;
            color: #24585b;
        }

        .nav-links a {
            position: relative;
            padding: 27px 0;
        }

        .nav-links a:hover {
            color: #079b83;
        }

        .nav-links .active {
            color: #08766d;
        }

        .nav-links .active::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 17px;
            height: 3px;
            background: #18a987;
            border-radius: 20px;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            position: relative;
            min-height: 470px;
            overflow: hidden;
            background: #092f3d;
        }

        .hero-image {
            width: 100%;
            height: 470px;
            object-fit: cover;
            display: block;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    90deg,
                    rgba(4, 34, 47, 0.94) 0%,
                    rgba(4, 34, 47, 0.82) 32%,
                    rgba(4, 34, 47, 0.35) 58%,
                    rgba(4, 34, 47, 0.10) 100%
                );
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 7%;
            transform: translateY(-50%);
            width: 520px;
            color: white;
        }

        .hero-label {
            display: inline-block;
            padding: 7px 16px;
            border-radius: 30px;
            background: #17a889;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.7px;
            margin-bottom: 18px;
        }

        .hero h1 {
            font-size: 53px;
            line-height: 1.08;
            margin-bottom: 20px;
            font-weight: 800;
        }

        .hero h1 span {
            color: #62d8b6;
        }

        .hero p {
            font-size: 16px;
            line-height: 1.8;
            color: #edfafa;
            max-width: 500px;
        }


        /* =========================
           COMMON SECTION
        ========================= */

        .container {
            width: 86%;
            max-width: 1250px;
            margin: auto;
        }

        .section {
            padding: 70px 0;
        }

        .section-title {
            font-size: 31px;
            color: #075c5d;
            margin-bottom: 10px;
            font-weight: 800;
        }

        .section-title::after {
            content: "";
            display: block;
            width: 45px;
            height: 3px;
            background: #18a987;
            margin-top: 10px;
            border-radius: 5px;
        }

        .section-intro {
            color: #547174;
            max-width: 760px;
            margin-bottom: 35px;
            font-size: 15px;
        }


        /* =========================
           OVERVIEW
        ========================= */

        .overview {
            display: grid;
            grid-template-columns: 0.95fr 1.05fr;
            gap: 60px;
            align-items: center;
        }

        .overview-text p {
            color: #45696c;
            font-size: 15px;
            margin-bottom: 18px;
        }

        .overview-image-box {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(7, 72, 78, 0.15);
        }

        .overview-image {
            width: 100%;
            height: 360px;
            display: block;
            object-fit: cover;
        }


        /* =========================
           HIGHLIGHT CARDS
        ========================= */

        .highlights {
            background: #f2fbf8;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .card {
            background: white;
            border: 1px solid #dcefeb;
            border-radius: 14px;
            padding: 28px 24px;
            transition: 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(6, 88, 84, 0.12);
        }

        .card-icon {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: #dff6ed;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            margin-bottom: 17px;
        }

        .card h3 {
            color: #075c5d;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card p {
            color: #60797b;
            font-size: 14px;
            line-height: 1.7;
        }


        /* =========================
           RESEARCH AREAS
        ========================= */

        .research-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .research-box {
            border: 1px solid #dceceb;
            border-radius: 12px;
            padding: 24px 20px;
            background: #ffffff;
            min-height: 205px;
        }

        .number {
            color: #17a987;
            font-weight: 800;
            font-size: 13px;
            margin-bottom: 12px;
        }

        .research-box h3 {
            color: #075c5d;
            font-size: 17px;
            margin-bottom: 10px;
        }

        .research-box p {
            color: #60797b;
            font-size: 13px;
            line-height: 1.65;
        }


        /* =========================
           OBJECTIVES
        ========================= */

        .objectives {
            background: #eaf8f4;
        }

        .objective-layout {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 55px;
            align-items: center;
        }

        .objective-text p {
            color: #4e6f71;
            font-size: 15px;
            max-width: 420px;
        }

        .objective-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .objective-item {
            display: flex;
            gap: 15px;
            align-items: flex-start;
        }

        .objective-number {
            min-width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #08665f;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 13px;
            font-weight: 700;
        }

        .objective-item h4 {
            color: #075c5d;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .objective-item p {
            color: #60797b;
            font-size: 13px;
            line-height: 1.55;
        }


        /* =========================
           APPROACH
        ========================= */

        .approach {
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            gap: 45px;
            align-items: center;
        }

        .approach-text p {
            color: #557274;
            font-size: 15px;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .step {
            border: 1px solid #dceceb;
            border-radius: 12px;
            padding: 22px 15px;
            background: white;
            position: relative;
        }

        .step-no {
            color: #18a987;
            font-size: 13px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .step h4 {
            font-size: 14px;
            color: #075c5d;
            margin-bottom: 5px;
        }

        .step p {
            color: #667e80;
            font-size: 11px;
            line-height: 1.5;
        }


        /* =========================
           CTA
        ========================= */

        .cta {
            margin: 0 auto 65px;
            width: 86%;
            max-width: 1250px;
            background:
                linear-gradient(
                    100deg,
                    #075f5c,
                    #063f48
                );
            color: white;
            border-radius: 14px;
            padding: 28px 38px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
        }

        .cta-content h2 {
            font-size: 22px;
            margin-bottom: 4px;
        }

        .cta-content p {
            color: #d3eeee;
            font-size: 13px;
        }

        .cta-button {
            background: white;
            color: #075c5d;
            padding: 11px 22px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
            white-space: nowrap;
        }

        .cta-button:hover {
            background: #dff8ef;
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {
            background: #073e42;
            color: white;
            padding: 30px 7%;
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
        }

        .footer-brand {
            font-size: 22px;
            font-weight: 800;
        }

        .footer-brand span {
            display: block;
            font-size: 11px;
            color: #a8cccc;
            font-weight: 400;
            margin-top: 4px;
        }

        .footer-links {
            display: flex;
            gap: 22px;
            font-size: 12px;
            color: #c9e2e2;
        }

        .footer-copy {
            font-size: 11px;
            color: #a8cccc;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1000px) {

            .nav-links {
                gap: 15px;
                font-size: 12px;
            }

            .hero h1 {
                font-size: 42px;
            }

            .overview,
            .objective-layout,
            .approach {
                grid-template-columns: 1fr;
            }

            .cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .research-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .steps {
                grid-template-columns: repeat(2, 1fr);
            }
        }


        @media (max-width: 700px) {

            .navbar {
                height: auto;
                padding: 18px 5%;
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav-links a {
                padding: 5px 0;
            }

            .nav-links .active::after {
                bottom: 0;
            }

            .hero,
            .hero-image {
                height: 520px;
                min-height: 520px;
            }

            .hero-content {
                left: 7%;
                right: 7%;
                width: auto;
            }

            .hero h1 {
                font-size: 38px;
            }

            .hero p {
                font-size: 14px;
            }

            .cards,
            .research-grid,
            .objective-list,
            .steps {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 50px 0;
            }

            .overview-image {
                height: 280px;
            }

            .cta {
                width: 90%;
                flex-direction: column;
                align-items: flex-start;
                padding: 28px;
            }

            .footer-inner {
                flex-direction: column;
                align-items: flex-start;
            }

            .footer-links {
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar">

    <a href="{{ route('home') }}" class="logo">
        <span class="logo-mark">🌿</span>
        <span>AG-Lab</span>
    </a>

    <div class="nav-links">

        <a href="{{ route('home') }}">
            Home
        </a>

        <a href="{{ route('research.focus') }}" class="active">
            Research Focus
        </a>

        <a href="{{ route('research.focus') }}#outputs">
            Outputs
        </a>

        <a href="{{ route('research.focus') }}#members">
            Members & Alumni
        </a>

        <a href="{{ route('research.focus') }}#news">
            News & Blogs
        </a>

        <a href="{{ route('research.focus') }}#contact">
            Contact
        </a>

    </div>

</nav>


<!-- =========================
     HERO
========================= -->

<section class="hero">

    <img
        src="{{ asset('images/whole-genome-hero.png') }}"
        alt="Whole Genome Analysis Laboratory"
        class="hero-image"
    >

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <div class="hero-label">
            RESEARCH FOCUS
        </div>

        <h1>
            Whole Genome
            <span>Analysis</span>
        </h1>

        <p>
            Exploring genomic information through whole genome analysis
            to understand microorganisms, biological variation, and
            genome-level characteristics.
        </p>

    </div>

</section>


<!-- =========================
     RESEARCH OVERVIEW
========================= -->

<section class="section">

    <div class="container">

        <div class="overview">

            <div class="overview-text">

                <h2 class="section-title">
                    Research Overview
                </h2>

                <p>
                    Whole Genome Analysis focuses on studying the complete
                    genetic information of an organism. Genome-level data
                    can provide valuable information about biological
                    characteristics, genetic variation, and microbial
                    diversity.
                </p>

                <p>
                    This research area combines laboratory techniques,
                    genomic data analysis, and computational approaches
                    to examine large-scale genetic information and
                    identify meaningful biological patterns.
                </p>

                <p>
                    Genomic analysis can support research on microorganisms,
                    genome organization, genetic relationships, and
                    biological processes.
                </p>

            </div>


            <div class="overview-image-box">

                <img
                    src="{{ asset('images/whole-genome-overview.png') }}"
                    alt="Genome analysis laboratory"
                    class="overview-image"
                >

            </div>

        </div>

    </div>

</section>


<!-- =========================
     KEY RESEARCH AREAS
========================= -->

<section class="section highlights">

    <div class="container">

        <h2 class="section-title">
            Key Research Areas
        </h2>

        <p class="section-intro">
            Major areas of interest within whole genome and
            genomic research include:
        </p>


        <div class="cards">

            <div class="card">

                <div class="card-icon">🧬</div>

                <h3>
                    Genome Sequencing
                </h3>

                <p>
                    Studying complete genome sequences to understand
                    genetic information and biological characteristics.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">🦠</div>

                <h3>
                    Microbial Genomics
                </h3>

                <p>
                    Analysing microbial genomes to investigate genetic
                    diversity, characteristics, and relationships.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">🔬</div>

                <h3>
                    Genome Analysis
                </h3>

                <p>
                    Examining genome-level information using
                    computational and analytical approaches.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">📊</div>

                <h3>
                    Genetic Variation
                </h3>

                <p>
                    Identifying genetic differences and variations
                    within genomic datasets.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">🧪</div>

                <h3>
                    Biological Characterization
                </h3>

                <p>
                    Connecting genomic information with biological
                    characteristics and microbial behaviour.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">💻</div>

                <h3>
                    Computational Genomics
                </h3>

                <p>
                    Applying computational methods to process,
                    organize, and interpret genomic datasets.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     RESEARCH AREAS
========================= -->

<section class="section">

    <div class="container">

        <h2 class="section-title">
            Research Components
        </h2>

        <p class="section-intro">
            Whole genome research can involve several connected
            areas of genomic investigation.
        </p>


        <div class="research-grid">

            <div class="research-box">

                <div class="number">
                    01
                </div>

                <h3>
                    Genome Sequencing
                </h3>

                <p>
                    Obtaining complete genomic information for
                    detailed biological analysis.
                </p>

            </div>


            <div class="research-box">

                <div class="number">
                    02
                </div>

                <h3>
                    Sequence Analysis
                </h3>

                <p>
                    Processing and examining genomic sequences
                    to identify meaningful information.
                </p>

            </div>


            <div class="research-box">

                <div class="number">
                    03
                </div>

                <h3>
                    Comparative Genomics
                </h3>

                <p>
                    Comparing genomic information to investigate
                    similarities and differences.
                </p>

            </div>


            <div class="research-box">

                <div class="number">
                    04
                </div>

                <h3>
                    Genome Interpretation
                </h3>

                <p>
                    Interpreting genomic results in the context
                    of biological research.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     OBJECTIVES
========================= -->

<section class="section objectives">

    <div class="container">

        <div class="objective-layout">

            <div class="objective-text">

                <h2 class="section-title">
                    Research Objectives
                </h2>

                <p>
                    The research aims to explore genome-level
                    information and computational approaches
                    that can strengthen genomic and microbial
                    research.
                </p>

            </div>


            <div class="objective-list">

                <div class="objective-item">

                    <div class="objective-number">
                        01
                    </div>

                    <div>

                        <h4>
                            Analyse genomic data
                        </h4>

                        <p>
                            Explore complete genome datasets
                            using analytical approaches.
                        </p>

                    </div>

                </div>


                <div class="objective-item">

                    <div class="objective-number">
                        02
                    </div>

                    <div>

                        <h4>
                            Identify genetic patterns
                        </h4>

                        <p>
                            Investigate meaningful patterns
                            within genomic information.
                        </p>

                    </div>

                </div>


                <div class="objective-item">

                    <div class="objective-number">
                        03
                    </div>

                    <div>

                        <h4>
                            Understand microorganisms
                        </h4>

                        <p>
                            Study microbial genomes and their
                            biological characteristics.
                        </p>

                    </div>

                </div>


                <div class="objective-item">

                    <div class="objective-number">
                        04
                    </div>

                    <div>

                        <h4>
                            Support genomic research
                        </h4>

                        <p>
                            Apply computational analysis to
                            support laboratory research.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     RESEARCH APPROACH
========================= -->

<section class="section">

    <div class="container">

        <div class="approach">

            <div class="approach-text">

                <h2 class="section-title">
                    Research Approach
                </h2>

                <p>
                    A genomic research workflow can involve
                    several connected stages from sequencing
                    and data processing to analysis and
                    interpretation.
                </p>

            </div>


            <div class="steps">

                <div class="step">

                    <div class="step-no">
                        01
                    </div>

                    <h4>
                        Sample Preparation
                    </h4>

                    <p>
                        Prepare biological samples
                        for genomic analysis.
                    </p>

                </div>


                <div class="step">

                    <div class="step-no">
                        02
                    </div>

                    <h4>
                        Sequencing
                    </h4>

                    <p>
                        Generate genomic sequence
                        information.
                    </p>

                </div>


                <div class="step">

                    <div class="step-no">
                        03
                    </div>

                    <h4>
                        Data Analysis
                    </h4>

                    <p>
                        Process and analyse genomic
                        datasets.
                    </p>

                </div>


                <div class="step">

                    <div class="step-no">
                        04
                    </div>

                    <h4>
                        Interpretation
                    </h4>

                    <p>
                        Interpret genomic results
                        within biological context.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     CTA
========================= -->

<section class="cta">

    <div class="cta-content">

        <h2>
            Explore Our Research
        </h2>

        <p>
            Discover the different research areas explored
            at AG-Lab and learn more about our scientific interests.
        </p>

    </div>


    <a
        href="{{ route('research.focus') }}"
        class="cta-button"
    >
        ← Back to Research Focus
    </a>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer class="footer">

    <div class="footer-inner">

        <div class="footer-brand">

            AG-Lab

            <span>
                Laboratory Research Management
            </span>

        </div>


        <div class="footer-links">

            <a href="{{ route('home') }}">
                Home
            </a>

            <a href="{{ route('research.focus') }}">
                Research Focus
            </a>

            <a href="{{ route('research.focus') }}#outputs">
                Outputs
            </a>

            <a href="{{ route('research.focus') }}#members">
                Members
            </a>

            <a href="{{ route('research.focus') }}#contact">
                Contact
            </a>

        </div>


        <div class="footer-copy">

            © {{ date('Y') }} AG-Lab. All rights reserved.

        </div>

    </div>

</footer>


</body>
</html>