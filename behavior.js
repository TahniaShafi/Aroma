document.addEventListener("DOMContentLoaded", function(event) {
    // thumbnail resize on click
    var thumbnailElements = document.getElementsByClassName("smart_thumbnail");

    var myFunction = function() {

        for (var i = 0; i < thumbnailElements.length; i++) {
            if(thumbnailElements[i].getAttribute('src') != this.getAttribute('src')) {
                thumbnailElements[i].classList.add("small");
            }
        }
        this.classList.toggle("small");

    }
    for (var i = 0; i < thumbnailElements.length; i++) {
        thumbnailElements[i].addEventListener('click', myFunction, false);
    }
});
