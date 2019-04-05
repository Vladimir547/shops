<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css" href="./style/main.css">
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <header class='header'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-6 col-sm-6'>
                    <div class='header__contact'>
                       <p><img src='./img/mail.png'>malyshok91@mail</p>
                       <p><img src='./img/phone.png'>(29) 279-65-36</p>
                    </div>
                </div>
                <div class='col-lg-6 col-sm-6'>
                        <div class ='header__seti'>
                                <a href=' '><img src='./img/vk.png'></a>
                                <a href=' '><img src='./img/facebook.png'></a>
                                <a href=' '><img src='./img/google.png'></a>
                                <a href=' '><img src='./img/twitter.png'></a>
                        </div> 
                </div>
                <div class='header__menu'>
                    <div class='logo'>
                        <a href= ''><img src='./img/logo.png'></a>
                    </div>
                    <nav class='navigation'>
                        <div class='menu'>
                            <ul class='menu__item'>
                                <li><a href='/'>Home</a></li>
                                <li><a href=' '>Products</a></li>
                                <li><a href="{{asset('hot')}}">Hot Deals</a></li>
                                <li><a href="{{asset('about')}}">About</a></li>
                                <li><a href="{{asset('contact')}}">Contact</a></li>
								 @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a href="{{asset('home')}}" >
                                    {{ Auth::user()->name }} 
                                </a>

                              </li>
							  <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                            </ul>
                        </div>
                    </nav>
                    <div class='menu__icon'>
                        <a href=' '><img src='./img/search.png'></a>
                        <a href=' '><img src='./img/user.png'></a>
                        <a href=' '><img src='./img/cart.png'></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
	<section class='price'>
	
@yield('content')
</section>
<footer class='footer'>
	copiright@ByVova
</footer>
</body>
</html>