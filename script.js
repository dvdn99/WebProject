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


    (function(){
        var myfm = document.myForm;
        felements = myfm.elements,
            boton = document.getElementById("but1");


        var checkName = function (e) {
            if (myfm.fullname.value == 0) {
                alert("Complete your name input!");
                e.preventDefault();
            }else{
                var text = myfm.fullname.value;
                for(var i=0; i<text.length;i++){
                    if((text.charAt(i) >= 0 || text.charAt(i) <= 9) && text.charAt(i) !== " "){
                        alert("Only letters!");
                        e.preventDefault();
                    }
                }
            }
        };

        var checkPhone = function(e){
            var p1 = myfm.phone1.value,
                p2 = myfm.phone2.value,
                p3 = myfm.phone3.value;

            var sumLength = p1.length + p2.length + p3.length;

            if(sumLength > 10 || sumLength < 9){
                alert("Enter a valid phone number!");
                e.preventDefault();
            }else{
                for(var i=0; i<p1.length;i++){
                    if(isNaN(p1.charAt(i))){
                        alert("Only numbers in phone number!");
                        e.preventDefault();
                    }
                }
                for(var i=0; i<p2.length;i++){
                    if(isNaN(p2.charAt(i))){
                        alert("Only numbers in phone number!");
                        e.preventDefault();
                    }
                }
                for(var i=0; i<p3.length;i++){
                    if(isNaN(p3.charAt(i))){
                        alert("Only numbers in phone number!");
                        e.preventDefault();
                    }
                }
            }

        };


        var checkMail = function(e){
            var mail = myfm.mymail.value;
            var arroba = false;
            var dot = false;
            var com = false;

            for(var i=0; i<mail.length; i++){
                if(mail.charAt(i) === '@'){
                    if(mail.charAt(i+1).toLowerCase() != mail.charAt(i+1).toUpperCase()){
                        arroba = true;
                    }
                }
                if(mail.charAt(i) === '.'){
                    if(mail.charAt(i+1).toLowerCase() != mail.charAt(i+1).toUpperCase()){
                        com = true;
                        dot = true;
                    }
                }
            }

            if(!(arroba && dot && com)){
                alert("Invalid mail account!");
                e.preventDefault();
            }

        };

        var checkGuests = function(e){
            var num = myfm.numGuests.value;

            if(num <= 0){
                alert("Invalid number of guests!");
                e.preventDefault();
            }
        };

        var checkArrival = function(e){
            var arrival = myfm.arrival1.value;

            if(arrival == ''){
                alert("Choose arrival method!");
                e.preventDefault();
            }
        };

        var checkAdditional = function (e) {

        };

        var check = function(e){
            checkName(e);
            checkPhone(e);
            checkMail(e);
            checkGuests(e);
            checkArrival(e);
            checkAdditional(e);
        };

        myfm.addEventListener("submit",check);

    }());

    var maxLength = 200;
    $('textarea').keyup(function() {
        var length = $(this).val().length;
        var length = maxLength-length;
        $('#chars').text(length);
    });

    $(document).mouseleave(function () {
        alert("Goodbye :)");
    });


    $("#myBtn").click(function(){
        $("#myModal").modal();
    });


});