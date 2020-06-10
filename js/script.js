$(function (){
    $('#contact-form').submit(function(e){
        e.preventDefault(); // just pour enlever les parametres par default de submit qui rafréchit la pge.
        $('.comment').empty(); // cad chaque fois que je fais submit je vide les comments.
        var postdata = $('#contact-form').serialize(); // cad faire sortir tous les info de cette form et stocker dans cette var 
        
        $.ajax({
           type: 'POST',
           url: 'php/contact.php',
           data: postdata, // un objet json
           dataType: 'json',
           success: function(result){
                if(result.isSuccess)
                {
                    $("#contact-form").append("<p class='thank-you'>Votre message a bien été envoyé. Merci de m avoir contacté :)</p>");
                    $("#contact-form")[0].reset(); // mettre tous les éléments à 0
                } 
                else
                {
                    $("#firstname + .comments").html(result.firstnameError); // pour séléctioner l'élément qui suit #firstname 
                    $("#name + .comments").html(result.nameError);
                    $("#email + .comments").html(result.emailError);
                    $("#phone + .comments").html(result.phoneError);
                    $("#message + .comments").html(result.messageError);
                }    
 

           }

        });
    
    
    
    });
})