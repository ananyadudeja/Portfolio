<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type = "text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Portfolio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="skill.php">Skill</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="project.php">Project</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="education.php">Education</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="connect.php">Connect</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="home" class="hero-section">
    <h1>Ananya Dudeja</h1>
    <h4>I'm a full-stack data scientist who thrives on building impactful solutions that solve complex problems.</h4>
    <button class="btn btn-explore">Explore More</button>
</div>

<section id="about" class="about-section my-5">
  <div class="container py-5">
    <div class="about-content">
      <div class="about-image col-lg-6 col-md-6 col-12">
        <img src="images/aboutme.avif" alt="About Me">
      </div>
      <div class="about-text col-lg-6 col-md-6 col-12">
        <h2>About Me</h2>
        <p>I'm a data scientist with a passion for design and problem-solving. I'm always seeking new challenges and opportunities to learn and grow.</p>
        <div class="about-details">
          <div class="detail">
            <h3>Design Enthusiast</h3>
            <p>I believe in creating elegant and user-friendly interfaces that enhance the user experience.</p>
          </div>
          <div class="detail">
            <h3>Innovative Problem Solver</h3>
            <p>I am adept at identifying the root cause of issues and developing creative solutions to address them.</p>
          </div>
          <div class="detail">
            <h3>Continuous Learner</h3>
            <p>I am committed to lifelong learning and staying abreast of the latest advancements in technology and data science.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="skill" class="skill-section">
  <div class="container py-5">
    <h2 class="text-center">My Skills</h2>
    <p class="text-center mt-4">
      I possess a diverse skill set encompassing front-end development, data science, and backend technologies.
    </p>
    <div class="skill-content">
      <div class="skill-category">
        <h3>Front-End Development</h3>
        <ul>
          <li>HTML</li>
          <li>CSS</li>
          <li>JavaScript</li>
        </ul>
      </div>
      <div class="skill-category">
        <h3>Data Science & Analysis</h3>
        <ul>
          <li>Data Analysis</li>
          <li>Machine Learning</li>
          <li>Statistical Analysis</li>
          <li>Data Visualization</li>
        </ul>
      </div>
      <div class="skill-category">
        <h3>Programming & Development</h3>
        <ul>
          <li>Java</li>
          <li>Python</li>
          <li>MERN Stack</li>
          <li>MySQL</li>
          <li>PHP</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="project" class="project-section">
  <h2>My Projects</h2>
  <p class="text-center mt-4">
    I have experience in developing a range of projects, from web applications to data-driven solutions.
  </p>
  <div class ="container-fluid">
  <div class="project-list">
    <div class="project-item col-lg-3 col-md-6 col-sm-12">
      <div class="arrow">
        <span>1</span>
      </div>
      <div class="project-content">
        <h3>RailSync</h3>
        <p>A web application designed to streamline railway management tasks.</p>
      </div>
    </div>
    <div class="project-item col-lg-3 col-md-6 col-sm-12">
      <div class="arrow">
        <span>2</span>
      </div>
      <div class="project-content">
        <h3>CodeCrafter</h3>
        <p>An IT solutions website offering a suite of services for businesses.</p>
      </div>
    </div>
    <div class="project-item col-lg-3 col-md-6 col-sm-12">
      <div class="arrow">
        <span>3</span>
      </div>
      <div class="project-content">
        <h3>Brain Stroke Analysis</h3>
        <p>A machine learning model used to analyze and predict the risk of brain strokes.</p>
      </div>
    </div>
    <div class="project-item col-lg-3 col-md-6 col-sm-12">
      <div class="arrow">
        <span>4</span>
      </div>
      <div class="project-content">
        <h3>CureQuest</h3>
        <p>A platform empowering healthcare professionals to make informed decisions using data analytics.</p>
      </div>
    </div>
  </div>
</div>
</section>

<section id="service" class="service-section my-5">
    <div class="container">
        <h2 class="text-center">My Services</h2>
        <p class="text-center mt-4">
            I offer a variety of services tailored to meet the specific needs of my clients.
            From data analysis to full-stack development.
        </p>
        <div class="row service-details mt-5">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                    <h3>Data Analysis and Machine Learning</h3>
                    <p>
                        I can help you extract meaningful insights from your data and build 
                        predictive models to optimize your business.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="service-card">
                    <h3>Full Stack Web Development</h3>
                    <p>
                        I can create custom web applications that meet your unique 
                        requirements.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="service-card">
                    <h3>Java and Python Programming</h3>
                    <p>
                        I am proficient in both Java and Python, allowing me to develop a 
                        wide range of applications.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="service-card">
                    <h3>Project Consulting</h3>
                    <p>
                        I can provide expert advice and guidance on your data science and 
                        development projects.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="education" class = "education section ">
  <div class="container">
    <h2 class="text-center">Education</h2>
  </div>
  <div class="col">
    <div class="row-lg-6 row-md-6 row-md-12">
      <div class="container">
      <table>
      <tr>
        <th>Degree</th>
        <th>Institution</th>
        <th>Year</th>
      </tr>
      <tr>
        <td> Bachelors of Technology</td>
        <td>Meerut Institute of Engineering and Technology, Meerut</td>
        <td>2025</td>
      </tr>
      <tr>
        <td>Class 12</td>
        <td> Chaman Vatika Residential Public School for Girls, Ambala</td>
        <td>2020</td>
      </tr>
      <tr>
        <td>Class 10</td>
        <td> Sacred Heart Sen. Sec. Convent School, Chandausi</td>
        <td>2018</td>
      </tr>
      </table>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="contact">
  <div class="container">
    <h2>Contact</h2>
    <p>Get in touch to discuss any query.</p>
    <div class="contact-form">
      <h3>Send a Message</h3>
      <form action="contact.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="mobile">Mobile</label>
        <input type="tel" id="mobile" name="mobile">

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>
  </div>
</section>

<div class="connect-section">
    <div class="connect-container">
        <h2 class="connect-title">Connect with Me</h2>
        <div class="connect-icons">
            <a href="#" class="connect-icon">
                <img src="images/github.png" alt="Github Icon">
            </a>
            <a href="#" class="connect-icon">
                <img src="images/gmail.png" alt="Gmail Icon">
            </a>
            <a href="#" class="connect-icon">
                <img src="images/linkedin.png" alt="LinkedIn Icon">
            </a>
            <a href="#" class="connect-icon">
                <img src="images/instagram.png" alt="Instagram Icon">
            </a>
        </div>
    </div>
</div>





  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>