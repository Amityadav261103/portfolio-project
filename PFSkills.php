<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amit Kumar Yadav | Skills</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        /* ================= ROOT ================= */
        :root {
            --navy: #0a1f44;
            --navy-light: #12326b;
            --text-light: #ffffff;
            --text-muted: #cfcfcf;
        }

        /* ================= RESET ================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            background: #000;
            color: var(--text-light);
        }

        /* ================= HEADER ================= */
        header {
            background-color: #141212e3;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 0.7rem;
        }

        .logo-img {
            height: 45px;
            width: 45px;
        }

        .logo-text {
            color: #dbd6cd;
            font-weight: bold;
            text-decoration: none;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 1.8rem;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
        }

        /* ================= DIVIDER ================= */
        .DIV {
            height: 5px;
            background: radial-gradient(circle at top, #0f2b5c, #000);
        }

        /* ================= SECTION ================= */
        .section {
            max-width: 1400px;
            margin: auto;
            padding: 3.5rem 2rem;
        }

        .section h2 {
            font-size: 2.2rem;
            margin-bottom: 1rem;
        }

        .section p {
            color: var(--text-muted);
            max-width: 800px;
            line-height: 1.7;
        }

        /* ================= SKILL GRID ================= */
        .skills-grid {
            margin-top: 2.5rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
        }

        .skill-card {
            background: linear-gradient(180deg, #133c81, #040914);
            padding: 1.6rem;
            box-shadow: 0 0 35px rgba(10, 31, 68, 0.4);
            transition: transform 0.3s ease;
        }

        .skill-card:hover {
            transform: translateY(-6px);
        }

        .skill-card i {
            font-size: 2.4rem;
            margin-bottom: 0.6rem;
        }

        .skill-card h3 {
            margin-bottom: 0.4rem;
        }

        .skill-card p {
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        /* ================= SKILL DETAILS WRAPPER ================= */
.skill-details {
  max-width: 1400px;
  margin: auto;
  padding: 3rem 2rem;
}

/* Remove default ul styles */
.skill-details > ul {
  list-style: none;
  padding: 0;
  margin: 0;

  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
}

/* ================= SKILL CARD ================= */
.dskill-card {
  background: linear-gradient(180deg, #133c81, #040914);
  padding: 1.8rem 1.6rem;
  box-shadow: 0 0 35px rgba(10, 31, 68, 0.6);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect */
.dskill-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 0 45px rgba(18, 50, 107, 0.9);
}

/* ================= MAIN TITLE ================= */
.dskill-card strong {
  display: block;
  font-size: 1.15rem;
  margin-bottom: 0.8rem;
  color: #ffffff;
}

/* ================= INNER LIST ================= */
.dskill-card ul {
  list-style: disc;
  padding-left: 1.2rem;
}

/* Inner list items */
.dskill-card ul li {
  color: #cfcfcf;
  font-size: 0.95rem;
  line-height: 1.6;
  margin-bottom: 0.55rem;
}

/* Remove extra spacing from outer li */
.dskill-card > li {
  list-style: none;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
  .skill-details {
    padding: 2rem 1.2rem;
  }
}


        h2 {
            margin-top: 3rem;
        }

        /* ICON COLORS */
        .fa-html5 {
            color: #e34f26;
        }

        .fa-css3-alt {
            color: #1572b6;
        }

        .fa-js {
            color: #f7df1e;
        }

        .fa-database {
            color: #4db6ac;
        }

        .fa-github {
            color: #cfcfcf;
        }

        .fa-code {
            color: #00599c;
        }

        .fa-java {
            color: #5382a1;
        }

        .fa-file-word {
            color: #2b579a;
        }

        /* ================= TECHNOLOGY LIST ================= */
        .tech-list {
            margin-top: 3rem;
        }

        .tech-list ul {
            padding-left: 1.2rem;
            margin-top: 1rem;
        }

        .tech-list li {
            color: var(--text-muted);
            margin-bottom: 0.6rem;
        }

        /* ================= FOOTER ================= */
        footer {
            text-align: center;
            padding: 1.5rem;
            background: rgba(20, 18, 18, 0.9);
            margin-top: 3rem;
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header>
        <nav>
            <div class="logo-container">
                <img src="STAR logo.jpeg" class="logo-img">
                <a href="PORTFOLIO.html" class="logo-text">AMIT KUMAR YADAV</a>
            </div>
            <ul>
                <li><a href="PORTFOLIO.html">Home</a></li>
                <li><a href="PFAbout.html">About</a></li>
                <li><a href="PFResume.html">Resume</a></li>
                <li><a href="PF_Got_A_Project.html">Contact</a></li>
            </ul>
        </nav>
    </header>



    <!-- SKILLS SECTION -->
    <section class="section">
        <h2>My Skills</h2>
        <p>
            I specialize in frontend development with a strong foundation in programming,
            databases, and modern web technologies. Below are the tools and technologies
            I use to build responsive and scalable applications.
        </p>

        <div class="skills-grid">
            <div class="skill-card">
                <i class="fa-brands fa-html5"></i>
                <h3>HTML5</h3>
                <p>Semantic, accessible, and SEO-friendly markup.</p>
            </div>

            <div class="skill-card">
                <i class="fa-brands fa-css3-alt"></i>
                <h3>CSS3</h3>
                <p>Responsive layouts, animations, and modern UI styling.</p>
            </div>

            <div class="skill-card">
                <i class="fa-brands fa-js"></i>
                <h3>JavaScript</h3>
                <p>Dynamic UI, DOM manipulation, ES6+, LocalStorage.</p>
            </div>

            <div class="skill-card">
                <i class="fa-solid fa-database"></i>
                <h3>SQL</h3>
                <p>Relational database design and CRUD operations.</p>
            </div>

            <div class="skill-card">
                <i class="fa-brands fa-github"></i>
                <h3>GitHub</h3>
                <p>Version control and project collaboration.</p>
            </div>

            <div class="skill-card">
                <i class="fa-solid fa-code"></i>
                <h3>C & C++</h3>
                <p>Procedural and object-oriented programming fundamentals.</p>
            </div>

            <div class="skill-card">
                <i class="fa-brands fa-java"></i>
                <h3>Core Java</h3>
                <p>OOP concepts, logic building, and application basics.</p>
            </div>

            <div class="skill-card">
                <i class="fa-solid fa-file-word"></i>
                <h3>MS Office</h3>
                <p>Documentation, presentations, and data handling.</p>
            </div>

            <div class="skill-card">
                <i class="fa-solid fa-users"></i>
                <h3>Teamwork</h3>
                <p>Collaboration, communication, and project coordination.</p>
            </div>

            <div class="skill-card">
                <i class="fa-solid fa-lightbulb"></i>
                <h3>Creativity</h3>
                <p>Design thinking, problem-solving, and innovative solutions.</p>
            </div>
        </div>

        <h2>Details about My Skills</h2>

        <div class="skill-details">
            <ul><div class="dskill-card">
                <br>
                <li><strong>MS Office & Documentation:</strong> <br> <br>
                    <ul>
                        <li>Proficient in Microsoft Word, Excel, and PowerPoint</li>
                        <li>Creating structured reports, resumes, and technical documentation</li>
                        <li>Data handling, basic formulas, and tables in Excel</li>
                        <li>Professional presentations with clean layouts and visuals</li>
                        <li>Formatting documents for print and digital use</li>
                    </ul>
                </li>
            </div>
            <div class="dskill-card">
                <br>
                <li><strong>Teamwork & Creativity:</strong> <br> <br>
                    <ul>
                        <li>Strong team collaboration and communication skills</li>
                        <li>Contributing ideas during planning and brainstorming sessions</li>
                        <li>Applying creative UI/UX thinking to frontend projects</li>
                        <li>Adapting to feedback through iterative improvements</li>
                        <li>Maintaining a positive and productive team workflow</li>
                    </ul>
                </li>
            </div>
            <div class="dskill-card">
                <br>
                <li><strong>Front-End Development:</strong> <br> <br>
                    <ul>
                        <li>Proficient in HTML5, CSS3, and JavaScript (ES6+)</li>
                        <li>Developing clean, structured, and reusable UI components</li>
                        <li>Creating responsive layouts for all screen sizes</li>
                        <li>Implementing interactive features and smooth UI behaviors</li>
                        <li>Ensuring cross-browser compatibility and performance</li>
                    </ul>
                </li>
            </div>
            </ul>
        </div>

        <!-- TECHNOLOGIES -->
        <div class="tech-list">
            <h2>Technologies & Tools</h2>
            <ul>
                <li>HTML, CSS, JavaScript (ES6+)</li>
                <li>LocalStorage & JSON</li>
                <li>MySQL (Basic)</li>
                <li>Git & GitHub</li>
                <li>VS Code</li>
            </ul>
        </div>
    </section>

    <footer>
        Thank you for visiting Portfolio
    </footer>

</body>

</html>