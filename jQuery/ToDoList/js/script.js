$("ul").on("click", "li", function() {
    // if($(this).css("color") === "rgb(0, 0, 0)")
    //     $(this).css({color: "gray", textDecoration: "line-through"});
    // else
    //     $(this).css({color: "black", textDecoration: "none"});

    $(this).toggleClass("completed");
});

$("ul").on("click", "span", function(event) {
    $(this).parent().fadeOut(500, function() {
        $(this).remove();
    });
    event.stopPropagation();
});


$("input[type='text']").keypress(function(event) {
    if(event.which === 13){
        var activity = $(this).val();
        $(this).val("");
        $("ul").append("<li><span><i class='fa fa-trash'></i></span>" + activity + "</li>");
    }
});
