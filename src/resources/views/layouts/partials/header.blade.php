<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-2 border-bottom position-relative">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <img src="images/Logo.svg" alt="Home" width='50' height='50'>
        </a>
        <span class="fs-4 position-absolute end-0">{{ config('app.name') }}</span>
    </div>
    <nav class="navbar navbar-expand-lg bg-light" id="navbar_top">
        <!-- <div class="container-fluid"> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="d-flex justify-content-center navbar-nav" id="nav_ul">
                <li class="nav-item">
                    <a class="nav-link border-start" aria-current="page" href=" {{ route('models') }} ">Modeliai</a>
                </li>
                <li class="nav-item">
                    <a id='drive' class="nav-link border-start" href="">Bandomasis važiavimas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-start" href="https://www.krasta-auto.lt/bmw/servisas/">Servisas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-start" href=' #'>Specialūs pasiūlymai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-start" href='#'>Aksesuarai ir detalės</a>
                </li>
                <li class="nav-item">
                    <a id='newsTag' class="nav-link border-start border-end" href=''>Naujienos</a>
                </li>
            </ul>
        </div>
        <!-- </div> -->
    </nav>
</header>