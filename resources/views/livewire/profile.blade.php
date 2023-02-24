
<div class="main__content">
    <h2 class="title">Мои объявления</h2>
    <div class="tabs">
        <a href="#tab1" class="tab tab--active">Активные<sup>6</sup></a>
        <a href="#tab2" class="tab">Архив<sup>1</sup></a>
    </div>
    <div class="tabs__content">
        <div class="tab__item tab__item--active" id="tab1">
            <div class="products__list">
                <div class="products__item">
                    <a href="#" class="products__item-image">
                        <img src="{{asset('assets/images/product2.jpeg')}}" alt="product">
                    </a>
                    <div class="products__item-info">
                        <a href="#" class="products__item-title">Гитара</a>
                        <p class="products__item-price">7 000 ₽</p>
                        <p class="products__item-address">Московская область<br>Улица</p>
                    </div>
                    <div class="products__item-progress">

{{--                        <div class="products__item-delete"><span></span></div>--}}
                    </div>
                    <div class="products__item-menu">
                        <button class="products__item-menu__btn"><svg role="img" aria-hidden="true"
                                                                      data-icon="more" viewBox="0 0 24 24" name="more" class="css-1c01tue">
                                <path
                                    d="M17 12c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2zm-3 0c0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2 2-.9 2-2zm-9-2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z">
                                </path>
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab__item" id="tab2">
            <p class="products__desc">Все черновики <span>1</span></p>
            <div class="products__list">
                <div class="products__item">
                    <a href="#" class="products__item-image">
                        <img src="{{asset('assets/images/product2.jpeg')}}" alt="product">
                    </a>
                    <div class="products__item-info">
                        <a href="#" class="products__item-title">Гитара</a>
                        <p class="products__item-price">7 000 ₽</p>
                        <p class="products__item-address">Московская область<br>Улица</p>
                    </div>
                    <div class="products__item-progress">
                        <p>Удалится навсегда через</p>
                        <div class="products__item-delete"><span></span></div>
                    </div>
                    <div class="products__item-menu">
                        <button class="products__item-menu__btn"><svg role="img" aria-hidden="true"
                                                                      data-icon="more" viewBox="0 0 24 24" name="more" class="css-1c01tue">
                                <path
                                    d="M17 12c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2zm-3 0c0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2 2-.9 2-2zm-9-2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z">
                                </path>
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
