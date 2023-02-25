<main class="main">
    <div class="container">
        @if($selectedCategory)
            <div class="category category__select" style="display: none;">
                <h2 class="title">Категория</h2>
                <div class="category__wrap">
                    <ul class="category__box category__box--active">
                        @foreach($categories as $category)
                            <li><a wire:click.prevent="subcategory({{$category->id}})"
                                   href="#">{{$category->title}}</a></li>
                        @endforeach
                    </ul>
                    @if($subcategories)
                        <ul class="category__box category__box--active">
                            @foreach($subcategories as $category)
                                <li><a wire:click.prevent="subsubcategory({{$category->id}})"
                                       href="#">{{$category->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    @if($subsubcategories)
                        <ul class="category__box category__box--active">
                            @foreach($subsubcategories as $category)
                                <li><a wire:click.prevent="selectedCategoryId({{$category->id}})"
                                       href="#">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        @else
            <div class="category category__select">
                <h2 class="title">Категория</h2>
                <div class="category__wrap">
                    <ul class="category__box category__box--active">
                        @foreach($categories as $category)
                            <li><a wire:click.prevent="subcategory({{$category->id}})"
                                   href="#">{{$category->title}}</a></li>
                        @endforeach
                    </ul>
                    @if($subcategories)
                        <ul class="category__box category__box--active">
                            @foreach($subcategories as $category)
                                <li><a wire:click.prevent="subsubcategory({{$category->id}})"
                                       href="#">{{$category->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    @if($subsubcategories)
                        <ul class="category__box category__box--active">
                            @foreach($subsubcategories as $category)
                                <li><a wire:click.prevent="selectedCategoryId({{$category->id}})"
                                       href="#">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        @endif
        @if($selectedCategory)
            <div class="category__page" style="display: block;">
                <div class="category__head">
                    <h2 class="title">Категория</h2>
                    <a href="#" class="category__link">{{$parentCategoryName}} / {{$subCategoryName}}
                        / {{$subSubCategoryName}} </a>
                </div>
                <form class="category__content">
                    <div class="category__item">
                        <h3 class="category__title">Параметры</h3>
                        <div class="category__flex">
                            <h4 class="category__subtitle">Название</h4>
                            <div class="category__group">
                                <input wire:model.defer="title" type="text" name="street" placeholder="Название">
                            </div>
                        </div>
                        <div class="category__flex">
                            <h4 class="category__subtitle">Описание</h4>
                            <div class="category__group">
                                <textarea style="width: 400px" rows="6" wire:model.defer="description" type="text" name="street"
                                          placeholder="Описание"></textarea>
                            </div>
                        </div>
                        <div class="category__flex">
                            <h4 class="category__subtitle">Цена</h4>
                            <div class="category__group">
                                <input wire:model.defer="price" style="width: 100px" type="text" name="street" placeholder="Цена">
                            </div>
                        </div>
                        <div class="category__flex">
                            <h4 class="category__subtitle">Изображения</h4>
                            @if ($images)
                                @foreach($images as $image)
                                    <label for="file-upload" class="custom-file-upload">
                                        <img src="{{ $image->temporaryUrl() }}">
                                    </label>
                                @endforeach
                            @endif
                            <div class="category__group">
                                <label for="file-upload" class="custom-file-upload">
                                    <img src="{{asset('assets/images/upload.JPG')}}" alt="Upload Image">
                                </label>
                                <input wire:model="images"  id="file-upload" multiple type="file" value=""/>
                            </div>
                        </div>
                    </div>
                    <div class="category__item">
                        <h3 class="category__title">Расположение</h3>
                        <div class="category__flex">
                            <h4 class="category__subtitle">Адрес</h4>
                            <div class="category__group">
                                <input wire:model.defer="address" type="text" name="street"
                                       placeholder="Улица и номер дома">
                            </div>
                        </div>
                    </div>
                    <div class="category__item">
                        <div class="category__flex category__flex--phone">
                            <h4 class="category__subtitle">Телефон</h4>
                            <div class="category__group">
                                <div class="category__phone">
                                    <input type="tel" name="phone" wire:model.defer="phone">
                                </div>
                            </div>
                        </div>
                        <div class="category__flex">
                            <h4 class="category__subtitle">Способ связи</h4>
                            <div class="category__group">
                                <label class="category__radio">
                                    <input wire:model="communication" type="radio" name="type2" value="tel_and_mes" checked>
                                    <span class="category__radio-icon"></span>
                                    <span
                                        class="category__radio-text">По телефону и в сообщениях</span>
                                </label>
                                <label class="category__radio">
                                    <input wire:model="communication" type="radio" name="type2" value="tel">
                                    <span class="category__radio-icon"></span>
                                    <span class="category__radio-text">По телефону</span>
                                </label>
                                <label class="category__radio">
                                    <input wire:model="communication" type="radio" name="type2" value="mes">
                                    <span class="category__radio-icon"></span>
                                    <span class="category__radio-text">В сообщениях</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="category__btns">
                        <button wire:click="create(0)" class="category__btn">Сохранить и выйти</button>
                        <button wire:click="create(1)" class="category__btn category__btn--blue">Опубликовать</button>
                    </div>
                </form>
            </div>
        @endif
    </div>
</main>

