
<?php

$pageTitle = "Thank You";
$description = "This is my resume";
$content = <<<EOT
<main>
  <h1>Clovis Bordeaux</h1>

  <div>
    <a href="https://www.linkedin.com/in/cabordeaux/" target="_blank" rel="noopener">LinkedIn</a>
    //&#x25CF;
    <a href="https://github.com/cabordeaux" target="_blank" rel="noopener">GitHub</a>
    //&#x25CF;
    Greater Chicago Area
  </div>
  
  <section>
    <h2>Web Developer</h2>
    <p>
    A servant/leader proponent of innovative technology solutions in educational and enterprise settings.  An avid hands-on teacher/learner comfortable in networking and software environments, with experiences in building responsive, interactive applications, who adapts easily to challenging situations, with a natural taalent for explaining complex concepts using easy-to-understand language.  Experienced in Express, Javascript, Angular and Ionic environments.

    </p>

    <h1>Core Competencies</h1>
    <ul>
      <li>
        digital music and audio production engineer 
        HTML and CSS  
        A+ certification
        Build LAMP (Linux, Apache, MySql and PHP) stack configuration from scratch 
        Build MEAN (MongoDB, Express.js, Angular, and NodeJs).
        Refurbishing and recycling of computers
        Design and implementation of LAN
        Build server configuration from scratch
      </li>
    </ul>

    <section>
      <h3>Core Competencies</h3>

      <ul>
        <li>Network Design</li>
        <li>Digital Audio/Graphic Design</li>
        <li>A Natural Problem Solver</li>
      </ul>
  
      <ul>
        <li>Hybrid Mobile Development</li>
        <li>Ability to Delegate Tasks</li>
        <li>Strong Analytical Skills</li>
      </ul>
    </section>

    <section>
      <h3>Techincal Proficiencies</h3>
  
      <ul>
        <li>Platforms: Windows, Mac, LAMP</li>
        <li>Database: MySQL</li>
        <li>Tools: VS Code, SSH, Git, Code Pen</li>
        <li>Languages: HTML, CSS, JavaScript, Python, Bash, SQL</li>
      </ul>
    </section>
  </section>

  <section>
    <h2>Professional Experience</h2>

    <h3>Sonic Lights Music Studio, Chicago, IL 2010-Present</h3>
    <p>
      Leads the development of special projects and LogicX, ProTools,  
      and social media systems.
    </p>
    <ul>
      <li>Full stack LAMP</li>
      <li>Full stack JavaScript with a focus on MEAN</li>
      <li>Hybrid Mobile Development with Ionic</li>
      <li>Designs and implements development processes</li>
      <li>Conceives and implements development strategies</li>
    </ul>
  </section>

  <section>
    <h3>LexTech Global Services, Lisle, IL 2006-2007</h3>
    <p>
      Developed a pilot system that pioneered the "Health 2.0" arena.
    </p>
    <ul>
      <li>Project for Active Care Network.</li>
      <li>Responsible for writing and testing code.</li>
      <li>Implemented complex event processing.</li>
      <li>Implemented mapping and geo data based functionality.</li>
      <li>HTML, CSS, JavaScript, SQL, CakePHP</li>
    </ul>
  </section>

  <section>
    <h3>Freelance, Columbus, OH 2003-2006</h3>
    <p>
        Built several websites and applications using PHP, MySQL, HTML, CSS and 
        JavaScript.
    </p>
  </section>

</main>
EOT;

require '../core/layout.php';