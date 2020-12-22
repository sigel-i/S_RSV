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

$('[name="link"]').change(function () {
    var val = $('[name=link]').val();
    location.href = val;
});


$('input').on('focusin', function () {
    $(this).parent().find('label').addClass('active');
});

$('input').on('focusout', function () {
    if (!this.value) {
        $(this).parent().find('label').removeClass('active');
    }
});

$(function () {
    var topBtn = $("#page-top");
    topBtn.hide();
    //スクロールが600に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $("body,html").animate(
            {
                scrollTop: 0,
            },
            500
        );
        return false;
    });
});
