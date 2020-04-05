$("#contactForm").submit(function(event){
    // Annuler la soumission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    // initialition des variables 
    var name = $("#name").val();
    var prenom = $("#prenom").val();
    var email = $("#email").val();
    var message = $("#message").val();
 
    $.ajax({
        type: "POST",
        url: "contact-process.php",
        data: "name=" + name + "prenom=" + prenom + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}