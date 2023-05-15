<form action="#" class="calc">
    <div class="container">
        <div class="calc__wrap">
            <div class="calc__item">
                <div class="calc__item-top">
                    <div class="calc__item-title">Стоимость недвижимости</div>
                    <div class="calc__item-current price-total"></div>
                </div>
                <div class="calc__input">
                    <input type="range" name="price" min="1000" max="30000000" step="1000" value="1000000"
                           class="calc-change">
                    <div class="calc__input-min calc__input-sub price-min"></div>
                    <div class="calc__input-max calc__input-sub price-max"></div>
                </div>
            </div>
            <div class="calc__item">
                <div class="calc__item-top">
                    <div class="calc__item-title">Первоначальный взнос</div>
                    <div class="calc__item-double">
                        <div class="calc__item-current first-percent"></div>
                        <div class="calc__item-current-sub first-total"></div>
                    </div>
                </div>
                <div class="calc__input">
                    <input type="range" name="first" min="0" max="2050000" step="1000" value="100000" class="calc-change">
                    <div class="calc__input-min calc__input-sub first-min"></div>
                    <div class="calc__input-max calc__input-sub first-max"></div>
                </div>
            </div>
            <div class="calc__item">
                <div class="calc__item-top">
                    <div class="calc__item-title">Срок кредитования</div>
                    <div class="calc__item-current time-total"></div>
                </div>
                <div class="calc__input">
                    <input type="range" name="time" min="1" max="30" step="1" value="10" class="calc-change">
                    <div class="calc__input-min calc__input-sub time-min"></div>
                    <div class="calc__input-max calc__input-sub time-max"></div>
                </div>
            </div>
            <div class="calc__item calc__total">
                <div class="calc__item-top">
                    <div class="calc__item-title">Ежемесячный платеж</div>
                    <!--      data-percent - ставка ипотеки % - подставить нужную.         -->
                    <div class="calc__item-total percent" data-percent="9"></div>
                </div>
                <button type="submit" class="button yellow">Отправить заявку на расчет</button>
            </div>
        </div>
        <div class="calc__attention">
            <strong>Обратите внимание.</strong> Окончательный расчет производится банком после предоставления полного комплекта документов.
        </div>
        <div class="calc__banks">
            <div class="calc__bank">
                <div class="calc__bank-name">
                    <img src="/img/otkritie.png" alt="Открытие" class="calc__bank-logo">
                    <span>Открытие</span>
                </div>
                <div class="calc__bank-info">
                    <span>9%</span>
                    <span>до 30 лет</span>
                    <span>34 599 ₽</span>
                </div>
            </div>
            <div class="calc__bank">
                <div class="calc__bank-name">
                    <img src="/img/vtb.png" alt="ВТБ" class="calc__bank-logo">
                    <span>ВТБ</span>
                </div>
                <div class="calc__bank-info">
                    <span>9%</span>
                    <span>до 30 лет</span>
                    <span>34 599 ₽</span>
                </div>
            </div>
            <div class="calc__bank">
                <div class="calc__bank-name">
                    <img src="/img/sber.png" alt="Сбербанк" class="calc__bank-logo">
                    <span>Сбербанк</span>
                </div>
                <div class="calc__bank-info">
                    <span>9%</span>
                    <span>до 30 лет</span>
                    <span>34 599 ₽</span>
                </div>
            </div>
            <div class="calc__bank">
                <div class="calc__bank-name">
                    <img src="/img/alfa.png" alt="Альфа-Банк" class="calc__bank-logo">
                    <span>Альфа-Банк</span>
                </div>
                <div class="calc__bank-info">
                    <span>9%</span>
                    <span>до 30 лет</span>
                    <span>34 599 ₽</span>
                </div>
            </div>
        </div>
    </div>
</form>