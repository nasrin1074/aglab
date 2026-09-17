```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laboratory of Genomics and Transcriptomics</title>

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
            color: #24332b;
            background: #ffffff;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* =========================
           TOP UNIVERSITY BAR
        ========================== */

        .top-bar {
            background: #123d2d;
            color: white;
            padding: 9px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
        }

        .top-bar span:last-child {
            opacity: 0.9;
        }

        /* =========================
           NAVBAR
        ========================== */

        .navbar {
            height: 82px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6%;
            border-bottom: 1px solid #eeeeee;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #1f6b4d;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }

        .lab-name {
            color: #164632;
            font-size: 17px;
            font-weight: bold;
            line-height: 1.25;
        }

        .lab-name small {
            display: block;
            color: #777;
            font-size: 11px;
            font-weight: normal;
            margin-top: 3px;
        }

        .nav-links {
            display: flex;
            gap: 28px;
            align-items: center;
        }

        .nav-links a {
            font-size: 14px;
            font-weight: 600;
            color: #35463d;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #1f7452;
        }

        /* =========================
           HERO
        ========================== */

        .hero {
            min-height: 560px;
            display: flex;
            align-items: center;
            padding: 80px 8%;
            position: relative;
            overflow: hidden;

            background:
                linear-gradient(
                    rgba(11, 48, 34, 0.78),
                    rgba(15, 67, 46, 0.72)
                ),
                url("https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=1800&q=80");

            background-size: cover;
            background-position: center;
        }

        .hero-content {
            max-width: 720px;
            color: white;
        }

        .hero-pill {
            display: inline-block;
            padding: 8px 16px;
            border: 1px solid rgba(255,255,255,0.5);
            border-radius: 30px;
            font-size: 13px;
            margin-bottom: 22px;
            background: rgba(255,255,255,0.08);
        }

        .hero h1 {
            font-size: 52px;
            line-height: 1.1;
            margin-bottom: 22px;
            font-weight: 700;
        }

        .hero p {
            font-size: 17px;
            max-width: 650px;
            color: #edf6f0;
            margin-bottom: 32px;
        }

        .hero-buttons {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 13px 24px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-primary {
            background: white;
            color: #174b35;
        }

        .btn-primary:hover {
            background: #e7f1eb;
        }

        .btn-outline {
            border: 1px solid white;
            color: white;
        }

        .btn-outline:hover {
            background: white;
            color: #174b35;
        }

        /* =========================
           WELCOME SECTION
        ========================== */

        .welcome {
            padding: 90px 8%;
            background: #ffffff;
        }

        .section-title {
            text-align: center;
            margin-bottom: 55px;
        }

        .section-title span {
            color: #3b805f;
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title h2 {
            font-size: 36px;
            color: #173f2e;
            margin-top: 10px;
        }

        .welcome-grid {
            display: grid;
            grid-template-columns: 1.5fr 0.8fr;
            gap: 60px;
            align-items: center;
        }

        .welcome-text h3 {
            font-size: 27px;
            color: #1d533b;
            margin-bottom: 20px;
        }

        .welcome-text p {
            color: #626b66;
            margin-bottom: 18px;
            font-size: 15px;
        }

        /* =========================
           DR. AJIT GHOSH CARD
        ========================== */

        .profile-card {
            background: #f4f8f5;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            border: 1px solid #e4ece7;
        }

        .profile-photo {
            width: 145px;
            height: 145px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid white;
            box-shadow: 0 5px 18px rgba(0,0,0,0.12);
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .profile-card h3 {
            color: #184d37;
            margin-bottom: 5px;
            font-size: 21px;
        }

        .profile-card .designation {
            color: #6b766f;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .profile-card p {
            color: #69736d;
            font-size: 13px;
        }

        /* =========================
           RESEARCH SECTION
        ========================== */

        .research {
            padding: 90px 8%;
            background: #f4f8f5;
        }

        .research-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .research-card {
            background: white;
            padding: 30px 25px;
            border-radius: 10px;
            border: 1px solid #e3ebe6;
            transition: 0.3s;
        }

        .research-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        }

        .research-number {
            color: #4d8c69;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 18px;
        }

        .research-card h3 {
            font-size: 19px;
            color: #1b4d38;
            margin-bottom: 13px;
            line-height: 1.35;
        }

        .research-card p {
            font-size: 13px;
            color: #68726c;
        }

        .research-link {
            display: inline-block;
            margin-top: 18px;
            color: #28704e;
            font-size: 13px;
            font-weight: bold;
        }

        /* =========================
           SCIENCE SECTION
        ========================== */

        .science {
            padding: 90px 8%;
            background: white;
        }

        .science-box {
            background: #173f2e;
            color: white;
            padding: 55px;
            border-radius: 12px;
            text-align: center;
        }

        .science-box h2 {
            font-size: 31px;
            margin-bottom: 18px;
        }

        .science-box p {
            max-width: 760px;
            margin: auto;
            color: #dce9e1;
            font-size: 15px;
        }

        /* =========================
           FOOTER
        ========================== */

        footer {
            background: #102f24;
            color: white;
            padding: 50px 8% 25px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.3fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 40px;
        }

        footer h3 {
            margin-bottom: 15px;
            font-size: 18px;
        }

        footer p,
        footer a {
            color: #bdcbc3;
            font-size: 13px;
        }

        footer a {
            display: block;
            margin-bottom: 7px;
        }

        footer a:hover {
            color: white;
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.12);
            padding-top: 20px;
            text-align: center;
            color: #9fb0a7;
            font-size: 12px;
        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 1000px) {

            .research-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .welcome-grid {
                grid-template-columns: 1fr;
            }

            .profile-card {
                max-width: 400px;
                margin: auto;
            }

            .nav-links {
                gap: 15px;
            }

            .hero h1 {
                font-size: 43px;
            }
        }

        @media (max-width: 700px) {

            .top-bar {
                flex-direction: column;
                gap: 5px;
                text-align: center;
            }

            .navbar {
                height: auto;
                padding: 15px 5%;
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                gap: 12px;
            }

            .hero {
                min-height: 500px;
                padding: 60px 7%;
            }

            .hero h1 {
                font-size: 37px;
            }

            .hero p {
                font-size: 15px;
            }

            .research-grid {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .section-title h2 {
                font-size: 30px;
            }

            .science-box {
                padding: 35px 25px;
            }
        }

    </style>
</head>

<body>

    <!-- =========================
         TOP BAR
    ========================== -->

    <div class="top-bar">

        <span>
            Department of Biochemistry and Molecular Biology, SUST
        </span>

        <span>
            Shahjalal University of Science and Technology
        </span>

    </div>


    <!-- =========================
         NAVBAR
    ========================== -->

    <nav class="navbar">

        <div class="logo-area">

            <div class="logo">
                AG-LAB
            </div>

            <div class="lab-name">
                Laboratory of Genomics and Transcriptomics

                <small>
                    Genomics • Transcriptomics • Plant Biology
                </small>
            </div>

        </div>


        <div class="nav-links">

            <a href="/">Home</a>

            <a href="/research-focus">
                Research Focus
            </a>

            <a href="#outputs">
                Outputs
            </a>

            <a href="#members">
                Members & Alumni
            </a>

            <a href="#news">
                News & Blogs
            </a>

            <a href="#contact">
                Contact
            </a>

        </div>

    </nav>


    <!-- =========================
         HERO SECTION
    ========================== -->

    <section class="hero">

        <div class="hero-content">

            <div class="hero-pill">
                Genomics • Transcriptomics • Plant Biology
            </div>

            <h1>
                Laboratory of Genomics and Transcriptomics
            </h1>

            <p>
                Exploring molecular biology, genomics, transcriptomics,
                plant biology and computational approaches to understand
                complex biological systems.
            </p>

            <div class="hero-buttons">

                <a href="/research-focus" class="btn btn-primary">
                    Explore Research
                </a>

                <a href="#members" class="btn btn-outline">
                    Meet the Lab
                </a>

            </div>

        </div>

    </section>


    <!-- =========================
         WELCOME SECTION
    ========================== -->

    <section class="welcome">

        <div class="section-title">

            <span>
                Welcome to our Lab
            </span>

            <h2>
                Research Driven by Science
            </h2>

        </div>


        <div class="welcome-grid">

            <!-- LEFT -->

            <div class="welcome-text">

                <h3>
                    Laboratory of Genomics and Transcriptomics
                </h3>

                <p>
                    Our laboratory focuses on understanding biological
                    processes through modern genomic, transcriptomic and
                    molecular biology approaches.
                </p>

                <p>
                    We work across different areas of plant biology,
                    microbial genomics, plant-microbe interactions,
                    computational biology and machine learning.
                </p>

                <p>
                    Our research combines experimental biology with
                    computational analysis to explore biological systems
                    and develop meaningful scientific insights.
                </p>

                <a href="/research-focus"
                   class="btn btn-primary"
                   style="background:#1f6b4d;color:white;margin-top:10px;">

                    Explore Research

                </a>

            </div>


            <!-- RIGHT : DR. AJIT GHOSH -->

            <div class="profile-card">

                <div class="profile-photo">

                    <img
                        src="{{ asset('images/ajit-ghosh-photo.jpg') }}"
                        alt="Dr. Ajit Ghosh"
                    >

                </div>

                <h3>
                    Dr. Ajit Ghosh
                </h3>

                <div class="designation">
                    Professor & Researcher
                </div>

                <p>
                    Laboratory of Genomics and Transcriptomics
                </p>

            </div>

        </div>

    </section>


    <!-- =========================
         RESEARCH SECTION
    ========================== -->

    <section class="research" id="research">

        <div class="section-title">

            <span>
                Research Focus
            </span>

            <h2>
                Our Major Research Areas
            </h2>

        </div>


        <div class="research-grid">


            <!-- CARD 01 -->

            <div class="research-card">

                <div class="research-number">
                    01
                </div>

                <h3>
                    Plant Abiotic Stress Biology
                </h3>

                <p>
                    Understanding how plants respond to environmental
                    stresses and identifying molecular mechanisms involved
                    in stress tolerance.
                </p>

                <a
                    href="/research-focus/plant-abiotic-stress"
                    class="research-link"
                >
                    Read More →
                </a>

            </div>


            <!-- CARD 02 -->

            <div class="research-card">

                <div class="research-number">
                    02
                </div>

                <h3>
                    Whole Genome Analysis of Microorganisms
                </h3>

                <p>
                    Studying microbial genomes using genomic and
                    computational approaches to understand their
                    biological characteristics.
                </p>

                <a
                    href="/research-focus/whole-genome-analysis"
                    class="research-link"
                >
                    Read More →
                </a>

            </div>


            <!-- CARD 03 -->

            <div class="research-card">

                <div class="research-number">
                    03
                </div>

                <h3>
                    Soil Microbiota & Plant-Microbe Interaction
                </h3>

                <p>
                    Investigating soil microorganisms and their interactions
                    with plants to understand microbial contributions to
                    plant health.
                </p>

                <a
                    href="/research-focus/soil-microbiota"
                    class="research-link"
                >
                    Read More →
                </a>

            </div>


            <!-- CARD 04 -->

            <div class="research-card">

                <div class="research-number">
                    04
                </div>

                <h3>
                    Machine Learning for Diagnostics & Drug Designing
                </h3>

                <p>
                    Applying machine learning and computational methods
                    to biological data for diagnostics and drug discovery.
                </p>

                <a
                    href="/research-focus/ml-drug-design"
                    class="research-link"
                >
                    Read More →
                </a>

            </div>

        </div>

    </section>


    <!-- =========================
         SCIENCE SECTION
    ========================== -->

    <section class="science">

        <div class="science-box">

            <h2>
                Advancing Biological Research
            </h2>

            <p>
                By integrating genomics, transcriptomics, molecular biology,
                microbiology and computational approaches, our laboratory
                aims to contribute to modern biological research and
                scientific discovery.
            </p>

        </div>

    </section>


    <!-- =========================
         FOOTER
    ========================== -->

    <footer id="contact">

        <div class="footer-grid">


            <div>

                <h3>
                    Laboratory of Genomics and Transcriptomics
                </h3>

                <p>
                    Department of Biochemistry and Molecular Biology
                </p>

                <p>
                    Shahjalal University of Science and Technology
                </p>

            </div>


            <div id="members">

                <h3>
                    Quick Links
                </h3>

                <a href="/">
                    Home
                </a>

                <a href="/research-focus">
                    Research Focus
                </a>

                <a href="#members">
                    Members & Alumni
                </a>

                <a href="#news">
                    News & Blogs
                </a>

            </div>


            <div id="outputs">

                <h3>
                    Research
                </h3>

                <a href="/research-focus/plant-abiotic-stress">
                    Plant Abiotic Stress
                </a>

                <a href="/research-focus/whole-genome-analysis">
                    Whole Genome Analysis
                </a>

                <a href="/research-focus/soil-microbiota">
                    Soil Microbiota
                </a>

                <a href="/research-focus/ml-drug-design">
                    ML & Drug Designing
                </a>

            </div>

        </div>


        <div class="copyright">

            © {{ date('Y') }}
            Laboratory of Genomics and Transcriptomics.
            All Rights Reserved.

        </div>

    </footer>


</body>
</html>
```
