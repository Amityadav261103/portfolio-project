<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amit Kumar Yadav | Resume</title>

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
        .hero {
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
        }

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
        .hero-image {
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
        }

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
            grid-template-columns: repeat(2, 1fr);
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

        .card h3 {
            margin-bottom: 0.6rem;
        }

        .card ul {
            padding-left: 1.2rem;
        }

        /* ================= QUALIFICATIONS ================= */
        .qualifications li {
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
                <li><a href="PFSkills.html">Skills</a></li>
                <li><a href="PF_Got_A_Project.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
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

                <!-- <div class="hero-buttons">
                    <a href="#">Got a Project?</a>
                    <a href="#">My Resume</a>
                </div> -->
            </div>

            <div class="hero-image">
                <img src="MERA CHATA PHOTO.jpeg" alt="Amit Kumar Yadav">
            </div>
        </div>
    </section>

    <div class="DIV"></div>

    <section class="section">
        <h2>Profile Summary</h2>
        <p>
            Passionate and self-motivated Frontend Developer with hands-on experience in
            HTML, CSS, JavaScript, PHP and MySQL. Strong understanding of backend logic,
            database design and RESTful integration.
        </p>

        <ul>
            <li>Developed multiple mini-projects including booking website "Table Tap"</li>
            <li>Built scalable frontend systems using LocalStorage & JSON</li>
        </ul>
    </section>

    <section class="section">
        <h2>SKILLS</h2>

        <div class="cards1">
            <div class="card">
                <h3>Languages</h3>
                <ul>
                    <li>C Programming</li>
                    <li>C++</li>
                    <li>Core Java</li>
                </ul>
            </div>

            <div class="card">
                <h3>Web Development</h3>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript (ES6+)</li>
                </ul>
            </div>
            <div class="card">
                <h3>Database</h3>
                <ul>
                    <li>SQL</li>
                </ul>
            </div>
            <div class="card">
                <h3>Tools & Platforms</h3>
                <ul>
                    <li>Git & GitHub</li>
                    <li>VS Code</li>
                </ul>
            </div>
            <div class="card">
                <h3>Soft Skills</h3>
                <ul>
                    <li>Problem Solving</li>
                    <li>Teamwork</li>
                    <li>Adaptability</li>
                </ul>
            </div>
            <div class="card">
                <h3>Office Automation</h3>
                <ul>
                    <li>MS Word</li>
                    <li>MS Excel</li>
                    <li>MS PowerPoint</li>
                </ul>
            </div>
    </section>
    <section class="section">
        <h2>PROJECTS</h2>

        <div class="cards">
            <div class="card">
                <h3>Portfolio Website — Resume</h3>
                <ul>
                    <li>Showcase of skills and projects</li>
                    <li>Practical implementation of frontend technologies</li>
                    <li>Responsive UI with CSS animations</li>
                </ul>
                <ul>
                    <li>
                        <strong>Description:</strong>
                        A modern single-page personal portfolio website designed to showcase projects,
                        certifications, and professional details through a clean and visually engaging layout.
                    </li>

                    <li>
                        <strong>Project Showcase System:</strong>
                        Displays multiple real-world projects with technology tags, GitHub links, and
                        expandable views to improve project visibility and navigation.
                    </li>

                    <li>
                        <strong>Responsive Layout & Adaptive Design:</strong>
                        Implemented a flexible grid-based layout to ensure seamless responsiveness across
                        desktops, laptops, tablets, and dynamically resized browser windows.
                    </li>

                    <li>
                        <strong>Interactive UI Components:</strong>
                        Integrated hover effects, smooth section transitions, and modal image previews for
                        certifications to enhance user interaction.
                    </li>
                </ul>
            </div>
            <!-- 
    <div class="cards">
    <div class="card">
      <h3>QuickStay — Hospitality Platform</h3>
      <ul>
        <li>Hotel & restaurant booking system</li>
        <li>CRUD operations with MySQL</li>
        <li>Responsive UI with CSS animations</li>
      </ul>
  <h2>Restaurant & Café Reservation System (Mumbai)</h2>

  <ul>
    <li>
      <strong>Description:</strong>
      A versatile web application designed to streamline restaurant and café reservations
      across Mumbai.
    </li>

    <li>
      <strong>Integrated Booking Engine:</strong>
      Enables users to browse 45+ venues and book tables with real-time bill estimation,
      factoring in guest count and applicable discounts.
    </li>

    <li>
      <strong>Role-Based Dashboards:</strong>
      Implemented secure, role-specific dashboards for Users (reservations),
      Owners (business listings), and Admins (system monitoring and control).
    </li>

    <li>
      <strong>Dynamic UI/UX:</strong>
      Developed a responsive, coffee-themed interface using HTML and CSS to ensure
      smooth interaction across desktops, tablets, and mobile devices.
    </li>

    <li>
      <strong>State Management:</strong>
      Utilized JavaScript and LocalStorage to maintain persistent data for user accounts,
      custom restaurant/café listings, and reservation history.
    </li>
  </ul>
</div> -->

            <div class="card">
                <h3>Table Tap — Reservation Platform</h3>
                <ul>
                    <li>Restaurant table booking</li>
                    <li>Role-based dashboards</li>
                    <li>Dynamic UI/UX</li>
                </ul>
                <ul>
                    <li>
                        <strong>Description:</strong>
                        A comprehensive hospitality management tool integrating bookings for hotel rooms,
                        salon services, spa sessions, and restaurant tables.
                    </li>

                    <li>
                        <strong>Unified Service Hub:</strong>
                        Combines four separate business modules into a unified, responsive interface for
                        streamlined navigation.
                    </li>

                    <li>
                        <strong>Dynamic Reservation System:</strong>
                        Implements intelligent booking rules to record stay periods, guest numbers, and
                        service-specific requirements.
                    </li>

                    <li>
                        <strong>Full-Stack Implementation:</strong>
                        Built a secure backend using PHP and MySQL to manage user authentication, service
                        logs, and payment data.
                    </li>

                    <li>
                        <strong>Geospatial Features:</strong>
                        Integrated location tracking to log user positions and addresses for targeted and
                        location-aware service delivery.
                    </li>

                    <li>
                        <strong>High-end UX Design:</strong>
                        Designed a responsive, luxury-themed interface using modern CSS animations to
                        enhance user engagement and usability.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section">

        <h2>Qualifications</h2>
        <ul class="qualifications">
            <li>
                <h3>BSc. Information Technology <span>(2022 – 2025)</span></h3>
                <p>St. Rocks College, Borivali (W), Mumbai University</p>
                <ul>
                    <li>Specialized in Web & Frontend Development</li>
                    <li>Good knowledge of Office Automation</li>
                </ul>
            </li>
            <li>
                <h3>HSC (Science) <span>– 2022</span></h3>
                <p>Maharashtra State Board</p>
            </li>
            <li>
                <h3>SSC <span>– 2020</span></h3>
                <p>Maharashtra State Board</p>
            </li>
        </ul>

    </section>

    <footer>
        Thanks for visiting My Portfolio
    </footer>

</body>

</html>