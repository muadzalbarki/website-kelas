<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Technology 5 B</title>
    <link rel="icon" href="{{ asset('images/logo-title.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="overlay"></div>
    <nav class=" navbar navbar-expand-lg px-4 sticky-top">
        <a class="navbar-brand" href="/">5B TI Class</a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="profil" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="dokumentasi" class="nav-link">Doc</a></li>
            </ul>
        </div>
    </nav>
    <main class="fade-page d-flex flex-column justify-content-center allign-item-center" style="min-height: 100vh;">
        @yield("content")
    </main>

    <footer>
        <p class="fade-in">© 2025 Information Technology 5B Class - UIN Salatiga</p>
        <div class="social-links">
            <a href="https://www.instagram.com/mdzalbrki_/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.tiktok.com/@razrazes?_t=ZS-90eqojPeSxU&_r=1" target="_blank">
                <i class="fab fa-tiktok"></i>
            </a>
            <a href="https://github.com/muadzalbarki" target="_blank">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://www.facebook.com/urparent.urparent/" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('a[href]');
            for (const link of links) {
                if (link.hostname === window.location.hostname) {
                    link.addEventListener('click', e => {
                        const target = link.getAttribute('href');
                        if (target && !target.startsWith('#')) {
                            e.preventDefault();
                            document.body.style.opacity = 0;
                            setTimeout(() => {
                                window.location.href = target;
                            }, 400); // durasi dissolve keluar
                        }
                    });
                }
            }
        });
    </script>

    <script>
    window.addEventListener('load', () => {
        document.body.classList.add('loaded');
    });
    </script>

</body>

</html>