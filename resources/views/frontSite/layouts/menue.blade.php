
<div id="header">
    <div>
        <a href="{{route('frontSite.index')}}" class="logo"><img src="images/logo.png" alt=""></a>
        <ul id="navigation">
            <li class="selected">
                <a href="{{route('frontSite.index')}}">Home</a>
            </li>
            <li>
                <a href="{{route('frontSite.about')}}">About</a>
            </li>
            <li class="menu">
                <a href="{{route('frontSite.projects')}}">Projects</a>
                <ul class="primary">
                    <li>
                        <a href="{{route('frontSite.proj1')}}">proj 1</a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="{{route('frontSite.blog')}}">Blog</a>
                <ul class="secondary">
                    <li>
                        <a href="{{route('frontSite.singlePost')}}">Single post</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('frontSite.contact')}}">Contact</a>
            </li>

@guest
            <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login </a>
            </li>
            @endguest


            @auth

            <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.home')}}">Dashboard </a>
            </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Logout </a>
                </li>
        </ul>
        @endauth


    </div>
</div>




