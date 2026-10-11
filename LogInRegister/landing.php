<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to My Page</title>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>

<style>
    html {
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
        padding: 0;
        min-height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
        background-color: #f8f9fa;
    }

    .navbar {
        position: relative;
        z-index: 1000;
    }

    .hero {
        min-height: 100vh;
        padding: 100px 0;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #ffffff, #e9f2ff);
    }

    .hero-content {
        max-width: 700px;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: #212529;
    }

    .hero-content p {
        font-size: 1.2rem;
        line-height: 1.7;
        margin-bottom: 30px;
        color: #495057;
    }

    .btn-custom {
        background-color: #0d6efd;
        color: white;
        padding: 12px 25px;
        border-radius: 8px;
        text-decoration: none;
        transition: 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #0b5ed7;
        color: white;
        transform: translateY(-2px);
    }

    .page-section {
        min-height: 70vh;
        padding: 100px 0;
        display: flex;
        align-items: center;
    }

    .about-section {
        background-color: white;
    }

    .info-section {
        background-color: #f1f5f9;
    }

    .page-section h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .page-section p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #495057;
    }

    @media (max-width: 768px) {
        .hero {
            padding: 80px 20px;
        }

        .hero-content h1 {
            font-size: 2.5rem;
        }

        .hero-content p {
            font-size: 1rem;
        }

        .page-section {
            padding: 80px 20px;
        }

        .page-section h2 {
            font-size: 2rem;
        }
    }
</style>

</head> <body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">

    <div class="container">

        <a class="navbar-brand fw-bold" href="#home">
            My Page
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="#home">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        Welcome
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#information">
                        Information
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>

<section class="hero" id="home">

    <img src="https://4kwallpapers.com/images/walls/thumbs_3t/26035.jpg"
         class="hero-image"
         alt="My picture">

    <div class="hero-overlay"></div>

    <div class="container hero-content">

        <h1 id="welcome-message">
            Welcome!
        </h1>

        <p>
            Hello and welcome to my page!
            I am Lourenz Dayne G. Vidal and
            this is my website.
        </p>

        <a href="#about" class="btn btn-custom">
            Learn More
        </a>

    </div>

</section>


<section class="page-section about-section" id="about">

    <img src="https://4kwallpapers.com/images/walls/thumbs_3t/27163.jpg"
         class="section-image"
         alt="My second picture">

    <div class="section-overlay"></div>

    <div class="container section-content">

        <h2>
            Welcome to My Website
        </h2>

        <p>
            Thank you for visiting my website.
            This section contains more information
            about me and what this page is all about.
        </p>

        <a href="#information" class="btn btn-custom">
            More Information
        </a>

    </div>

</section>


<section class="page-section info-section" id="information">

    <img src="https://4kwallpapers.com/images/walls/thumbs_3t/26027.jpg"
         class="section-image"
         alt="My third picture">

    <div class="section-overlay"></div>

    <div class="container section-content">

        <h2>
            More Information
        </h2>

        <p>
            You can add your projects, skills,
            hobbies, contact information, images,
            or other content here.
        </p>

        <a href="#home" class="btn btn-custom mt-3">
            Back to Top
        </a>

    </div>

</section>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

<script>
    const params = new URLSearchParams(window.location.search);
    const username = params.get("username");

    if (username) {
        document.getElementById("welcome-message").textContent =
            "Welcome, " + username + "!";
    }
</script>

</body> </html>