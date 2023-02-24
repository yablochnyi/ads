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

<header class="header header--fixed">
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
            @guest()
                <a href="#" class="btn btn--add open-modal" data-modal="auth">Разместить объявление</a>
            @endguest

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

            <button class="btn menu-btn">
					<span class="menu-btn__icon">
						<svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#a)" stroke="#fff" stroke-width="1.5">
								<path d="m15.625 13.125 2.5 2.5M0 4.375h5m-5 5h3.75m-3.75 5h5"></path>
								<circle cx="11.875" cy="9.375" r="4.875"></circle>
							</g>
							<defs>
								<clipPath id="a">
									<path fill="#fff" d="M0 0h18.75v17.5H0z"></path>
								</clipPath>
							</defs>
						</svg>
					</span>
                <span class="menu-btn__close">
						<svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
                                d="M15.583 4.414a.833.833 0 0 0-1.179 0l-4.41 4.41-4.411-4.41a.833.833 0 0 0-1.179 1.179l4.411 4.41-4.41 4.411a.833.833 0 1 0 1.178 1.178l4.41-4.41 4.411 4.41a.833.833 0 0 0 1.179-1.178l-4.411-4.41 4.41-4.411a.833.833 0 0 0 0-1.179Z"
                                fill="#fff"></path>
						</svg>
					</span>
                Все категории
            </button>
            <form class="header__form">
                <input type="text" placeholder="Поиск по объявлениям" class="header__form-search">
                <button type="button" class="header__select header__city open-modal" data-modal="modal-city">Во всех
                    регионах
                </button>
                <button type="button" class="header__select header__radius open-modal"
                        data-modal="modal-radius">Радиус / Район
                </button>
                <button type="submit" class="btn">Найти</button>
            </form>
        </div>
    </div>
