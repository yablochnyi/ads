
<div wire:ignore.self class="main__content">
    <h2 class="title">Настройки</h2>
    <div class="settings">
        <div class="settings__email settings__box">
            <div class="settings__email-address">
                <p>{{$email}}</p>
                <button class="settings__email-edit open-modal" data-modal="email"></button>
            </div>
            <div class="settings__email-status">Подтверждён</div>
        </div>
        <div class="settings__box">
            <h3 class="settings__subtitle">Контактная информация</h3>
            <div class="settings__city">
                <div class="settings__city-label">Город</div>
                <div class="settings__city-box">
                    <div class="settings__dropdown">
                        <select wire:model="city">
                            @if($city)
                                <option selected>{{$city}}</option>
                            @else
                                <option selected>Выберите город</option>
                            @endif
                            <option value="Анталия">Анталия</option>
                            <option value="Белек">Белек</option>
                        </select>
                    </div>
                    <button wire:click="updateCity" class="settings__btn">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal modal--auth" id="email">
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
                    <h3 class="modal__auth-subtitle">Email</h3>
                    <form wire:submit.prevent="updateEmail" class="modal__form">
                        <input wire:model="email" type="email" name="email" placeholder="Введите Email">
                        <button class="btn modal__close-button">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal__overlay"></div>
    </div>
</div>
