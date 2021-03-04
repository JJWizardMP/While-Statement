function UpdateContent( event ) {
    $("#Dinamic-Content").load('./assets/Components/' + event.data.handle);
   /* $("#DC").css({
        "height": event.data.H,
    });
    $("#sidebar").css({
        "height": event.data.H
    });
    $("#Content").css({
        "height": event.data.H,
    });
    $("#Foot").css({
        "position": "relative",
        "bottom": "0",
    });  */
}

var extvh = "100vh";
var extvhmed = "160vh";
var extvhmax = "160vh";

$( "#Init" ).on( "click", { handle: "while.php", extvhmax }, UpdateContent);
$( "#Ex1" ).on( "click", { handle: "ulist.php", H: extvhmax }, UpdateContent);
$( "#Ex2" ).on( "click", { handle: "table.php", H: extvhmax }, UpdateContent);
$( "#Ex3" ).on( "click", { handle: "card.php", H: extvhmax }, UpdateContent);