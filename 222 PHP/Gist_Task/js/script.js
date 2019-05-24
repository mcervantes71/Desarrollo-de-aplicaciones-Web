
$(document).ready(function()
{
    let correct = 0;

    $('select').formSelect();

    $("#q1").change(function()
    {
        if($(this).val() === "1")
        {
            $("#q1_answer").text("sentiment_very_satisfied");
        }
        else {
            $("#q1_answer").text("sentiment_very_dissatisfied");
        }
    });

    $("#q2").change(function()
    {
        if($(this).val() === "2")
        {
            $("#q2_answer").text("sentiment_very_satisfied");
        }
        else {
            $("#q2_answer").text("sentiment_very_dissatisfied");
        }
    });

    $("#q3").change(function()
    {
        if($(this).val() === "3")
        {
            $("#q3_answer").text("sentiment_very_satisfied");
        }
        else {
            $("#q3_answer").text("sentiment_very_dissatisfied");
        }
    });

    $("#q4").change(function()
    {
        if($(this).val() === "5")
        {
            $("#q4_answer").text("sentiment_very_satisfied");
        }
        else {
            $("#q4_answer").text("sentiment_very_dissatisfied");
        }
    });

    $("#q5").change(function()
    {
        if($("#q5").val() === "1" && $("#q6").val() === "3")
        {
            $("#q5_answer").text("sentiment_very_satisfied");
        }
        else {
            $("#q5_answer").text("sentiment_very_dissatisfied");
        }
    });

    $("#q6").change(function()
    {
        if($("#q5").val() === "1" && $("#q6").val() === "3")
        {
            $("#q5_answer").text("sentiment_very_satisfied");
        }
        else {
            $("#q5_answer").text("sentiment_very_dissatisfied");
        }
    });
});
