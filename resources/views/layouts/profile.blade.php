<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Avito</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    @livewireStyles
</head>

<body>

<header class="header">
    <div class="header__sticky">
        <div class="container">
            <div class="header__left">
                {{--                <ul class="header__nav">--}}
                {{--                    <li class="header__nav-item"><a href="#" class="header__nav-link">Для бизнеса</a></li>--}}
                {{--                    <li class="header__nav-item"><a href="#" class="header__nav-link">Помощь</a></li>--}}
                {{--                    <li class="header__nav-item header__nav-dropdown"><a href="#"--}}
                {{--                                                                         class="header__nav-link">Каталоги</a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </div>
            @auth()
                <div class="header__right">
                    <div class="header__btns">
                        {{--                    <a href="#" class="header__btn header__btn--favorite">--}}
                        {{--                        <svg width="21" height="24" xmlns="http://www.w3.org/2000/svg">--}}
                        {{--                            <path--}}
                        {{--                                d="M10.918 5.085a5.256 5.256 0 0 1 7.524 0c2.077 2.114 2.077 5.541 0 7.655l-7.405 7.534a.75.75 0 0 1-1.074 0L2.558 12.74c-2.077-2.114-2.077-5.54 0-7.655a5.256 5.256 0 0 1 7.524 0c.15.152.289.312.418.479.13-.167.269-.327.418-.479z"--}}
                        {{--                                fill="#CCC" fill-rule="nonzero"></path>--}}
                        {{--                        </svg>--}}
                        {{--                    </a>--}}
                        {{--                    <a href="#" class="header__btn header__btn--alert">--}}
                        {{--                        <svg width="21" height="24" xmlns="http://www.w3.org/2000/svg">--}}
                        {{--                            <g fill="#CDCDCD" fill-rule="evenodd">--}}
                        {{--                                <path--}}
                        {{--                                    d="M1.816 17.744L4 14V9a6.5 6.5 0 1 1 13 0v5l2.184 3.744A1.5 1.5 0 0 1 17.888 20H3.112a1.5 1.5 0 0 1-1.296-2.256z">--}}
                        {{--                                </path>--}}
                        {{--                                <circle cx="10.5" cy="20" r="2.5"></circle>--}}
                        {{--                            </g>--}}
                        {{--                        </svg>--}}
                        {{--                    </a>--}}
                        <a href="{{route('message')}}" class="header__btn header__btn--chat">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="#CCC" fill-rule="evenodd">
                                    <path
                                        d="M8.827 3.28A19.839 19.839 0 0 1 12 3c.97 0 2.027.093 3.173.28A8.135 8.135 0 0 1 22 11.309c0 3.804-2.84 7.01-6.617 7.468A28.26 28.26 0 0 1 12 19c-1.028 0-2.156-.074-3.383-.223A7.523 7.523 0 0 1 2 11.309 8.135 8.135 0 0 1 8.827 3.28z">
                                    </path>
                                    <path d="M4.5 15l-1.773 4.963a.8.8 0 0 0 1.15.964L9 18l-4.5-3z"></path>
                                </g>
                            </svg>
                        </a>
                        {{--                    <a href="#" class="header__btn header__btn--cart">--}}
                        {{--                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
                        {{--                             xmlns="http://www.w3.org/2000/svg">--}}
                        {{--                            <path--}}
                        {{--                                d="M5.047 2.422a1 1 0 0 0-1.79.803l2.71 11.748-.299 1.049A2.5 2.5 0 1 0 8.292 19.5h4.916a2.5 2.5 0 1 0 0-2H8.292c-.158-.362-.4-.68-.701-.928l.37-1.297A1 1 0 0 0 8 15l10.273-.934a1 1 0 0 0 .885-.779l1.626-7.313A.8.8 0 0 0 20.003 5H6.866a1.01 1.01 0 0 0-.05-.078l-1.769-2.5Z"--}}
                        {{--                                fill="#CCC"></path>--}}
                        {{--                        </svg>--}}
                        {{--                    </a>--}}
                    </div>
                    <a href="{{route('profile')}}" class="header__link">Мои объявления</a>
                    <div class="header__profile">
                        <a href="#" class="header__profile-box">
                            <div class="header__profile-avatar">
                                <img src="{{asset('assets/images/avatar.png')}}" alt="avatar">
                            </div>
                            <span class="header__profile-name">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                        </a>
                        <div class="header__profile-nav">
                            <div class="header__profile-nav__main">
                                <ul class="header__profile-nav__list">
                                    <li><a href="{{route('profile')}}">Мои объявления</a></li>
                                    <li><a href="{{route('message')}}">Сообщения</a></li>
                                    <li><a href="{{route('edit')}}">Управление профилем</a></li>
                                    <li><a href="{{route('setting')}}">Настройки</a></li>
                                </ul>
                            </div>
                            <div class="header__profile-nav__footer">
                                <a href="#" class="header__profile-nav__exit">Выйти</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('create.ads')}}" class="btn btn--add">Разместить объявление</a>
                </div>
            @endauth
        </div>
    </div>
    <div class="header__main">
        <div class="container">
            <a href="/" class="logo">
                <img width="109" height="70" src="{{asset('assets/images/logo.png')}}">
{{--                <svg width="109" height="30" viewBox="0 0 109 30" xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <img src--}}
{{--                </svg>--}}
            </a>
        </div>
    </div>
</header>
<main class="main">
    <div class="container">
        <div class="profile">
            <div class="profile__photo">
                <img src="{{asset('assets/images/avatar.png')}}" alt="avatars">
            </div>
            <div class="profile__name">{{\Illuminate\Support\Facades\Auth::user()->name}}</div>
            <div class="profile__nav">
                <div class="profile__nav-box">
                    <a href="{{route('profile')}}" class="profile__nav-subtitle">Мои объявления</a>
                    <ul class="profile__nav-list">
                        <li><a href="{{route('message')}}">Сообщения</a></li>
                    </ul>
                </div>
                <div class="profile__nav-box">
                    <ul class="profile__nav-list">
                        <li><a href="{{route('edit')}}">Управление профилем</a></li>
                        <li><a href="{{route('setting')}}">Настройки</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{$slot}}
    </div>
</main>

<script src="{{asset('assets/js/app.min.js')}}"></script>
@livewireScripts
</body>

</html>
