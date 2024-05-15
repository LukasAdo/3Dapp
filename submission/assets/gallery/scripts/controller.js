var xmlHttp = new XMLHttpRequest();
var response;

$(document).ready(function() {
    var send = "https://users.sussex.ac.uk/~la480/3Dapp/Labs/submission/assets/gallery/scripts/hook.php";
    xmlHttp.open("GET", send, true);
    
    xmlHttp.send(null);
    xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState == 4) {
            response = xmlHttp.responseText.split("~");
            console.log("Response from PHP script:", response); // Print response to console
            
            // Generate HTML for each gallery section
            var galleryCokeHtml = generateGalleryHtml(response, 2);
            var gallerySpriteHtml = generateGalleryHtml(response, 3);
            var galleryPepperHtml = generateGalleryHtml(response, 4);
            
            // Set HTML for respective gallery sections
            document.getElementById('gallery_coke').innerHTML = galleryCokeHtml;
            document.getElementById('gallery_sprite').innerHTML = gallerySpriteHtml;
            document.getElementById('gallery_pepper').innerHTML = galleryPepperHtml;
        }
    }
});

function generateGalleryHtml(images) {
    var htmlCode = "<div class='gallery'>";
    for (var i = 0; i < images.length; i++) {
        if (i % 4 === 0) { // Start a new row for every fourth image
            htmlCode += "<div class='gallery_row'>";
        }
        htmlCode += '<div class="gallery_cell">';
        htmlCode += '<a href="' + 'images/' + images[i] + '">';
        htmlCode += '<img src= "images/' + images[i] + '" class="image_thumbnail"/>';
        htmlCode += '</a>';
        htmlCode += '</div>';
        if ((i + 1) % 4 === 0 || i === images.length - 1) { // End the row after the fourth image or if it's the last image
            htmlCode += "</div>";
        }
    }
    htmlCode += "</div>";
    return htmlCode;
}