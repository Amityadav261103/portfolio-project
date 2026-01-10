<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amit Kumar Yadav | About</title>

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    @media print {
      * {
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }

      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      body {
        min-height: 100vh;
        /* 🔥 fills screen */
        display: flex;
        flex-direction: column;

        background: #000;
        color: #fff;
        font-family: "Segoe UI", sans-serif;
      }

      header,
      footer,
      .about-section,
      .skills-section {
        background: #000 !important;
      }

      .hero-buttons {
        display: none;
        /* hide print button itself */
      }

      .skill-card,
      .hero-image::before {
        box-shadow: none !important;
      }

      /* @page {
    margin: 10mm;
  } */
    }

    /* ================= GLOBAL RESET ================= */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #000;
      color: #fff;
      font-family: "Segoe UI", sans-serif;

      /* --- KEY ADDITIONS START HERE --- */
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* ================= ROOT VARIABLES ================= */
    :root {
      --navy: #0a1f44;
      --navy-light: #133c81;
      --text-muted: #cfcfcf;
      /* ✅ FIX */
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
      background: radial-gradient(circle at top, #0f2b5c, #000000);
    }

    /* .DIV1 {
  height: 15px;
  background:#000000;
} */

    /* ================= ABOUT SECTION ================= */
    .about-section {
      padding: 5rem 2rem;
    }

    .hero-content {
      max-width: 1200px;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 3rem;
    }

    /* TEXT */
    .hero-text {
      flex: 1.2;
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
      margin: 1.5rem 0 1rem;
    }

    .hero-text p {
      line-height: 1.8;
      color: var(--text-muted);
      max-width: 600px;
    }

    /* IMAGE */
    .hero-image {
      flex-shrink: 0;
      position: relative;
      width: 320px;
      height: 420px;
      transition: transform 0.3s ease;
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
    }

    /* 🔹 HERO BUTTONS */
    .hero-buttons {
      margin-top: 2rem;
      display: flex;
      gap: 1rem;
    }

    .hero-buttons button {
      padding: 0.6rem 1.4rem;
      background: transparent;
      border: 2px solid var(--navy-light);
      color: #fff;
      cursor: pointer;
      font-size: 0.85rem;
      letter-spacing: 1px;
      transition: all 0.3s ease;
    }

    .hero-buttons button:hover {
      background: var(--navy-light);
    }

    /* ================= SKILLS ================= */
    .skills-section {
      padding: 5rem 2rem;
      background: #000;
    }

    .skills-section h2 {
      font-size: 2.2rem;
    }

    .skills-section p {
      max-width: 750px;
      margin-bottom: 2rem;
      color: var(--text-muted);
    }

    /* ✅ SPACE GOES HERE */
    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 2rem;
      margin-bottom: 2.5rem;
      /* 👈 CORRECT SPACING */
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


    /* ============ SECTION BACKGROUND ============ */
    .section-wrapper {
      position: relative;
      padding: 5rem 2rem;
      overflow: hidden;
    }

    .section-wrapper::before {
      content: "";
      position: absolute;
      background: #000;
    }

    .section-content {
      position: relative;
      max-width: 1100px;
      margin: auto;
      /* z-index: 1; */
    }

    /* ============ TITLE & TEXT ============ */
    .section-content h1 {
      font-size: 2.6rem;
      margin-bottom: 1rem;
    }

    .section-content p {
      max-width: 800px;
      color: #cfcfcf;
      line-height: 1.7;
      margin-bottom: 3rem;
    }

    /* ============ MAIN TECH ICONS ============ */
    .tech-icons {
      display: flex;
      gap: 3.5rem;
      align-items: center;
      flex-wrap: wrap;
      margin-bottom: 2.5rem;
    }

    .tech {
      text-align: center;
    }

    .tech i {
      font-size: 3.2rem;
      margin-bottom: 0.6rem;
    }

    .tech span {
      display: block;
      font-size: 0.95rem;
      color: #e5e5e5;
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

    .fa-react {
      color: #61dafb;
    }

    .fa-database {
      color: #4db6ac;
    }

    .fa-node-js {
      color: #68a063;
    }

    .fa-github {
      color: #cfcfcf;
    }

    .fa-file-word {
      color: #2b579a;
    }

    .fa-code {
      color: #00599c;
    }

    .fa-java {
      color: #5382a1;
    }

    .fa-c {
      color: #a8b9cc;
    }

    /* ============ BADGES ============ */
    /* .tech-badges {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
  margin-bottom: 4rem;
}

.badge {
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(255,255,255,0.15);
  padding: 0.45rem 1rem;
  border-radius: 6px;
  font-size: 0.85rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

/* ============ GET IN TOUCH ============ */
    .contact {
      text-align: center;
      margin-top: 4rem;
      margin-bottom: 1rem;
      /* ✅ controls gap before footer */
    }

    .contact h2 {
      font-size: 2.2rem;
      margin-bottom: 1.8rem;
      letter-spacing: 0.5px;
    }

    .contact-item {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 0.8rem;
      margin-bottom: 0.9rem;
      color: #cfcfcf;
      font-size: 1rem;
    }

    .contact-item i {
      color: #8bb4ff;
      font-size: 1.05rem;
    }

    .contact-item a {
      color: #cfcfcf;
      text-decoration: none;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    /* Description text under contact info */

    .contact p {
      margin-top: 1.2rem;
      margin-bottom: 0;
      /* ✅ prevents pushing footer down */
      font-size: 0.95rem;
      color: #a9a9a9;
      max-width: 520px;
      margin-left: auto;
      margin-right: auto;
      line-height: 1.6;
    }


    /* ================= FOOTER ================= */
    footer {
      margin-top: auto;
      /* 🔥 pushes footer to bottom */

      height: 42px;
      background: linear-gradient(to right, #0b0b0b, #141212e3, #0b0b0b);

      display: flex;
      align-items: center;
      justify-content: center;

      font-size: 0.9rem;
      line-height: 1;
      color: #ffffff;
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 900px) {
      .hero-content {
        flex-direction: column;
        text-align: center;
      }

      .hero-text p {
        max-width: 100%;
      }

      .hero-image {
        width: 260px;
        height: 360px;
        margin-top: 2rem;
      }
    }
  </style>
</head>

<body>

  <header>
    <nav>
      <div class="logo-container">
        <img src="STAR logo.jpeg" class="logo-img" alt="Logo">
        <a href="PORTFOLIO.html" class="logo-text">AMIT KUMAR YADAV</a>
      </div>
      <ul>
        <li><a href="PORTFOLIO.html">Home</a></li>
        <li><a href="PFSkills.html">Skills</a></li>
        <li><a href="PF_Got_A_Project.html">Contact</a></li>
        <li><a href="PFResume.html">Resume</a></li>
      </ul>
    </nav>
  </header>

  <div class="about-section">
    <div class="hero-content">

      <div class="hero-text">
        <h4>About ME<span>.</span></h4>
        <h1>I'm <span class="name">Amit Kumar Yadav</span></h1>
        <h2>Frontend Developer</h2>

        <p>
          I'm a passionate <strong>Frontend Developer</strong> with a knack for creating efficient and scalable web
          applications.
          My journey in the tech world began with a curiosity for how things work, leading me to pursue a career in
          software development.
          Feel free to connect with me on social media or check out my portfolio!
        </p>

        <h2>What do I do?</h2>
        <p>
          I specialize in frontend development, crafting responsive and user-friendly interfaces using HTML, CSS, and
          JavaScript.
          I bring designs to life while ensuring seamless user experiences across devices.
        </p>
        <div class="hero-buttons">
          <button onclick="window.print()">
            <i class="fa-solid fa-print"></i> PRINT
          </button>
        </div>
      </div>

      <div class="hero-image">
        <img src="MERA CHATA PHOTO.jpeg" alt="Amit Kumar Yadav">
      </div>

    </div>
  </div>

  <div class="DIV"></div>

  <div class="skills-section">
    <h2>My Skills</h2>
    <p>I am proficient in HTML5, CSS3, JavaScript, and React.js.
      I have a strong understanding of responsive web design principles.
      Here are some of the technologies I work with:
    </p>

    <div class="skills-grid">
      <div class="skill-card">
        <i class="fa-brands fa-html5"></i>
        <h3>HTML5</h3>
        <p>HTML5 is the latest version of HTML, offering enhanced semantic elements and improved multimedia support.</p>
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
        <p>JavaScript is a versatile programming language used for creating dynamic and interactive web content.</p>
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
        <p>GitHub is a platform for hosting and collaborating on Git repositories, facilitating open-source development.
        </p>
      </div>
    </div>
  </div>
  <!-- 
<div class="DIV1"></div> -->
  <div class="DIV"></div>

  <section class="section-wrapper">
    <div class="section-content">

      <h2>Why work with me?</h2><br>
      <p>
        I bring a unique blend of technical expertise and creative problem-solving to every project.
        I am committed to delivering high-quality work that meets client needs and exceeds expectations.
        It would be a pleasure to collaborate and create something amazing together!
      </p>

      <!-- MAIN TECH ICONS -->
      <div class="tech-icons">
        <div class="tech">
          <i class="fa-brands fa-html5"></i>
          <span>HTML5</span>
        </div>
        <div class="tech">
          <i class="fa-brands fa-css3-alt"></i>
          <span>CSS3</span>
        </div>
        <div class="tech">
          <i class="fa-brands fa-js"></i>
          <span>JavaScript</span>
        </div>
        <!-- <div class="tech">
        <i class="fa-brands fa-react"></i>
        <span>React</span>
      </div> -->
        <div class="tech">
          <i class="fa-solid fa-database"></i>
          <span>SQL</span>
        </div>
        <!-- <div class="tech">
        <i class="fa-brands fa-node-js"></i>
        <span>Node.js</span>
      </div> -->
        <div class="tech">
          <i class="fa-brands fa-github"></i>
          <span>GitHub</span>
        </div>
        <div class="tech">
          <i class="fa-solid fa-file-word"></i>
          <span>MS Office</span>
        </div>
        <div class="tech">
          <i class="fa-solid fa-code"></i>
          <span>C++</span>
        </div>
        <div class="tech">
          <i class="fa-brands fa-java"></i>
          <span>CoreJava</span>
        </div>
        <div class="tech">
          <i class="fa-solid fa-c"></i>
          <span>C Programming</span>
        </div>

        <!-- BADGES
    <div class="tech-badges">
      <div class="badge"><i class="fa-brands fa-bootstrap"></i> Bootstrap</div>
      <div class="badge"><i class="fa-brands fa-git-alt"></i> Git</div>
      <div class="badge"><i class="fa-solid fa-wind"></i> Tailwind CSS</div>
      <div class="badge"><i class="fa-solid fa-database"></i> MongoDB</div>
      <div class="badge"><i class="fa-solid fa-server"></i> Express.js</div> 
    </div> -->

      </div>
  </section>

  <div class="DIV"></div>

  <!-- CONTACT -->
  <div class="contact">
    <h2>Get In Touch</h2>

    <div class="contact-item">
      <i class="fa-solid fa-envelope"></i>
      <span><a href="mailto:akyadav151947@gmail.com">akyadav151947@gmail.com</a></span>
    </div>
    <div class="contact-item">
      <i class="fa-solid fa-phone"></i>
      <span><a href="tel:+918097167040">+91 80971 67040</a></span>
    </div>

    <p>
      Feel free to reach out for collaborations or just a friendly hello!
    </p>
  </div>

  <footer>
    Thanks for visiting My Portfolio
  </footer>

</body>

</html>