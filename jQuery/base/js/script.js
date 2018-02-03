// $(function(){
//     selecting tags
//     $("p").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     selecting atributes
//     $("input[type='text']").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     selecting ids
//     $("#list").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     selecting classes
//     $(".red-box").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     selecting multiples tags
//     $("h2, p, input").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     selecting first
//     $("p:first").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     selecting last
//     $("p:last").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     selecting even ones
//     $("li:even").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     selecting odd ones
//     $("li:odd").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     selecting type of tag
//     $("input:text").css("background-color","rgba(180, 180, 30, 0.8)");
//     $("input:selected").css("background-color","rgba(180, 180, 30, 0.8)");
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $("#list").find("li").css("background-color","rgba(180, 180, 30, 0.8)");
//     $("#list").children("li").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     $("#list").parent().css("background-color","rgba(180, 180, 30, 0.8)");
//     $("#list").parents().css("background-color","rgba(180, 180, 30, 0.8)");
//     $("#list").parents("div").css("background-color","rgba(180, 180, 30, 0.8)");
//     $("#list").parents("body").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     $("#list").siblings().css("background-color","rgba(180, 180, 30, 0.8)");
//     $("#list").siblings("p").css("background-color","rgba(180, 180, 30, 0.8)");
//     $("#list").siblings(":header").css("background-color","rgba(180, 180, 30, 0.8)");
//
//     $("#list").prev().css("background-color","rgba(180, 180, 30, 0.8)");
//     $("#list").next().css("background-color","rgba(180, 180, 30, 0.8)");
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    $("ul ul:first").append("<li>I'm gonna be the last sub-item</li>");
//    $("<li>I'm gonna be the last sub-item</li>").appendTo($("ul ul:first"));

//    $("ul ul:first").prepend("<li>I'm gonna be the last sub-item</li>");
//    $("<li>I'm gonna be the last sub-item</li>").prependTo($("ul ul:first"));

//    $(".red-box").after("<div class='red-box'>Another Red</div>");
//    $(".red-box").before("<div class='red-box'>Another Red</div>");
//    $(".red-box").before(function(){
//        return "<div class='red-box'>Another Red</div>";
//    });
//    $(".blue-box").before($(".red-box"));
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    $("li").replaceWith("<li>Replaced</li>")
//    $("li").replaceWith(fucntion(){
//        return "<li>Replaced with function</li>"
//    });
//    $(".red-box, .blue-box").replaceWith("<div class='green-box'>More Green</div>");
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    $("li").remove();
//    $("form").children().not("input:text, textarea").remove();
//    $("p:first").empty();
//    $(".red-box, .blue-box, .green-box").empty();
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    console.log($("#special_link").attr("href"))
//    $("#special_link").attr("href", "http://www.google.com");
//    $("input:checkbox").prop("checked");  //will return true or false
//    $("input:text").val();
//    $("input:text").val("Peter");
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $(".blue-box").hide();
//     $(".blue-box").show();
//     $(".blue-box").toggle();
//     $(".blue-box").show(1000);
//     $(".blue-box").hide(1000);
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $(".red-box").fadeOut(2000);
//     $(".green-box").fadeOut(2000);
//
//     $(".red-box").fadeIn(2000);
//
//     $(".blue-box").fadeTo(2000, 0.5);
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $(".red-box").fadeTo(2000, 0.25);
//     $(".green-box").fadeTo(2000, 0.5);
//     $(".blue-box").fadeTo(2000, 0.75);
//
//     $('.blue-box').fadeToggle(2000);
//     $('.blue-box').fadeToggle(2000);
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $(".blue-box").slideToggle(2000);
//     //$(".blue-box").slideUp(2000);
//     $(".blue-box").slideDown(2000);
//     $("p").hide();
//     $("p").slideDown(1000);
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $(".blue-box").animate({
//         "margin-left": "+=200px"
//     }, 2000, "linear");
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $(".blue-box").animate({
//         "margin-left": "200px",
//         "opacity": "0",
//         "height": "50px",
//         "width": "50px",
//         "margin-top": "25px"
//     }, 1000);
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $("p").animate({
//         "font-size": "20px"
//     }, 1000);
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $(".red-box").fadeTo(1000, 0.2);
//     $(".green-box").delay(1000).fadeTo(1000, 0.2);
//     $(".blue-box").delay(2000).fadeTo(1000, 0.2);
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $(".red-box").fadeTo(1000, 0.2,function(){
//         $(".green-box").fadeTo(1000, 0.2,function(){
//             $(".blue-box").fadeTo(1000, 0.2);
//         });
//     });
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $(".lightbox").delay(500).fadeIn(1000);
// });
