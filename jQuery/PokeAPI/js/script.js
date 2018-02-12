$(function(){
    var pokeURL = "https://pokeapi.co/api/v2/generation/1";
    var pokemonByName = "https://pokeapi.co/api/v2/pokemon/"

    $.getJSON(pokeURL).done(function(data){
        console.log(data);

        $.each(data.pokemon_species, function(index, pokemon){
            var name = pokemon.name.charAt(0).toUpperCase() + pokemon.name.slice(1);
            var link = $("<a>").attr("id", pokemon.name).attr("href","#").append($("<strong>").text(name));
            var parrafo = $("<p>").html("Pok&eacute;mon species No. " + (index + 1) + " is ").append(link);

            link.click(function(event){
                $.getJSON(pokemonByName + pokemon.name).done(function(details){
                    console.log(details);
                    $("#pokemon-details").empty();
                    $("#pokemon-details").append("<h2>" + name + "</h2>");
                    $("#pokemon-details").append("<img src='" + details.sprites.front_default + "'>");
                    $("#pokemon-details").append("<img src='" + details.sprites.back_default + "'>");
                    $("#pokemon-details").append("<img src='" + details.sprites.front_shiny + "'>");
                    $("#pokemon-details").append("<img src='" + details.sprites.back_shiny + "'>");

                    event.preventDefault();
                });
            });
            parrafo.appendTo("#pokemon");
        });
    }).fail(function(){
        console.log("Request to PokeAPI faile.")
    }).always(function(){
        console.log("Pokemon is awesome.");
    });
});
