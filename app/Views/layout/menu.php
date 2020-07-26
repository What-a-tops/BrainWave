<nav class="navbar sticky-top navbar-expand-lg navbar-light brand-color shadow">
    <button class="navbar-toggler text-white bg-white" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand text-white" href="#">BrainWave</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="btn-group">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= ucfirst(session()->get('firstname')); ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="/logout" class="dropdown-item" type="button">Logout</a>
                </div>
            </div>
        </form>
    </div>
</nav>