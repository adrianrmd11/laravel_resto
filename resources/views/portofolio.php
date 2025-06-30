<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>My Portfolio</title>
<style>
  :root {
    --color-bg-light: #ffffff;
    --color-bg-dark: #121212;
    --color-text-light: #374151;
    --color-text-muted-light: #6b7280;
    --color-text-dark: #d1d5db;
    --color-text-muted-dark: #9ca3af;
    --color-primary: #111827;
    --color-primary-dark: #f9fafb;
    --color-accent: #000000;
    --color-accent-dark: #ffffff;

    --font-family-sans: 'Poppins', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI',
      Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    --border-radius: 0.75rem;
    --shadow-light: rgba(0,0,0,0.1);
    --shadow-hover-light: rgba(0,0,0,0.15);

    --transition-fast: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    --max-width: 1200px;
  }

  /* Dark theme overrides */
  html[data-theme='dark'] {
    --color-bg: var(--color-bg-dark);
    --color-text: var(--color-text-dark);
    --color-text-muted: var(--color-text-muted-dark);
    --color-primary: var(--color-primary-dark);
    --color-accent: var(--color-accent-dark);
  }
  /* Light theme default */
  html {
    background-color: var(--color-bg-light);
    color: var(--color-text-light);
  }
  body {
    margin: 0;
    font-family: var(--font-family-sans);
    line-height: 1.6;
  }

  a {
    color: var(--color-primary);
    text-decoration: none;
    font-weight: 600;
  }
  a:hover,
  a:focus {
    text-decoration: underline;
  }

  /* Container */
  .container {
    max-width: var(--max-width);
    margin: 0 auto;
    padding: 0 1.5rem;
  }

  /* Header */
  header {
    position: sticky;
    top: 0;
    background-color: var(--color-bg-light);
    color: var(--color-text-light);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1.5rem;
    box-shadow: 0 2px 8px var(--shadow-light);
    z-index: 100;
    transition: background-color var(--transition-fast);
  }
  html[data-theme='dark'] header {
    background-color: var(--color-bg-dark);
    color: var(--color-text-dark);
    box-shadow: 0 2px 8px rgba(0,0,0,0.7);
  }

  .logo {
    font-weight: 700;
    font-size: 1.75rem;
    user-select: none;
    cursor: default;
  }

  nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 2rem;
  }
  nav a {
    font-weight: 600;
    font-size: 1rem;
    color: var(--color-primary);
    transition: color var(--transition-fast);
    user-select: none;
  }
  html[data-theme='dark'] nav a {
    color: var(--color-text-muted-dark);
  }
  nav a:hover,
  nav a:focus {
    color: var(--color-accent);
    outline: none;
  }

  /* Theme toggle */
  .theme-toggle {
    cursor: pointer;
    background: none;
    border: none;
    font-size: 1.25rem;
    color: var(--color-primary);
    transition: color 0.2s ease;
  }
  html[data-theme='dark'] .theme-toggle {
    color: var(--color-text-muted-dark);
  }
  .theme-toggle:hover,
  .theme-toggle:focus {
    color: var(--color-accent);
    outline: none;
  }

  /* Hero Section */
  .hero {
    position: relative;
    padding-top: 6rem;
    padding-bottom: 5rem;
    text-align: center;
    color: var(--color-accent);
    background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1400&q=80');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
  .hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(17, 24, 39, 0.6);
    border-radius: 0 0 var(--border-radius) var(--border-radius);
    z-index: 0;
  }
  .hero > * {
    position: relative;
    z-index: 1;
  }
  .hero h1 {
    font-size: 3rem;
    font-weight: 700;
    margin: 0 0 1rem 0;
    user-select: none;
  }
  html[data-theme='dark'] .hero h1 {
    color: var(--color-accent);
  }
  .hero p {
    font-size: 1.25rem;
    margin: 0 0 2.5rem 0;
    max-width: 640px;
    margin-left: auto;
    margin-right: auto;
    user-select: none;
  }
  html[data-theme='dark'] .hero p {
    color: var(--color-text-muted-dark);
  }

  .btn-primary {
    background-color: var(--color-accent);
    color: var(--color-primary);
    font-weight: 700;
    font-size: 1.25rem;
    padding: 1rem 2rem;
    border: none;
    border-radius: var(--border-radius);
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
    user-select: none;
    box-shadow: 0 4px 8px rgba(0,0,0,0.25);
  }
  .btn-primary:hover,
  .btn-primary:focus {
    background-color: #ddd;
    transform: scale(1.05);
    outline: none;
  }
  html[data-theme='dark'] .btn-primary {
    background-color: var(--color-primary);
    color: var(--color-accent);
  }
  html[data-theme='dark'] .btn-primary:hover,
  html[data-theme='dark'] .btn-primary:focus {
    background-color: #333;
    color: var(--color-accent);
  }

  /* Section */
  section {
    padding-top: 4rem;
    padding-bottom: 5rem;
    max-width: var(--max-width);
    margin: 0 auto;
  }

  .section-title {
    font-size: 2.25rem;
    font-weight: 700;
    color: var(--color-primary);
    margin-bottom: 2rem;
    user-select: none;
    text-align: center;
  }
  html[data-theme='dark'] .section-title {
    color: var(--color-accent);
  }

  /* About with photo */
  .about {
    max-width: 720px;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    align-items: center;
    gap: 2rem;
    user-select: text;
  }
  html[data-theme='dark'] .about {
    color: var(--color-text-muted-dark);
  }
  .about-text {
    flex: 1;
    font-size: 1.125rem;
    color: var(--color-text-muted-light);
    line-height: 1.7;
  }
  html[data-theme='dark'] .about-text {
    color: var(--color-text-muted-dark);
  }
  .about-photo {
    flex-shrink: 0;
    width: 160px;
    height: 160px;
    border-radius: var(--border-radius);
    box-shadow: 0 4px 10px rgba(0,0,0,0.12);
    overflow: hidden;
    transition: transform 0.3s ease;
    cursor: pointer;
  }
  .about-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .about-photo:hover,
  .about-photo:focus {
    transform: scale(1.05);
    outline: none;
  }

  /* Cards grid for projects */
  .projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(280px,1fr));
    gap: 2rem;
  }
  .project-card {
    background-color: var(--color-bg-light);
    padding: 1.75rem 1.5rem;
    border-radius: var(--border-radius);
    box-shadow: 0 2px 6px var(--shadow-light);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    cursor: default;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  html[data-theme='dark'] .project-card {
    background-color: #1f2937;
    box-shadow: 0 3px 9px rgba(0,0,0,0.7);
  }
  .project-card:hover,
  .project-card:focus-within {
    box-shadow: 0 6px 15px var(--shadow-hover-light);
    transform: translateY(-4px);
    outline: none;
  }

  /* Project card heading */
  .project-title {
    font-weight: 700;
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
    color: var(--color-primary);
  }
  html[data-theme='dark'] .project-title {
    color: var(--color-accent);
  }

  /* Project description */
  .project-description {
    font-size: 1rem;
    color: var(--color-text-muted-light);
    flex-grow: 1;
  }
  html[data-theme='dark'] .project-description {
    color: var(--color-text-muted-dark);
  }

  /* Project image */
  .project-image {
    margin-top: 1rem;
    border-radius: var(--border-radius);
    max-height: 140px;
    object-fit: cover;
    width: 100%;
    box-shadow: 0 3px 7px rgba(0,0,0,0.12);
    transition: transform 0.3s ease;
    cursor: pointer;
  }
  .project-image:hover,
  .project-image:focus {
    transform: scale(1.05);
    outline: none;
  }

  /* Project links */
  .project-links {
    margin-top: 1rem;
    display: flex;
    gap: 1rem;
  }
  .project-links a {
    color: var(--color-primary);
    border: 1.5px solid var(--color-primary);
    padding: 0.25rem 0.75rem;
    border-radius: var(--border-radius);
    font-weight: 600;
    font-size: 0.9rem;
    transition: background-color 0.3s, color 0.3s;
    user-select: none;
  }
  html[data-theme='dark'] .project-links a {
    color: var(--color-accent);
    border-color: var(--color-accent);
  }
  .project-links a:hover,
  .project-links a:focus {
    background-color: var(--color-primary);
    color: var(--color-accent);
    outline: none;
  }
  html[data-theme='dark'] .project-links a:hover,
  html[data-theme='dark'] .project-links a:focus {
    background-color: var(--color-accent);
    color: var(--color-primary);
  }

  /* Photo gallery */
  .photo-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
    gap: 1.5rem;
    margin-top: 2rem;
  }
  .photo-gallery img {
    width: 100%;
    height: 140px;
    object-fit: cover;
    border-radius: var(--border-radius);
    box-shadow: 0 4px 10px rgba(0,0,0,0.12);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
  }
  .photo-gallery img:hover,
  .photo-gallery img:focus {
    transform: scale(1.07);
    box-shadow: 0 8px 22px rgba(0,0,0,0.3);
    outline: none;
  }

  /* Contact form */
  .contact-form {
    max-width: 480px;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-direction: column;
    gap: 1.2rem;
  }
  .contact-form label {
    font-weight: 600;
    font-size: 1rem;
    color: var(--color-text-muted-light);
    user-select: none;
  }
  html[data-theme='dark'] .contact-form label {
    color: var(--color-text-muted-dark);
  }
  .contact-form input,
  .contact-form textarea {
    font-family: var(--font-family-sans);
    font-size: 1rem;
    padding: 0.75rem 1rem;
    border-radius: var(--border-radius);
    border: 1px solid #d1d5db;
    background-color: var(--color-bg-light);
    color: var(--color-text-light);
    resize: vertical;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
  }
  html[data-theme='dark'] .contact-form input,
  html[data-theme='dark'] .contact-form textarea {
    background-color: #1f2937;
    border-color: #374151;
    color: var(--color-text-dark);
  }
  .contact-form input:focus,
  .contact-form textarea:focus {
    border-color: var(--color-primary);
    box-shadow: 0 0 0 3px rgba(17, 24, 39, 0.2);
    outline: none;
    background-color: var(--color-bg-light);
  }
  html[data-theme='dark'] .contact-form input:focus,
  html[data-theme='dark'] .contact-form textarea:focus {
    background-color: #111827;
  }

  /* Form button */
  .contact-form button {
    background-color: var(--color-primary);
    color: var(--color-accent);
    font-weight: 700;
    font-size: 1.1rem;
    border: none;
    border-radius: var(--border-radius);
    padding: 1rem 2rem;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
    user-select: none;
  }
  .contact-form button:hover,
  .contact-form button:focus {
    background-color: #333;
    transform: scale(1.05);
    outline: none;
  }
  html[data-theme='dark'] .contact-form button {
    background-color: var(--color-accent);
    color: var(--color-primary);
  }
  html[data-theme='dark'] .contact-form button:hover,
  html[data-theme='dark'] .contact-form button:focus {
    background-color: #ddd;
    color: var(--color-primary-dark);
  }

  /* Footer */
  footer {
    padding: 2rem 1.5rem;
    text-align: center;
    color: var(--color-text-muted-light);
    font-size: 0.9rem;
    user-select: none;
  }
  html[data-theme='dark'] footer {
    color: var(--color-text-muted-dark);
  }

  /* Smooth scroll */
  html {
    scroll-behavior: smooth;
  }

  /* Responsive tweaks */
  @media (max-width: 640px) {
    .hero h1 {
      font-size: 2.25rem;
    }
    nav ul {
      gap: 1rem;
    }
    .btn-primary {
      font-size: 1.1rem;
    }
    .about {
      flex-direction: column;
      text-align: center;
    }
    .about-photo {
      margin-bottom: 1.5rem;
      width: 140px;
      height: 140px;
    }
  }

