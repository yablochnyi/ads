<main class="main">
    <div class="container">
        <div class="recommendation">
            <h1 class="subtitle">Поиск по запросу: {{$q}}</h1>
            @if($emptyAds)
                <h2 class="subtitle">{{$emptyAds}}</h2>
            @endif
            <div class="cards">
                @if($ads)
                    @foreach($ads as $ad)
                        <div class="card">
                            <a href="{{route('ads', ['category' => $ad->category, 'ads' => $ad])}}" class="card__image">
                                <img src="{{ asset('storage/ads/' . optional($ad->images->first())->image) }}" alt="{{$ad->title}}">
                            </a>
                            <div class="card__body">
                                <a href="{{route('ads', ['category' => $ad->category, 'ads' => $ad])}}" class="card__title">{{$ad->title}}</a>
                                <p class="card__price">{{$ad->price}} ₽</p>
                                <p class="card__city">Санкт-Петербург</p>
                                <p class="card__time">{{$ad->created_at->diffForHumans()}}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</main>
