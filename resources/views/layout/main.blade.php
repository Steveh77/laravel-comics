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
                    <li><img src="{{asset('images/dc-logo.png')}}" alt=""></li>
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Movie</a></li>
                    <li><a href="#">Tv</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Collectibles</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Fans</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Shop <i class="fa-solid fa-caret-down"></i></a></li>
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