$(function() {
    console.log( "ready!" );

    i = 1;

    document.getElementById("nextButton").addEventListener("click", function(){
        if(i < 6)
            i++;
        else
            i = 1;

        var newSrc = 'img\\carrousel\\' + i + '.jpg';
        $("#car").attr('src', newSrc );
    });

    document.getElementById("description1").addEventListener("mouseover", function(){
        this.style.fontSize = "xx-large";
    });
    document.getElementById("description1").addEventListener("mouseout", function(){
        this.style.fontSize = "x-large";
    });

    document.getElementById("description2").addEventListener("mouseover", function(){
        this.style.fontSize = "xx-large";
    });
    document.getElementById("description2").addEventListener("mouseout", function(){
        this.style.fontSize = "x-large";
    });

    document.getElementById("description3").addEventListener("mouseover", function(){
        this.style.fontSize = "xx-large";
    });
    document.getElementById("description3").addEventListener("mouseout", function(){
        this.style.fontSize = "x-large";
    });


    $(document).mouseleave(function () {
        alert("Goodbye :)");
    });


    $("#myBtn").click(function(){
        $("#myModal").modal();
    });


});