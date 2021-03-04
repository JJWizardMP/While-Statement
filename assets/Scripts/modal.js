function DisplayModal( event ){
    // Get Modal
    var modal = $("#myModal");
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = $(this);
    var modalImg = $("#img01");
    var captionText = $("#caption");
    // Update style and attributes
    modal.css({
        "display":"block"
    });
    modalImg.attr("src", img.attr("src"));
    captionText.html( "<p>" + img.attr("alt") + "</p>");
}

function HiddenModal(event){
    var modal = $("#myModal");
    var captionText = $("#caption");
    modal.css({
        "display":"none"
    });
    //captionText.append("");
}

// Open
$("#myImg1").on("click", {}, DisplayModal);
$("#myImg2").on("click", {}, DisplayModal);
$("#myImg3").on("click", {}, DisplayModal);

// Close
$("#mclose").on("click", {}, HiddenModal);


//Hidden Modal

// When the user clicks on <span> (x), close the modal
//span.onclick = function() {
//  modal.style.display = "none";
//}