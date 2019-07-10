<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img style="width:30%;height:30px" src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#coffee">Coffee</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li>
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button style="color:#fff" type="button" class="dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                CART
                                <i class="fa fa shopping-cart"></i>
                                <span
                                    style="background-color:#fff;color:#000;display:inline-block;padding-left:8px;padding-right:8px;text-align:center;border-radius:50%">
                                    7
                                </span>
                            </button>
                            <div class="dropdown-menu">
                                {{-- <a style="color:red" class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> --}}
                                <div class="container">
                                    <h2 style="text-align: center">Your Cart</h2>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><img style="width:60px;height:60px" src="/img/categories/ff3.jpg">
                                                </td>
                                                <td>Name product x 2</td>
                                                <td>46 $</td>
                                            </tr>

                                            <tr>
                                                <td><img style="width:60px;height:60px"
                                                        src="/img/categories/pizza-1-1.jpg">
                                                </td>
                                                <td>Name x 3</td>
                                                <td>46 $</td>
                                            </tr>
                                            <tr>
                                                <td><img style="width:60px;height:60px" src="/img/categories/ff.jpeg">
                                                </td>
                                                <td>Name x 3</td>
                                                <td>46 $</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <hr>
                                    <div style="margin:8px 8px 28px 8px">
                                        <button type="submit" class="btn btn-success float-center"
                                            style="color:#fff;width:50%;margin-left:25%">CHECKOUT</button><br>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        @guest
                    <li class=" nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else

                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>