var counter = 0;

// Audio element for the sound effect
var sound = new Audio('assets/assests/sounds/cokebottle.mp3');

sound.onerror = function() {
    console.error('Error loading the audio file.');
};

document.getElementById("main").style.display = "block";

function swap(id) {
    // Hide all X3D models
    var models = document.getElementsByClassName("x3d-model");
    for (var i = 0; i < models.length; i++) {
        models[i].style.display = "none";
    }

    // Show the desired X3D model or home page content
    var elementToShow;
    if (id === 'home') {
        // If id is 'home', show the main content
        elementToShow = document.getElementById("main");
    } else {
        // Show the desired X3D model based on the id
        elementToShow = document.getElementById(id);
    }

    if (elementToShow) {
        // Set the desired element to be displayed as a block
        elementToShow.style.display = "block";

        // Hide other X3D models or home page content when displaying a specific one
        var x3dModels = document.querySelectorAll(".container-fluid.main.contents");
        x3dModels.forEach(function(model) {
            if (model.id !== elementToShow.id) {
                model.style.display = "none";
            }
        });

        // Check if the main content should be displayed
        var mainContent = document.getElementById("main");
        if (elementToShow.id === "main") {
            mainContent.style.display = "block";
        } else {
            mainContent.style.display = "none";
        }

        // Scroll to the element
        elementToShow.scrollIntoView({ behavior: "smooth" });
        console.log("Swapping to:", id);
        console.log("Element to show:", elementToShow);
    } else {
        console.error("Element not found:", id);
    }
}


function changeLook() {
    counter += 1;
    switch (counter) {
        case 1:
            document.getElementById('bodyColor').className = '';
            document.getElementById('headerColor').className = 'navbar navbar-expand-sm navbar_coca_cola container-fluid';
            document.getElementById('footerColor').className = 'navbar navbar-expand-sm footer container-fluid custom-footer';
            document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
            document.getElementById('headerColor').style.backgroundColor = '#FF0000';
            document.getElementById('footerColor').style.backgroundColor = '#FF9900';
            break;
        case 2:
            document.getElementById('bodyColor').className = '';
            document.getElementById('headerColor').className = 'navbar navbar-expand-sm navbar_coca_cola container-fluid';;
            document.getElementById('footerColor').className = 'navbar navbar-expand-sm footer container-fluid custom-footer';;
            document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
            document.getElementById('headerColor').style.backgroundColor = '#FF9999';
            document.getElementById('footerColor').style.backgroundColor = '#996699';
            break;
        case 3:
            document.getElementById('bodyColor').className = '';
            document.getElementById('headerColor').className = 'navbar navbar-expand-sm navbar_coca_cola container-fluid';
            document.getElementById('footerColor').className = 'navbar navbar-expand-sm footer container-fluid custom-footer';
            document.getElementById('bodyColor').style.backgroundColor = 'coral';
            document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
            document.getElementById('footerColor').style.backgroundColor = 'darksalmon';
            break;
        case 4:
            counter = 0;
            document.getElementById('bodyColor').className = '';
            document.getElementById('headerColor').className = 'navbar navbar-expand-sm navbar_coca_cola container-fluid';
            document.getElementById('footerColor').className = 'navbar navbar-expand-sm footer container-fluid custom-footer';
            document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
            document.getElementById('headerColor').style.backgroundColor = 'chocolate';
            document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
            break;
    }
    
    // Play the sound effect
    sound.play();
}

function changeBack() {
    document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
    document.getElementById('headerColor').style.backgroundColor = 'rgba(175,0,0,1)';
    document.getElementById('footerColor').style.backgroundColor = 'rgba(175,0,0,1)';
}
