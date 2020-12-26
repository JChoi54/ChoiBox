document.addEventListener("DOMContentLoaded", function(event){
    window.addEventListener("load", function(e){

        document.body.style.display = "block";

        var t1 = new TimelineMax();

        t1.staggerFrom('h1, h2, .rectangle, .image img, .logo, .animate', .7, {
            opacity: 0,
            y: -40,
            ease: Power2.easeInOut
        }, 0.15);


    }, false);

    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop() > 0 ){
                $(".title").css({"opacity" : "0"})
            }
            else{
                $(".title").css({"opacity" : "1"})
            }
        })


    });

});
