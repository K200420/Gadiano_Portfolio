<?php

require_once __DIR__ . "/includes/db.php";
require_once __DIR__ . "/includes/functions.php";

$projects = getProjects($conn);
$successMessage = isset($_GET['success']) && $_GET['success'] === '1'
    ? 'Your message has been sent successfully!'
    : '';

?>

<?php include __DIR__ . "/includes/header.php"; ?>


<!-- =========================
     HOME
========================= -->

<section id="home" class="hero">

    <?php if ($successMessage): ?>
        <div class="container">
            <div class="form-success">
                <?php echo htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="container hero-content">

        <div class="hero-text">

            <p class="hero-small">
                Hello, I'm
            </p>

            <h1>
                Kyle Gadiano
            </h1>

            <h2>
                Junior Web Developer
            </h2>

            <p>
                I build responsive and user-friendly websites
                using PHP, MySQL, HTML, CSS and JavaScript.
            </p>

            <div class="hero-badges">
                <span>PHP</span>
                <span>MySQL</span>
                <span>JavaScript</span>
                <span>UI Design</span>
            </div>

            <div class="hero-buttons">

                <a href="#projects" class="btn">
                    View My Projects
                </a>

                <a href="#contact" class="btn btn-outline">
                    Contact Me
                </a>

            </div>

            <div class="hero-stats">
                <div>
                    <strong>1+</strong>
                    <span>Years Learning</span>
                </div>
                <div>
                    <strong>6+</strong>
                    <span>Core Skills</span>
                </div>
                <div>
                    <strong>Open</strong>
                    <span>For Projects</span>
                </div>
            </div>

        </div>


        <div class="hero-image">

            <img
                src="/Gadiano_Portfolio/images/profile.png"
                alt="Kyle Gadiano"
            >

        </div>

    </div>

</section>



<!-- =========================
     ABOUT
========================= -->

<section id="about" class="section">

    <div class="container">

        <h2 class="section-title">
            About Me
        </h2>

        <p class="section-description">
            Get to know more about me and my background.
        </p>


        <div class="about-content">

            <div class="about-text">

                <span class="availability-pill">Available for freelance work</span>

                <h3>
                    I'm a Junior Web Developer
                </h3>

                <p>
                    I am an Information Technology graduate
                    interested in web development and software projects.
                </p>

                <p>
                    I enjoy creating websites and web applications
                    using PHP, MySQL, HTML, CSS and JavaScript.
                </p>

                <p>
                    I am continuously improving my programming,
                    database and problem-solving skills through
                    personal projects and practical development.
                </p>

            </div>


            <div class="about-info">

                <div class="info-box">
                    <strong>Education</strong>
                    <span>Information Technology Graduate</span>
                </div>

                <div class="info-box">
                    <strong>Specialization</strong>
                    <span>Web Development</span>
                </div>

                <div class="info-box">
                    <strong>Database</strong>
                    <span>MySQL</span>
                </div>

                <div class="info-box">
                    <strong>Goal</strong>
                    <span>Junior Web Developer / Freelancer</span>
                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================
     SKILLS
========================= -->

<section id="skills" class="section section-dark">

    <div class="container">

        <h2 class="section-title">
            My Skills
        </h2>

        <p class="section-description">
            Technologies and tools I use for web development.
        </p>


        <div class="skills-grid">

            <div class="skill-card">

                <div class="skill-icon">
                    HTML
                </div>

                <h3>HTML</h3>

                <p>
                    Creating structured web pages.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    CSS
                </div>

                <h3>CSS</h3>

                <p>
                    Designing responsive and modern interfaces.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    JS
                </div>

                <h3>JavaScript</h3>

                <p>
                    Adding interactive website features.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    PHP
                </div>

                <h3>PHP</h3>

                <p>
                    Developing dynamic web applications.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    SQL
                </div>

                <h3>MySQL</h3>

                <p>
                    Managing and storing application data.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    GH
                </div>

                <h3>GitHub</h3>

                <p>
                    Managing and sharing source code.
                </p>

            </div>

        </div>

        <div class="ai-skills-heading">
            <h3>AI &amp; Development Tools</h3>
            <p>Using AI thoughtfully to build, debug, and improve software.</p>
        </div>

        <div class="skills-grid ai-skills-grid">

            <div class="skill-card">
                <div class="skill-icon">AI</div>
                <h3>AI-Assisted Development</h3>
                <p>Using AI tools to support coding and development workflows.</p>
            </div>

            <div class="skill-card">
                <div class="skill-icon">PE</div>
                <h3>Prompt Engineering</h3>
                <p>Writing clear prompts for reliable software development results.</p>
            </div>

            <div class="skill-card">
                <div class="skill-icon">DB</div>
                <h3>AI-Assisted Debugging</h3>
                <p>Analyzing errors and exploring practical solutions with AI support.</p>
            </div>

            <div class="skill-card">
                <div class="skill-icon">WP</div>
                <h3>Development Productivity</h3>
                <p>Using AI tools to improve planning, research, and delivery speed.</p>
            </div>

            <div class="skill-card">
                <div class="skill-icon">API</div>
                <h3>AI API Integration</h3>
                <p>Experimenting with AI APIs and connecting intelligent features to applications.</p>
            </div>

        </div>

    </div>

