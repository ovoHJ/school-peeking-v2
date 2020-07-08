;(function($) {
    // DOM Ready
    $(function() {
        // Binding a click event
        // From jQuery v.1.7.0 use .on() instead of .bind()
        $('#my-button').bind('click', function(e) {
            var self = $(this) //button
                , content = $('.content');
            $('element_to_pop_up').bPopup({
                onOpen: function() {
                    alert('하이');
                    content.html(self.data('bpopup') || '');
                },
                onClose: function() {
                    content.empty();
                }
            });
            // Prevents the default action to be triggered.
            e.preventDefault();
            // Triggering bPopup when click event is fired
            $('#element_to_pop_up').bPopup();
        });
    });
})(jQuery);

document.getElementById('video1').addEventListener('ended', function(e) {

    document.getElementById('video1').get(0).currentTime();

})