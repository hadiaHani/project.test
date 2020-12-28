@extends('frontSite.layouts.master')
@section('page_title')
Blog
@endsection

@section('content')



    <div id="body">
        <div class="header">
            <div>
                <h1>Blog</h1>
                <div class="article">
                    <ul>
                        <li>
                            <a href="singlePost"><img src="images/astronaut.jpg" alt=""></a>
                            <h1>SUCCESFUL REPAIR OF THE MX-1 SAT</h1>
                            <span>FEBRUARY 6, 2023</span>
                            <p>This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.</p>
                            <a href="singlePost" class="more">Read More</a>
                        </li>
                        <li>
                            <a href="singlePost"><img src="images/satellite-dish.jpg" alt=""></a>
                            <h1>ALIEN SIGNAL DISCOVERY</h1>
                            <span>FEBRUARY 3, 2023</span>
                            <p>You can remove any link to our website from this website template, you're free to use this website template without linking back to us.</p>
                            <a href="singlePost" class="more">Read More</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar">
                    <ul>
                        <li>
                            <h1>FEATURED POSTS</h1>
                            <a href="singlePost"><img src="images/moon-satellite.jpg" alt=""></a>
                            <h2>SOYUZ TMA-M</h2>
                            <span>FEBRUARY 6, 2023</span>
                        </li>
                        <li>
                            <h1>RECENT POSTS</h1>
                            <ul>
                                <li>
                                    <a href="singlePost"><img src="images/alien-life.jpg" alt=""></a>
                                    <h2>ALIEN LIFE</h2>
                                    <span>FEBRUARY 3, 2023</span>
                                </li>
                                <li>
                                    <a href="singlePost"><img src="images/galaxy.jpg" alt=""></a>
                                    <h2>THE GALAXY</h2>
                                    <span>FEBRUARY 1, 2023</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
