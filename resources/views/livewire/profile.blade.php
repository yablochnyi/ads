
<div class="main__content">
    <h2 class="title">Мои объявления</h2>
    <div class="tabs">
        <a href="#tab1" class="tab tab--active">Активные<sup>{{$adsActive->count()}}</sup></a>
        <a href="#tab2" class="tab">Архив<sup>{{$adsNotActive->count()}}</sup></a>
    </div>
    <div class="tabs__content">
        <div class="tab__item tab__item--active" id="tab1">
            <div class="products__list">
                @foreach($adsActive as $ads)
                <div class="products__item">
                    <a href="#" class="products__item-image">
                        <img src="{{ asset('storage/ads/' . optional($ads->images->first())->image) }}" alt="{{ $ads->title }}">
                    </a>
                    <div class="products__item-info">
                        <a href="{{route('ads', ['category' => $ads->category, 'ads' => $ads])}}" class="products__item-title">{{$ads->title}}</a>
                        <p class="products__item-price">{{$ads->price}} ₽</p>
                        <p class="products__item-address">{{$ads->address}}</p>
                    </div>
                    <div class="products__item-progress">

{{--                        <div class="products__item-delete"><span></span></div>--}}
                    </div>
                    <div class="products__item-menu">
                                                    <div>
                                                        <div class="card__more">
                                                            <button class="card__more-btn">•••</button>
                                                            <div class="card__tooltip">
                                                                <i></i>
                                                                <div class="card__tooltip-list" style="cursor: pointer">
{{--                                                                    <a href="{{route('edit.ads', $ads)}}">Редактировать</a>--}}
                                                                    <button wire:click="notActive({{$ads->id}})">Снять с публикации</button>
                                                                    <button wire:click="delete({{$ads->id}})">Удалить</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab__item" id="tab2">
            <div class="products__list">
                @foreach($adsNotActive as $ads)
                    <div class="products__item">
                        <a href="#" class="products__item-image">
                            <img src="{{ asset('storage/ads/' . optional($ads->images->first())->image) }}" alt="{{ $ads->title }}">
                        </a>
                        <div class="products__item-info">
                            <a href="{{route('ads', $ads)}}" class="products__item-title">{{$ads->title}}</a>
                            <p class="products__item-price">{{$ads->price}} ₽</p>
                            <p class="products__item-address">{{$ads->address}}</p>
                        </div>
                        <div class="products__item-progress">

                            {{--                        <div class="products__item-delete"><span></span></div>--}}
                        </div>
                        <div class="products__item-menu">
                            <div>
                                <div class="card__more">
                                    <button class="card__more-btn">•••</button>
                                    <div class="card__tooltip">
                                        <i></i>
                                        <div class="card__tooltip-list" style="cursor: pointer">
                                            <button wire:click="active({{$ads->id}})">Опубликовать</button>
                                            <button wire:click="delete({{$ads->id}})">Удалить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
