//alert("test");

$(document).ready(function(){
    console.log("je me lance quand tout est pret !");

    // $(document).on("keypress", function(event){
    //     console.log(event.key);
    //     if(event.key == "t"){
    //         alert("test");
    //     }
    // });

    $("#generateAction").click(function(e){
        // alert("J'ai été clické !");
        $.ajax({
            url: "list.php"
          }).done(function(text) {
            // var jv = JSON.parse(text);
            // console.log(jv);
            $("#ListeJeu").html(text);
            $("#ListeJeu").on("change", function(e){
                $.ajax({
                    method: "POST",
                    url: "getJeu.php",
                    data: { Jeux_Id: $('#ListeJeu').val() }
                  }).done(function(text) {
                    $("main").html(text);
                  });
            });
            //$('#jeuxvideo').DataTable();
            //alert("j'ai fini !");
          });
    });

    // document.getElementById("generateAction").addEventListener("click", function(){
    //     alert("J'ai été clické !");
    // })
});