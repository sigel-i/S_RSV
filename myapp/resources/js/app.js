/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

$('input').on('focusin', function () {
    $(this).parent().find('label').addClass('active');
});

$('input').on('focusout', function () {
    if (!this.value) {
        $(this).parent().find('label').removeClass('active');
    }
});

$(".custom-select").each(function () {
    var classes = $(this).attr("class"),
        id = $(this).attr("id"),
        name = $(this).attr("name");
    var template = '<div class="' + classes + '">';
    template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
    template += '<div class="custom-options">';
    $(this).find("option").each(function () {
        template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
    });
    template += '</div></div>';

    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
});
$(".custom-option:first-of-type").hover(function () {
    $(this).parents(".custom-options").addClass("option-hover");
}, function () {
    $(this).parents(".custom-options").removeClass("option-hover");
});
$(".custom-select-trigger").on("click", function () {
    $('html').one('click', function () {
        $(".custom-select").removeClass("opened");
    });
    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
});
$(".custom-option").on("click", function () {
    $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".custom-select").removeClass("opened");
    $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
});

$('.datepicker').pickadate();

$('.datepicker').pickadate({
    weekdaysShort: ['日', '月', '火', '水', '木', '金', '土'],
    showMonthsShort: true
})

// Strings and translations
monthsFull: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
    'November', 'December'],
    monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        weekdaysFull: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            weekdaysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                showMonthsShort: undefined,
                    showWeekdaysFull: undefined,

                        // Buttons
                        today: 'Today',
                            clear: 'Clear',
                                close: 'Close',

                                    // Accessibility labels
                                    labelMonthNext: 'Next month',
                                        labelMonthPrev: 'Previous month',
                                            labelMonthSelect: 'Select a month',
                                                labelYearSelect: 'Select a year',

                                                    // Formats
                                                    format: 'd mmmm, yyyy',
                                                        formatSubmit: undefined,
                                                            hiddenPrefix: undefined,
                                                                hiddenSuffix: '_submit',
                                                                    hiddenName: undefined,

                                                                        // Editable input
                                                                        editable: undefined,

                                                                            // Dropdown selectors
                                                                            selectYears: undefined,
                                                                                selectMonths: undefined,

                                                                                    // First day of the week
                                                                                    firstDay: undefined,

                                                                                        // Date limits
                                                                                        min: undefined,
                                                                                            max: undefined,

                                                                                                // Disable dates
                                                                                                disable: undefined,

                                                                                                    // Root picker container
                                                                                                    container: undefined,

                                                                                                        // Hidden input container
                                                                                                        containerHidden: undefined,

                                                                                                            // Close on a user action
                                                                                                            closeOnSelect: true,
                                                                                                                closeOnClear: true,

                                                                                                                    // Events
                                                                                                                    onStart: undefined,
                                                                                                                        onRender: undefined,
                                                                                                                            onOpen: undefined,
                                                                                                                                onClose: undefined,
                                                                                                                                    onSet: undefined,
                                                                                                                                        onStop: undefined,

                                                                                                                                            // Classes
                                                                                                                                            klass: {

    // The element states
    input: 'picker__input',
        active: 'picker__input--active',

            // The root picker and states *
            picker: 'picker',
                opened: 'picker--opened',
                    focused: 'picker--focused',

                        // The picker holder
                        holder: 'picker__holder',

                            // The picker frame, wrapper, and box
                            frame: 'picker__frame',
                                wrap: 'picker__wrap',
                                    box: 'picker__box',

                                        // The picker header
                                        header: 'picker__header',

                                            // Month navigation
                                            navPrev: 'picker__nav--prev',
                                                navNext: 'picker__nav--next',
                                                    navDisabled: 'picker__nav--disabled',

                                                        // Month & year labels
                                                        month: 'picker__month',
                                                            year: 'picker__year',

                                                                // Month & year dropdowns
                                                                selectMonth: 'picker__select--month',
                                                                    selectYear: 'picker__select--year',

                                                                        // Table of dates
                                                                        table: 'picker__table',

                                                                            // Weekday labels
                                                                            weekdays: 'picker__weekday',

                                                                                // Day states
                                                                                day: 'picker__day',
                                                                                    disabled: 'picker__day--disabled',
                                                                                        selected: 'picker__day--selected',
                                                                                            highlighted: 'picker__day--highlighted',
                                                                                                now: 'picker__day--today',
                                                                                                    infocus: 'picker__day--infocus',
                                                                                                        outfocus: 'picker__day--outfocus',

                                                                                                            // The picker footer
                                                                                                            footer: 'picker__footer',

                                                                                                                // Today, clear, & close buttons
                                                                                                                buttonClear: 'picker__button--clear',
                                                                                                                    buttonClose: 'picker__button--close',
                                                                                                                        buttonToday: 'picker__button--today'
}
