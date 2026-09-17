<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Plant Abiotic Stress Biology | AG-LAB</title>

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
            font-family: Georgia, "Times New Roman", serif;
            color: #27372f;
            background: #ffffff;
            line-height: 1.7;
        }

        a {
            text-decoration: none;
            color: inherit;
        }


        /* =========================
           TOP BAR
        ========================== */

        .top-bar {
            background: #123b2b;
            color: white;

            padding: 8px 5.5%;

            display: flex;
            justify-content: space-between;
            align-items: center;

            font-family: Arial, sans-serif;
            font-size: 12px;
        }


        /* =========================
           NAVBAR
        ========================== */

        .navbar {
            min-height: 68px;

            background: #ffffff;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 0 6%;

            border-bottom: 1px solid #eeeeee;

            font-family: Arial, sans-serif;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo {
            width: 42px;
            height: 42px;

            border-radius: 50%;

            background: #e8f0ea;

            border: 2px solid #9eb7a7;

            display: flex;
            justify-content: center;
            align-items: center;

            color: #185038;

            font-size: 8px;
            font-weight: bold;
            text-align: center;
        }

        .lab-name {
            color: #173f2d;

            font-size: 15px;

            font-weight: bold;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 21px;
        }

        .nav-links a {
            font-size: 11px;
            font-weight: 600;

            color: #34423b;
        }

        .nav-links a:hover {
            color: #18704d;
        }

        .nav-links .active {
            color: #18704d;
        }


        /* =========================
           HERO
        ========================== */

        .hero {

            min-height: 310px;

            background:
                linear-gradient(
                    rgba(0, 48, 31, 0.88),
                    rgba(0, 61, 38, 0.88)
                ),
                url("https://images.unsplash.com/photo-1497250681960-ef046c08a56e?auto=format&fit=crop&w=1800&q=80");

            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;

            padding: 55px 23%;
        }

        .hero-content {
            max-width: 760px;
            color: white;
        }

        .breadcrumb {
            font-family: Arial, sans-serif;

            font-size: 8px;

            letter-spacing: 1px;

            color: #a7c4b4;

            margin-bottom: 16px;

            text-transform: uppercase;
        }

        .research-number {

            display: inline-block;

            padding: 5px 11px;

            border-radius: 20px;

            background: rgba(61, 141, 101, 0.35);

            color: #b7dbc7;

            font-family: Arial, sans-serif;

            font-size: 8px;

            letter-spacing: 1px;

            margin-bottom: 15px;
        }

        .hero h1 {

            font-size: 38px;

            line-height: 1.15;

            margin-bottom: 12px;
        }

        .hero p {

            font-family: Arial, sans-serif;

            color: #c9ddd2;

            font-size: 12px;

            max-width: 610px;
        }

        .scroll-text {

            text-align: center;

            margin-top: 30px;

            color: #9ab8aa;

            font-family: Arial, sans-serif;

            font-size: 8px;

            letter-spacing: 1px;
        }


        /* =========================
           MAIN LAYOUT
        ========================== */

        .main {

            padding: 42px 7% 75px;

            display: grid;

            grid-template-columns: minmax(0, 1fr) 255px;

            gap: 40px;

            background: #ffffff;
        }


        /* =========================
           CONTENT
        ========================== */

        .content img.main-image {

            width: 100%;

            height: 230px;

            object-fit: cover;

            border-radius: 7px;

            display: block;

            margin-bottom: 28px;
        }

        .content h2 {

            color: #173e2d;

            font-size: 23px;

            margin: 25px 0 13px;

            padding-bottom: 10px;

            border-bottom: 1px solid #dce5df;
        }

        .content p {

            font-family: Arial, sans-serif;

            color: #606b65;

            font-size: 12px;

            margin-bottom: 15px;
        }


        /* =========================
           KEY RESEARCH BOX
        ========================== */

        .research-box {

            margin-top: 24px;

            border: 1px solid #e2e9e4;

            border-left: 4px solid #45a375;

            border-radius: 7px;

            padding: 20px 23px;

            background: #ffffff;

            box-shadow: 0 3px 12px rgba(0,0,0,0.03);
        }

        .research-box-title {

            font-family: Arial, sans-serif;

            font-size: 9px;

            font-weight: bold;

            color: #39805e;

            letter-spacing: 1px;

            margin-bottom: 12px;
        }

        .research-box ul {

            padding-left: 17px;

            font-family: Arial, sans-serif;

            font-size: 11px;

            color: #56645c;
        }

        .research-box li {

            margin-bottom: 7px;
        }

        .research-box li::marker {

            color: #43a475;
        }


        /* =========================
           QUOTE
        ========================== */

        .quote-box {

            margin: 25px 0;

            padding: 27px 28px;

            border-radius: 8px;

            background: #06271c;

            color: #dcece3;

            font-style: italic;

            font-size: 15px;

            line-height: 1.7;
        }


        /* =========================
           TAGS
        ========================== */

        .tags {

            display: flex;

            flex-wrap: wrap;

            gap: 7px;

            margin-top: 15px;
        }

        .tag {

            padding: 5px 10px;

            border-radius: 15px;

            background: #e8f3ed;

            color: #357454;

            font-family: Arial, sans-serif;

            font-size: 9px;

            font-weight: bold;
        }


        /* =========================
           SIDEBAR
        ========================== */

        .sidebar-card {

            border: 1px solid #e2e8e3;

            border-radius: 7px;

            padding: 17px;

            margin-bottom: 18px;

            background: white;

            box-shadow: 0 3px 12px rgba(0,0,0,0.03);
        }

        .sidebar-title {

            font-family: Arial, sans-serif;

            color: #4d896b;

            font-size: 8px;

            letter-spacing: 1px;

            font-weight: bold;

            text-transform: uppercase;

            margin-bottom: 11px;
        }

        .area-link {

            display: block;

            font-family: Arial, sans-serif;

            font-size: 10px;

            color: #66716b;

            padding: 7px 9px;

            border-radius: 5px;

            margin-bottom: 4px;
        }

        .area-link:hover {

            background: #edf5f0;

            color: #216344;
        }

        .area-link.active {

            background: #dceee4;

            color: #226344;

            font-weight: bold;
        }


        /* =========================
           GENE TAGS
        ========================== */

        .gene-tags {

            display: flex;

            flex-wrap: wrap;

            gap: 6px;
        }

        .gene {

            padding: 5px 8px;

            background: #e9f2ed;

            color: #47745e;

            border-radius: 12px;

            font-family: Arial, sans-serif;

            font-size: 8px;

            font-weight: bold;
        }


        /* =========================
           INSTITUTION
        ========================== */

        .institution {

            font-family: Arial, sans-serif;

            font-size: 10px;

            color: #68736c;

            line-height: 1.5;
        }

        .institution strong {

            color: #216344;
        }


        /* =========================
           CONTACT BOX
        ========================== */

        .contact-box {

            background: #073824;

            color: white;

            border-radius: 8px;

            padding: 22px;

            text-align: center;
        }

        .contact-box h3 {

            font-size: 15px;

            margin-bottom: 7px;
        }

        .contact-box p {

            font-family: Arial, sans-serif;

            font-size: 9px;

            color: #c5dacf;

            margin-bottom: 15px;
        }

        .contact-btn {

            display: inline-block;

            background: #4ca576;

            color: white;

            padding: 7px 15px;

            border-radius: 4px;

            font-family: Arial, sans-serif;

            font-size: 9px;

            font-weight: bold;
        }


        /* =========================
           OTHER RESEARCH
        ========================== */

        .other-research {

            padding: 0 7% 65px;

        }

        .other-label {

            color: #4b8868;

            font-family: Arial, sans-serif;

            font-size: 9px;

            font-weight: bold;

            letter-spacing: 1px;

            margin-bottom: 5px;
        }

        .other-research h2 {

            color: #173e2d;

            font-size: 23px;

            margin-bottom: 5px;
        }

        .other-description {

            font-family: Arial, sans-serif;

            font-size: 11px;

            color: #68736c;

            margin-bottom: 23px;
        }

        .other-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 16px;
        }

        .other-card {

            border: 1px solid #e1e8e3;

            border-radius: 7px;

            padding: 19px;

            background: white;

            min-height: 155px;
        }

        .other-icon {

            font-size: 22px;

            margin-bottom: 10px;
        }

        .other-card h3 {

            font-size: 14px;

            line-height: 1.3;

            color: #1c4634;

            margin-bottom: 8px;
        }

        .other-card p {

            font-family: Arial, sans-serif;

            font-size: 9px;

            color: #727b76;

            line-height: 1.5;
        }

        .arrow {

            display: block;

            color: #48a274;

            margin-top: 9px;

            font-size: 16px;
        }


        /* =========================
           FOOTER
        ========================== */

        footer {

            background: #062519;

            color: white;

            padding: 20px 7%;

            display: flex;

            justify-content: space-between;

            align-items: center;

            font-family: Arial, sans-serif;

            font-size: 9px;
        }

        footer span {

            color: #a9bbb2;
        }


        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 900px) {

            .hero {

                padding: 55px 10%;
            }

            .main {

                grid-template-columns: 1fr;
            }

            .other-grid {

                grid-template-columns: 1fr;
            }

            .sidebar {

                display: grid;

                grid-template-columns: 1fr 1fr;

                gap: 15px;
            }

            .contact-box {

                grid-column: 1 / -1;
            }

            .nav-links {

                gap: 10px;
            }
        }


        @media (max-width: 650px) {

            .top-bar {

                flex-direction: column;

                gap: 4px;

                text-align: center;
            }

            .navbar {

                flex-direction: column;

                padding: 12px 5%;

                gap: 12px;
            }

            .nav-links {

                flex-wrap: wrap;

                justify-content: center;
            }

            .hero {

                padding: 50px 7%;
            }

            .hero h1 {

                font-size: 31px;
            }

            .main {

                padding: 30px 5%;
            }

            .sidebar {

                display: block;
            }

            .other-research {

                padding: 0 5% 45px;
            }

            footer {

                flex-direction: column;

                gap: 8px;

                text-align: center;
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
                AG<br>LAB
            </div>

            <div class="lab-name">
                Laboratory of Genomics and Transcriptomics
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
         HERO
    ========================== -->

    <section class="hero">

        <div class="hero-content">

            <div class="breadcrumb">

                Home / Research Focus /
                Plant Abiotic Stress Biology

            </div>

            <div class="research-number">

                ● Research Focus #01

            </div>

            <h1>
                Plant Abiotic Stress Biology
            </h1>

            <p>
                Understanding how plants perceive, respond to, and adapt
                under environmental stresses at the molecular and genomic level.
            </p>

            <div class="scroll-text">
                ↓ &nbsp; SCROLL
            </div>

        </div>

    </section>



    <!-- =========================
         MAIN CONTENT
    ========================== -->

    <main class="main">


        <!-- =====================
             LEFT CONTENT
        ====================== -->

        <div class="content">


            <img
                class="main-image"
                src="https://images.unsplash.com/photo-1492496913980-501348b61469?auto=format&fit=crop&w=1200&q=80"
                alt="Plants under environmental conditions"
            >


            <!-- OVERVIEW -->

            <h2>
                Overview
            </h2>

            <p>
                A major research focus of our lab is the study of plant
                abiotic stress responses. Plants are continuously exposed
                to environmental stresses such as drought, salinity,
                heat, cold, oxidative stress, and heavy metal stress.
                These stresses affect plant growth, productivity, and survival.
            </p>

            <p>
                Our lab aims to understand how plants respond to these
                adverse conditions at the molecular level. We focus on
                the identification and characterization of stress-responsive
                genes involved in plant defense and adaptation.
            </p>


            <!-- KEY RESEARCH AREAS -->

            <div class="research-box">

                <div class="research-box-title">
                    KEY RESEARCH AREAS
                </div>

                <ul>

                    <li>
                        Antioxidant defense mechanisms against oxidative stress
                    </li>

                    <li>
                        Osmotic adjustment pathways under drought and salinity
                    </li>

                    <li>
                        Detoxification systems and their molecular regulation
                    </li>

                    <li>
                        Stress signaling cascades and transcriptional control
                    </li>

                    <li>
                        Identification of stress-responsive genes in crop and vegetable species
                    </li>

                </ul>

            </div>



            <!-- MOLECULAR APPROACH -->

            <h2>
                Molecular Approach
            </h2>

            <p>
                Particular attention is given to genes and pathways related
                to antioxidant defense, osmotic adjustment, detoxification,
                and stress signaling. Through genomics and transcriptomics-based
                approaches, we aim to identify key molecular players that
                contribute to stress tolerance in economically important
                plant species.
            </p>

            <p>
                Plant stress tolerance is a multigenic trait. Our laboratory
                works on identifying and characterizing stress responsive
                genes — including catalase, isopentenyl transferase,
                glyoxalase, and glutathione S-transferase — across
                economically important plant species.
            </p>



            <!-- QUOTE -->

            <div class="quote-box">

                The long-term aim of our research is to identify the
                mechanisms of stress tolerance and the key molecular
                players within this network — connecting gene function
                with crop resilience.

            </div>



            <!-- RESEARCH GOALS -->

            <h2>
                Research Goals
            </h2>

            <p>
                The laboratory aims to connect molecular mechanisms with
                practical understanding of stress tolerance in important
                plant species. Gene identification is followed by rigorous
                characterization of expression patterns, functional roles,
                and integration into known stress modulation networks.
            </p>

            <p>
                Ultimately, this work contributes to the broader scientific
                knowledge base for developing stress-tolerant crop varieties
                — a critical goal in the face of climate change and food
                security challenges.
            </p>


            <!-- TAGS -->

            <div class="tags">

                <span class="tag">
                    Drought Stress
                </span>

                <span class="tag">
                    Salinity
                </span>

                <span class="tag">
                    Oxidative Stress
                </span>

                <span class="tag">
                    Heavy Metal Stress
                </span>

                <span class="tag">
                    Antioxidant Defense
                </span>

                <span class="tag">
                    Transcriptomics
                </span>

                <span class="tag">
                    Genomics
                </span>

                <span class="tag">
                    Gene Expression
                </span>

            </div>

        </div>



        <!-- =====================
             SIDEBAR
        ====================== -->

        <aside class="sidebar">


            <!-- RESEARCH AREAS -->

            <div class="sidebar-card">

                <div class="sidebar-title">
                    Research Areas
                </div>

                <a
                    href="/research-focus/plant-abiotic-stress"
                    class="area-link active"
                >
                    ● &nbsp; Plant Abiotic Stress Biology
                </a>

                <a
                    href="/research-focus/whole-genome-analysis"
                    class="area-link"
                >
                    ○ &nbsp; Whole Genome Analysis of Microorganisms
                </a>

                <a
                    href="/research-focus/soil-microbiota"
                    class="area-link"
                >
                    ○ &nbsp; Soil Microbiota & Plant-Microbe Interaction
                </a>

                <a
                    href="/research-focus/ml-drug-design"
                    class="area-link"
                >
                    ○ &nbsp; Machine Learning for Diagnostics & Drug Designing
                </a>

            </div>



            <!-- GENE TARGETS -->

            <div class="sidebar-card">

                <div class="sidebar-title">
                    Gene Targets Studied
                </div>

                <p style="
                    font-family: Arial, sans-serif;
                    font-size: 10px;
                    color: #68736c;
                    margin-bottom: 10px;
                ">
                    Our lab characterizes stress-responsive gene families
                    including:
                </p>

                <div class="gene-tags">

                    <span class="gene">
                        Catalase
                    </span>

                    <span class="gene">
                        Glyoxalase
                    </span>

                    <span class="gene">
                        Glutathione S-transferase
                    </span>

                    <span class="gene">
                        Isopentenyl transferase
                    </span>

                </div>

            </div>



            <!-- HOME INSTITUTION -->

            <div class="sidebar-card">

                <div class="sidebar-title">
                    Home Institution
                </div>

                <div class="institution">

                    Department of Biochemistry and Molecular Biology

                    <br>

                    <strong>
                        Shahjalal University of Science and Technology
                    </strong>

                    <br>

                    Sylhet, Bangladesh

                </div>

            </div>



            <!-- CONTACT -->

            <div class="contact-box">

                <h3>
                    Interested in collaborating?
                </h3>

                <p>
                    We welcome research collaborations and student inquiries.
                </p>

                <a
                    href="/"
                    class="contact-btn"
                >
                    Get in Touch
                </a>

            </div>


        </aside>

    </main>



    <!-- =========================
         OTHER RESEARCH AREAS
    ========================== -->

    <section class="other-research">

        <div class="other-label">
            EXPLORE MORE
        </div>

        <h2>
            Other Research Areas
        </h2>

        <p class="other-description">
            Discover the full scope of research at the Laboratory
            of Genomics and Transcriptomics.
        </p>


        <div class="other-grid">


            <!-- CARD 1 -->

            <a
                href="/research-focus/whole-genome-analysis"
                class="other-card"
            >

                <div class="other-icon">
                    🧬
                </div>

                <h3>
                    Whole Genome Analysis of Microorganisms
                </h3>

                <p>
                    Exploring microbial genomes, resistance genes,
                    and evolutionary relationships.
                </p>

                <span class="arrow">
                    →
                </span>

            </a>



            <!-- CARD 2 -->

            <a
                href="/research-focus/soil-microbiota"
                class="other-card"
            >

                <div class="other-icon">
                    🌍
                </div>

                <h3>
                    Soil Microbiota & Plant-Microbe Interaction
                </h3>

                <p>
                    Investigating soil microbial communities and
                    their influence on plant health.
                </p>

                <span class="arrow">
                    →
                </span>

            </a>



            <!-- CARD 3 -->

            <a
                href="/research-focus/ml-drug-design"
                class="other-card"
            >

                <div class="other-icon">
                    🤖
                </div>

                <h3>
                    Machine Learning for Diagnostics
                </h3>

                <p>
                    AI-powered disease detection and drug design
                    through computational biology.
                </p>

                <span class="arrow">
                    →
                </span>

            </a>


        </div>

    </section>



    <!-- =========================
         FOOTER
    ========================== -->

    <footer>

        <span>
            © {{ date('Y') }}
            Laboratory of Genomics and Transcriptomics.
            All rights reserved.
        </span>

        <span>
            Department of Biochemistry and Molecular Biology, SUST.
        </span>

    </footer>


</body>

</html>