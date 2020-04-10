<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Pet Book</title>
        <link rel="stylesheet" href="{{ url('css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_auth.css') }}" />
        @stack('css')
        <link rel="stylesheet" href="{{ url('css/media.css') }}" />
        <link rel="icon" href="{{ url('images/icon.jpg') }}" />
    </head>

    <nav class="nav">
        <div class="container">
            <div class="logo">
                <img src="{{ url('/images/logo.png') }}" alt="logo">
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="#"><i class="fas fa-home"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                        <a class="profile-avatar" href="#"><img src="{{ url('images/profileAvatar.png') }}" alt="Profile Avatar"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                <div class="post">
                    <div class="head">
                        <div class="user">
                            <a class="profile-avatar" href="#"><img src="{{ url('images/profileAvatar.png') }}" alt="Profile Avatar"></a>
                            <a href="#"><span>ahmed shawky</span></a>
                        </div>
                        <div class="right">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>
                    <div class="body">
                        <div class="image">
                            <img src="{{ url('images/postImg.jpg') }}" alt="Post Img">
                        </div>
                        <div class="stats">
                            <ul>
                                <li>
                                    <a href="/like" class="like">342 <i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#">65 <i class="far fa-comment"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="post-pragraph">
                            <p>
                                <a href="#"><span>ahmed shawky</span></a>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at delectus dolore eos, mollitia nostrum sapiente. Fugit nostrum porro sapiente.
                            </p>
                        </div>
                        <div class="write-comment">
                            <input type="text" name="comment" placeholder="Add a comment ...">
                            <button>Post</button>
                        </div>
                    </div>
                </div>

                </div>
                <div class="col-md-3">
                    <aside>
                        <div class="user">
                            <a class="profile-avatar" href="#"><img src="{{ url('images/profileAvatar.png') }}" alt="Profile Avatar"></a>
                            <a href="#"><span>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</span></a>
                        </div>
                        <div class="pages">
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-images fa-fw"></i> Posts</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-shopping-basket fa-fw"></i> MarketPlace</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-user-md fa-fw"></i> Advices</a>
                                </li>
                                <li>
                                    <a href="#" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        <i class="fas fa-power-off fa-fw"></i>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-language fa-fw"></i> عربي</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <div class="copyright">
                                &copy; Copyright HaBsawy | All Right Reserved
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/plugin.js') }}"></script>
    @stack('js')
    </body>
</html>

