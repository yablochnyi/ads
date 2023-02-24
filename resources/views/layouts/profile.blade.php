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
                        <a href="#" class="header__btn header__btn--chat">
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
                    <a href="#" class="header__link">Мои объявления</a>
                    <div class="header__profile">
                        <a href="#" class="header__profile-box">
                            <div class="header__profile-avatar">
                                <img src="{{asset('assets/images/avatar.png')}}" alt="avatar">
                            </div>
                            <span class="header__profile-name">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                        </a>
                        <div class="header__profile-nav">
                            <a href="#" class="header__profile-nav__rating">5,0
                                <span class="header__profile-stars">
									<span class="header__profile-star header__profile-star--active">
										<svg version="1" xmlns="http://www.w3.org/2000/svg"
                                             style="width:20px;height:20px" viewBox="0 0 36 36">
											<path fill="currentColor"
                                                  d="M17.1 5.4L13.9 14l-9.2.3c-1.3.1-1.3 1.2-.6 1.8l7.2 5.7-2.5 8.8c-.4 1.1.7 1.6 1.5 1.1l7.6-5.1 7.6 5.1c.6.4 1.8.2 1.5-1.1l-2.5-8.8 7.2-5.7c.8-.7.8-1.7-.6-1.8l-9-.3L19 5.4c-.5-1.1-1.5-1.1-1.9 0z">
											</path>
										</svg>
									</span>
									<span class="header__profile-star header__profile-star--active">
										<svg version="1" xmlns="http://www.w3.org/2000/svg"
                                             style="width:20px;height:20px" viewBox="0 0 36 36">
											<path fill="currentColor"
                                                  d="M17.1 5.4L13.9 14l-9.2.3c-1.3.1-1.3 1.2-.6 1.8l7.2 5.7-2.5 8.8c-.4 1.1.7 1.6 1.5 1.1l7.6-5.1 7.6 5.1c.6.4 1.8.2 1.5-1.1l-2.5-8.8 7.2-5.7c.8-.7.8-1.7-.6-1.8l-9-.3L19 5.4c-.5-1.1-1.5-1.1-1.9 0z">
											</path>
										</svg>
									</span>
									<span class="header__profile-star header__profile-star--active">
										<svg version="1" xmlns="http://www.w3.org/2000/svg"
                                             style="width:20px;height:20px" viewBox="0 0 36 36">
											<path fill="currentColor"
                                                  d="M17.1 5.4L13.9 14l-9.2.3c-1.3.1-1.3 1.2-.6 1.8l7.2 5.7-2.5 8.8c-.4 1.1.7 1.6 1.5 1.1l7.6-5.1 7.6 5.1c.6.4 1.8.2 1.5-1.1l-2.5-8.8 7.2-5.7c.8-.7.8-1.7-.6-1.8l-9-.3L19 5.4c-.5-1.1-1.5-1.1-1.9 0z">
											</path>
										</svg>
									</span>
									<span class="header__profile-star">
										<svg version="1" xmlns="http://www.w3.org/2000/svg"
                                             style="width:20px;height:20px" viewBox="0 0 36 36">
											<path fill="currentColor"
                                                  d="M17.1 5.4L13.9 14l-9.2.3c-1.3.1-1.3 1.2-.6 1.8l7.2 5.7-2.5 8.8c-.4 1.1.7 1.6 1.5 1.1l7.6-5.1 7.6 5.1c.6.4 1.8.2 1.5-1.1l-2.5-8.8 7.2-5.7c.8-.7.8-1.7-.6-1.8l-9-.3L19 5.4c-.5-1.1-1.5-1.1-1.9 0z">
											</path>
										</svg>
									</span>
									<span class="header__profile-star">
										<svg version="1" xmlns="http://www.w3.org/2000/svg"
                                             style="width:20px;height:20px" viewBox="0 0 36 36">
											<path fill="currentColor"
                                                  d="M17.1 5.4L13.9 14l-9.2.3c-1.3.1-1.3 1.2-.6 1.8l7.2 5.7-2.5 8.8c-.4 1.1.7 1.6 1.5 1.1l7.6-5.1 7.6 5.1c.6.4 1.8.2 1.5-1.1l-2.5-8.8 7.2-5.7c.8-.7.8-1.7-.6-1.8l-9-.3L19 5.4c-.5-1.1-1.5-1.1-1.9 0z">
											</path>
										</svg>
									</span>
								</span>
                                <span class="header__profile-nav__reviews">1 отзыв</span>
                            </a>
                            <div class="header__profile-nav__main">
                                <ul class="header__profile-nav__list">
                                    <li><a href="#">Мои объявления</a></li>
                                    <li><a href="#">Заказы</a></li>
                                    <li><a href="#">Мои отзывы</a></li>
                                    <li><a href="#">Избранное</a></li>
                                </ul>
                                <ul class="header__profile-nav__list">
                                    <li><a href="#">Сообщения</a></li>
                                    <li><a href="#">Уведомления</a></li>
                                </ul>
                                <ul class="header__profile-nav__list">
                                    <li><a href="#">Кошелёк</a> <span class="header__profile-nav__sum">0 ₽</span></li>
                                    <li><a href="#">Платные услуги</a></li>
                                    <li><a href="#">Спецпредложения</a></li>
                                </ul>
                                <ul class="header__profile-nav__list">
                                    <li><a href="#">Управление профилем</a></li>
                                    <li><a href="#">Защита профиля</a></li>
                                    <li><a href="#">Настройки</a></li>
                                    <li><a href="#">Авито Доставка</a></li>
                                </ul>
                            </div>
                            <div class="header__profile-nav__footer">
                                <a href="#" class="header__profile-nav__exit">Выйти</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn--add open-modal" data-modal="auth">Разместить объявление</a>
                </div>
            @endauth
            @guest()
                <div class="header__right">
                    <a href="{{route('create.ads')}}" class="btn btn--add">Разместить объявление</a>
                </div>
            @endguest
        </div>
    </div>
    <div class="header__main">
        <div class="container">
            <a href="#" class="logo">
                <svg width="109" height="30" viewBox="0 0 109 30" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m41.426.62-9.361 24.443h5.028l1.924-5.107h9.933l1.932 5.107h4.991L46.57.62h-5.144Zm-.683 14.85 3.27-8.6 3.256 8.6h-6.526Zm21.14 3.29-4.06-10.868h-4.797l6.539 17.17h4.755l6.423-17.17h-4.797L61.882 18.76ZM76.776 7.892h-4.565v17.17h4.565V7.892Zm-2.285-1.237a3.327 3.327 0 1 0 0-6.655 3.327 3.327 0 0 0 0 6.655ZM85.823 3.31h-4.552v4.552h-2.67v4.138h2.67v7.297c0 4.138 2.28 5.918 5.492 5.918a7.864 7.864 0 0 0 3.157-.617v-4.254c-.545.2-1.12.304-1.7.31-1.395 0-2.4-.542-2.4-2.4v-6.253h4.1V7.904h-4.097V3.311Zm13.694 4.27a8.898 8.898 0 1 0-.008 17.796 8.898 8.898 0 0 0 .008-17.795Zm0 13.244a4.333 4.333 0 1 1 4.329-4.333 4.323 4.323 0 0 1-4.329 4.316v.017Z"
                        fill="#000"></path>
                    <circle cx="10.595" cy="5.225" r="3.325" fill="#965EEB"></circle>
                    <circle cx="22.245" cy="7.235" r="7.235" fill="#0AF"></circle>
                    <circle cx="8.9" cy="18.6" r="8.9" fill="#04E061"></circle>
                    <circle cx="24.325" cy="21.005" r="5.375" fill="#FF4053"></circle>
                </svg>
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
