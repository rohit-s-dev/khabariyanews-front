// ==================================================================================
$(document).ready(function(){

    // marqueeJs
    $('.marquee').marquee({
        //speed in milliseconds of the marquee
        duration: 12000,
        //gap in pixels between the tickers
        gap: 50,
        //time in milliseconds before the marquee will start animating
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true,
        allowCss3Support: true,
        pauseOnHover: true
    });

    // subscribe us modal 
    $('.subscribe_us').on('click', function(){

        $('#exampleModalCenter').modal('show');
        $('.main-container').addClass('blur');

        $('#exampleModalCenter').on('hidden.bs.modal', function (e) {
            $('.main-container').removeClass('blur');
          });
    });

    // data and time

    var date = moment().format('M/D/Y');
    var time = moment().format('h:mm:ss a');
    
    $('.date').text(date);
    $('.time').text(time);
    
});