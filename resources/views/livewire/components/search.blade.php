<form action="{{route('search.ads')}}" class="header__form">
    <input type="text" name="q" placeholder="Поиск по объявлениям" class="header__form-search">
{{--    <button type="button" class="header__select header__city open-modal" data-modal="modal-city">Во всех--}}
{{--        регионах--}}
{{--    </button>--}}
    {{--                <button type="button" class="header__select header__radius open-modal"--}}
    {{--                        data-modal="modal-radius">Радиус / Район--}}
    {{--                </button>--}}
    <button type="submit" class="btn">Найти</button>
</form>
