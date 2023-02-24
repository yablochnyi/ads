
    <div class="modal modal--auth" id="reg">
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
                    <h3 class="modal__auth-subtitle">Регистрация</h3>
                    <form wire:submit.prevent="register" class="modal__form modal__form--reg">
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
                            <input wire:model="phone" type="text" name="login" class="phone-input" placeholder="Телефон">
                        </div>
                        <button class="btn">Продолжить</button>
                    </form>
                    <p class="modal__auth-account">Уже есть профиль? <a href="#">Войти</a></p>
                </div>
            </div>
        </div>
        <div class="modal__overlay"></div>
    </div>

