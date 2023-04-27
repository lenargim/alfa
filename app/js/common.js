$(document).ready(function () {
  $('.tel').mask('+7(Z00) 000-00-00', {translation: {'Z': {pattern: /[0-79]/}}});
  const tabType = $("input[name='tab-type']");

  tabType.on('change', ()=>{
    const id = $("input[name='tab-type']:checked").attr('id')
    $('.tab__part').removeClass('active');
    $(`[data-type=${id}]`).addClass('active')
  })

  const mainSlider = new Swiper('.reviews__slider', {
    slidesPerView: 2,
    spaceBetween: 60,
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
    navigation: {
      nextEl: '.reviews-next',
      prevEl: '.reviews-prev',
    },
  });


  $('.check-length').each(function () {
    const text = $(this).text();
    const length = text.length;
    const max = +$(this).data('max')
    console.log( max)
    if (length > max) {
      const trimmedText = text.substring(0, max);

      $(this).text(`${trimmedText}...`)
    }
  })
})