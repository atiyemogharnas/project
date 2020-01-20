<link href="css/style.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
   

        <a href="/" class="navbar-brand">
             <img src="images/logo.png" alt="" class="d-inline-block align-top" height="70" width="70">
        گردشگری
            </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" >
					<span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
           <li class="nav-item "> <a href="/" class="nav-link">خانه</a></li>
           <li class="nav-item "> <a href="/aboutus" class=" nav-link">درباره‌ی ما</a></li>
           <li class="nav-item ">  <a href="/contactus" class=" nav-link">تماس با ما</a></li>
             @if (Route::has('login'))
                
                @auth
                <li class="nav-item "> <a href="/userpage" class=" nav-link">صفحه کاربری</a></li>
                <li class="nav-item ">  <a href="{{ url('/logout') }}" class=" nav-link"> خروج </a></li>

           
                    @else
                    <li class="nav-item ">  <a href="{{ route('login') }}" class=" nav-link">ورود</a></li>

                        @if (Route::has('register'))
                           
                        <li class="nav-item "> <a href="{{ route('register') }}" class=" nav-link">ثبت نام</a></li>

                            @endif
                    @endauth
                
            @endif

</ul>
     </div> 
    </nav>
