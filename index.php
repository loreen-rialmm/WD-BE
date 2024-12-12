<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loreen's Backend Journey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        a {
            text-decoration: none;
        }

        .aboutPic {
            max-width: 100%;
            height: auto;
            border-radius: 10%;
            transition: opacity 0.5 ease;
        }

        .aboutTitle {
            font-size: 56px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #ae2893;
        }

        .aboutInfo {
            font-family: "Roboto Mono", serif;
            font-size: 20px;
            font-style: normal;
        }

        .creativeImage {
            width: 352px;
            height: 380px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .creativeImage:hover {
            transform: scale(1.05);
        }

        .creativeTitle {
            font-family: "Roboto Mono", serif;
            text-align: center;
            font-size: 40px;
            color: #ae2893;
            margin-bottom: 15px;
        }

        .projectImage {
            width: 420px;
            height: 420px;
            object-fit: cover;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .socials {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .socials li {
            margin: 0 10px;
        }

        .text-caps-small {
            color: #615d59;
            text-decoration: none;
            text-transform: capitalize;
            font-size: 14px;
            font-weight: bold;
            transition: color 0.3s;
        }

        .text-caps-small i {
            font-size: 24px;
        }

        .text-caps-small:hover {
            color: #ae2893;
        }

        .footerCopyright {
            color: #ae2893;
            font-family: Rubik, sans-serif;
            font-weight: bold;
            font-size: 14px;
            margin: 0;
            text-transform: uppercase;
        }

        footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px 0;
            text-align: center;
            background-color: #d4d3d2;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body tertiary">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="images/logo.png" width="90" height="30" class="d-inline-block align-top" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse container" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="imgProfileContainer">
                        <img src="images/aboutPic.jpg" class="aboutPic" alt="Profile Image" data-aos="fade-up"
                            data-aos-delay="200">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="aboutTitle text-center" data-aos="fade-up" data-aos-delay="400">ABOUT ME</div>
                    <div class="aboutInfo text-center" data-aos="fade-up" data-aos-delay="600">
                        Hello and welcome! I’m Loreen Marajas, an IT student from the Polytechnic University of the
                        Philippines - Sto. Tomas Campus.
                        My journey in web development is fueled by a passion for crafting interactive, engaging digital
                        experiences.
                        Driven by a creative vision, I focus on designing websites that are both visually striking and
                        highly functional,
                        making sure each one delivers a smooth, intuitive user experience. Each project I work on is a
                        step forward in my goal of mastering both
                        front-end and back-end development, with a strong focus on staying current with the latest
                        trends and technologies.
                        Explore my portfolio to see the projects that have defined my skills along the way, and let’s
                        work together to bring something truly inspiring to life!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-3">
        <div class="creativeTitle">My Creative Side</div>
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/creativeJuice1.jpg" alt="Creative Juice 1" class="creativeImage">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/creativeJuice2.jpg" alt="Creative Juice 1" class="creativeImage">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/creativeJuice3.jpg" alt="Creative Juice 1" class="creativeImage">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/creativeJuice4.jpg" alt="Creative Juice 1" class="creativeImage">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/creativeJuice5.jpg" alt="Creative Juice 1" class="creativeImage">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/creativeJuice6.jpg" alt="Creative Juice 1" class="creativeImage">
            </div>
        </div>
    </div>

    <section id="projects" class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1 class="fw-bold">PROJECTS</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card mb-3 shadow-sm">
                            <a href="A08/index.php">
                                <div class="card-body text-center">
                                    <h4 class="fw-bold">Island of Personality</h4>
                                </div>
                                <img src="https://blogs.oxford.anglican.org/wp-content/uploads/2016/01/inside-out.jpg"
                                    class="projectImage" alt="Project 1">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <footer>
            <div class="container-fluid">
                <div class="footerContent">
                    <div class="footerTitle">Let's Connect</div>
                    <ul class="socials">
                        <li>
                            <a class="text-caps-small" href="mailto:marajasmaloreen@gmail.com" target="_blank"
                                rel="noopener noreferrer"><i class="bi bi-envelope" style="font-size: 24px;"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-caps-small" href="https://github.com/loreen-rialmm" target="_blank"
                                rel="noopener noreferrer"><i class="bi bi-github" style="font-size: 24px;"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-caps-small" href="https://www.instagram.com/ria_oreen/" target="_blank"
                                rel="noopener noreferrer"><i class="bi bi-instagram" style="font-size: 24px;"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-caps-small" href="https://www.facebook.com/loreen.marajas" target="_blank"
                                rel="noopener noreferrer"><i class="bi bi-facebook" style="font-size: 24px;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footerCopyright">
                    <span>© 2024 Loreen Marajas</span>
                </div>
            </div>
        </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            offset: 200,
            once: true
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>