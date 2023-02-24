<div class="modal modal--auth" id="auth">
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
                <h3 class="modal__auth-subtitle">Вход</h3>
                @if(session()->has('error'))
                    <span class="text-danger">{{session()->get('error')}}</span>
                @endif
                <form wire:submit.prevent="login" class="modal__form">
                    <div class="modal__form-phone">
                        <div class="modal__form-select">
                            <div class="modal__form-select__current">
                                <img src="{{asset('assets/images/icons/flag/ru.svg')}}" alt="ru">
                                <span>+7</span>
                            </div>
                            <ul class="modal__form-select__list">
                                <li data-country="ru" data-mask="+7">
                                    <img src="{{asset('assets/images/icons/flag/ru.svg')}}" alt="ru">
                                    Russian
                                </li>
                                <li data-country="ua" data-mask="+38">
                                    <img src="{{asset('assets/images/icons/flag/ua.svg')}}" alt="ua">
                                    Ukraine
                                </li>
                                <li data-country="tr" data-mask="+90">
                                    <img src="{{asset('assets/images/icons/flag/tr.svg')}}" alt="tr">
                                    Turkey
                                </li>
                            </ul>
                        </div>
                        <input wire:model="phone" type="text" name="phone" class="phone-input" placeholder="Телефон">
                    </div>
                                        <input wire:model="password" type="password" name="password" placeholder="Пароль">
                    <div class="modal__form-flex">
                        <label class="modal__form-checkbox">
                            <input type="checkbox" name="remember" value="true">
                            <span class="modal__form-checkbox__icon">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="icon-icon-ZlCGX"
                                         style="width: 16px; height: 16px; color: currentcolor;">
										<path d="M4 8.857L6.4 11 12 6" stroke="currentColor" stroke-width="2"
                                              stroke-linecap="round"></path>
									</svg>
								</span>
                            <span class="modal__form-checkbox__text">Запомнить пароль</span>
                        </label>
                        <a href="#" class="modal__reset-link">Забыли пароль?</a>
                    </div>
                    <button class="btn">Войти</button>
                </form>
            </div>
            <div class="modal__auth-bottom">
                {{--                <div class="modal__form-bottom__box">--}}
                {{--                    <h4 class="modal__form-subtitle">Или продолжить через</h4>--}}
                {{--                    <div class="modal__form-socials">--}}
                {{--                        <a href="#" class="modal__form-socials__link">--}}
                {{--                            <img src="images/icons/vk.png" alt="vk">--}}
                {{--                        </a>--}}
                {{--                        <a href="#" class="modal__form-socials__link">--}}
                {{--                            <img src="images/icons/vk.png" alt="vk">--}}
                {{--                        </a>--}}
                {{--                        <a href="#" class="modal__form-socials__link">--}}
                {{--                            <img src="images/icons/vk.png" alt="vk">--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="modal__form-bottom__box">
                    <h4 class="modal__form-subtitle">Нет аккаунт на Авито?</h4>
                    <button class="btn btn--white btn--reg">Зарегистрироваться</button>
                    <p class="modal__form-agree">При регистрации и входе вы соглашаетесь <a href="#">с условиями
                            использования Авито и политикой обработки данных.</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal__overlay"></div>
</div>

