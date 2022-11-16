<nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-lg-12 d-flex justify-content-between">
                <div class="col-lg-3">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/images/logo.png') }}" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-lg-5">
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav d-flex justify-content-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Homepage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('newsfeed') }}">Newsfeed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customizer') }}">Creator</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgba(233, 233, 233, 1)">
                                    <a class="dropdown-item" href="{{ route('shop') }}">Official Products</a>
                                    <a class="dropdown-item" href="{{ route('shop') }}">User-Made Products</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/blog">Blogs</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-end align-items-center">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>|
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
