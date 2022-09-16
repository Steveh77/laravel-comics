<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="blue-bar">
            <div class="container">
                <h3>DCPOWER VISA</h3>
                <h3>ADDITIONAL DC SITE</h3>
            </div>
        </div>
        <nav>
            <div class="container">
                <ul>
                    <li> <a href="{{route ('home')}}"><img src="{{asset('images/dc-logo.png')}}" alt=""></a></li>
                    <li><a href="{{route('characters')}}">Characters</a></li>
                    <li><a href="{{route('comics')}}">Comics</a></li>
                    <li><a href="{{route('movie')}}">Movie</a></li>
                    <li><a href="{{route('tv')}}">Tv</a></li>
                    <li><a href="{{route('games')}}">Games</a></li>
                    <li><a href="{{route('collectibles')}}">Collectibles</a></li>
                    <li><a href="{{route('videos')}}">Videos</a></li>
                    <li><a href="{{route('fans')}}">Fans</a></li>
                    <li><a href="{{route('news')}}">News</a></li>
                    <li><a href="{{route('shop')}}">Shop <i class="fa-solid fa-caret-down"></i></a></li>
                    <li><input type="text" name="search" id="" placeholder="Search"></li>
                </ul>
                
            </div>
        </nav>
    </header>
    <main>
        <div class="jumbo"></div>
        @yield('home-content')
    </main>
    <footer>

    </footer>
</body>

</html>