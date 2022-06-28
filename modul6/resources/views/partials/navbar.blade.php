<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a class="nav-link {{ ($title === "Tugas Pendahuluan") ? 'active' : '' }}" href="/tugas-pendahuluan">Tugas Pendahuluan 6</a>
                </span>
            </div>
        </div>
</nav>