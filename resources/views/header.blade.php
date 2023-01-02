<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LaraeCom</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Orders</a>
                <a class="nav-link" href="#">Category</a>

            </div>
            <form action="product/search" class="d-flex" role="search">
                <input name="query" class="form-control me-2 nav-search-box" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-sm btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <ul class="nav navbar-nav navbar-right">

            <li class="nav-item">
                <a href="#">Cart({{(Session::has('user')) ?\App\Http\Controllers\CartController::getCartItems() : 0 }} )</a>
            </li>
            @if(Session::has('user'))
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Session::get('user')['name'] ?? ''}}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
                </ul>
            </li>
            @else
            <li class="nav-item">
                <a href="{{url('login')}}">Login</a>
            </li>
            @endif

        </ul>





    </div>
</nav>