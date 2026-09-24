# AG Lab SUST
## Laboratory of Genomics and Transcriptomics

AG Lab SUST is a Laravel-based laboratory website developed for presenting laboratory information, research activities, and research focus areas.

This repository contains the **Home Page and Research Focus section** developed as part of the internship project.

---

# My Internship Contribution

As part of the internship project, I was responsible for developing:

- Home Page
- Research Focus Page
- Research Focus individual pages
- Research-related UI sections
- Navigation and Laravel routing for the implemented pages
- Research-specific images and visual sections

---

# 1. Home Page

The Home Page was developed to provide an informative and professional introduction to the Laboratory of Genomics and Transcriptomics.

### Home Page Features

- Laboratory branding and navigation bar
- Hero section with laboratory introduction
- Laboratory overview section
- Dr. Ajit Ghosh profile section
- Research Focus section
- Research area cards
- Navigation to individual research pages
- Contact section
- Footer section
- Responsive layout for different screen sizes

### Main Navigation

The Home Page includes navigation to:

- Home
- Research Focus
- Outputs
- Members & Alumni
- News & Blogs
- Contact

---

# 2. Research Focus

A dedicated Research Focus section was developed to present the major research areas of the laboratory.

The Research Focus page provides users with an overview of the laboratory's research activities and links to individual research areas.

### Research Focus Features

- Research area cards
- Research descriptions
- Research-specific images
- Individual research page navigation
- Responsive research layout
- Consistent laboratory-themed UI design

---

# 3. Research Areas

The following individual research focus pages were implemented:

### Plant Abiotic Stress

A dedicated page presenting research related to plant responses to abiotic stress and associated research activities.

### Whole Genome Analysis of Microorganisms

A research page focused on whole genome analysis of microorganisms, including genomic research areas, objectives, and research approaches.

### Soil Microbiota Research

A dedicated research page presenting soil microbiota research, soil microbial ecosystems, research objectives, and related laboratory approaches.

### Machine Learning for Diagnostics

A dedicated research page presenting the use of machine learning and computational approaches for diagnostic research.

---

# 4. Research Page Components

The individual research pages were designed with research-oriented sections, including:

- Research Overview
- Key Research Areas
- Research Components
- Research Objectives
- Research Approach
- Call-to-Action sections
- Research-specific imagery

---

# 5. UI/UX Design

The website interface was designed with a clean and professional research-laboratory style.

### Design Features

- Green and teal color theme
- Clean typography
- Modern research cards
- Responsive layouts
- Consistent navigation
- Research-focused visual presentation
- Desktop and mobile friendly design

---

# 6. Images and Visual Assets

Research-specific visual assets were integrated into the website.

### Implemented Images

- Dr. Ajit Ghosh profile image
- Whole Genome Analysis hero image
- Whole Genome Analysis overview image
- Soil Microbiota hero image
- Soil Microbiota overview image
- Machine Learning for Diagnostics visual assets

The images were integrated using Laravel's public asset system.

---

# 7. Laravel Routing

Laravel routes were configured for the Home Page and Research Focus pages.

### Main Routes

```text
/
 /research-focus
 /research-focus/plant-abiotic-stress
 /research-focus/whole-genome-analysis
 /research-focus/soil-microbiota
 /research-focus/ml-drug-design
```

Named Laravel routes were also configured for navigation between the implemented pages.

---

# 8. Laravel Blade Views

The pages were implemented using Laravel Blade templates.

### Main Views

```text
resources/
└── views/
    ├── home.blade.php
    │
    └── research/
        ├── index.blade.php
        ├── plant-abiotic-stress.blade.php
        ├── whole-genome-analysis.blade.php
        ├── soil-microbiota.blade.php
        └── ml-drug-design.blade.php
```

---

# 9. Technologies Used

### Backend

- PHP
- Laravel
- Laravel Blade

### Frontend

- HTML5
- CSS3
- JavaScript

### Development Tools

- Composer
- NPM
- Git
- GitHub
- Laravel Artisan
- Visual Studio Code

---

# 10. Project Structure

```text
aglab/
│
├── app/
│
├── bootstrap/
│
├── config/
│
├── database/
│
├── public/
│   └── images/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── home.blade.php
│       └── research/
│           ├── index.blade.php
│           ├── plant-abiotic-stress.blade.php
│           ├── whole-genome-analysis.blade.php
│           ├── soil-microbiota.blade.php
│           └── ml-drug-design.blade.php
│
├── routes/
│   └── web.php
│
├── storage/
├── tests/
│
├── composer.json
├── package.json
├── vite.config.js
└── README.md
```

---

# Internship Responsibility

**Assigned Part:** Home Page + Research Focus

### Completed Work

- Developed the Home Page
- Developed the Research Focus Page
- Developed individual Research Focus pages
- Added research-specific images
- Implemented Laravel Blade views
- Configured Laravel routes
- Designed responsive research-oriented UI
- Integrated navigation between research sections
- Organized research pages and assets within the Laravel project

---

# Project Information

**Project:** AG Lab SUST  
**Laboratory:** Laboratory of Genomics and Transcriptomics  
**Framework:** Laravel  
**Contribution:** Home Page + Research Focus  
**Version Control:** Git & GitHub