<main class="main">
    <div class="container">
        <div class="categories">
            @foreach($categories as $category)
            <a href="#" class="categories__link">{{$category->title}}</a>
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
                <h2 class="subtitle">Рекомендации для вас</h2>
                <div class="cards">
                    <div class="card">
                        <a href="{{route('ads')}}" class="card__image">
                            <img src="{{asset('assets/images/product.jpg')}}" alt="product">
                        </a>
                        <div class="card__body">
                            <a href="{{route('ads')}}" class="card__title">Айфон</a>
                            <p class="card__price">70 000</p>
                            <p class="card__city">Санкт-Петербург</p>
                            <p class="card__time">Сегодня 16:12</p>
                            <div class="card__btns">
                                <button class="card__favorite"></button>
                                <div class="card__more">
                                    <button class="card__more-btn">•••</button>
                                    <div class="card__tooltip">
                                        <i></i>
                                        <h4 class="card__tooltip-title">Скрыть рекомендацию</h4>
                                        <div class="card__tooltip-list">
                                            <button>Не интересует это объявление</button>
                                            <button>Не интересует эта категория</button>
                                            <button>Не подходит город или регион</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('ads')}}" class="card__image">
                            <img src="{{asset('assets/images/product.jpg')}}" alt="product">
                        </a>
                        <div class="card__body">
                            <a href="{{route('ads')}}" class="card__title">Айфон</a>
                            <p class="card__price">70 000</p>
                            <p class="card__city">Санкт-Петербург</p>
                            <p class="card__time">Сегодня 16:12</p>
                            <div class="card__btns">
                                <button class="card__favorite"></button>
                                <div class="card__more">
                                    <button class="card__more-btn">•••</button>
                                    <div class="card__tooltip">
                                        <i></i>
                                        <h4 class="card__tooltip-title">Скрыть рекомендацию</h4>
                                        <div class="card__tooltip-list">
                                            <button>Не интересует это объявление</button>
                                            <button>Не интересует эта категория</button>
                                            <button>Не подходит город или регион</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('ads')}}" class="card__image">
                            <img src="{{asset('assets/images/product.jpg')}}" alt="product">
                        </a>
                        <div class="card__body">
                            <a href="{{route('ads')}}" class="card__title">Айфон</a>
                            <p class="card__price">70 000</p>
                            <p class="card__city">Санкт-Петербург</p>
                            <p class="card__time">Сегодня 16:12</p>
                            <div class="card__btns">
                                <button class="card__favorite"></button>
                                <div class="card__more">
                                    <button class="card__more-btn">•••</button>
                                    <div class="card__tooltip">
                                        <i></i>
                                        <h4 class="card__tooltip-title">Скрыть рекомендацию</h4>
                                        <div class="card__tooltip-list">
                                            <button>Не интересует это объявление</button>
                                            <button>Не интересует эта категория</button>
                                            <button>Не подходит город или регион</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('ads')}}" class="card__image">
                            <img src="{{asset('assets/images/product.jpg')}}" alt="product">
                        </a>
                        <div class="card__body">
                            <a href="{{route('ads')}}" class="card__title">Айфон</a>
                            <p class="card__price">70 000</p>
                            <p class="card__city">Санкт-Петербург</p>
                            <p class="card__time">Сегодня 16:12</p>
                            <div class="card__btns">
                                <button class="card__favorite"></button>
                                <div class="card__more">
                                    <button class="card__more-btn">•••</button>
                                    <div class="card__tooltip">
                                        <i></i>
                                        <h4 class="card__tooltip-title">Скрыть рекомендацию</h4>
                                        <div class="card__tooltip-list">
                                            <button>Не интересует это объявление</button>
                                            <button>Не интересует эта категория</button>
                                            <button>Не подходит город или регион</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('ads')}}" class="card__image">
                            <img src="{{asset('assets/images/product.jpg')}}" alt="product">
                        </a>
                        <div class="card__body">
                            <a href="{{route('ads')}}" class="card__title">Айфон</a>
                            <p class="card__price">70 000</p>
                            <p class="card__city">Санкт-Петербург</p>
                            <p class="card__time">Сегодня 16:12</p>
                            <div class="card__btns">
                                <button class="card__favorite"></button>
                                <div class="card__more">
                                    <button class="card__more-btn">•••</button>
                                    <div class="card__tooltip">
                                        <i></i>
                                        <h4 class="card__tooltip-title">Скрыть рекомендацию</h4>
                                        <div class="card__tooltip-list">
                                            <button>Не интересует это объявление</button>
                                            <button>Не интересует эта категория</button>
                                            <button>Не подходит город или регион</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('ads')}}" class="card__image">
                            <img src="{{asset('assets/images/product.jpg')}}" alt="product">
                        </a>
                        <div class="card__body">
                            <a href="{{route('ads')}}" class="card__title">Айфон</a>
                            <p class="card__price">70 000</p>
                            <p class="card__city">Санкт-Петербург</p>
                            <p class="card__time">Сегодня 16:12</p>
                            <div class="card__btns">
                                <button class="card__favorite"></button>
                                <div class="card__more">
                                    <button class="card__more-btn">•••</button>
                                    <div class="card__tooltip">
                                        <i></i>
                                        <h4 class="card__tooltip-title">Скрыть рекомендацию</h4>
                                        <div class="card__tooltip-list">
                                            <button>Не интересует это объявление</button>
                                            <button>Не интересует эта категория</button>
                                            <button>Не подходит город или регион</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="main__right">--}}
{{--            <div class="service">--}}
{{--                <div class="service__title">Сервисы и услуги Avito</div>--}}
{{--                <div class="service__items">--}}
{{--                    <a href="#" class="service__item">--}}
{{--                        <div class="service__item-icon">--}}
{{--                            <img src="images/icons/service-1.svg" alt="icon">--}}
{{--                        </div>--}}
{{--                        <div class="service__item-box">--}}
{{--                            <div class="service__item-title">Доставка</div>--}}
{{--                            <p class="service__item-text">Проверка при получении и&nbsp;возможность бесплатно--}}
{{--                                вернуть--}}
{{--                                товар</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="service__item">--}}
{{--                        <div class="service__item-icon">--}}
{{--                            <img src="images/icons/service-2.svg" alt="icon">--}}
{{--                        </div>--}}
{{--                        <div class="service__item-box">--}}
{{--                            <div class="service__item-title">Автотека</div>--}}
{{--                            <p class="service__item-text">Отчёт с историей авто: пробег, владельцы, сведения о--}}
{{--                                залоге,--}}
{{--                                ДТП и ремонтах</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="service__item">--}}
{{--                        <div class="service__item-icon">--}}
{{--                            <img src="images/icons/service-3.svg" alt="icon">--}}
{{--                        </div>--}}
{{--                        <div class="service__item-box">--}}
{{--                            <div class="service__item-title">Онлайн-бронирование жилья</div>--}}
{{--                            <p class="service__item-text">Посуточная аренда квартир и домов: большой выбор вариантов--}}
{{--                                для--}}
{{--                                поездок по России</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="information">--}}
{{--                <h3 class="information__title">ООО</h3>--}}
{{--                <ul class="information__list">--}}
{{--                    <li><a href="#">Правила Авито</a></li>--}}
{{--                    <li><a href="#">Реклама на сайте</a></li>--}}
{{--                    <li><a href="#">Вакансии</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</main>