</section>



<!-- =========================
     PROJECTS
========================= -->

<section id="projects" class="section">

    <div class="container">

        <h2 class="section-title">
            My Projects
        </h2>

        <p class="section-description">
            Projects stored in my MySQL database.
        </p>


        <div class="projects-grid">

            <div class="project-card project-featured">

                <img
                    src="/Gadiano_Portfolio/images/project.png"
                    alt="BALT-BEP TICKET project preview"
                    class="project-image"
                >

                <div class="project-content">

                    <span class="project-category">
                        Capstone Project
                    </span>

                    <h3>
                        BALT-BEP TICKET: Smart Online Booking for Ferry Passenger
                    </h3>

                    <p>
                        A smart booking system for ferry passengers that simplifies trip scheduling,
                        ticket reservations, and passenger management through a user-friendly online platform.
                    </p>

                    <p>
                        <strong>Role:</strong>
                        Full-Stack Developer
                    </p>

                    <div class="project-technologies">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                    </div>

                    <a
                        href="#contact"
                        class="project-btn"
                    >
                        Discuss This Project
                    </a>

                </div>

            </div>

            <?php if (!empty($projects)): ?>

                <?php foreach ($projects as $project): ?>

                    <div class="project-card">


                        <?php if (!empty($project['image'])): ?>

                            <img
                                src="<?php echo clean($project['image']); ?>"
                                alt="<?php echo clean($project['title']); ?>"
                                class="project-image"
                            >

                        <?php endif; ?>


                        <div class="project-content">

                            <span class="project-category">
                                Web Application
                            </span>


                            <h3>
                                <?php echo clean($project['title']); ?>
                            </h3>


                            <p>
                                <?php echo clean($project['description']); ?>
                            </p>


                            <p>
                                <strong>Role:</strong>
                                <?php echo clean($project['role']); ?>
                            </p>


                            <div class="project-technologies">

                                <?php

                                $technologies = explode(
                                    ",",
                                    $project['technologies']
                                );

                                foreach ($technologies as $technology):

                                ?>

                                    <span>
                                        <?php echo clean(trim($technology)); ?>
                                    </span>

                                <?php endforeach; ?>

                            </div>


                            <?php if (!empty($project['project_url'])): ?>

                                <a
                                    href="<?php echo clean($project['project_url']); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="project-btn"
                                >
                                    View Project
                                </a>

                            <?php endif; ?>


                        </div>

                    </div>

                <?php endforeach; ?>


            <?php endif; ?>

        </div>

    </div>

</section>



<!-- =========================
     CONTACT
========================= -->

<section id="contact" class="section section-dark">

    <div class="container">

        <h2 class="section-title">
            Contact Me
        </h2>

        <p class="section-description">
            Interested in working together? Send me a message.
        </p>

        <div class="contact-email">
            <span class="contact-email-label">Email me directly</span>
            <a href="mailto:kyledgadiano@gmail.com">kyledgadiano@gmail.com</a>
        </div>

        <div class="contact-socials" aria-label="Social profiles">
            <a href="https://www.linkedin.com/in/kyle-gadiano-503813412/" target="_blank" rel="noopener noreferrer">
                LinkedIn
            </a>
            <a href="https://github.com/K200420" target="_blank" rel="noopener noreferrer">
                GitHub @K200420
            </a>
        </div>


        <form
            action="contact.php"
            method="POST"
            class="contact-form"
        >

            <div class="form-group">

                <label for="name">
                    Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Your name"
                    required
                >

            </div>


            <div class="form-group">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Your email"
                    required
                >

            </div>


            <div class="form-group">

                <label for="subject">
                    Subject
                </label>

                <input
                    type="text"
                    id="subject"
                    name="subject"
                    placeholder="Subject"
                    required
                >

            </div>


            <div class="form-group">

                <label for="message">
                    Message
                </label>

                <textarea
                    id="message"
                    name="message"
                    rows="6"
                    placeholder="Write your message..."
                    required
                ></textarea>

            </div>


            <button
                type="submit"
                class="btn"
            >
                Send Message
            </button>

        </form>

    </div>

</section>



<?php include __DIR__ . "/includes/footer.php"; ?>