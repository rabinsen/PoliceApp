$(function () {
    //Textare auto growth
    autosize($('textarea.auto-growth'));

    //Datetimepicker plugin
    $('.datepicker').bootstrapMaterialDatePicker({
        format: ' DD MMMM YYYY',
        clearButton: true,
        weekStart: 1,
        time: false
    });

    $('#ere_fab').ionRangeSlider({
        min: 0,
        max:100,
        keyboard: true,
        keyboard_step:1,
        step: 1,
        grid: true,
        grid_num: 10,
        postfix: "% erection"
    });
});