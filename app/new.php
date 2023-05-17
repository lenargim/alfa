<?php include('partials/head.php'); ?>
<?php include('partials/header.php'); ?>

<div class="banner banner_search" style="background-image: url('/img/banner-new.jpg')">
    <div class="container">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <span>Новостройки</span>
        </div>
        <h1 class="heading">Новостройки Тюмени</h1>
        <?php include('partials/search.php'); ?>
    </div>
</div>

<div class="new">
    <div class="container">
        <div class="new__top">
            <form action="#" class="filter">
                <div class="filter__item">
                    <button class="filter__button active" type="button">По рейтингу</button>
                    <div class="filter__option">
                        <input type="radio" name="new" value="rating-up" id="rating-up" checked>
                        <label for="rating-up"></label>
                    </div>
                    <div class="filter__option">
                        <input type="radio" name="new" value="rating-down" id="rating-down">
                        <label for="rating-down"></label>
                    </div>
                </div>
                <div class="filter__item">
                    <button class="filter__button" type="button">По цене</button>
                    <div class="filter__option">
                        <input type="radio" name="new" value="price-up" id="price-up">
                        <label for="price-up"></label>
                    </div>
                    <div class="filter__option">
                        <input type="radio" name="new" value="price-down" id="price-down">
                        <label for="price-down"></label>
                    </div>
                </div>
                <div class="filter__item">
                    <button class="filter__button" type="button">По сроку сдачи</button>
                    <div class="filter__option">
                        <input type="radio" name="new" value="date-up" id="date-up">
                        <label for="date-up"></label>
                    </div>
                    <div class="filter__option">
                        <input type="radio" name="new" value="date-down" id="date-down">
                        <label for="date-down"></label>
                    </div>
                </div>
            </form>
            <a href="#" class="button yellow big">
                <span>Планировки</span>
                <img src="/img/arrow-right-white.png" alt="">
            </a>
        </div>
        <div class="new__wrap" data-type="tab-1">
            <div class="item">
                <?php include('partials/favorite.php'); ?>
                <a href="/developer.php" class="link link-block">
                    <img class="img" src="/img/tab1.jpg" alt="">
                    <span class="link-block__arrow"></span>
                </a>
                <div class="info">
                    <div class="title">Звездный</div>
                    <div class="desc">Мыс</div>
                    <div class="marks">
                        <div class="mark">2 кв. 2017</div>
                        <div class="mark">3 кв. 2015</div>
                    </div>
                    <div class="table">
                        <div class="row"><span>Студия</span><span>от 4 579 569 ₽ </span></div>
                        <div class="row"><span>Однокомнатная</span><span>от 5 579 569 ₽ </span></div>
                        <div class="row"><span>Двухкомнатная</span><span>от 6 579 569 ₽ </span></div>
                        <div class="row"><span>Трехкомнатная</span><span>от 7 579 569 ₽ </span></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <?php include('partials/favorite.php'); ?>
                <a href="/developer.php" class="link link-block">
                    <img class="img" src="/img/tab2.jpg" alt="">
                    <span class="link-block__arrow"></span>
                </a>
                <div class="info">
                    <div class="title">Звездный</div>
                    <div class="desc">Мыс</div>
                    <div class="marks">
                        <div class="mark">2 кв. 2017</div>
                        <div class="mark">3 кв. 2015</div>
                    </div>
                    <div class="table">
                        <div class="row"><span>Студия</span><span>от 4 579 569 ₽ </span></div>
                        <div class="row"><span>Однокомнатная</span><span>от 5 579 569 ₽ </span></div>
                        <div class="row"><span>Двухкомнатная</span><span>от 6 579 569 ₽ </span></div>
                        <div class="row"><span>Трехкомнатная</span><span>от 7 579 569 ₽ </span></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <?php include('partials/favorite.php'); ?>
                <a href="/developer.php" class="link link-block">
                    <img class="img" src="/img/tab3.jpg" alt="">
                    <span class="link-block__arrow"></span>
                </a>
                <div class="info">
                    <div class="title">Звездный</div>
                    <div class="desc">Мыс</div>
                    <div class="marks">
                        <div class="mark">2 кв. 2017</div>
                        <div class="mark">3 кв. 2015</div>
                    </div>
                    <div class="table">
                        <div class="row"><span>Студия</span><span>от 4 579 569 ₽ </span></div>
                        <div class="row"><span>Однокомнатная</span><span>от 5 579 569 ₽ </span></div>
                        <div class="row"><span>Двухкомнатная</span><span>от 6 579 569 ₽ </span></div>
                        <div class="row"><span>Трехкомнатная</span><span>от 7 579 569 ₽ </span></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <?php include('partials/favorite.php'); ?>
                <a href="/developer.php" class="link link-block">
                    <img class="img" src="/img/tab1.jpg" alt="">
                    <span class="link-block__arrow"></span>
                </a>
                <div class="info">
                    <div class="title">Звездный</div>
                    <div class="desc">Мыс</div>
                    <div class="marks">
                        <div class="mark">2 кв. 2017</div>
                        <div class="mark">3 кв. 2015</div>
                    </div>
                    <div class="table">
                        <div class="row"><span>Студия</span><span>от 4 579 569 ₽ </span></div>
                        <div class="row"><span>Однокомнатная</span><span>от 5 579 569 ₽ </span></div>
                        <div class="row"><span>Двухкомнатная</span><span>от 6 579 569 ₽ </span></div>
                        <div class="row"><span>Трехкомнатная</span><span>от 7 579 569 ₽ </span></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <?php include('partials/favorite.php'); ?>
                <a href="/developer.php" class="link link-block">
                    <img class="img" src="/img/tab2.jpg" alt="">
                    <span class="link-block__arrow"></span>
                </a>
                <div class="info">
                    <div class="title">Звездный</div>
                    <div class="desc">Мыс</div>
                    <div class="marks">
                        <div class="mark">2 кв. 2017</div>
                        <div class="mark">3 кв. 2015</div>
                    </div>
                    <div class="table">
                        <div class="row"><span>Студия</span><span>от 4 579 569 ₽ </span></div>
                        <div class="row"><span>Однокомнатная</span><span>от 5 579 569 ₽ </span></div>
                        <div class="row"><span>Двухкомнатная</span><span>от 6 579 569 ₽ </span></div>
                        <div class="row"><span>Трехкомнатная</span><span>от 7 579 569 ₽ </span></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <?php include('partials/favorite.php'); ?>
                <a href="/developer.php" class="link link-block">
                    <img class="img" src="/img/tab3.jpg" alt="">
                    <span class="link-block__arrow"></span>
                </a>
                <div class="info">
                    <div class="title">Звездный</div>
                    <div class="desc">Мыс</div>
                    <div class="marks">
                        <div class="mark">2 кв. 2017</div>
                        <div class="mark">3 кв. 2015</div>
                    </div>
                    <div class="table">
                        <div class="row"><span>Студия</span><span>от 4 579 569 ₽ </span></div>
                        <div class="row"><span>Однокомнатная</span><span>от 5 579 569 ₽ </span></div>
                        <div class="row"><span>Двухкомнатная</span><span>от 6 579 569 ₽ </span></div>
                        <div class="row"><span>Трехкомнатная</span><span>от 7 579 569 ₽ </span></div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('partials/pagination.php'); ?>
    </div>
</div>
<?php include('partials/consult.php'); ?>
<?php include('partials/footer.php'); ?>