</header>
{{$slot}}
<nav class="nav">
    <div class="nav__main">
        <div class="nav__sidebar">
            @foreach($categories as $category)
                <div class="nav__sidebar-item " id="nav-{{$category->id}}">
                    <span>{{$category->title}}</span>
                    <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.163 4.22a.946.946 0 0 0 0 1.06L11.659 10l-3.496 4.72a.945.945 0 0 0 0 1.06c.217.293.568.293.785 0l3.89-5.25a.946.946 0 0 0 0-1.06l-3.89-5.25c-.217-.293-.568-.293-.785 0Z"
                            fill="#000"></path>
                    </svg>
                </div>
            @endforeach
        </div>
        <div class="nav__content">
            @foreach($categories as $category)
                <div class="nav__content-item nav__content-item--active" data-nav-id="{{$category->id}}">
                    <a href="#" class="nav__content-title">
                        <span>{{$category->title}}</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.163 4.22a.946.946 0 0 0 0 1.06L11.659 10l-3.496 4.72a.945.945 0 0 0 0 1.06c.217.293.568.293.785 0l3.89-5.25a.946.946 0 0 0 0-1.06l-3.89-5.25c-.217-.293-.568-.293-.785 0Z"
                                fill="#000"></path>
                        </svg>
                    </a>
                    <div class="nav__content-box">
                        @foreach($category->subcategories as $subcategories)
                            <div class="nav__content-group">
                                <a href="#" class="nav__content-subtitle">
                                    <span>{{$subcategories->title}}</span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.163 4.22a.946.946 0 0 0 0 1.06L11.659 10l-3.496 4.72a.945.945 0 0 0 0 1.06c.217.293.568.293.785 0l3.89-5.25a.946.946 0 0 0 0-1.06l-3.89-5.25c-.217-.293-.568-.293-.785 0Z"
                                            fill="#000"></path>
                                    </svg>
                                </a>
                                <ul class="nav__content-list">
                                    @foreach($subcategories->subcategories as $subsubcategories)
                                        <li><a href="#">{{$subsubcategories->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="nav__bg"></div>
</nav>
<div class="modal" id="modal-radius">
    <div class="modal__content">
        <button class="modal__close">
            <svg role="button" tabindex="0" aria-hidden="false" data-icon="close" viewBox="0 0 24 24" name="close"
                 data-marker="popup-location/close" class="desktop-89rnpj">
                <path
                    d="M18.7 5.3a1 1 0 0 0-1.4 0L12 10.58l-5.3-5.3a1 1 0 0 0-1.4 1.42L10.58 12l-5.3 5.3a1 1 0 1 0 1.42 1.4L12 13.42l5.3 5.3a1 1 0 0 0 1.4-1.42L13.42 12l5.3-5.3a1 1 0 0 0 0-1.4Z">
                </path>
            </svg>
        </button>
        <div class="modal__tabs">
            <button class="modal__tab modal__tab--active" id="modal-tab-1">Радиус поиска</button>
            <button class="modal__tab" id="modal-tab-2">Районы</button>
        </div>
        <div class="modal__body">
            <div class="modal__item modal__item--active" data-modal-tab="1">
                <input type="text" class="modal__input" placeholder="Улица и номер дома">
                <div class="modal__map">
                    <img src="{{asset('assets/images/map.jpg')}}" alt="map">
                </div>
                <div class="modal__bottom">
                    <div class="modal__search">
                        <p class="modal__search-label">Радиус поиска, км</p>
                        <div class="modal__search-btns">
                            <label class="modal__search-km">
                                <input type="radio" name="radius" value="1">
                                <span>1</span>
                            </label>
                            <label class="modal__search-km">
                                <input type="radio" name="radius" value="2">
                                <span>2</span>
                            </label>
                            <label class="modal__search-km">
                                <input type="radio" name="radius" value="3">
                                <span>3</span>
                            </label>
                            <label class="modal__search-km">
                                <input type="radio" name="radius" value="5">
                                <span>5</span>
                            </label>
                            <label class="modal__search-km">
                                <input type="radio" name="radius" value="10">
                                <span>10</span>
                            </label>
                            <label class="modal__search-km">
                                <input type="radio" name="radius" value="15">
                                <span>15</span>
                            </label>
                            <label class="modal__search-km">
                                <input type="radio" name="radius" value="25">
                                <span>25</span>
                            </label>
                            <label class="modal__search-km">
                                <input type="radio" name="radius" value="50">
                                <span>50</span>
                            </label>
                            <label class="modal__search-km">
                                <input type="radio" name="radius" value="100">
                                <span>100</span>
                            </label>
                            <label class="modal__search-km">
                                <input type="radio" name="radius" value="150">
                                <span>150</span>
                            </label>
                        </div>
                    </div>
                    <button class="btn">Показать</button>
                </div>
            </div>
            <div class="modal__item" data-modal-tab="2">
                <div class="modal__checkboxes">
                    <label class="modal__checkbox">
                        <input type="checkbox" name="rayon" value="1">
                        <span>Кировский</span>
                    </label>
                    <label class="modal__checkbox">
                        <input type="checkbox" name="rayon" value="1">
                        <span>Кировский</span>
                    </label>
                    <label class="modal__checkbox">
                        <input type="checkbox" name="rayon" value="1">
                        <span>Кировский</span>
                    </label>
                    <label class="modal__checkbox">
                        <input type="checkbox" name="rayon" value="1">
                        <span>Кировский</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal__overlay"></div>
</div>
<div class="modal" id="modal-city">
    <div class="modal__content">
        <button class="modal__close">
            <svg role="button" tabindex="0" aria-hidden="false" data-icon="close" viewBox="0 0 24 24" name="close"
                 data-marker="popup-location/close" class="desktop-89rnpj">
                <path
                    d="M18.7 5.3a1 1 0 0 0-1.4 0L12 10.58l-5.3-5.3a1 1 0 0 0-1.4 1.42L10.58 12l-5.3 5.3a1 1 0 1 0 1.42 1.4L12 13.42l5.3 5.3a1 1 0 0 0 1.4-1.42L13.42 12l5.3-5.3a1 1 0 0 0 0-1.4Z">
                </path>
            </svg>
        </button>
        <h3 class="modal__subtitle">Город или регион</h3>
        <form class="modal__city">
            <input type="text" name="city" value="Все регионы">
        </form>
        <div class="modal__bottom">
            <label class="checkbox">
                <input type="checkbox">
                <span>Сначала в выбранном городе</span>
            </label>
            <button class="btn">Показать 1,6 млн объявлений</button>
        </div>
    </div>
    <div class="modal__overlay"></div>
</div>


<livewire:components.auth/>
{{--<livewire:components.register/>--}}
<div class="modal modal--auth" id="reset">
    <div class="modal__content">
        <div class="modal__auth">
            <div class="modal__auth-head">
                <button class="modal__close">
                    <svg role="button" tabindex="0" aria-hidden="false" data-icon="close" viewBox="0 0 24 24"
                         name="close" data-marker="popup-location/close" class="desktop-89rnpj">
                        <path
                            d="M18.7 5.3a1 1 0 0 0-1.4 0L12 10.58l-5.3-5.3a1 1 0 0 0-1.4 1.42L10.58 12l-5.3 5.3a1 1 0 1 0 1.42 1.4L12 13.42l5.3 5.3a1 1 0 0 0 1.4-1.42L13.42 12l5.3-5.3a1 1 0 0 0 0-1.4Z">
                        </path>
                    </svg>
                </button>
                <h3 class="modal__auth-subtitle">Восстановление пароля</h3>
                <form class="modal__form">
                    <div class="modal__form-phone">
                        <div class="modal__form-select">
                            <div class="modal__form-select__current">
                                <img src="images/icons/flag/ru.svg" alt="ru">
                                <span>+7</span>
                            </div>
                            <ul class="modal__form-select__list">
                                <li data-country="ru" data-mask="+7">
                                    <img src="images/icons/flag/ru.svg" alt="ru">
                                    Russian
                                </li>
                                <li data-country="ua" data-mask="+38">
                                    <img src="images/icons/flag/ua.svg" alt="ua">
                                    Ukraine
                                </li>
                                <li data-country="tr" data-mask="+90">
                                    <img src="images/icons/flag/tr.svg" alt="tr">
                                    Turkey
                                </li>
                            </ul>
                        </div>
                        <input type="text" name="login" class="phone-input" placeholder="Телефон">
                    </div>
                    <button class="btn">Сбросить текущий пароль</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal__overlay"></div>
</div>


<script src="{{asset('assets/js/app.min.js')}}"></script>
@livewireScripts
</body>

</html>
