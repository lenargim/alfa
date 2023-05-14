$(document).ready(function () {
  $('.tel').mask('+7(Z00) 000-00-00', {translation: {'Z': {pattern: /[0-79]/}}});
  const tabType = $("input[name='tab-type']");

  tabType.on('change', () => {
    const id = $("input[name='tab-type']:checked").attr('id')
    $('.tab-part').removeClass('active');
    $(`[data-type=${id}]`).addClass('active')
  })

  const mainSlider = new Swiper('.reviews__slider', {
    draggable: false,
    preloadImages: false,
    watchSlidesProgress: true,
    lazy: {
      loadOnTransitionStart: true,
    },
    speed: 400,
    pagination: {
      el: '.pagination',
      type: 'bullets',
      currentClass: 'active',
    },

    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: false
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      1280: {
        slidesPerView: 2,
        spaceBetween: 60,
        navigation: {
          nextEl: '.reviews-next',
          prevEl: '.reviews-prev',
        },
      }
    }
  });

  const developerSliderThumb = new Swiper('.slider__thumb', {
    spaceBetween: 12,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  })

  const developerSlider = new Swiper('.slider', {
    spaceBetween: 15,
    navigation: {
      nextEl: '.slider-next',
      prevEl: '.slider-prev',
    },
    thumbs: {
      swiper: developerSliderThumb
    },
  })

  const apartmentSliderThumb = new Swiper('.apartments__slider-thumb', {
    spaceBetween: 12,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });

  const apartmentSlider = new Swiper('.apartments__slider', {
    spaceBetween: 15,
    navigation: {
      nextEl: '.apartments-slider-next',
      prevEl: '.apartments-slider-prev',
    },
    // thumbs: {
    //   swiper: apartmentSliderThumb
    // },
  });



  $('.check-length').each(function () {
    const text = $(this).text();
    const length = text.length;
    const max = +$(this).data('max')
    if (length > max) {
      const trimmedText = text.substring(0, max);
      $(this).text(`${trimmedText}...`)
    }
  })

  $('.read-more').each(function () {
    const text = $(this).text();
    const length = text.length;
    const max = +$(this).data('max')
    if (length > max) {
      const trimmedText = text.substring(0, max);
      $(this).html(`${trimmedText}... <button class="link open-more" data-text="${text}">Читать все</button>`)
    }
  })

  $('.open-more').one('click', function () {
    const text = $(this).data('text');
    $(this).parents('.read-more').text(text)
  })

  $(".toggle-burger").on('click', function () {
    $('.mobile-menu').toggleClass('active')
  })

  $('.filter__button').on('click', function (e) {
    e.preventDefault();
    const $this = $(this);
    $('.filter__button').removeClass('active');
    $this.addClass('active');
    const input = $this.siblings().find('input:not(:checked)');
    input.prop('checked', true)
  })


  const rangeInputs = $('input[type="range"]');
  rangeInputs.on('change, input', function () {
    const data = {};
    data.price = Number($('input[name="price"]').val());
    const first = $('input[name="first"]');
    first.attr('max', data.price);
    data.first = Number($('input[name="first"]').val());
    data.time = Number($('input[name="time"]').val());
    data.percent = Number($('.percent').data('percent'));
    rangeInputs.each(changeInputRange)
    calc(data)
  })

  function calc(data) {
    const sum = data.price - data.first;
    const rate = data.percent / 12 /100;
    const months = data.time * 12;
    const totalRate = Math.pow(1 + rate, months);
    const payment = Math.round(sum * rate * totalRate / (totalRate - 1))
    $('.calc__item-total').text(`${new Intl.NumberFormat('ru-RU').format(payment)} ₽`)
  }

  rangeInputs.each(changeInputRange);

  function changeInputRange() {
    const min = $(this).attr('min')
    const max = $(this).attr('max')
    const val = $(this).val()
    showCalcData($(this), val)
    $(this).css({backgroundSize: (val - min) * 100 / (max - min) + '% 100%'});
  }

  function showCalcData(input) {
    let min = Number(input.attr('min'))
    let max = Number(input.attr('max'))
    let val = Number(input.val())
    const name = input.attr('name');

    if (name === 'time') {
      $(`.${name}-min`).text(`${min} ${declOfNum(min, ['год', 'года', 'лет'])}`)
      $(`.${name}-max`).text(`${max} ${declOfNum(max, ['год', 'года', 'лет'])}`)
      $(`.${name}-total`).text(`${val} ${declOfNum(val, ['год', 'года', 'лет'])}`)

    } else {
      $(`.${name}-min`).text(`${new Intl.NumberFormat('ru-RU').format(min)} ₽`)
      $(`.${name}-max`).text(`${new Intl.NumberFormat('ru-RU').format(max)} ₽`)
      $(`.${name}-total`).text(`${new Intl.NumberFormat('ru-RU').format(val)} ₽`)

      const percentTotal = Math.round(Number($('input[name="first"]').val()) / Number($('input[name="price"]').val()) * 100)
      $('.first-percent').text(`${percentTotal} %`)
    }
  }
})



function declOfNum(n, text_forms) {
  n = Math.abs(n) % 100;
  var n1 = n % 10;
  if (n > 10 && n < 20) { return text_forms[2]; }
  if (n1 > 1 && n1 < 5) { return text_forms[1]; }
  if (n1 == 1) { return text_forms[0]; }
  return text_forms[2];
}
