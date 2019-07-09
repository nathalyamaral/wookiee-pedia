var hostname = window.location.hostname;
var port = window.location.port;
var protocol = window.location.protocol;
var urlPath = protocol + '//' + hostname + ':' + port;

function requestAjax( episodeId ){
    $.getJSON( "https://swapi.co/api/films/" + episodeId )
    .done(function( json ) {
       if(json){
        json.characters.forEach(element => {
            console.log(element);

        });
        console.log(json.characters);
       }
    })
    .fail(function( jqxhr, textStatus, error ) {
        var err = textStatus + ", " + error;
        console.log( "Request Failed: " + err );
    });
}

function peopleAjax( url ){
    $.getJSON( url )
    .done(function( json ) {
       if(json){
          console.log(json); 
       }
    })
    .fail(function( jqxhr, textStatus, error ) {
        var err = textStatus + ", " + error;
        console.log( "Request Failed: " + err );
    });
}


$(document).ready(function()
{
    $('.moreInformation').each(function() {
        $(this).on('click', function(e){
            requestAjax( $(this).attr('id') );
        });
     
    });

    $(".btnSearch").on('click', function(e){
        e.preventDefault();

        var searchFilm = $("#searchFilm").val();

        if(!searchFilm){
            $(".modal-body p").text('O campo buscar precisa ser preenchido!');
            $(".modal").modal('show');
        }else{
            window.location.href = urlPath + '/filmes/buscar/' + searchFilm;
        }
    });


    $(".btnBack").on('click', function(e){
        e.preventDefault();

        window.location.href = urlPath;
    });
});