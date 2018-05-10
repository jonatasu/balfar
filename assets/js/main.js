AOS.init({
  offset: 150,
  duration: 1200,
  easing: 'ease-in-out',
  delay: 100,
  disable: 'mobile',
  once: true
});

const isOnScreen = element => {
  let win = $(window);

  let screenTop = win.scrollTop();
  let screenBottom = screenTop + win.height();

  let elementTop = element.offset().top;
  let elementBottom = elementTop + element.height();

  return elementBottom > screenTop && elementTop < screenBottom;
};

$(document).ready(function () {
  $('.lazy-img img').on('load', function(){
    $(this).addClass('loaded');
  });

  $(document).on('scroll', function () {
    loadImgs();

    $(this).scrollTop() > 100 ? $('.back-to-top').fadeIn('slow') : $('.back-to-top').fadeOut('slow');
  });

  var headerHeight = $('#topbar').height() + $('#header-sticky-wrapper').height();

  $('.scroll-to-it').click(function(e){
    e.preventDefault();
    let elem = $(this);

    if( elem.attr('href') != "" && elem.attr('href').charAt(0) == '#'){
      let it = $($(this).attr('href'));
      
      if( it.length > 0 ){
        $('html, body').animate({scrollTop : (it.offset().top + headerHeight)}, 1500);
        return false;
      }
    }    
  });

  $('.carousel').on('slid.bs.carousel', function () {
    loadImgs();
  });

  // Stick the header at top on scroll
  $("#header").sticky({topSpacing:0, zIndex: '50'});

  if( $('body.home').length === 1 ){
    var player;
    function onYouTubePlayerAPIReady() {
      player = new YT.Player('ytplayer', {
        height: '360',
        width: '640',
        videoId: $('.video a').data('ytid')
      });
    }
  }

  $('.cart-and-search').on('click', '.search', function(e){
    e.preventDefault();
    $('.morphsearch-input').trigger('focus').focus();
  });

  $('.calculadora-web').on('submit', 'form', function(e){
    e.preventDefault();
    mudarEtapa( $(this).attr('action') );
    return false;
  });

  $('.calculadora-web').on('click', 'a.local', function (e) {
    e.preventDefault();
    !$(this).hasClass('selecionado') && $('a.local.selecionado').removeClass('selecionado') && $(this).addClass('selecionado');
  
    $('.form-content:visible').hide();
  
    $('#' + $(this).data('local')).fadeIn('fast');
  
  });

  $('.gal-peq').on('click', '.athumb', function(e){
    e.preventDefault();
    $('.bigger-pic div.lazy-img img').attr({
      'src': $(this).attr('href'),
      'data-src': $(this).attr('href')
    });
  });

  const mudarEtapa = etapa => {
    $('.etapas').hide() && $(etapa).fadeIn('slow') && $('.etapas').removeClass('d-none');
    let it = $('.calculadora-web');
    $('html, body').animate({scrollTop : ( $(window).width() <= 768 ? ($('.etapas:visible').offset().top - headerHeight) : (it.offset().top - (headerHeight/2)) )   }, 1000);
  };

  const loadImgs = _ => {
    $.each( $('.lazy-img'), function(){
      let block = $(this);
      let img = block.find('img');

      if( isOnScreen(block) && !img.hasClass('loaded') ){
        let imgUrl = img.data('src');

        if( img.attr('src') != imgUrl ){
          img.attr('src', imgUrl);
        }        
      }
    } );
  };

  const toMoney = n => n.replace(/(\d)(?=(\d{3})+(?!\d))/g, "1.");

  var el, newPoint, newPlace, offset;

  // Select all range inputs, watch for change
  $(".custom-range input[type='range']").change(function () {

    // Cache this for efficiency
    el = $(this);

    // Measure width of range input
    width = el.width();

    // Figure out placement percentage between left and right of input
    newPoint = (el.val() - el.attr("min")) / (el.attr("max") - el.attr("min"));

    offset = -1;

    // Prevent bubble from going beyond left or right (unsupported browsers)
    if (newPoint < 0) {
      newPlace = 0;
    } else if (newPoint > 1) {
      newPlace = width;
    } else {
      newPlace = width * newPoint + offset;
      offset -= newPoint;
    }

    let money = toMoney(el.val())

    // Move bubble
    el
      .next("output")
      .css({
        left: newPlace,
        marginLeft: (offset - 13) + "%"
      })
      .text(`R$ ${money}`);
  }).trigger('change');

  loadImgs();
});