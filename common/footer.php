
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

    function toggleMenu(action) {
        if (action === 'open') {
            $('header nav').addClass('open');
            $('header .backdrop').css('display', 'block');
        } else if (action === 'close') {
            $('header nav').removeClass('open');
            $('header .backdrop').css('display', 'none');
        }
    }

    $('.js-open-menu').click(function() {
        toggleMenu('open');
    });

    $('.js-close-menu, .js-close-backdrop').click(function() {
        toggleMenu('close');
    });

</script>