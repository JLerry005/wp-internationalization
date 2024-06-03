// alert('sample')

jQuery(document).ready(function($) {

    const {__, _x, _n, sprintf } = wp.i18n;

    // Create the link
    let toTheTop = $('<a>', {
        href: '#',
        class: 'to-the-top',
        text: __('back to top JS', 'lerry-plugin')
    });

    // Add the link to the footer of the page
    $('footer').append(toTheTop);

});