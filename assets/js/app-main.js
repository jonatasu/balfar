$('a.local').on('click', function (e) {
  e.preventDefault();
  !$(this).hasClass('selecionado') && $('a.local.selecionado').removeClass('selecionado') && $(this).addClass('selecionado');

  $('.form-content:visible').hide();

  $('#' + $(this).data('local')).fadeIn('fast');

});

const toMoney = n => n.replace(/(\d)(?=(\d{3})+(?!\d))/g, "1.")

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

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["2018", "2019", "2020", "2021", "2022", "2023", "2024", "2025", "2026", "2027", "2028", "2029", "2030"],
    datasets: [{
      data: [2.5, 8, 23, 28, 32, 48, 62, 77, 89, 100, 150, 180, 190],
      backgroundColor: '#ffb001',
      borderWidth: 0
    }]
  },  
  responsive: true,
  options: {
    legend: {
      labels:{
        defaultFontSize: 16
      },
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          offsetGridLines: true
        }
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});