var images = [];
var time = 3000;
var i = 0;

images[0] = 'assets/assests/images/coke1.png';
images[1] = 'assets/assests/images/coke2.jpg';
images[2] = 'assets/assests/images/coke3.jpg';

function changeImg() {
    var slideImage = document.querySelector('.coke-slider .slide');
    slideImage.src = images[i];
    
    // Set the new width and height for the image
    slideImage.style.width = '100%'; // Adjust with your desired width
    slideImage.style.height = '50vh'; // Automatically adjust the height based on the aspect ratio

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout(changeImg, time);
}

var spriteImages = [];
var spriteTime = 3000;
var spriteIndex = 0;

spriteImages[0] = 'assets/assests/images/sprite1.jpg';
spriteImages[1] = 'assets/assests/images/sprite2.png';
spriteImages[2] = 'assets/assests/images/sprite3.jpg';

function changeSpriteImg() {
    var slideImage = document.querySelector('.sprite-slider .sprite-slide');
    slideImage.src = spriteImages[spriteIndex];
    
    // Set the new width and height for the image
    slideImage.style.width = '100%'; // Adjust with your desired width
    slideImage.style.height = '50vh'; // Automatically adjust the height based on the aspect ratio

    if (spriteIndex < spriteImages.length - 1) {
        spriteIndex++;
    } else {
        spriteIndex = 0;
    }
    setTimeout(changeSpriteImg, spriteTime);
}

var drPepperImages = [];
var drPepperTime = 3000;
var drPepperIndex = 0;

drPepperImages[0] = 'assets/assests/images/drpepper1.png';
drPepperImages[1] = 'assets/assests/images/drpepper2.png';
drPepperImages[2] = 'assets/assests/images/drpepper3.png';

function changeDrPepperImg() {
    var slideImage = document.querySelector('.drpepper-slider .drpepper-slide');
    slideImage.src = drPepperImages[drPepperIndex];
    
    // Set the new width and height for the image
    slideImage.style.width = '100%'; // Adjust with your desired width
    slideImage.style.height = '50vh'; // Automatically adjust the height based on the aspect ratio

    if (drPepperIndex < drPepperImages.length - 1) {
        drPepperIndex++;
    } else {
        drPepperIndex = 0;
    }
    setTimeout(changeDrPepperImg, drPepperTime);
}

window.onload = function() {
    changeImg();
    changeSpriteImg();
    changeDrPepperImg();
};

// Adjust margin-right for the sliders
document.querySelector('.coke-slider').style.marginRight = '1000px'; // Adjust the value as needed
document.querySelector('.sprite-slider').style.marginRight = '1000px'; // Adjust the value as needed
document.querySelector('.drpepper-slider').style.marginRight = '1000px'; // Adjust the value as needed
