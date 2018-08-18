let numSquares = 6
let colors = [];
let pickedColor;

let h1 = document.querySelector("h1");
let btn_reset = document.querySelector("#reset");
let btn_mode = document.querySelectorAll(".mode");
let squares = document.querySelectorAll(".square");
let dMessage = document.querySelector("#message");
let dColor = document.querySelector("#color");

init();


btn_reset.addEventListener("click", function()
{
    reset();
});

function init()
{
    for(var i = 0; i < btn_mode.length; i++)
    {
        btn_mode[i].addEventListener("click", function()
        {
            btn_mode[0].classList.remove("selected");
            btn_mode[1].classList.remove("selected");
            this.classList.add("selected");

            numSquares = this.textContent === "Easy"? 3: 6;

            reset();
        });
    }

    for(var i = 0; i < squares.length; i++)
    {
        squares[i].addEventListener("click", function()
        {
            var clickedColor = this.style.backgroundColor;

            if(clickedColor === pickedColor)
            {
                dMessage.textContent = "Correct !!";
                btn_reset.textContent = "Play again ??";
                changeColors();
            }
            else
            {
                this.style.backgroundColor = "#232323";
                dMessage.textContent = "Try Again";
            }
        });
    }

    reset();
}

function reset()
{
    colors = randomColors(numSquares);

    pickedColor = pickColor();

    dColor.textContent = pickedColor;

    for(var i = 0; i < squares.length; i++)
    {
        squares[i].style.display = "block";
        if(colors[i])
            squares[i].style.backgroundColor = colors[i];
        else
            squares[i].style.display = "none";
    }

    h1.style.backgroundColor = "steelblue";

    message.textContent = "";

    btn_reset.textContent = "New Colors";
}

function changeColors()
{
    h1.style.backgroundColor = pickedColor;

    for(var i = 0; i < squares.length; i++)
    {
        squares[i].style.backgroundColor = pickedColor;
    }
}

function pickColor()
{
    var random = Math.floor(Math.random() * colors.length);

    return colors[random];
}

function randomColors(num)
{
    var arr = [];

    for(var i = 0; i < num; i++)
    {
        arr.push(randomColor());
    }

    return arr;
}

function randomColor()
{
    var red = Math.floor(Math.random() * 256);
    var green = Math.floor(Math.random() * 256);
    var blue = Math.floor(Math.random() * 256);

    return `rgb(${red}, ${green}, ${blue})`;
}
