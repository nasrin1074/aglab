<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Research Focus | Laboratory of Genomics and Transcriptomics</title>

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
            color: #26352d;
            background: #ffffff;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }


        /* =========================
           TOP BAR
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


        /* =========================
           NAVBAR
        ========================== */

        .navbar {
            min-height: 82px;
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
            font-size: 12px;
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
            gap: 27px;
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

        .nav-links .active {
            color: #1f7452;
        }


        /* =========================
           PAGE HERO
        ========================== */

        .page-hero {

            min-height: 390px;

            display: flex;
            align-items: center;

            padding: 70px 8%;

            position: relative;

            background:
                linear-gradient(
                    rgba(13, 58, 41, 0.82),
                    rgba(19, 77, 53, 0.78)
                ),
                url("https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&w=1800&q=80");

            background-size: cover;
            background-position: center;
        }

        .page-hero-content {
            max-width: 800px;
            color: white;
        }

        .page-label {

            display: inline-block;

            padding: 7px 15px;

            border: 1px solid rgba(255,255,255,0.45);

            border-radius: 30px;

            font-size: 12px;

            margin-bottom: 20px;

            background: rgba(255,255,255,0.08);
        }

        .page-hero h1 {

            font-size: 50px;

            line-height: 1.1;

            margin-bottom: 20px;
        }

        .page-hero p {

            max-width: 700px;

            color: #e6f1eb;

            font-size: 16px;
        }


        /* =========================
           INTRO
        ========================== */

        .intro {

            padding: 80px 8%;

            background: white;

            text-align: center;
        }

        .section-label {

            color: #3b805f;

            font-size: 12px;

            font-weight: bold;

            letter-spacing: 2px;

            text-transform: uppercase;
        }

        .intro h2 {

            color: #173f2e;

            font-size: 36px;

            margin-top: 10px;

            margin-bottom: 20px;
        }

        .intro p {

            max-width: 780px;

            margin: auto;

            color: #68726c;

            font-size: 15px;
        }


        /* =========================
           RESEARCH CARDS
        ========================== */

        .research-section {

            padding: 20px 8% 90px;

            background: #f4f8f5;
        }

        .research-grid {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 28px;
        }

        .research-card {

            background: white;

            border-radius: 12px;

            padding: 35px;

            border: 1px solid #e0e9e3;

            position: relative;

            overflow: hidden;

            transition: 0.3s;

            box-shadow: 0 5px 20px rgba(0,0,0,0.04);
        }

        .research-card:hover {

            transform: translateY(-7px);

            box-shadow: 0 15px 35px rgba(0,0,0,0.09);
        }

        .research-card::before {

            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 100%;
            height: 5px;

            background: #2c7654;
        }

        .number {

            width: 45px;

            height: 45px;

            border-radius: 50%;

            background: #e6f1eb;

            color: #216447;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: bold;

            font-size: 14px;

            margin-bottom: 22px;
        }

        .research-card h3 {

            color: #194c36;

            font-size: 23px;

            line-height: 1.3;

            margin-bottom: 15px;
        }

        .research-card p {

            color: #69746e;

            font-size: 14px;

            margin-bottom: 20px;
        }

        .research-list {

            margin: 0 0 20px 18px;

            color: #5d6962;

            font-size: 14px;
        }

        .research-list li {

            margin-bottom: 7px;
        }

        .read-more {

            display: inline-block;

            color: #28704e;

            font-size: 13px;

            font-weight: bold;

            padding-top: 5px;
        }

        .read-more:hover {

            color: #123d2d;
        }


        /* =========================
           CTA
        ========================== */

        .cta {

            padding: 80px 8%;

            background: white;
        }

        .cta-box {

            background: #173f2e;

            border-radius: 13px;

            padding: 55px;

            text-align: center;

            color: white;
        }

        .cta-box h2 {

            font-size: 31px;

            margin-bottom: 15px;
        }

        .cta-box p {

            max-width: 700px;

            margin: auto;

            color: #dce9e1;

            font-size: 15px;
        }

        .cta-button {

            display: inline-block;

            margin-top: 25px;

            padding: 12px 23px;

            background: white;

            color: #174b35;

            border-radius: 5px;

            font-size: 14px;

            font-weight: bold;
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

                grid-template-columns: 1fr;
            }

            .nav-links {

                gap: 14px;
            }

            .page-hero h1 {

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

                padding: 15px 5%;

                flex-direction: column;

                gap: 15px;
            }

            .nav-links {

                flex-wrap: wrap;

                justify-content: center;

                gap: 12px;
            }

            .page-hero {

                min-height: 420px;

                padding: 60px 7%;
            }

            .page-hero h1 {

                font-size: 37px;
            }

            .intro h2 {

                font-size: 30px;
            }

            .research-card {

                padding: 28px 23px;
            }

            .footer-grid {

                grid-template-columns: 1fr;

                gap: 30px;
            }

            .cta-box {

                padding: 40px 25px;
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

            <a href="/">
                Home
            </a>

            <a href="/research-focus" class="active">
                Research Focus
            </a>

            <a href="/">
                Outputs
            </a>

            <a href="/">
                Members & Alumni
            </a>

            <a href="/">
                News & Blogs
            </a>

            <a href="/">
                Contact
            </a>

        </div>

    </nav>



    <!-- =========================
         PAGE HERO
    ========================== -->

    <section class="page-hero">

        <div class="page-hero-content">

            <div class="page-label">
                Research • Genomics • Biology
            </div>

            <h1>
                Research Focus
            </h1>

            <p>
                Our laboratory brings together molecular biology,
                genomics, microbiology, plant science and computational
                approaches to investigate important biological questions.
            </p>

        </div>

    </section>



    <!-- =========================
         INTRODUCTION
    ========================== -->

    <section class="intro">

        <div class="section-label">
            What We Study
        </div>

        <h2>
            Our Major Research Areas
        </h2>

        <p>
            The Laboratory of Genomics and Transcriptomics focuses on
            multiple interconnected areas of modern biological research.
            Our research interests include plant stress biology,
            microbial genome analysis, soil microbiota and plant-microbe
            interactions, as well as machine learning applications in
            diagnostics and drug designing.
        </p>

    </section>



    <!-- =========================
         RESEARCH CARDS
    ========================== -->

    <section class="research-section">

        <div class="research-grid">


            <!-- =====================
                 RESEARCH 01
            ====================== -->

            <div class="research-card">

                <div class="number">
                    01
                </div>

                <h3>
                    Plant Abiotic Stress Biology
                </h3>

                <p>
                    Investigating how plants respond to environmental
                    stresses and understanding the biological mechanisms
                    associated with stress tolerance and adaptation.
                </p>

                <ul class="research-list">

                    <li>
                        Plant stress responses
                    </li>

                    <li>
                        Molecular mechanisms of stress tolerance
                    </li>

                    <li>
                        Stress-responsive biological pathways
                    </li>

                    <li>
                        Crop and vegetable plant biology
                    </li>

                </ul>

                <a
                    href="/research-focus/plant-abiotic-stress"
                    class="read-more"
                >
                    Explore Research →
                </a>

            </div>



            <!-- =====================
                 RESEARCH 02
            ====================== -->

            <div class="research-card">

                <div class="number">
                    02
                </div>

                <h3>
                    Whole Genome Analysis of Microorganisms
                </h3>

                <p>
                    Studying microorganisms at the genomic level using
                    whole genome analysis and computational approaches
                    to understand their biological characteristics.
                </p>

                <ul class="research-list">

                    <li>
                        Microbial genome analysis
                    </li>

                    <li>
                        Genomic characterization
                    </li>

                    <li>
                        Computational genomics
                    </li>

                    <li>
                        Microorganism biology
                    </li>

                </ul>

                <a
                    href="/research-focus/whole-genome-analysis"
                    class="read-more"
                >
                    Explore Research →
                </a>

            </div>



            <!-- =====================
                 RESEARCH 03
            ====================== -->

            <div class="research-card">

                <div class="number">
                    03
                </div>

                <h3>
                    Soil Microbiota and Plant-Microbe Interaction
                </h3>

                <p>
                    Exploring soil microbial communities and their
                    interactions with plants to understand their roles
                    in plant health and biological processes.
                </p>

                <ul class="research-list">

                    <li>
                        Soil microbial communities
                    </li>

                    <li>
                        Plant-microbe interaction
                    </li>

                    <li>
                        Microbial contribution to plant health
                    </li>

                    <li>
                        Soil and plant biology
                    </li>

                </ul>

                <a
                    href="/research-focus/soil-microbiota"
                    class="read-more"
                >
                    Explore Research →
                </a>

            </div>



            <!-- =====================
                 RESEARCH 04
            ====================== -->

            <div class="research-card">

                <div class="number">
                    04
                </div>

                <h3>
                    Machine Learning for Diagnostics & Drug Designing
                </h3>

                <p>
                    Applying machine learning and computational approaches
                    to biological data for disease diagnostics and
                    drug designing.
                </p>

                <ul class="research-list">

                    <li>
                        Machine learning in biomedical research
                    </li>

                    <li>
                        Disease diagnostics
                    </li>

                    <li>
                        Computational biology
                    </li>

                    <li>
                        Drug designing
                    </li>

                </ul>

                <a
                    href="/research-focus/ml-drug-design"
                    class="read-more"
                >
                    Explore Research →
                </a>

            </div>


        </div>

    </section>



    <!-- =========================
         CTA
    ========================== -->

    <section class="cta">

        <div class="cta-box">

            <h2>
                Explore Our Research
            </h2>

            <p>
                Discover the different research directions of the
                Laboratory of Genomics and Transcriptomics and learn
                more about our scientific interests.
            </p>

            <a href="/" class="cta-button">
                Back to Home
            </a>

        </div>

    </section>



    <!-- =========================
         FOOTER
    ========================== -->

    <footer>

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


            <div>

                <h3>
                    Quick Links
                </h3>

                <a href="/">
                    Home
                </a>

                <a href="/research-focus">
                    Research Focus
                </a>

                <a href="/">
                    Outputs
                </a>

                <a href="/">
                    Members & Alumni
                </a>

            </div>


            <div>

                <h3>
                    Research Areas
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