</style>
</head>
<body>
<header>
  <div class="logo" aria-label="Portfolio Logo" tabindex="0">MyPortfolio</div>
  <nav aria-label="Primary Navigation">
    <ul>
      <li><a href="#about" tabindex="0">About</a></li>
      <li><a href="#projects" tabindex="0">Projects</a></li>
      <li><a href="#gallery" tabindex="0">Gallery</a></li>
      <li><a href="#contact" tabindex="0">Contact</a></li>
    </ul>
  </nav>
  <button class="theme-toggle" aria-label="Toggle dark and light theme" title="Toggle dark and light theme">&#9790;</button>
</header>

<main>
  <section class="hero container" role="banner">
    <h1>Build your digital presence with style</h1>
    <p>Welcome to my portfolio! Discover my projects, skills, and experience. Let's create something great together.</p>
    <button class="btn-primary" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Get in Touch</button>
  </section>

  <section id="about" class="about container" tabindex="0" aria-labelledby="about-title">
    <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=160&q=80" alt="Portrait of me" class="about-photo" tabindex="0" />
    <div class="about-text">
      <h2 id="about-title" class="section-title">About Me</h2>
      <p>
        Hello! I'm a passionate developer with experience in building beautiful, modern websites and applications.
        My focus is on clean, elegant design coupled with intuitive user experiences.
      </p>
    </div>
  </section>

  <section id="projects" class="projects container" tabindex="0" aria-labelledby="projects-title">
    <h2 id="projects-title" class="section-title">Projects</h2>
    <div class="projects-grid">
      <article class="project-card" tabindex="0" aria-labelledby="project1-title" aria-describedby="project1-desc">
        <h3 id="project1-title" class="project-title">Project One</h3>
        <p id="project1-desc" class="project-description">A responsive, modern web application featuring real-time data visualization and clean UI design.</p>
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=60" alt="Screenshot of Project One" class="project-image" tabindex="0" />
        <div class="project-links">
          <a href="#" target="_blank" rel="noopener noreferrer" aria-label="View Project One source code">Code</a>
          <a href="#" target="_blank" rel="noopener noreferrer" aria-label="View Project One live demo">Live</a>
        </div>
      </article>

      <article class="project-card" tabindex="0" aria-labelledby="project2-title" aria-describedby="project2-desc">
        <h3 id="project2-title" class="project-title">Project Two</h3>
        <p id="project2-desc" class="project-description">An interactive mobile-friendly app built with progressive web technologies and offline support.</p>
        <img src="https://images.unsplash.com/photo-1506765515384-028b60a970df?auto=format&fit=crop&w=400&q=60" alt="Screenshot of Project Two" class="project-image" tabindex="0" />
        <div class="project-links">
          <a href="#" target="_blank" rel="noopener noreferrer" aria-label="View Project Two source code">Code</a>
          <a href="#" target="_blank" rel="noopener noreferrer" aria-label="View Project Two live demo">Live</a>
        </div>
      </article>

      <article class="project-card" tabindex="0" aria-labelledby="project3-title" aria-describedby="project3-desc">
        <h3 id="project3-title" class="project-title">Project Three</h3>
        <p id="project3-desc" class="project-description">A minimalistic static site generator with an intuitive theme system and blazing fast builds.</p>
        <img src="https://images.unsplash.com/photo-1522202229520-52c3c1e03df7?auto=format&fit=crop&w=400&q=60" alt="Screenshot of Project Three" class="project-image" tabindex="0" />
        <div class="project-links">
          <a href="#" target="_blank" rel="noopener noreferrer" aria-label="View Project Three source code">Code</a>
          <a href="#" target="_blank" rel="noopener noreferrer" aria-label="View Project Three live demo">Live</a>
        </div>
      </article>
    </div>
  </section>

  <section id="gallery" class="gallery container" tabindex="0" aria-labelledby="gallery-title">
    <h2 id="gallery-title" class="section-title">Photo Gallery</h2>
    <div class="photo-gallery" tabindex="0" aria-label="Portfolio photo gallery">
      <img src="https://images.unsplash.com/photo-1503035124532-7f90d8c17229?auto=format&fit=crop&w=400&q=60" alt="Gallery photo 1" tabindex="0" />
      <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=400&q=60" alt="Gallery photo 2" tabindex="0" />
      <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?auto=format&fit=crop&w=400&q=60" alt="Gallery photo 3" tabindex="0" />
      <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=400&q=60" alt="Gallery photo 4" tabindex="0" />
      <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=400&q=60" alt="Gallery photo 5" tabindex="0" />
      <img src="https://images.unsplash.com/photo-1466354645919-b68312c97ca2?auto=format&fit=crop&w=400&q=60" alt="Gallery photo 6" tabindex="0" />
    </div>
  </section>

  <section id="contact" class="contact container" tabindex="0" aria-labelledby="contact-title">
    <h2 id="contact-title" class="section-title">Contact Me</h2>
    <form class="contact-form" aria-label="Contact form" onsubmit="handleSubmit(event)" novalidate>
      <label for="name">Name</label>
      <input id="name" name="name" type="text" placeholder="Your Name" required />

      <label for="email">Email</label>
      <input id="email" name="email" type="email" placeholder="you@example.com" required />

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="4" placeholder="Your message here..." required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </section>
</main>

<footer>
  &copy; 2024 MyPortfolio. All rights reserved.
</footer>

<script>
  // Theme toggle logic with persistence
  const themeToggleBtn = document.querySelector('.theme-toggle');
  const rootElement = document.documentElement;

  function setTheme(theme) {
    if (theme === 'dark') {
      rootElement.setAttribute('data-theme', 'dark');
      themeToggleBtn.innerHTML = '☀️';
      localStorage.setItem('theme', 'dark');
    } else {
      rootElement.removeAttribute('data-theme');
      themeToggleBtn.innerHTML = '🌙';
      localStorage.setItem('theme', 'light');
    }
  }

  themeToggleBtn.addEventListener('click', () => {
    const currentTheme = rootElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
    setTheme(currentTheme === 'dark' ? 'light' : 'dark');
  });

  // Initialize theme on page load
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme === 'dark') {
    setTheme('dark');
  } else {
    setTheme('light');
  }

  // Simple contact form handler (client-side)
  function handleSubmit(e) {
    e.preventDefault();
    const form = e.target;
    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }
    alert('Thank you for your message!');
    form.reset();
  }
</script>
</body>
</html>

