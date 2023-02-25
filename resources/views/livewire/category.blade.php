<main class="main">
    <div class="container">
            <div class="recommendation">
                <h1 class="subtitle">Категория: {{$category->title}}</h1>
                @if($emptyAds)
                <h2 class="subtitle">{{$emptyAds}}</h2>
                @endif
                <div class="cards">
                    @if($ads)
                    @foreach($ads as $ad)
                        <div class="card">
                            <a href="{{route('ads', $ad)}}" class="card__image">
                                <img src="{{ asset('storage/ads/' . optional($ad->images->first())->image) }}" alt="{{$ad->title}}">
                            </a>
                            <div class="card__body">
                                <a href="{{route('ads', $ad)}}" class="card__title">{{$ad->title}}</a>
                                <p class="card__price">{{$ad->price}} ₽</p>
                                <p class="card__city">Санкт-Петербург</p>
                                <p class="card__time">{{$ad->created_at->diffForHumans()}}</p>
                                {{--                            <div class="card__btns">--}}
                                {{--                                <button class="card__favorite"></button>--}}
                                {{--                                <div class="card__more">--}}
                                {{--                                    <button class="card__more-btn">•••</button>--}}
                                {{--                                    <div class="card__tooltip">--}}
                                {{--                                        <i></i>--}}
                                {{--                                        <h4 class="card__tooltip-title">Скрыть рекомендацию</h4>--}}
                                {{--                                        <div class="card__tooltip-list">--}}
                                {{--                                            <button>Не интересует это объявление</button>--}}
                                {{--                                            <button>Не интересует эта категория</button>--}}
                                {{--                                            <button>Не подходит город или регион</button>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                            </div>--}}
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>

</main>
