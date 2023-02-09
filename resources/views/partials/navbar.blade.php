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
            <li class="nav-item">
                <a class="nav-link @if($title=='Categories') {{ 'active' }} @endif" href="/categories">Category</a>
            </li>
        </ul>
        </div>
    </div>
</nav>