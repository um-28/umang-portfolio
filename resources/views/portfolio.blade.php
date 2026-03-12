<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patel Umang | Full Updated 3D Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="bg-grid"></div>

    <nav class="navbar navbar-expand-lg fixed-top glass-nav">
        <div class="container">
            <a class="navbar-brand fw-bold text-light" href="#">Umang.dev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5 position-relative" id="home">
        <section class="hero card-3d p-4 p-md-5 mb-5 reveal">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <p class="badge bg-primary-subtle text-primary-emphasis px-3 py-2 mb-3">Software Developer</p>
                    <h1 class="display-5 fw-bold mb-3">Hi, I'm <span class="gradient-text">Patel Umang</span></h1>
                    <p class="lead text-light-emphasis mb-4">Laravel APIs, Flutter apps, and modern UI experiences with animation-focused front-end implementation.</p>
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <a class="btn btn-primary px-4" href="#projects">View Projects</a>
                        <a class="btn btn-outline-light px-4" href="#contact">Hire Me</a>
                    </div>
                    <div class="stats d-flex flex-wrap gap-3">
                        <div class="stat-pill">3+ Years Experience</div>
                        <div class="stat-pill">20+ API Modules</div>
                        <div class="stat-pill">10+ Flutter Builds</div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="dev-scene mx-auto" aria-hidden="true">
                        <div class="scene-layer layer-1"></div>
                        <div class="scene-layer layer-2"></div>
                        <div class="scene-layer layer-3"></div>
                        <div class="scene-core">&lt;/&gt;</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5 reveal" id="skills">
            <h2 class="section-title">Skills Stack</h2>
            <div class="row g-3">
                <div class="col-sm-6 col-lg-4"><div class="skill-chip">Laravel Backend Development</div></div>
                <div class="col-sm-6 col-lg-4"><div class="skill-chip">PHP + MVC + Blade</div></div>
                <div class="col-sm-6 col-lg-4"><div class="skill-chip">Bootstrap 5 Responsive UI</div></div>
                <div class="col-sm-6 col-lg-4"><div class="skill-chip">JavaScript Animation Logic</div></div>
                <div class="col-sm-6 col-lg-4"><div class="skill-chip">Flutter Cross-platform Apps</div></div>
                <div class="col-sm-6 col-lg-4"><div class="skill-chip">REST API + MySQL Architecture</div></div>
            </div>
        </section>

        <section id="projects" class="mb-5 reveal">
            <h2 class="section-title">Featured Projects</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <article class="glass-card h-100">
                        <h3>CareMitra App</h3>
                        <p>Healthcare platform with secure appointments, profiles, and scalable Laravel APIs for mobile app integration.</p>
                        <div class="tech-list"><span>Flutter</span><span>Laravel</span><span>MySQL</span></div>
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="glass-card h-100">
                        <h3>MarryMate App</h3>
                        <p>Wedding planning app covering vendor booking, hall reservation, and dashboard APIs for user workflows.</p>
                        <div class="tech-list"><span>Flutter</span><span>PHP</span><span>REST API</span></div>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-box text-center reveal">
            <h2 class="section-title text-center">Contact</h2>
            <p class="mb-1">📱 <a href="tel:+916354169286">+91 6354169286</a></p>
            <p class="mb-3">📧 <a href="mailto:patelumang1122@gmail.com">patelumang1122@gmail.com</a></p>
            <div class="d-flex justify-content-center gap-2 flex-wrap">
                <a class="btn btn-outline-info btn-sm" href="#">LinkedIn</a>
                <a class="btn btn-outline-info btn-sm" href="#">GitHub</a>
                <a class="btn btn-outline-info btn-sm" href="#">Resume</a>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
