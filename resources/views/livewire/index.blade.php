<main class="main">
    <div class="container">
        <div class="categories">
            @foreach($categories as $category)
            <a href="{{route('category', $category)}}" class="categories__link">{{$category->title}}</a>
            @endforeach
        </div>
        <div class="promo">
{{--            <div class="promo__cards">--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="promo__cards promo__cards--mini">--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--                <a href="#" class="promo__card">--}}
{{--                    <span>Card title</span>--}}
{{--                    <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">--}}
{{--                </a>--}}
{{--            </div>--}}
            <div class="promo__slider">
                <div class="promo__slider-wrap swiper">
                    <div class="swiper-wrapper">
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                        <a href="#" class="promo__card swiper-slide">
                            <span>Card title</span>
                            <img src="{{asset('assets/images/card.jpg')}}" alt="card" class="promo__card-image">
                        </a>
                    </div>
                </div>
                <div class="promo__nav">
                    <button class="promo__nav-arrow promo__nav-arrow--prev"></button>
                    <button class="promo__nav-arrow promo__nav-arrow--next"></button>
                </div>
            </div>
            <div class="recommendation">
                <h2 class="subtitle">???????????????????????? ?????? ??????</h2>
                <div class="cards">
                    @foreach($ads as $ad)
                    <div class="card">
                        <a href="{{route('ads',['category' => $ad->category, 'ads' => $ad])}}" class="card__image">
                            <img src="{{ asset('storage/ads/' . optional($ad->images->first())->image) }}" alt="{{$ad->title}}">
                        </a>
                        <div class="card__body">
                            <a href="{{route('ads', ['category' => $ad->category, 'ads' => $ad])}}" class="card__title">{{$ad->title}}</a>
                            <p class="card__price">{{$ad->price}} ???</p>
                            <p class="card__city">??????????-??????????????????</p>
                            <p class="card__time">{{$ad->created_at->diffForHumans()}}</p>
{{--                            <div class="card__btns">--}}
{{--                                <button class="card__favorite"></button>--}}
{{--                                <div class="card__more">--}}
{{--                                    <button class="card__more-btn">?????????</button>--}}
{{--                                    <div class="card__tooltip">--}}
{{--                                        <i></i>--}}
{{--                                        <h4 class="card__tooltip-title">???????????? ????????????????????????</h4>--}}
{{--                                        <div class="card__tooltip-list">--}}
{{--                                            <button>???? ???????????????????? ?????? ????????????????????</button>--}}
{{--                                            <button>???? ???????????????????? ?????? ??????????????????</button>--}}
{{--                                            <button>???? ???????????????? ?????????? ?????? ????????????</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
{{--        <div class="main__right">--}}
{{--            <div class="service">--}}
{{--                <div class="service__title">?????????????? ?? ???????????? Avito</div>--}}
{{--                <div class="service__items">--}}
{{--                    <a href="#" class="service__item">--}}
{{--                        <div class="service__item-icon">--}}
{{--                            <img src="images/icons/service-1.svg" alt="icon">--}}
{{--                        </div>--}}
{{--                        <div class="service__item-box">--}}
{{--                            <div class="service__item-title">????????????????</div>--}}
{{--                            <p class="service__item-text">???????????????? ?????? ?????????????????? ??&nbsp;?????????????????????? ??????????????????--}}
{{--                                ??????????????--}}
{{--                                ??????????</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="service__item">--}}
{{--                        <div class="service__item-icon">--}}
{{--                            <img src="images/icons/service-2.svg" alt="icon">--}}
{{--                        </div>--}}
{{--                        <div class="service__item-box">--}}
{{--                            <div class="service__item-title">????????????????</div>--}}
{{--                            <p class="service__item-text">?????????? ?? ???????????????? ????????: ????????????, ??????????????????, ???????????????? ??--}}
{{--                                ????????????,--}}
{{--                                ?????? ?? ????????????????</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="service__item">--}}
{{--                        <div class="service__item-icon">--}}
{{--                            <img src="images/icons/service-3.svg" alt="icon">--}}
{{--                        </div>--}}
{{--                        <div class="service__item-box">--}}
{{--                            <div class="service__item-title">????????????-???????????????????????? ??????????</div>--}}
{{--                            <p class="service__item-text">???????????????????? ???????????? ?????????????? ?? ??????????: ?????????????? ?????????? ??????????????????--}}
{{--                                ??????--}}
{{--                                ?????????????? ???? ????????????</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="information">--}}
{{--                <h3 class="information__title">??????</h3>--}}
{{--                <ul class="information__list">--}}
{{--                    <li><a href="#">?????????????? ??????????</a></li>--}}
{{--                    <li><a href="#">?????????????? ???? ??????????</a></li>--}}
{{--                    <li><a href="#">????????????????</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</main>
