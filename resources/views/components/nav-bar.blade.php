<nav class="navbar mb-2" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
            <a href="{{ route('questions.index') }}" class="navbar-item">
                Questions
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                Categories
                </a>

                <div class="navbar-dropdown">
                @if ($categories)
                    @foreach ($categories as $category)
                        <a href="{{ route('questions.index') . '?category=' . $category->id }}" class="navbar-item">
                            {{ $category->title }}
                        </a>
                    @endforeach
                @endif
                </div>
            </div>
            </div>

            <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                <a href="/register" class="button is-primary">
                    <strong>Sign up</strong>
                </a>
                <a href="/login" class="button is-light">
                    Log in
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>
</nav>
