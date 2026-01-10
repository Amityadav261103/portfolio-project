<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amit Kumar Yadav | got a project</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* ================= ROOT ================= */
        :root {
            --navy: #0a1f44;
            --navy-light: #12326b;
            --bg-dark: #000000;
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

        /* ================= BODY ================= */
        body {
            background: #000000;
            color: var(--text-light);
        }

        /* ================= HEADER ================= */
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

        /* ================= HERO ================= */
        /* .hero {
            padding: 5rem 2rem;
            border: #000000;
        }

        .hero-inner {
            max-width: 1400px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            gap: 4rem;
        }

        .hero-text h4 {
            font-weight: 400;
        }

        .hero-text h1 {
            font-size: 2.8rem;
            margin: 0.6rem 0;
        }

        .hero-text span {
            color: var(--navy-light);
        }

        .hero-text h2 {
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
        }

        .hero-buttons button {
            padding: 0.7rem 1.6rem;
            border: 2px solid var(--navy);
            background: transparent;
            color: #fff;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .hero-buttons button:hover {
            background: var(--navy);
        } */

        /* 

        .hero-buttons {
            display: flex;
            gap: 1rem;
        }

        .hero-buttons a {
            padding: 0.7rem 1.6rem;
            border: 2px solid var(--navy);
            text-decoration: none;
            color: #fff;
            font-size: 0.9rem;
        }

        .hero-buttons a:hover {
            background: var(--navy);
        } */

        /* HERO IMAGE */
        /* .hero-image {
            width: 340px;
            height: 450px;
            position: relative;
        }

        .hero-image::before {
            content: "";
            position: absolute;
            inset: -15px;
            background: linear-gradient(180deg, #133c81, #040914);
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
            z-index: 1;
        } */

        /* ================= SEPARATOR ================= */
        .DIV {
            height: 5px;
            background: radial-gradient(circle at top, #0f2b5c, #000);
        }

        /* ================= CONTENT ================= */
        .section {
            max-width: 1400px;
            margin: auto;
            padding: 3rem 2rem;
        }

        span {
            color: var(--navy-light);
        }

        /* ================= PROFILE SUMMARY ================= */
        .section h2 {
            margin-bottom: 1rem;
        }

        .section p,
        li {
            color: var(--text-muted);
            line-height: 1.6;
        }

        .section ul {
            margin-top: 1rem;
            padding-left: 1.3rem;
        }

        /* ================= SKILLS PROJECT CARDS ================= */
        .cards {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .cards1 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .card {
            background: linear-gradient(180deg, #133c81, #040914);
            padding: 2rem;
            box-shadow: 0 0 35px rgba(10, 31, 68, 0.8);
        }

        .contact-card {
            background: linear-gradient(180deg, #133c81, #040914);
            box-shadow: 0 0 35px rgba(10, 31, 68, 0.9);
            padding: 1.6rem;

        }

        .contact-header {
            margin-bottom: 1rem;
        }

        .contact-header p {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 0.9rem;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 0.9rem;
            /* increases box height */
            font-size: 1rem;
            /* increases text size */
        }

        .contact-form textarea {
            min-height: 250px;
            /* increase textarea height */
        }

        .form-group label h3 {
            font-size: 1rem;
        }

        .contact-form input,
        .contact-form textarea {
            font-size: 1.05rem;
            padding: 1rem;
        }


        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.3rem;
        }

        .form-group label {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        .form-action {
            margin-top: 0.5rem;
        }

        .contact-card h3 {
            margin-bottom: 1rem;
        }

        .contact-card input,
        .contact-card textarea {
            width: 100%;
            margin-bottom: 0.8rem;
            padding: 0.6rem;
            background: #0a1428;
            border: 1px solid var(--navy-light);
            color: #fff;
        }

        .contact-card button {
            width: 100%;
            background: var(--navy);
            color: #fff;
            padding: 0.7rem;
            border: none;
        }

        .contact-card:hover {
            transform: translateY(-6px);
        }

        .card h3 {
            margin-bottom: 0.6rem;
        }

        .card ul {
            padding-left: 1.2rem;
        }

        .skill-card {
            background: linear-gradient(180deg, #133c81, #040914);
            padding: 1.6rem;
            box-shadow: 0 0 35px rgba(10, 31, 68, 0.4);
        }

        .skill-card i {
            font-size: 2.4rem;
            margin-bottom: 0.6rem;
        }

        .skill-card p {
            font-size: 0.9rem;
            color: var(--text-muted);
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


        /* ================= QUALIFICATIONS ================= */
        .Technologies li {
            margin-bottom: 0.6rem;
        }

        /* ================= FOOTER ================= */
        footer {
            text-align: center;
            padding: 2rem;
            background: rgba(20, 18, 18, 0.9);
            margin-top: 3rem;
        }

        .socials {
            margin-bottom: 1rem;
        }

        .socials i {
            margin: 0 0.4rem;
            padding: 0.6rem;
            background: var(--navy-light);
            border-radius: 50%;
        }

        /* ================= RESPONSIVE ================= */
        @media(max-width:900px) {
            .hero-inner {
                flex-direction: column;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

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
                <li><a href="PFSkills.html">Skills</a></li>
            </ul>
        </nav>
    </header>

    <!-- <section class="hero">
        <div class="hero-inner">
            <div class="hero-text">
                <h4>Hello</h4>
                <h1>I'm <span>Amit Kumar Yadav</span></h1>
                <h2>Frontend Developer</h2>

                <div class="hero-buttons">
                    <button onclick="window.print()">
                        PRINT
                    </button>
                </div>

                <div class="hero-buttons">
                    <a href="#">Got a Project?</a>
                    <a href="#">My Resume</a>
                </div>
            </div>

            <div class="hero-image">
                <img src="MERA CHATA PHOTO.jpeg" alt="Amit Kumar Yadav">
            </div>
        </div>
    </section> -->


    <section class="section">
        <h1><span>Got A Project</span></h1>
        <p>
            I am Amit Kumar Yadav, a passionate BSc. Information Technology student specializing in Web and Frontend
            Development.
            With a strong foundation in programming languages such as C, C++, and Core Java, I have honed my skills in
            creating dynamic and responsive web applications using HTML, CSS, and JavaScript (ES6+).
            My academic journey at St. Rocks College, Mumbai University, has equipped me with practical knowledge and
            hands-on experience in building scalable frontend systems.
            I am eager to contribute my skills to innovative projects and collaborate with like-minded professionals in
            the tech industry.
        </p>

        <ul>
            <li>Developed multiple mini-projects including booking website "Table Tap"</li>
            <li>Created a responsive portfolio website showcasing skills and projects</li>
        </ul>
    </section>

    <section class="section">
        <h2>Get In Touch</h2>

        <div class="cards">
            <div class="contact-card">

                <!-- Form Header -->
                <div class="contact-header">
                    <h3>Have a project in mind? Let’s talk.</h3>
                </div>

                <!-- Form -->
                <form action="/PPF1/contact.php" method="POST">

    <div class="form-group">
        <label><h3>Your Name</h3></label>
        <input type="text" name="name" placeholder="Enter your name" required>
    </div>

    <div class="form-group">
        <label><h3>Your Email</h3></label>
        <input type="email" name="email" placeholder="Enter your email" required>
    </div>

    <div class="form-group">
        <label><h3>Project Subject</h3></label>
        <input type="text" name="subject" placeholder="Subject of project">
    </div>

    <div class="form-group">
        <label><h3>Your Message</h3></label>
        <textarea name="message" rows="4" placeholder="Write your message" required></textarea>
    </div>

    <div class="form-action">
        <button type="submit">SEND MESSAGE</button>
    </div>

</form>

            </div>
        </div>

    </section>

    <section class="section">
        <h2>PROJECTS</h2>
        <div class="cards1">
            <div class="skill-card">
                <i class="fa-brands fa-html5"></i>
                <h3>HTML5</h3>
                <p>HTML5 is the latest version of HTML, offering enhanced semantic elements and improved multimedia
                    support.</p>
            </div>
            <div class="skill-card">
                <i class="fa-brands fa-css3-alt"></i>
                <h3>CSS3</h3>
                <p>CSS3 provides advanced styling capabilities including animations, transitions, and responsive design
                    features.</p>
            </div>
            <div class="skill-card">
                <i class="fa-brands fa-js"></i>
                <h3>JavaScript</h3>
                <p>JavaScript is a versatile programming language used for creating dynamic and interactive web content.
                </p>
            </div>
            <!-- <div class="skill-card">
                <i class="fa-brands fa-react"></i>
                <h3>React</h3>
                <p>React is a popular JavaScript library for building user interfaces, known for its component-based architecture.</p>
            </div> -->
            <div class="skill-card">
                <i class="fa-solid fa-database"></i>
                <h3>SQL</h3>
                <p>SQL is a standard language for managing and manipulating relational databases.</p>
            </div>
            <!-- <div class="skill-card">
                <i class="fa-brands fa-git-alt"></i>
                <h3>Git</h3>
                <p>Git is a version control system that helps manage code changes and collaborate with other developers.</p>
            </div> -->
            <div class="skill-card">
                <i class="fa-brands fa-github"></i>
                <h3>GitHub</h3>
                <p>GitHub is a platform for hosting and collaborating on Git repositories, facilitating open-source
                    development.
                </p>
            </div>
            <div class="skill-card">
                <i class="fa-solid fa-file-word"></i>
                <h3>MS Office</h3>
                <p>Proficient in Microsoft Office Suite including Word, Excel, and PowerPoint for productivity and
                    documentation.</p>
            </div>
            <div class="skill-card">
                <i class="fa-solid fa-code"></i>
                <h3>c++</h3>
                <p>General purpose, object oriented programming language.</p>
            </div>
            <div class="skill-card">
                <i class="fa-solid fa-C"></i>
                <h3>C Programming</h3>
                <p>General purpose, procedural programming language.</p>
            </div>
            <div class="skill-card">
                <i class="fa-solid fa-code"></i>
                <h3>CoreJava </h3>
                <p>General purpose, object oriented programming language.</p>
            </div>
        </div>
    </section>

    <section class="section">

        <h2>Technologies</h2>
        <ul>
            <li>
                <i class="fa-brands fa-github"></i>
                <strong>GitHub:</strong>
                Used to save code online. Helps share projects with others.
            </li>

            <li>
                <i class="fa-solid fa-code"></i>
                <strong>Visual Studio Code:</strong>
                Used to write code. Helps build websites and apps.
            </li>

            <li>
                <i class="fa-solid fa-terminal"></i>
                <strong>Dev C++:</strong>
                Used for C and C++ programs. Helps run code easily.
            </li>

            <li>
                <i class="fa-solid fa-cubes"></i>
                <strong>Code::Blocks:</strong>
                Used to write C and C++ code. Good for beginners.
            </li>

            <li>
                <i class="fa-solid fa-file-code"></i>
                <strong>Sublime Text:</strong>
                Used to write code. Fast and easy to use.
            </li>
        </ul>


    </section>

    <footer>
        Thanks for visiting My Portfolio
    </footer>

</body>

</html>