<main class="main">
    <div class="container">
        <div class="category category__select">
            <h2 class="title">Категория</h2>
            <div class="category__wrap">
                <ul class="category__box category__box--active">
                    @foreach($categories as $category)
                        <li><a href="#">{{$category->title}}</a></li>
                    @endforeach
                </ul>
                <ul class="category__box">
                    @foreach($categories as $category)
                        @foreach($category->subcategories as $subcategories)
                            <li><a href="#">{{$subcategories->title}}</a></li>
                        @endforeach
                    @endforeach
                </ul>
                <ul class="category__box">
                    @foreach($categories as $category)
                        @foreach($category->subcategories as $subcategories)
                            @foreach($subcategories->subcategories as $subsubcategories)
                                <li><a href="#">{{$subsubcategories->title}}</a></li>
                            @endforeach
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="category__page">
            <div class="category__head">
                <h2 class="title">Категория</h2>
                <a href="#" class="category__link">Недвижимость / Квартиры / Продам / Вторичка</a>
            </div>
            <form class="category__content">
                <div class="category__item">
                    <h3 class="category__title">Расположение</h3>
                    <div class="category__flex">
                        <h4 class="category__subtitle">Адрес</h4>
                        <div class="category__group">
                            <input type="text" name="street" placeholder="Улица и номер дома">
                            <div class="category__map"></div>
                        </div>
                    </div>
                    <div class="category__flex">
                        <h4 class="category__subtitle">Номер квартиры</h4>
                        <div class="category__group">
                            <label class="category__label">
                                <input type="text" name="kv" class="category__input-appartment">
                                <span>Никто не увидит</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="category__item">
                    <h3 class="category__title">Контакты</h3>
                    <div class="category__flex category__flex--center">
                        <h4 class="category__subtitle">Размещает объявлениерес</h4>
                        <div class="category__group category__group--flex">
                            <label class="category__type">
                                <input type="radio" name="type" value="Собственник">
                                <span>Собственник</span>
                            </label>
                            <label class="category__type">
                                <input type="radio" name="type" value="Посредник">
                                <span>Посредник</span>
                            </label>
                        </div>
                    </div>
                    <div class="category__flex category__flex--phone">
                        <h4 class="category__subtitle">Телефон</h4>
                        <div class="category__group">
                            <div class="category__phone">
                                <input type="tel" name="phone">
                                <p class="category__phone-text">Чтобы ваш настоящий номер не попал в базы
                                    мошенников, мы показываем вместо него подменный, а звонки переводим вам. Эту
                                    защиту нельзя отключить.</p>
                                <a href="#" class="category__phone-link">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="category__flex">
                        <h4 class="category__subtitle">Способ связи</h4>
                        <div class="category__group">
                            <label class="category__radio">
                                <input type="radio" name="type2" value="Собственник" checked>
                                <span class="category__radio-icon"></span>
                                <span class="category__radio-text">По телефону и в сообщениях</span>
                            </label>
                            <label class="category__radio">
                                <input type="radio" name="type2" value="Посредник">
                                <span class="category__radio-icon"></span>
                                <span class="category__radio-text">По телефону</span>
                            </label>
                        </div>
                    </div>
                    <div class="category__flex category__flex--center">
                        <h4 class="category__subtitle">Онлайн-показ</h4>
                        <div class="category__group category__group--flex">
                            <label class="category__type">
                                <input type="radio" name="type1" value="Проведу">
                                <span>Проведу</span>
                            </label>
                            <label class="category__type">
                                <input type="radio" name="type1" value="Не хочу">
                                <span>Не хочу</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="category__btns">
                    <button class="category__btn">Сохранить и выйти</button>
                    <button class="category__btn category__btn--blue">Продолжить</button>
                </div>
            </form>
        </div>
    </div>
</main>
