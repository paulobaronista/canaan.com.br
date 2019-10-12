<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php
echo script_tag('assets/js/jquery.clearinput.js');
echo script_tag('assets/js/jFuncoes.js');
echo script_tag('assets/js/bootstrap.min.js');
echo script_tag('assets/js/wow.min.js');
echo script_tag('assets/js/slick.min.js');
?>
<script>

$(document).ready(function() {
    $('.slick_produtos').slick({
        dots: false,
        centerMode: true,
        centerPadding: '0px',
        arrows: true,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 993,
                settings: {
                    centerMode: true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 769,
                settings: {
                    centerMode: true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: true,
                    slidesToShow: 1
                }
            }
        ]
    });
});
</script>

</body>
</html>
