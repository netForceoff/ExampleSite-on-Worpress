let elem = document.querySelector('.calc-range');
let init = new Powerange(elem, { min: 100000, max: 3000000, start: 100000, hideRange: true, step: 100000 });
let per = 0.2;
let month = 6;
let result, total, monthly;
let money = +$('.calc-range').val();



$('input[name="programm"]').on('change', function() {
    per = +$(this).attr('data-per');
    month = +$(this).attr('data-month');
    $('#month').text(month);
    getSumm(per, month, money)
});

$('.calc-range').on("change", function() {
    $('.calc-summ_invest_num span').text($(this).val().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
    let radio = $('input[name="programm"]:checked');
    money = +$(this).val();
    per = +radio.attr('data-per');
    month = +radio.attr('data-month');
    getSumm(per, month, money);
});

function getSumm(per, month, money) {
    result = Math.round(per / 12 * month * parseInt(money));
    total = result + parseInt(money);
    monthly = parseInt(result / month);
    $('#total').text(total.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
    $('.calc-monthly span').text(monthly.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
}
