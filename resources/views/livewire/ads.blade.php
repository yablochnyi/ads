<div class="product">
    <div class="container">
        <div class="product__content">
            <ul class="breadcrumbs">
                <li><a href="#">{{$ads->category->title}}</a></li>
            </ul>
            <h1 class="product__title">{{$ads->title}}</h1>
            {{--            <div class="product__favorite">--}}
            {{--                <button class="product__favorite-btn">--}}
            {{--                    <span class="product__favorite-icon product__favorite-icon--like"></span>--}}
            {{--                    Добавить в избранное--}}
            {{--                </button>--}}
            {{--                <button class="product__favorite-btn">--}}
            {{--                    <span class="product__favorite-icon product__favorite-icon--note"></span>--}}
            {{--                    Добавить заметку--}}
            {{--                </button>--}}
            {{--            </div>--}}
            <div class="product__gallery">
                <div class="product__gallery-slider">
                    <div class="product__gallery-slider-wrap swiper">
                        <div class="swiper-wrapper">
                            @foreach($ads->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/ads/' . $image->image) }}" alt="slider">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="product__gallery-nav">
                        <button class="product__gallery-arrow product__gallery-arrow--prev"><i></i></button>
                        <button class="product__gallery-arrow product__gallery-arrow--next"><i></i></button>
                    </div>
                </div>
                <div wire:ignore class="product__thumbs swiper">
                    <div class="swiper-wrapper">
                        @foreach($ads->images as $image)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/ads/' . $image->image) }}" alt="slider">
                            </div>
                        @endforeach
                        {{--                        <div class="swiper-slide">--}}
                        {{--                            <img src="{{asset('assets/images/slider.jpeg')}}" alt="slider">--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            {{--            <div class="product__docs">--}}
            {{--                <img src="images/icons/passport.png" alt="passport" class="product__docs-image">--}}
            {{--                <div class="product__docs-box">--}}
            {{--                    <div class="product__docs-title">Документы</div>--}}
            {{--                    <div class="product__docs-text">Копия паспорта, видео владельца</div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="product__group">
                <div class="product__box product__box--location">
                    <h2 class="product__subtitle">Расположение</h2>
                    <div class="product__address">
                        <div class="product__address-box">
                            <p class="product__address-city">{{$ads->address}}</p>
                            {{--                            <p class="product__address-station">Комендантский проспект <i></i> <span>до 5--}}
                            {{--										мин.</span>--}}
                            {{--                            <p class="product__address-station">Комендантский проспект <i></i> <span>до 5--}}
                            {{--										мин.</span>--}}
                            {{--                            </p>--}}
                        </div>
                        {{--                        <button class="product__show-map">Показать карту <i></i></button>--}}
                    </div>
                    {{--                    <div class="product__map"></div>--}}
                </div>
                <div class="product__box">
                    <h2 class="product__subtitle">Подробности</h2>
                    <div class="product__list">
                        @if($ads->communication == 'tel_and_mes')
                            <div class="product__list-item">Способ связи: <span>По телефону и в сообщениях</span></div>
                        @endif
                        @if($ads->communication == 'tel')
                            <div class="product__list-item">Способ связи: <span>По телефону</span></div>
                        @endif
                        @if($ads->communication == 'mes')
                            <div class="product__list-item">Способ связи: <span>В сообщениях</span></div>
                        @endif
                    </div>
                </div>
                <div class="product__box">
                    <h2 class="product__subtitle">Описание</h2>
                    <p class="product__text">{!! $ads->description !!}</p>
                </div>
            </div>
            <div class="product__bottom">
                <ul class="product__bottom-list">
                    <li>№ {{$ads->id}}</li>
                    <li>{{$ads->created_at->diffForHumans()}}</li>
                    <li>1501 просмотр (+1 сегодня)</li>
                </ul>
                {{--                <button class="product__favorite-btn">Пожаловаться</button>--}}
            </div>
            {{--            <div class="product__others">--}}
            {{--                <h3 class="product__others-title">Похожие объявления</h3>--}}
            {{--                <a href="#" class="product__favorite-btn">Показать ещё объвления</a>--}}
            {{--            </div>--}}
        </div>
        <div class="product__sidebar">
            <div class="product__sidebar-wrap">
                <div class="product__sticky">
                    <div class="product__price">
                        <p class="product__price-current">{{$ads->price}} ₽</p>
                        {{--                        <p class="product__price-other">или <a href="#">предложите свою цену</a></p>--}}
                    </div>
                    <div class="product__order">
                        @if($showPhone == false)
                            <button wire:click.prevent="showPhoneTrue" class="product__btn">Показать телефон <span>8 888 XXX-XX-XX</span>
                            </button>
                        @else
                            <button class="product__btn">{{$ads->phone}}</button>
                        @endif
                        <button class="product__btn product__btn--black js-show-chat">Написать сообщение</button>
                    </div>
                    <div class="product__profile">
                        {{--                        <p class="product__profile-name">Пользователь</p>--}}
                        {{--                        <div class="product__profile-text">Контактное лицо</div>--}}
                        {{--                        <button class="product__favorite-btn">Подписаться на продавца</button>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="chat chat--visible-chat">
    <div class="chat__header">
        <button class="chat__back"><i></i></button>
        <div class="chat__user">
            <div class="chat__user-avatar">
                <img src="{{asset('assets/images/chat.jpeg')}}" alt="chat" class="chat__user-avatar__main">
                <img src="{{asset('assets/images/chat2.jpeg')}}" alt="chat" class="chat__user-avatar__mini">
            </div>
            <div class="chat__user-info">
                <p class="chat__user-name">Виталий</p>
                <p class="chat__user-desc">Тюльпаны оптом Lorem ipsum dolor sit amet. 37₽</p>
            </div>
        </div>
        <button class="chat__share"><i></i></button>
        <button class="chat__show chat__show--active"><i></i></button>
    </div>
    <div class="chat__body chat__body--active">
        <div class="chat__box">
            <div class="chat__date">Сегодня</div>
            <div class="chat__list">
                <div class="chat__item chat__item--you">
                    <div class="chat__item-avatar">
                        <img src="{{asset('assets/images/avatar.png')}}" alt="avatar">
                    </div>
                    <p class="chat__item-message">Добрый день, потскажите сколько времени займёт работа?</p>
                    <p class="chat__item-time">00:00</p>
                </div>
                <div class="chat__item">
                    <div class="chat__item-avatar">
                        <img src="{{asset('assets/images/avatar.png')}}" alt="avatar">
                    </div>
                    <p class="chat__item-message">Добрый день, потскажите сколько времени займёт работа?</p>
                    <p class="chat__item-time">00:00</p>
                </div>
            </div>
        </div>
        <div class="chat__box">
            <div class="chat__date">Вчера</div>
            <div class="chat__list">
                <div class="chat__item chat__item--you">
                    <div class="chat__item-avatar">
                        <img src="{{asset('assets/images/avatar.png')}}" alt="avatar">
                    </div>
                    <p class="chat__item-message">Добрый день, потскажите сколько времени займёт работа?</p>
                    <p class="chat__item-time">00:00</p>
                </div>
                <div class="chat__item">
                    <div class="chat__item-avatar">
                        <img src="{{asset('assets/images/avatar.png')}}" alt="avatar">
                    </div>
                    <p class="chat__item-message">Добрый день, потскажите сколько времени займёт работа?</p>
                    <p class="chat__item-time">00:00</p>
                </div>
            </div>
        </div>
    </div>
    <form class="chat__bottom">
        <div class="chat__attach">
            <div class="chat__tooltip">
                <ul class="chat__tooltip-list">
                    <li>
                        <button>Отправить фото</button>
                    </li>
                    <li>
                        <button>Прикрепить объявление</button>
                    </li>
                    <li>
                        <button>Указать место встречи</button>
                    </li>
                    <li>
                        <button>Отправить видео</button>
                    </li>
                </ul>
            </div>
            <button class="chat__btn chat__btn--attach"><i></i></button>
        </div>
        <button class="chat__btn chat__btn--photo"><i></i></button>
        <input type="text" name="message" placeholder="Написать сообщение">
        <button class="chat__btn chat__btn--submit"><i></i></button>
    </form>
</div>
