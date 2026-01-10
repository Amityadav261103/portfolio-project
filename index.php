<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amit Kumar Yadav | Portfolio</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />


    <style>
        /* ================= ROOT ================= */
        :root {
            --navy: #0a1f44;
            --navy-light: #12326b;
            --bg-dark: #05080f;
            --text-light: #ffffff;
            --text-muted: #cfcfcf;
        }

        /* ================= RESET ================= */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", sans-serif;
        }

        /* ================= HEADER (UNCHANGED) ================= */
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

        /* ================= HERO (UNCHANGED) ================= */
        /* HERO */
        .hero {
            background: #000;
            color: var(--text-light);
            padding: 5rem 2rem;
        }

        .hero-content {
            max-width: 1200px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 4rem;
        }

        .hero-text h4 {
            font-size: 1.2rem;
            font-weight: 400;
        }

        .hero-text h4 span,
        .hero-text .name {
            color: var(--navy-light);
        }

        .hero-text h1 {
            font-size: 2.8rem;
            margin: 0.5rem 0;
        }

        .hero-text h2 {
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        /* BUTTONS */
        .hero-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.8rem 1.6rem;
            border-radius: 0;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .btn.primary {
            border: 2px solid var(--navy);
            color: #fff;
        }

        .btn.primary:hover {
            background: var(--navy);
            color: #fff;
        }

        .btn.outline {
            border: 2px solid var(--navy);
            color: #fff;
        }

        .btn.outline:hover {
            background: var(--navy);
            color: #fff;
        }

        /* HERO IMAGE */
        .hero-image {
            position: relative;
            width: 320px;
            height: 420px;
        }

        .hero-image::before {
            content: "";
            position: absolute;
            inset: -15px;
            background: linear-gradient(180deg, #133c81, #040914);
            z-index: 1;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
            z-index: 2;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
        }

        .hero-image:hover {
            transform: translateY(-6px);
            box-shadow: 0 0 8px rgba(255, 255, 255, 0.4);
        }

        /* DIV */
        .DIV {
            height: 5px;
            background: radial-gradient(circle at top, #0f2b5c, #000000);
        }

        /* ================= MAIN GRID ================= */
        .main-wrapper {
            background: #000000;
            padding: 4rem 0;
        }

        .main-grid {
            max-width: 1300px;
            margin: auto;
            display: flex;
            gap: 3rem;
            padding: 0 2rem;
        }

        /* ================= LEFT COLUMN ================= */
        .left-column {
            flex: 2;
        }

        .projects h2,
        .certifications h2,
        .about h2 {
            color: #fff;
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
        }

        .projects p,
        .certifications p {
            color: var(--text-muted);
            margin-bottom: 2rem;
        }

        /* SHARED GRID STYLE FOR PROJECTS & CERTS */
        .projects-grid,
        .certifications-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .project-card,
        .certificate-card {
            background: linear-gradient(180deg, #133c81, #040914);
            padding: 1.5rem;
            box-shadow: 0 0 35px rgba(10, 31, 68, 0.4);
            transition: transform 0.3s;
        }

        .project-card:hover,
        .certificate-card:hover {
            transform: translateY(-6px);
        }

        .project-card img,
        .certificate-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        .project-card h3,
        .certificate-card h3 {
            color: #fff;
            font-size: 1.1rem;
        }

        .project-card p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        /* ===== TECH TAGS (LIKE IMAGE) ===== */
        .tech-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin: 1rem 0 1.2rem;
        }

        .tech-tags span {
            font-size: 0.7rem;
            padding: 0.35rem 0.7rem;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid #12326b;
            color: #ffffff;
        }

        /* ===== PROJECT ACTION BUTTONS ===== */
        .project-actions {
            display: flex;
            gap: 0.8rem;
        }

        /* COMMON BUTTON */
        .project-actions a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 110px;
            padding: 0.45rem 0;
            font-size: 0.8rem;
            font-weight: 500;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.25s ease;
        }

        /* LIVE DEMO BUTTON */
        .project-actions a:first-child {
            background: linear-gradient(180deg, #1b4fd8, #0a2a6f);
            color: #ffffff;
            border: none;
        }

        .project-actions a:first-child:hover {
            box-shadow: 0 0 14px rgba(27, 79, 216, 0.8);
            transform: translateY(-2px);
        }

        /* GITHUB BUTTON */
        .project-actions a:last-child {
            background: transparent;
            color: #ffffff;
            border: 1px solid #12326b;
        }

        .project-actions a:last-child:hover {
            background: rgba(18, 50, 107, 0.25);
            box-shadow: 0 0 10px rgba(18, 50, 107, 0.6);
            transform: translateY(-2px);
        }

        /* HIDDEN STATES */
        .project-card.hidden,
        .certificate-card.hidden {
            display: none;
        }

        /* VIEW ALL BUTTON */
        .view-all {
            background: var(--navy);
            color: #fff;
            padding: 0.6rem 2rem;
            border: none;
            cursor: pointer;
            margin-bottom: 4rem;
            transition: 0.3s;
        }

        .view-all:hover {
            background: var(--navy-light);
        }

        /* ===== IMAGE MODAL ===== */
        .img-modal {
            display: none;
            position: fixed;
            z-index: 5000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
        }

        .img-modal-content {
            max-width: 90%;
            max-height: 90%;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.8);
            animation: zoom 0.3s ease;
        }

        @keyframes zoom {
            from {
                transform: scale(0.7);
            }

            to {
                transform: scale(1);
            }
        }

        .img-modal .close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #fff;
            font-size: 36px;
            font-weight: bold;
            cursor: pointer;
        }

        /* ---------- ABOUT ---------- */
        .about {
            margin-top: 5rem;
        }

        .about h2 {
            color: #fff;
            margin-bottom: 1rem;
        }

        .about p {
            color: var(--text-muted);
            max-width: 700px;
            line-height: 1.6;
        }

        .skills {
            display: flex;
            gap: 2rem;
            margin-top: 1.5rem;
        }

        .skill {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #ffffff;
        }

        .skill i {
            font-size: 2.2rem;
            margin-bottom: 0.4rem;
        }

        /* Brand colors */
        .fa-html5 {
            color: #e34f26;
        }

        .fa-css3-alt {
            color: #1572b6;
        }

        .fa-js {
            color: #f7df1e;
        }

        .fa-node-js {
            color: #68a063;
        }

        /* ================= RIGHT COLUMN ================= */
        .right-column {
            flex: 1;
            align-self: flex-start;
            position: sticky;
            top: 100px;
        }

        /* ---------- CONTACT FORM ---------- */
        .contact-card {
            background: linear-gradient(180deg, #133c81, #040914);
            padding: 2rem;
            box-shadow: 0 0 35px rgba(10, 31, 68, 0.9);
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

        /* ---------- CONTACT INFO ---------- */
        /* ---------- CONTACT INFO (FIXED TO MATCH IMAGE) ---------- */
        .contact-info {
            margin-top: 2rem;
            background: linear-gradient(180deg, #1b4a9b, #050914);
            padding: 1.6rem 1.8rem;
            box-shadow: 0 0 35px rgba(10, 31, 68, 0.9);
            border-radius: 6px;

            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        /* Header (logo + name) */
        .contact-info .logo-container {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-bottom: 0.5rem;
        }

        .contact-info h3 {
            color: #ffffff;
            font-size: 1.05rem;
            font-weight: 600;
        }

        /* Row layout */
        .contact-info p {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            color: #cfcfcf;
            font-size: 0.95rem;
            line-height: 1.4;
        }

        /* Icons */
        .contact-info i {
            min-width: 18px;
            font-size: 0.95rem;
            color: #8bb4ff;
        }

        /* Links */
        .contact-info a {
            color: #cfcfcf;
            text-decoration: none;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .contact-info a:hover {
            color: #ffffff;
            transform: translateX(4px);
        }

        /* Divider lines */
        .contact-info hr {
            border: none;
            border-top: 1px solid rgba(255, 255, 255, 0.25);
            margin: 0.8rem 0;
        }


        /* ================= RESPONSIVE ================= */
        @media (max-width: 900px) {
            .main-grid {
                flex-direction: column;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }
        }

        /* ================= FOOTER (UNCHANGED) ================= */
        footer {
            background-color: #141212e3;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>

<!-- IMAGE MODAL -->
<div id="imgModal" class="img-modal" onclick="closeImg()">
    <span class="close">&times;</span>
    <img class="img-modal-content" id="modalImg">
</div>

<script>
    function openImg(img) {
        document.getElementById("imgModal").style.display = "flex";
        document.getElementById("modalImg").src = img.src;
    }

    function closeImg() {
        document.getElementById("imgModal").style.display = "none";
    }
</script>

<body>

    <!-- HEADER -->
    <header>
        <nav>
            <div class="logo-container">
                <img src="STAR logo.jpeg" class="logo-img">
                <a href="PORTFOLIO.html" class="logo-text">AMIT KUMAR YADAV</a>
            </div>
            <ul>
                <li><a href="PFAbout.html">About</a></li>
                <li><a href="PFSkills.html">Skills</a></li>
                <li><a href="PF_Got_A_Project.html">Contact</a></li>
                <li><a href="PFResume.html">Resume</a></li>
            </ul>
        </nav>
    </header>

    <!-- HERO (UNCHANGED CONTENT GOES HERE) -->
    <section class="hero">
        <div class="hero-content">

            <div class="hero-text">
                <h4>Hello<span>.</span></h4>
                <h1>I'm <span class="name">Amit Kumar Yadav</span></h1>
                <h2>Frontend Developer</h2>

                <div class="hero-buttons">
                    <a href="PF_Got_A_Project.html" class="btn primary">Got a project?</a>
                    <a href="PFResume.html" class="btn outline">My Resume</a>
                </div>
            </div>

            <div class="hero-image">
                <img src="MERA CHATA PHOTO.jpeg" alt="Amit Kumar Yadav">
            </div>

        </div>
    </section>

    <div class="DIV"></div>
    <!-- MAIN CONTENT -->
    <section class="main-wrapper">
        <div class="main-grid">

            <!-- LEFT -->
            <div class="left-column">
                <section class="projects">
                    <h2>My Projects</h2>
                    <p>Some of the real-world projects I've built using modern web technologies.</p>

                    <div class="projects-grid">

                        <div class="project-card">
                            <img src="PORTFOLIO home page.jpeg">
                            <h3>Portfolio Website</h3>
                            <p>Personal responsive portfolio with smooth animations.</p>
                            <div class="tech-tags">
                                <span>HTML</span><span>CSS</span><span>JS</span>
                            </div>
                            <div class="project-actions">
                                <!-- <a href="#">Live Demo</a>--><a href="#">GitHub</a>
                            </div>
                        </div>

                        <div class="project-card">
                            <img src="Table Tap home page.jpeg">
                            <h3>Cafe & Restaurant Management</h3>
                            <p>Owner dashboard with role-based access.</p>
                            <div class="tech-tags">
                                <span>JS</span><span>Bootstrap</span><span>LocalStorage</span>
                            </div>
                            <div class="project-actions">
                                <!-- <a href="#">Live Demo</a>-->
                                <a
                                    href="https://github.com/Amityadav261103/Project-Table-Tap-Digital-Dining-Reservation-Platform-">
                                    GitHub</a>
                            </div>
                        </div>

                        <div class="project-card hidden">
                            <img src="project3.png">
                            <h3>Weather App</h3>
                            <p>Real-time weather updates using OpenWeatherMap API.</p>
                            <div class="tech-tags">
                                <span>HTML</span><span>CSS</span><span>JS</span>
                            </div>
                            <div class="project-actions">
                                <!-- <a href="#">Live Demo</a>--><a href="#">GitHub</a>
                            </div>
                        </div>

                        <div class="project-card hidden">
                            <img src="project4.png">
                            <h3>Task Manager</h3>
                            <p>Task management app with CRUD operations.</p>
                            <div class="tech-tags">
                                <span>HTML</span><span>CSS</span><span>JS</span>
                            </div>
                            <div class="project-actions">
                                <!-- <a href="#">Live Demo</a>--><a href="#">GitHub</a>
                            </div>
                        </div>

                    </div>

                    <button class="view-all" onclick="toggleProjects()">VIEW ALL PROJECTS</button>
                </section>

                <!-- CERTIFICATIONS -->
                <section class="certifications">
                    <h2>Certifications</h2>
                    <p>Here are some of the professional certifications I’ve earned.</p>
                    <div class="certifications-grid" id="certsGrid">
                        <div class="certificate-card">
                            <img src="CoreJava certificate.jpeg" alt="Core Java Certificate" onclick="openImg(this)">
                            <h3>Core Java</h3>
                        </div>
                        <div class="certificate-card">
                            <img src="C++ certificate.jpeg" alt="C++ Certificate" onclick="openImg(this)">
                            <h3>C++</h3>
                        </div>
                        <div class="certificate-card hidden">
                            <img src="CProgramming certificate.jpeg" alt="C Programming Certificate"
                                onclick="openImg(this)">
                            <h3>C Programming</h3>
                        </div>
                        <div class="certificate-card hidden">
                            <img src="CER Office automation.jpeg" alt="Office Automation Certificate"
                                onclick="openImg(this)">
                            <h3>Office Automation</h3>
                        </div>
                    </div>
                    <button class="view-all" id="certBtn" onclick="toggleCertificates()">VIEW ALL
                        CERTIFICATIONS</button>
                </section>
                <!-- ABOUT ME -->

                <section class="about">
                    <h2>About Me</h2>
                    <p>
                        I'm a skilled and motivated <strong>Frontend Developer</strong>
                        with experience in building modern web applications using HTML, CSS, and JavaScript.
                    </p>

                    <div class="skills">
                        <div class="skill">
                            <i class="fa-brands fa-html5"></i>
                            <span>HTML5</span>
                        </div>

                        <div class="skill">
                            <i class="fa-brands fa-css3-alt"></i>
                            <span>CSS3</span>
                        </div>

                        <div class="skill">
                            <i class="fa-brands fa-js"></i>
                            <span>JavaScript</span>
                        </div>

                        <div class="skill">
                            <i class="fa-solid fa-database"></i>
                            <span>SQL</span>
                            <!-- <div class="skill">
    <i class="fa-brands fa-node-js"></i>
    <span>Node.js</span> -->
                        </div>
                    </div>

                </section>
            </div>

            <!-- RIGHT -->
            <div class="right-column">
                <div class="contact-card">
                    <div class="logo-container">
                        <img src="STAR logo.jpeg" class="logo-img">
                        <h3>Get In Touch</h3>
                    </div><br>

                    <form action="contact.php" method="POST">
                        <input type="text" name="name" placeholder="Your Name" required>

                        <input type="email" name="email" placeholder="Your Email" required>

                        <input type="text" name="subject" placeholder="Subject">

                        <textarea name="message" placeholder="Your Message" required></textarea>

                        <button type="submit">SEND MESSAGE</button>
                    </form>
                </div>


                <div class="contact-info">
                    <div class="logo-container">
                        <img src="STAR logo.jpeg" class="logo-img">
                        <h3>AMIT KUMAR YADAV</h3>
                    </div>
                    <p><i class="fa-sharp fa-regular fa-envelope"></i>
                        <a href="mailto:akyadav151947@gmail.com">akyadav151947@gmail.com</a>
                    </p>
                    <p><i class="fa-solid fa-phone"></i>
                        <a href="tel:+918097167040">+91 80971 67040</a>
                    </p>
                    <hr>
                    <p><i class="fa-brands fa-instagram"></i>
                        <a href="https://www.instagram.com/xx_amit_09_/" target="_blank"> xx_amit_09_</a>
                    </p>
                    <p><i class="fa-brands fa-threads"></i>
                        <a href="https://www.threads.net/@xx_amit_09_" target="_blank"> xx_amit_09_</a>
                    </p>
                    <p><i class="fa-brands fa-square-facebook"></i>
                        <a href="https://facebook.com/share/1DFCQsfy1v" target="_blank"> Amit Kumar Yadav</a>
                    </p>
                    <hr>
                    <p><i class="fa-brands fa-linkedin"></i>
                        <a href="https://www.linkedin.com/in/amit-kumar-yadav-882295374/" target="_blank"> amit kumar
                            yadav</a>
                    </p>
                    <p><i class="fa-brands fa-github"></i>
                        <a href="https://github.com/Amityadav261103" target="_blank"> Amityadav261103</a>
                    </p>
                    <!-- <p><i class="fa-solid fa-link"></i> 
          <a href="https://github.com/Amityadav261103" target="_blank"> Amityadav261103</a></p> -->
                    <!-- <p><i class="fa-brands fa-mobile"></i> Apna App: amitkumar</p> -->
                </div>
            </div>

        </div>
    </section>

    <footer>
        <p>Thanks for visiting My Portfolio</p>
    </footer>


    <script>
        function toggleProjects() {
            const hiddenProjects = document.querySelectorAll('.project-card.hidden');
            const btn = document.querySelector('.view-all');

            hiddenProjects.forEach(card => {
                card.style.display = card.style.display === 'block' ? 'none' : 'block';
            });

            btn.textContent =
                btn.textContent === 'VIEW ALL PROJECTS'
                    ? 'SHOW LESS PROJECTS'
                    : 'VIEW ALL PROJECTS';
        }
        function toggleCertificates() {
            const certs = document.querySelectorAll('.certificate-card.hidden');
            const btn = event.target;

            certs.forEach(c => {
                c.style.display = c.style.display === 'block' ? 'none' : 'block';
            });

            btn.textContent =
                btn.textContent === 'VIEW ALL CERTIFICATIONS'
                    ? 'SHOW LESS CERTIFICATIONS'
                    : 'VIEW ALL CERTIFICATIONS';
        }
    </script>

</body>

</html>