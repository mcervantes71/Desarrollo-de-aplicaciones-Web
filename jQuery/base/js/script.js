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
// $(function(){
//    console.log($("#special_link").attr("href"))
//    $("#special_link").attr("href", "http://www.google.com");
//    console.log($("input:checkbox").prop("checked"));  //will return true or false
//    console.log($("input:text").val());
//    $("input:text").val("Peter");
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//    console.log($(".red-box").css("width"));
//    console.log($(".red-box").width());
//    $(".red-box").css("background-color", "red");
//    $(".red-box").css("font-size", "50px");
//    $(".red-box").css("width","+=20");
//    var properties = $(".red-box").css(["font-size", "color", "background-color"]);
//    console.log(properties);
//    console.log(properties["font-size"]);
//
//    $(".red-box").css("width",function(){
//        return "100px";
//    })
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    $("a").addClass("fancy-link");
//    $("p:first").addClass("large emphasize");
//
//    $("li li").addClass(function(index){
//        $(this).addClass("index-" + index);
//    });

//    $("div").addClass(function(index, currentClass){
//        if(currentClass === "dummy")
//        {
//            return "red-box";
//        }
//    });
//
//    $(".red-box").removeClass("red-box").addClass("green-box");
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    console.log($("p:first").text());
//    console.log($("p:first").html());
//
//    $("p:first").text("<strong>Hello World</strong>");
//    $("p:first").html("<strong>Hello World</strong>");
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
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    $("#btn").click(function(event){
//        console.log(event);
//        console.log("Hello World");
//
//        $(".red-box").click();
//    });
//
//    $(".red-box").click(function(){
//        $(this).fadeTo(500, 0.5);
//    });
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    $("#btn").hover(function(event){
//        console.log(event);
//        console.log("Hello World");
//    });
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    $(".blue-box").mouseenter(function(event){
//        console.log(event);
//        $(this).stop().fadeTo(500, 0.5);
//    });
//
//    $(".blue-box").mouseleave(function(event){
//        console.log(event);
//        $(this).stop().fadeTo(500, 1);
//    });
//
//    //hover(handlerIn, handlerOut)
//    $(".blue-box").hover(function(event){
//        console.log(event);
//        $(this).stop().fadeTo(500, 0.5);
//    }, function(event){
//        console.log(event);
//        $(this).stop().fadeTo(500, 1);
//    });
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    var ARROW_LEFT = 37;
//    var ARROW_RIGHT = 39;
//
//    $("html").keydown(function(event){
//        console.log(event.which);
//
//        if(event.which == ARROW_LEFT)
//        {
//            $(".dummy").stop().animate({
//                "margin-left": "-=10"
//            }, 50);
//        }
//
//        if(event.which == ARROW_RIGHT)
//        {
//            $(".dummy").stop().animate({
//                "margin-left": "+=10"
//            }, 50);
//        }
//    });
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    $("html").on("click keydown", function(event){
//        console.log(event);
//        console.log("event");
//    });
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//    function myEvent(){
//        console.log("Mouse was clicked");
//    }
//$(function(){
//    function logEvent(){
//        console.log("Mouse was clicked");
//    }
//
//    $("html").on("click", myEvent);
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    $("p").click(function(){
//        $(this).slideUp();
//    });
//
//    $("#content").append("<p>This is a dynamically added paragraph.</p>");

//Delegated events
//    $("#content").on("click", "p", function(){
//        $(this).slideUp();
//    });
//
//    $("#content").append("<p>This is a dynamically added paragraph.</p>");
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//    //Passing Additional Data to Events
//    $("#btn").click(
//        {username: "Martin",
//        domain: "martin-cervantes.net"},
//        function(event){
//        greetUser(event.data);
//    });
//
//    function greetUser(userdata){
//       username = userdata.username || "Anonymous";
//        domain = userdata.domain || "nothing.com";
//
//        alert("Welcome back " + username + " from " + domain + "!");
//    }
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
//$(function(){
//   var inputs = $("input:text, input:password, textarea");
//
//   inputs.focus(function(){
//      $(this).css("box-shadow", "0 0 4px 0");
//   });
//
//   inputs.blur(function(){
//       $(this).css("box-shadow", "none");
//   });
//});
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $("input:checkbox").change(function(){
//         var isChecked = $(this).is(":checked");
//
//         console.log(isChecked);
//
//         if(isChecked)
//         {
//             $(this).add("label[for='agree']").css("box-shadow", "0 0 4px green");
//         }
//         else
//         {
//             $(this).add("label[for='agree']").css("box-shadow", "0 0 4px red");
//         }
//     });
//
//     $("input:text").change(function(){
//         console.log($(this).val());
//     });
// });
/* * * * * * * * * * * * * * * * * * * * * * * * */
// $(function(){
//     $("#form1").submit(function(event){
//         var textarea = $("#message");
//
//         if(textarea.val().trim() == "")
//         {
//             $(textarea).css("box-shadow", "0 0 4px red");
//             event.preventDefault();
//         }
//
//     })
// });
