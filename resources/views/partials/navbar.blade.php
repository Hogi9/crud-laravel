<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/">LARAVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link @if($title=='Home') {{ 'active' }} @endif" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($title=='About') {{ 'active' }} @endif" href="/about">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle @if(str_contains($title,'Category')){{ 'active' }} @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/?category=programming">Programming</a></li>
                  <li><a class="dropdown-item" href="/?category=web-design">Web Design</a></li>
                  <li><a class="dropdown-item" href="/?category=personal">Personal</a></li>
                </ul>
            </li>
        </ul>
        </div>
    </div>
</nav>