<?php include('partials/head.php'); ?>
<?php include('partials/header.php'); ?>
<div class="banner banner_search" style="background-image: url('/img/banner-apartments.jpg')">
    <div class="container">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <span>Квартиры</span>
        </div>
        <h1 class="heading">Квартиры</h1>
        <?php include('partials/search.php'); ?>
    </div>
</div>

<div class="container">
    <form action="#" class="filter">
        <div class="filter__item">
            <button class="filter__button active" type="button">По дате</button>
            <div class="filter__option">
                <input type="radio" name="apartments" value="date-up" id="date-up" checked>
                <label for="date-up"></label>
            </div>
            <div class="filter__option">
                <input type="radio" name="apartments" value="date-down" id="date-down">
                <label for="date-down"></label>
            </div>
        </div>
        <div class="filter__item">
            <button class="filter__button" type="button">По площади</button>
            <div class="filter__option">
                <input type="radio" name="apartments" value="square-up" id="square-up">
                <label for="square-up"></label>
            </div>
            <div class="filter__option">
                <input type="radio" name="apartments" value="square-down" id="square-down">
                <label for="square-down"></label>
            </div>
        </div>
        <div class="filter__item">
            <button class="filter__button" type="button">По цене</button>
            <div class="filter__option">
                <input type="radio" name="apartments" value="price-up" id="price-up">
                <label for="price-up"></label>
            </div>
            <div class="filter__option">
                <input type="radio" name="apartments" value="price-down" id="price-down">
                <label for="price-down"></label>
            </div>
        </div>
        <div class="filter__item">
            <button class="filter__button" type="button">По цене за м²</button>
            <div class="filter__option">
                <input type="radio" name="apartments" value="square-for-meter-up" id="square-for-meter-up">
                <label for="square-for-meter-up"></label>
            </div>
            <div class="filter__option">
                <input type="radio" name="apartments" value="square-for-meter-down" id="square-for-meter-down">
                <label for="square-for-meter-down"></label>
            </div>
        </div>
    </form>
    <div class="apartments">
        <?php include('partials/apartment.php'); ?>
        <?php include('partials/apartment.php'); ?>
        <?php include('partials/apartment.php'); ?>

        <?php include('partials/pagination.php'); ?>
    </div>
</div>


<?php include('partials/consult.php'); ?>
<?php include('partials/footer.php'); ?>
