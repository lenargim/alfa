<?php include('partials/head.php'); ?>
<?php include('partials/header.php'); ?>
<div class="banner banner_single" style="background-image: url('/img/banner-single.jpg')">
    <div class="container">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <a href="/apartments.php">Квартиры</a>
            <span>Двухкомнатная, 41 м²</span>
        </div>
        <h1 class="heading">Двухкомнатная, 41 м²</h1>
    </div>
</div>

<div class="apartment">
    <div class="container">
        <div class="apartment__wrap">
            <div class="slider__wrap">
                <div class="slider">
                    <div class="navigation">
                        <div class="slider-prev slider__arrow slider__prev"></div>
                        <div class="slider-next slider__arrow slider__next"></div>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider__img"><img src="/img/apartment1.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider__img"><img src="/img/apartment2.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider__img"><img src="/img/apartment3.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider__img"><img src="/img/apartment4.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider__img"><img src="/img/apartment5.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="slider__thumb">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/img/apartment1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/img/apartment2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/img/apartment3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/img/apartment4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/img/apartment5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="apartment__info">
                <h3 class="heading">Двухкомнатная, 41 м²</h3>
                <div class="apartment__address">г. Тюмень, ул. Одесская, д. 43</div>
                <div class="apartment__price"><span>от 3 440 000 ₽</span><span>102 627 ₽/м²</span></div>
                <div class="apartment__tables">
                    <div class="apartment__table">
                        <div class="apartment__table-row"><span>Номер объекта</span><span>1327953</span></div>
                        <div class="apartment__table-row"><span>Тип</span><span>Квартира</span></div>
                        <div class="apartment__table-row"><span>Статус</span><span>Продажа</span></div>
                        <div class="apartment__table-row"><span>Площадь</span><span>41 м²</span></div>
                        <div class="apartment__table-row"><span>Этаж</span><span>4 из 4</span></div>
                    </div>
                    <div class="apartment__table">
                        <div class="apartment__table-row"><span>Год постройки</span><span>1962</span></div>
                        <div class="apartment__table-row"><span>Район</span><span>КПД</span></div>
                        <div class="apartment__table-row"><span>Материал стен</span><span>Кирпичный</span></div>
                        <div class="apartment__table-row"><span>Ремонт</span><span>Евроремонт</span></div>
                    </div>
                </div>
                <div class="apartment__desc read-more" data-max="295">Продается 2-х комнатная квартира в кирпичном доме.
                    Дом находится в одном из популярных районов города Тюмени-КПД. Двор очень тихий и спокойный, так как
                    находится вдалеке от шумных дорог. Отличный
                    район с развитой инфраструктурой. Все необходимые магазины дратути
                </div>
            </div>
        </div>
        <div class="apartment__blocks">
            <div class="apartment__block apartment__question">
                <div class="apartment__question-text">
                    <div class="apartment__question-title">Задать вопрос агенту</div>
                    <div class="apartment__question-person">
                        <img src="/img/consult.png" alt="Наталья Уварова" class="apartment__question-img">
                        <div class="apartment__question-info">
                            <div class="apartment__question-name">Наталья Уварова</div>
                            <div class="apartment__question-position">Специалист по недвижимости</div>
                            <a href="tel:88002602502" class="apartment__question-phone">8 800 260 25 02</a>
                            <button class="apartment__question-call">Я не дозвонился</button>
                        </div>
                    </div>
                </div>
                <form action="" class="apartment__question-form">
                    <input type="text" placeholder="Введите телефон" class="form__input tel">
                    <button type="submit" class="button yellow medium">Задать вопрос</button>
                    <div class="apartment__question-after">Оставляя заявку, вы соглашаетесь с&nbsp;<a href="#"
                                                                                                      class="link">Политикой&nbsp;конфиденциальности</a>
                    </div>
                </form>
            </div>
            <div class="apartment__block apartment__schedule">
                <div class="apartment__schedule-title">Запланируйте просмотр</div>
                <form action="#" class="apartment__schedule-form">
                    <div class="apartment__schedule-radio">
                        <div class="apartment__schedule-item">
                            <input type="radio" name="schedule" value="06.03" id="06.03">
                            <label for="06.03">
                                <div>сегодня</div>
                                <div>6 марта</div>
                            </label>
                        </div>
                        <div class="apartment__schedule-item">
                            <input type="radio" name="schedule" value="07.03" id="07.03" checked>
                            <label for="07.03">
                                <div>завтра</div>
                                <div>7 марта</div>
                            </label>
                        </div>
                        <div class="apartment__schedule-item">
                            <input type="radio" name="schedule" value="08.03" id="08.03">
                            <label for="08.03">
                                <div>чт</div>
                                <div>08</div>
                            </label>
                        </div>
                        <div class="apartment__schedule-item">
                            <input type="radio" name="schedule" value="09.03" id="09.03">
                            <label for="09.03">
                                <div>пт</div>
                                <div>09</div>
                            </label>
                        </div>
                        <div class="apartment__schedule-item">
                            <input type="radio" name="schedule" value="10.03" id="10.03">
                            <label for="10.03">
                                <div>сб</div>
                                <div>10</div>
                            </label>
                        </div>
                        <div class="apartment__schedule-item">
                            <input type="radio" name="schedule" value="11.03" id="11.03">
                            <label for="11.03">
                                <div>вс</div>
                                <div>11</div>
                            </label>
                        </div>
                        <div class="apartment__schedule-item">
                            <input type="radio" name="schedule" value="12.03" id="12.03">
                            <label for="12.03">
                                <div>пн</div>
                                <div>12</div>
                            </label>
                        </div>
                    </div>
                    <div class="apartment__schedule-row">
                        <input type="text" placeholder="Введите телефон" class="form__input tel">
                        <button type="submit" class="button yellow medium">Согласовать время</button>
                    </div>
                    <div class="apartment__question-after">Оставляя заявку, вы соглашаетесь с&nbsp;<a href="#"
                                                                                                      class="link">Политикой&nbsp;конфиденциальности</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="apartment__calc">
        <h3 class="heading">Рассчитайте ежемесячный платеж по ипотеке</h3>
        <?php include('partials/calc.php'); ?>
    </section>
</div>
<section class="list">
    <div class="container">
        <h3 class="heading">Квартиры рядом</h3>
        <div class="list__wrap">
            <?php include('partials/apartment.php'); ?>
            <?php include('partials/apartment.php'); ?>
            <?php include('partials/apartment.php'); ?>
            <?php include('partials/apartment.php'); ?>
        </div>
    </div>
</section>


<?php include('partials/consult.php'); ?>
<?php include('partials/footer.php'); ?>
