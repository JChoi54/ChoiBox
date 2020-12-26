document.addEventListener("DOMContentLoaded", function(event){
    window.addEventListener("load", function(e){

        document.body.style.display = "block";

        var t1 = new TimelineMax();

        t1.staggerFrom('h1, .rectangle, img, .border, .about', .5, {
            opacity: 0,
            y: -40,
            ease: Power2.easeInOut
        }, 0.1);

    }, false);
});