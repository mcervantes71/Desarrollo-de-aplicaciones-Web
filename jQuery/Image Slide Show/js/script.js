$(function(){
    var preview = $(".preview").find("img");
    preview.css("width", "33%").css("opacity", "0.7");

    preview.mouseenter(function(){
        $(this).stop().fadeTo(500, 1);
    });

    preview.mouseleave(function(){
        $(this).stop().fadeTo(500, 0.7);
    });

    preview.click(function(){
        var source = $(this).attr("src");
        var image = $("<img>").attr("src", source).css("width","100%");
        $(".lightbox").empty().append(image).fadeIn(2000);
    });

    $(".lightbox").click(function(){
        $(this).stop().fadeOut();
    });

    /* * * * * * * * * * * * * * * * * * * * * * * * * * */
    var galleryImage = $(".gallery").find("img").first();

    galleryImage.css("width", "100%");

    var images =[
        "images/laptop-mobile_small.jpg",
        "images/laptop-on-table_small.jpg",
        "images/people-office-group-team_small.jpg",
    ];

    var i = 0;

    setInterval(function(){
        i = (i + 1) % images.length;
        galleryImage.fadeOut(function(){
            $(this).attr("src", images[i]);
            $(this).fadeIn(2000);
        });
        //console.log(galleryImage.attr("src"));
    }, 3000);

    function switchImage(){
        i = (i + 1) % images.length;
        galleryImage.fadeOut(function(){
            $(this).attr("src", images[i]);
            $(this).fadeIn(2000);
        });
    }

    galleryImage.on("click", switchImage)
});
