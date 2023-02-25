<div class="main__content">
    <h2 class="title">Управление профилем</h2>
    <div class="edit">
        <div class="tabs">
            <a href="#tab1" class="tab tab--active">Основные детали</a>
            <a href="#tab2" class="tab">Вид профиля</a>
        </div>
        <div class="tab__content">
            <div class="tab__item tab__item--active" id="tab1">
                <div class="edit__groups">
                    <div class="edit__group">
                        <p class="edit__prop">Номер профиля</p>
                        <p class="edit__value">{{\Illuminate\Support\Facades\Auth::id()}}</p>
                        <a href="#" class="edit__link">Посмотреть профиль</a>
                    </div>
                    <div class="edit__group">
                        <p class="edit__prop">Имя</p>
                        <p class="edit__value">{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
{{--                        <button class="dit__link open-modal" data-modal="email">Изменить</button>--}}
                        <a href="#" class="edit__link open-modal" data-modal="name">Изменить</a>
                    </div>
                </div>
{{--                <div class="edit__box">--}}
{{--                    <h2 class="edit__subtitle">Значки</h2>--}}
{{--                    <p class="edit__desc">Видны всем в вашем профиле.</p>--}}
{{--                    <div class="edit__verifed">--}}
{{--                        <img src="images/icons/verifed.png" alt="verifed">--}}
{{--                        Телефон подтверждён--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="edit__box">--}}
{{--                    <h2 class="edit__subtitle">Подтверждение данных</h2>--}}
{{--                    <ul class="edit__aprove">--}}
{{--                        <li>--}}
{{--                            <p class="edit__aprove-label">Паспорт</p>--}}
{{--                            <p class="edit__aprove-status">Пройдите проверку</p>--}}
{{--                            <a href="#" class="edit__aprove-link">Пройти проверку</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <p class="edit__aprove-label">Водительские права</p>--}}
{{--                            <p class="edit__aprove-status">Пройдите проверку</p>--}}
{{--                            <a href="#" class="edit__aprove-link">Пройти проверку</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <p class="edit__aprove-label">Реквизиты компании</p>--}}
{{--                            <p class="edit__aprove-status">Не проверены</p>--}}
{{--                            <a href="#" class="edit__aprove-link">Подтвердить</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
            <div class="tab__item" id="tab2">
                <div class="edit__profile">
                    <p class="edit__profile-label">Выбранный вид</p>
                    <p class="edit__profile-type">Частный профиль</p>
                    <button class="edit__profile-edit"></button>
                </div>
{{--                <a href="#" class="edit__view">Как выглядит мой профиль</a>--}}
{{--                <div class="edit__items">--}}
{{--                    <div class="edit__item">--}}
{{--                        <h3 class="edit__item-title">Галерея фотографий</h3>--}}
{{--                        <p class="edit__item-desc">Расскажите о своём опыте клиентам с помощью примеров</p>--}}
{{--                        <div class="edit__item-photo">--}}
{{--                            <img src="images/icons/edit.png" alt="edit">--}}
{{--                            <span>Добавить</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="edit__item">--}}
{{--                        <h3 class="edit__item-title">О компании</h3>--}}
{{--                        <p class="edit__item-desc">Расскажите, почему клиенты должны выбрать именно вас.--}}
{{--                            Сколько лет вы на рынке, какие даёте гарантии, в чём ваши преимущества перед--}}
{{--                            конкурентами.</p>--}}
{{--                        <button class="edit__btn">Заполнить</button>--}}
{{--                    </div>--}}
{{--                    <div class="edit__item">--}}
{{--                        <h3 class="edit__item-title">О компании</h3>--}}
{{--                        <p class="edit__item-desc">Расскажите, почему клиенты должны выбрать именно вас.--}}
{{--                            Сколько лет вы на рынке, какие даёте гарантии, в чём ваши преимущества перед--}}
{{--                            конкурентами.</p>--}}
{{--                        <button class="edit__btn">Заполнить</button>--}}
{{--                    </div>--}}
{{--                    <div class="edit__item">--}}
{{--                        <h3 class="edit__item-title">О компании</h3>--}}
{{--                        <p class="edit__item-desc">Расскажите, почему клиенты должны выбрать именно вас.--}}
{{--                            Сколько лет вы на рынке, какие даёте гарантии, в чём ваши преимущества перед--}}
{{--                            конкурентами.</p>--}}
{{--                        <button class="edit__btn">Заполнить</button>--}}
{{--                    </div>--}}
{{--                    <div class="edit__item">--}}
{{--                        <h3 class="edit__item-title">О компании</h3>--}}
{{--                        <p class="edit__item-desc">Расскажите, почему клиенты должны выбрать именно вас.--}}
{{--                            Сколько лет вы на рынке, какие даёте гарантии, в чём ваши преимущества перед--}}
{{--                            конкурентами.</p>--}}
{{--                        <button class="edit__btn">Заполнить</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal modal--auth" id="name">
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
                    <h3 class="modal__auth-subtitle">Введите имя</h3>
                    <form wire:submit.prevent="updateName" class="modal__form">
                        <input wire:model="name" type="text" name="email" placeholder="Введите имя">
                        <button class="btn modal__close-button">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal__overlay"></div>
    </div>
</div>
