<form action="" class="search" autocomplete="off">
    <div class="search__main">
        <div class="search__type">
            <div class="search__type-item">
                <input type="radio" class="search__type-input" id="type-app" name="type" checked>
                <label for="type-app" class="search__type-label">
                    <img src="/img/apartment.png" alt="Квартиры">
                    <span>Квартиры</span>
                </label>
            </div>
            <div class="search__type-item">
                <input type="radio" class="search__type-input" id="type-complex" name="type">
                <label for="type-complex" class="search__type-label">
                    <img src="/img/apartment.png" alt="ЖК">
                    <span>ЖК</span>
                </label>
            </div>
            <div class="search__type-item">
                <input type="radio" class="search__type-input" id="type-suburban" name="type">
                <label for="type-suburban" class="search__type-label">
                    <img src="/img/apartment.png" alt="Загородная">
                    <span>Загородная</span>
                </label>
            </div>
        </div>
        <div class="search__search">
            <input type="text" placeholder="Поиск по району, улице, ЖК" value="" id="search">
            <label for="search"><img src="/img/search.png" alt="search"></label>
        </div>
        <a href="#" class="search__map button yellow">
            <img src="/img/geo-white.png" alt="geo">
            <span>Показать на карте</span>
        </a>
    </div>
    <div class="search__filter">
        <div class="search__old search__item">
            <label class="search__label">Вид жилья</label>
            <div class="search__wrap">
                <div class="search__old-item">
                    <input type="checkbox" name="old" id="old-new">
                    <label class="button transparent small" for="old-new">Новостройка</label>
                </div>
                <div class="search__old-item">
                    <input type="checkbox" name="old" id="old-old">
                    <label class="button transparent small" for="old-old">Вторичная</label>
                </div>
            </div>
        </div>
        <div class="search__rooms search__item">
            <label class="search__label">Комнатность</label>
            <div class="search__wrap">
                <div class="search__rooms-item">
                    <input type="checkbox" name="rooms" id="rooms-0">
                    <label class="button transparent small" for="rooms-0">Студия</label>
                </div>
                <div class="search__rooms-item">
                    <input type="checkbox" name="rooms" id="rooms-1">
                    <label class="button transparent small" for="rooms-1">1</label>
                </div>
                <div class="search__rooms-item">
                    <input type="checkbox" name="rooms" id="rooms-2">
                    <label class="button transparent small" for="rooms-2">2</label>
                </div>
                <div class="search__rooms-item">
                    <input type="checkbox" name="rooms" id="rooms-3">
                    <label class="button transparent small" for="rooms-3">3</label>
                </div>
                <div class="search__rooms-item">
                    <input type="checkbox" name="rooms" id="rooms-4">
                    <label class="button transparent small" for="rooms-4">4+</label>
                </div>
            </div>
        </div>
        <div class="search__price search__item">
            <label class="search__label">Цена, руб</label>
            <div class="search__wrap">
                <div class="search__price-item">
                    <input type="number" placeholder="от">
                </div>
                <div class="search__price-item">
                    <input type="number" placeholder="до">
                </div>
            </div>
        </div>
        <div class="search__square search__item">
            <label class="search__label">Площадь, м2</label>
            <div class="search__wrap">
                <div class="search__square-item">
                    <input type="number" placeholder="от">
                </div>
                <div class="search__square-item">
                    <input type="number" placeholder="до">
                </div>
            </div>
        </div>
        <div class="search__district search__item">
            <label class="search__label" for="district">Район</label>
            <div class="search__district-item">
                <input type="text" id="district" placeholder="Выбрать">
                <label for="district"><img src="/img/search.png" alt="search"></label>
            </div>
        </div>
        <div class="search__all-filter">
            <button type="button">
                <img src="/img/filter.png" alt="filter">
                <span>Все фильтры</span>
            </button>
        </div>
        <div class="search__filter-list">
            <button type="button" class="search__filter-item">Вторичная</button>
            <button type="button" class="search__filter-item reset">Сбросить все</button>
        </div>
    </div>
    <button type="submit" class="button yellow search__submit">Показать 20 145 предложений</button>
</form>