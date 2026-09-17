<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Machine Learning for Diagnostics | AG-Lab</title>

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
            background: #ffffff;
            color: #183f3f;
            line-height: 1.6;
        }

        /* =========================
           NAVBAR
        ========================= */

        nav {
            height: 72px;
            background: #ffffff;
            border-bottom: 1px solid #e8eeee;
            display: flex;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            width: 100%;
            max-width: 1180px;
            margin: auto;
            padding: 0 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            color: #0c5353;
            font-size: 23px;
            font-weight: 800;
            text-decoration: none;
            letter-spacing: .3px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 34px;
            list-style: none;
        }

        .nav-links a {
            color: #214b4b;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: .3s;
            padding: 25px 0 21px;
        }

        .nav-links a:hover {
            color: #087878;
        }

        .nav-links .active {
            color: #087878;
            border-bottom: 2px solid #3bb9a0;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 390px;

            background:
                linear-gradient(
                    90deg,
                    #edf9f4 0%,
                    #edf9f4 39%,
                    rgba(237,249,244,.90) 49%,
                    rgba(255,255,255,.05) 72%
                );

            position: relative;
            overflow: hidden;
        }

        .hero-container {
            max-width: 1180px;
            min-height: 390px;
            margin: auto;
            padding: 45px 25px;

            display: flex;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .hero-content {
            width: 49%;
            padding-right: 20px;
        }

        .hero-tag {
            display: inline-block;
            padding: 7px 15px;
            border-radius: 30px;

            background: #d5f1df;
            color: #12624e;

            font-size: 11px;
            font-weight: 800;
            letter-spacing: .5px;

            margin-bottom: 14px;
        }

        .hero h1 {
            font-size: 44px;
            line-height: 1.1;
            color: #0d5050;
            margin-bottom: 18px;
            max-width: 550px;
        }

        .hero p {
            color: #496665;
            font-size: 15px;
            max-width: 510px;
            line-height: 1.7;
        }

        .hero-image {
            position: absolute;
            right: 0;
            top: 0;

            width: 53%;
            height: 100%;

            overflow: hidden;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .hero-image::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 35%;
            z-index: 2;

            background: linear-gradient(
                90deg,
                #edf9f4,
                rgba(237,249,244,.65),
                transparent
            );
        }


        /* =========================
           MAIN
        ========================= */

        .container {
            max-width: 1180px;
            margin: auto;
            padding: 0 25px;
        }

        .section {
            padding: 48px 0;
        }

        .section-title {
            color: #0b5353;
            font-size: 26px;
            margin-bottom: 7px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: "";
            display: block;
            width: 34px;
            height: 3px;
            background: #47b59c;
            margin-top: 7px;
        }

        .section-intro {
            color: #637674;
            font-size: 14px;
            margin: 12px 0 25px;
        }


        /* =========================
           OVERVIEW
        ========================= */

        .overview-grid {
            display: grid;
            grid-template-columns: 43% 57%;
            gap: 35px;
            align-items: center;
        }

        .overview-text p {
            color: #526967;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .overview-image {
            height: 235px;
            border-radius: 13px;
            overflow: hidden;
            position: relative;
            background: #edf7f4;
        }

        .overview-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .overview-panel {
            position: absolute;
            right: 12px;
            top: 17px;
            bottom: 17px;

            width: 190px;

            background: rgba(255,255,255,.92);
            border-radius: 10px;

            padding: 18px;

            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 16px;

            box-shadow: 0 5px 20px rgba(20,70,60,.10);
        }

        .metric {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .metric-icon {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            background: #d9f2e7;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #08705f;
            font-size: 14px;
            font-weight: bold;
        }

        .metric span {
            color: #185454;
            font-size: 12px;
            font-weight: 700;
        }


        /* =========================
           RESEARCH CARDS
        ========================= */

        .research-section {
            padding-top: 18px;
            padding-bottom: 48px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 16px;
        }

        .card {
            min-height: 195px;

            border: 1px solid #e2eeee;
            border-radius: 12px;
            background: #ffffff;

            padding: 16px 13px;

            box-shadow: 0 4px 15px rgba(20,70,60,.04);

            transition: .3s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(20,70,60,.10);
        }

        .card-icon {
            width: 39px;
            height: 39px;

            background: #ddf4e8;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #08705f;
            font-size: 16px;
            font-weight: 800;

            margin-bottom: 12px;
        }

        .card-number {
            font-size: 11px;
            color: #4db69c;
            font-weight: 800;
            margin-bottom: 2px;
        }

        .card h3 {
            color: #0d5050;
            font-size: 14px;
            line-height: 1.35;
            margin-bottom: 9px;
        }

        .card p {
            color: #687a77;
            font-size: 11.5px;
            line-height: 1.55;
        }


        /* =========================
           OBJECTIVES
        ========================= */

        .objectives-section {
            background: #eefaf5;
            width: 100%;
        }

        .objectives-grid {
            display: grid;
            grid-template-columns: 30% repeat(4, 1fr);
            gap: 22px;
            align-items: start;
        }

        .objective-intro h2 {
            color: #0d5050;
            font-size: 26px;
            margin-bottom: 10px;
        }

        .objective-intro h2::after {
            content: "";
            display: block;
            width: 34px;
            height: 3px;
            background: #47b59c;
            margin-top: 8px;
        }

        .objective-intro p {
            color: #617570;
            font-size: 12px;
            line-height: 1.65;
        }

        .objective {
            padding: 3px 5px;
        }

        .objective-icon {
            width: 37px;
            height: 37px;
            border-radius: 50%;

            background: #0c5b58;
            color: #ffffff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 13px;
            font-weight: 800;

            margin-bottom: 10px;
        }

        .objective h3 {
            color: #135353;
            font-size: 12px;
            line-height: 1.4;
            margin-bottom: 6px;
        }

        .objective p {
            color: #60736f;
            font-size: 10.5px;
            line-height: 1.5;
        }


        /* =========================
           RESEARCH APPROACH
        ========================= */

        .approach-grid {
            display: grid;
            grid-template-columns: 30% 1fr;
            gap: 25px;
            align-items: center;
        }

        .approach-intro h2 {
            color: #0d5050;
            font-size: 26px;
            margin-bottom: 8px;
        }

        .approach-intro h2::after {
            content: "";
            display: block;
            width: 34px;
            height: 3px;
            background: #47b59c;
            margin-top: 8px;
        }

        .approach-intro p {
            color: #657572;
            font-size: 12px;
            max-width: 270px;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }

        .step {
            min-height: 105px;

            border: 1px solid #e1ece9;
            border-radius: 10px;
            background: #ffffff;

            padding: 14px;

            box-shadow: 0 4px 14px rgba(20,70,60,.05);

            position: relative;
        }

        .step:not(:last-child)::after {
            content: "→";

            position: absolute;
            right: -13px;
            top: 42px;

            color: #5ac0a4;
            font-size: 18px;
            font-weight: bold;

            z-index: 3;
        }

        .step-top {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 6px;
        }

        .step-icon {
            width: 27px;
            height: 27px;
            border-radius: 6px;

            background: #dff3e9;
            color: #08705f;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 10px;
            font-weight: 800;
        }

        .step-number {
            color: #70cdb1;
            font-size: 11px;
            font-weight: 800;
        }

        .step h3 {
            color: #145555;
            font-size: 11px;
            margin-bottom: 3px;
        }

        .step p {
            color: #687a77;
            font-size: 9.5px;
            line-height: 1.45;
        }


        /* =========================
           CTA
        ========================= */

        .cta {
            margin: 15px auto 30px;

            min-height: 85px;

            border-radius: 13px;

            background:
                linear-gradient(
                    100deg,
                    #075957,
                    #0b6863
                );

            padding: 18px 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            position: relative;
            overflow: hidden;
        }

        .cta::after {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;

            right: -90px;
            top: -100px;

            border: 1px solid rgba(255,255,255,.12);
            border-radius: 50%;
        }

        .cta-left {
            display: flex;
            align-items: center;
            gap: 17px;
            position: relative;
            z-index: 2;
        }

        .cta-icon {
            width: 44px;
            height: 44px;
            border-right: 1px solid rgba(255,255,255,.3);
            padding-right: 15px;

            color: #8be0c5;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 24px;
        }

        .cta h2 {
            color: #ffffff;
            font-size: 18px;
            margin-bottom: 2px;
        }

        .cta p {
            color: #cde5df;
            font-size: 10px;
            max-width: 480px;
        }

        .back-btn {
            background: #ffffff;
            color: #075957;

            text-decoration: none;

            padding: 9px 17px;
            border-radius: 25px;

            font-size: 11px;
            font-weight: 800;

            position: relative;
            z-index: 3;
        }

        .back-btn:hover {
            background: #eaf8f3;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #0b302c;
            color: #dcece7;
        }

        .footer-container {
            max-width: 1180px;
            margin: auto;

            padding: 24px 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .footer-brand strong {
            color: #ffffff;
            font-size: 16px;
        }

        .footer-brand span {
            color: #a9c1ba;
            font-size: 10px;
        }

        .footer-links {
            display: flex;
            gap: 15px;
        }

        .footer-links a {
            color: #d4e5df;
            text-decoration: none;
            font-size: 10px;
        }

        .footer-links a:hover {
            color: #ffffff;
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,.08);
            text-align: right;

            padding: 10px 25px;

            color: #9cb5ad;
            font-size: 9px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1000px) {

            .nav-links {
                gap: 17px;
            }

            .cards {
                grid-template-columns: repeat(3, 1fr);
            }

            .objectives-grid {
                grid-template-columns: 1fr 1fr;
            }

            .objective-intro {
                grid-column: 1 / -1;
            }

            .overview-grid,
            .approach-grid {
                grid-template-columns: 1fr;
            }

            .overview-image {
                height: 300px;
            }

            .hero-content {
                width: 55%;
            }

            .hero h1 {
                font-size: 38px;
            }
        }


        @media (max-width: 700px) {

            nav {
                height: auto;
            }

            .nav-container {
                padding: 15px 20px;
                flex-direction: column;
                gap: 12px;
            }

            .nav-links {
                gap: 12px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav-links a {
                padding: 5px;
            }

            .hero {
                min-height: auto;
            }

            .hero-container {
                min-height: auto;
                padding: 40px 20px;
            }

            .hero-content {
                width: 100%;
                padding-right: 0;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero-image {
                position: relative;
                width: 100%;
                height: 250px;
                margin-top: 30px;
            }

            .hero-image::before {
                display: none;
            }

            .hero-container {
                display: block;
            }

            .cards {
                grid-template-columns: 1fr 1fr;
            }

            .objectives-grid {
                grid-template-columns: 1fr;
            }

            .steps {
                grid-template-columns: 1fr 1fr;
            }

            .step:not(:last-child)::after {
                display: none;
            }

            .cta {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .footer-container {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }


        @media (max-width: 480px) {

            .cards,
            .steps {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 30px;
            }

            .overview-panel {
                width: 160px;
            }
        }

    </style>
</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

<nav>

    <div class="nav-container">

        <a href="{{ route('home') }}" class="logo">
            AG-Lab
        </a>

        <ul class="nav-links">

            <li>
                <a href="{{ route('home') }}">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ route('research.focus') }}" class="active">
                    Research Focus
                </a>
            </li>

            <li>
                <a href="{{ route('home') }}#outputs">
                    Outputs
                </a>
            </li>

            <li>
                <a href="{{ route('home') }}#members">
                    Members & Alumni
                </a>
            </li>

            <li>
                <a href="{{ route('home') }}#news">
                    News & Blogs
                </a>
            </li>

            <li>
                <a href="{{ route('home') }}#contact">
                    Contact
                </a>
            </li>

        </ul>

    </div>

</nav>



<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="hero-container">

        <div class="hero-content">

            <span class="hero-tag">
                RESEARCH FOCUS
            </span>

            <h1>
                Machine Learning<br>
                for Diagnostics
            </h1>

            <p>
                Applying machine learning and biomedical data analysis to
                support diagnostic research, identify meaningful patterns
                in complex data, and improve data-driven understanding of
                disease-related processes.
            </p>

        </div>


        <div class="hero-image">

            <img
                src="{{ asset('images/ml-diagnostics-hero.png') }}"
                alt="Machine Learning for Diagnostics"
            >

        </div>

    </div>

</section>



<!-- =========================
     RESEARCH OVERVIEW
========================= -->

<section class="section">

    <div class="container">

        <div class="overview-grid">

            <div class="overview-text">

                <h2 class="section-title">
                    Research Overview
                </h2>

                <p>
                    This research area explores the use of computational
                    methods and machine learning techniques in biomedical
                    research and diagnostics.
                </p>

                <p>
                    Modern biomedical research generates large and complex
                    datasets that can contain valuable information about
                    biological systems, disease mechanisms, and diagnostic
                    patterns.
                </p>

                <p>
                    Machine learning provides computational approaches for
                    analysing these datasets, identifying relationships,
                    and supporting the interpretation of biomedical
                    information.
                </p>

            </div>


            <div class="overview-image">

                <img
                    src="{{ asset('images/ml-diagnostics-hero.png') }}"
                    alt="Biomedical Data Analysis"
                >


                <div class="overview-panel">

                    <div class="metric">

                        <div class="metric-icon">
                            ↗
                        </div>

                        <span>
                            Better Data Analysis
                        </span>

                    </div>


                    <div class="metric">

                        <div class="metric-icon">
                            ✣
                        </div>

                        <span>
                            Pattern Discovery
                        </span>

                    </div>


                    <div class="metric">

                        <div class="metric-icon">
                            +
                        </div>

                        <span>
                            Improved Diagnostics
                        </span>

                    </div>


                    <div class="metric">

                        <div class="metric-icon">
                            ◎
                        </div>

                        <span>
                            Data-Driven Decisions
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================
     KEY RESEARCH AREAS
========================= -->

<section class="research-section">

    <div class="container">

        <h2 class="section-title">
            Key Research Areas
        </h2>

        <p class="section-intro">
            Major areas of interest within machine learning and biomedical
            diagnostic research include:
        </p>


        <div class="cards">


            <!-- CARD 01 -->

            <div class="card">

                <div class="card-icon">
                    ▥
                </div>

                <div class="card-number">
                    01
                </div>

                <h3>
                    Biomedical<br>
                    Data Analysis
                </h3>

                <p>
                    Analysis and interpretation of biomedical datasets
                    to discover useful patterns and relationships.
                </p>

            </div>



            <!-- CARD 02 -->

            <div class="card">

                <div class="card-icon">
                    ⚙
                </div>

                <div class="card-number">
                    02
                </div>

                <h3>
                    Machine Learning<br>
                    Models
                </h3>

                <p>
                    Exploring computational models that can learn
                    patterns from biomedical data.
                </p>

            </div>



            <!-- CARD 03 -->

            <div class="card">

                <div class="card-icon">
                    ✣
                </div>

                <div class="card-number">
                    03
                </div>

                <h3>
                    Disease Pattern<br>
                    Analysis
                </h3>

                <p>
                    Investigating data-driven patterns that may
                    contribute to understanding disease processes.
                </p>

            </div>



            <!-- CARD 04 -->

            <div class="card">

                <div class="card-icon">
                    +
                </div>

                <div class="card-number">
                    04
                </div>

                <h3>
                    Diagnostic<br>
                    Research
                </h3>

                <p>
                    Applying computational approaches to support
                    biomedical diagnosis and classification research.
                </p>

            </div>



            <!-- CARD 05 -->

            <div class="card">

                <div class="card-icon">
                    ●
                </div>

                <div class="card-number">
                    05
                </div>

                <h3>
                    Biomedical<br>
                    Classification
                </h3>

                <p>
                    Studying classification approaches for organizing
                    and interpreting biomedical information.
                </p>

            </div>



            <!-- CARD 06 -->

            <div class="card">

                <div class="card-icon">
                    ✦
                </div>

                <div class="card-number">
                    06
                </div>

                <h3>
                    Data-Driven<br>
                    Discovery
                </h3>

                <p>
                    Combining computational analysis with biological
                    knowledge to support new research insights.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================
     OBJECTIVES
========================= -->

<section class="objectives-section">

    <div class="container">

        <div class="section">

            <div class="objectives-grid">


                <div class="objective-intro">

                    <h2>
                        Research Objectives
                    </h2>

                    <p>
                        The research aims to explore computational
                        approaches that can strengthen biomedical
                        data analysis and diagnostic research.
                    </p>

                </div>


                <div class="objective">

                    <div class="objective-icon">
                        01
                    </div>

                    <h3>
                        Analyse biomedical data
                    </h3>

                    <p>
                        Explore structured and complex biomedical
                        datasets using computational techniques.
                    </p>

                </div>


                <div class="objective">

                    <div class="objective-icon">
                        02
                    </div>

                    <h3>
                        Identify meaningful patterns
                    </h3>

                    <p>
                        Investigate relationships and patterns within
                        biomedical information.
                    </p>

                </div>


                <div class="objective">

                    <div class="objective-icon">
                        03
                    </div>

                    <h3>
                        Support diagnostic research
                    </h3>

                    <p>
                        Study how machine learning can contribute
                        to research-oriented diagnostic analysis.
                    </p>

                </div>


                <div class="objective">

                    <div class="objective-icon">
                        04
                    </div>

                    <h3>
                        Integrate biology and computation
                    </h3>

                    <p>
                        Combine biological knowledge with data-driven
                        computational methods.
                    </p>

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

        <div class="approach-grid">


            <div class="approach-intro">

                <h2>
                    Research Approach
                </h2>

                <p>
                    A computational research workflow can involve
                    several connected stages.
                </p>

            </div>


            <div class="steps">


                <!-- STEP 01 -->

                <div class="step">

                    <div class="step-top">

                        <div class="step-icon">
                            ▣
                        </div>

                        <span class="step-number">
                            01
                        </span>

                    </div>

                    <h3>
                        Data Collection
                    </h3>

                    <p>
                        Collect relevant biomedical and research
                        datasets.
                    </p>

                </div>



                <!-- STEP 02 -->

                <div class="step">

                    <div class="step-top">

                        <div class="step-icon">
                            ▤
                        </div>

                        <span class="step-number">
                            02
                        </span>

                    </div>

                    <h3>
                        Data Processing
                    </h3>

                    <p>
                        Prepare and organise data for computational
                        analysis.
                    </p>

                </div>



                <!-- STEP 03 -->

                <div class="step">

                    <div class="step-top">

                        <div class="step-icon">
                            ◉
                        </div>

                        <span class="step-number">
                            03
                        </span>

                    </div>

                    <h3>
                        Model Analysis
                    </h3>

                    <p>
                        Apply appropriate machine learning approaches
                        to the data.
                    </p>

                </div>



                <!-- STEP 04 -->

                <div class="step">

                    <div class="step-top">

                        <div class="step-icon">
                            ✓
                        </div>

                        <span class="step-number">
                            04
                        </span>

                    </div>

                    <h3>
                        Interpretation
                    </h3>

                    <p>
                        Interpret results in the context of biomedical
                        research.
                    </p>

                </div>


            </div>

        </div>

    </div>

</section>



<!-- =========================
     CTA
========================= -->

<div class="container">

    <div class="cta">

        <div class="cta-left">

            <div class="cta-icon">
                🧠
            </div>

            <div>

                <h2>
                    Explore Our Research
                </h2>

                <p>
                    Discover the different research areas being explored
                    at AG-Lab and learn more about our laboratory's
                    scientific interests.
                </p>

            </div>

        </div>


        <a
            href="{{ route('research.focus') }}"
            class="back-btn"
        >
            ← Back to Research Focus
        </a>

    </div>

</div>



<!-- =========================
     FOOTER
========================= -->

<footer>

    <div class="footer-container">

        <div class="footer-brand">

            <strong>
                AG-Lab
            </strong>

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

            <a href="{{ route('home') }}#outputs">
                Outputs
            </a>

            <a href="{{ route('home') }}#members">
                Members
            </a>

            <a href="{{ route('home') }}#contact">
                Contact
            </a>

        </div>

    </div>


    <div class="copyright">
        © {{ date('Y') }} AG-Lab. All rights reserved.
    </div>

</footer>


</body>
</html>