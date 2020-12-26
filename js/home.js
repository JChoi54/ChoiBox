document.addEventListener("DOMContentLoaded", function(event){
    window.addEventListener("load", function(e){

        document.body.style.display = "block";

        var t1 = new TimelineMax();

        t1.staggerFrom('section', 2,{
            opacity: 0,
            scale: 0.5,
            ease: Power2.easeOut
        }, 0.2)

        t1.staggerFrom('h1, h2', .5, {
            opacity: 0,
            y: -40,
            ease: Power2.easeInOut
        }, 0.2, "-=2")

        t1.staggerFrom('.animate', 1, {
            opacity: 0,
            y: -40,
            ease: Power2.easeInOut
        }, 0.2, "-=1.5")
    }, false);
});

