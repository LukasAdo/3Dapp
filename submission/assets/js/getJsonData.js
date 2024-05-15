// Define a function to fetch JSON data
function fetchJsonData(url, callback) {
    
    // Fetch data from the provided URL
    fetch(url)
        .then(response => {
            // Check if response is successful
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // Parse JSON data
            return response.json();
        })
        .then(data => {
            
            // Call the callback function with the fetched data
            callback(null, data);
        })
        .catch(error => {
            // Call the callback function with the error if any
            callback(error, null);
        });
}


// Define a function to update the 3D App with fetched data
function update3DApp(data) {
    // Update specific elements in the 3D App using the fetched data
    // For example, assuming your HTML has elements with IDs 'title', 'subtitle', 'description', etc.
    document.getElementById('title').textContent = data.mainContent.text.title;
    document.getElementById('subtitle').textContent = data.mainContent.text.subtitle;
    document.getElementById('description').textContent = data.mainContent.text.description;

    // Update cards dynamically
    const cards = data.mainContent.cards;
    for (let i = 0; i < cards.length; i++) {
        const card = cards[i];
        const cardTitleElement = document.getElementById('card-title-' + i);
        const cardDescriptionElement = document.getElementById('card-description-' + i);
        const cardButtonElement = document.getElementById('card-button-' + i);
        
        if (cardTitleElement && cardDescriptionElement && cardButtonElement) {
            cardTitleElement.textContent = card.title;
            cardDescriptionElement.textContent = card.description;
            cardButtonElement.href = card.button.url;
            cardButtonElement.textContent = card.button.text;
        }
    }

    // Update Sprite card dynamically
  const spriteData = data.mainContent.cards.find(card => card.title === 'Sprite');
console.log("Sprite data:", spriteData); // Check if spriteData is retrieved correctly
const spriteCardElement = document.getElementById('sprite-card');
console.log("Sprite card element:", spriteCardElement); // Check if spriteCardElement is retrieved correctly
const spriteTitleElement = document.getElementById('sprite-title');
console.log("Sprite title element:", spriteTitleElement); // Check if spriteTitleElement is retrieved correctly
const spriteDescriptionElement = document.getElementById('sprite-card-description');
console.log("Sprite description element:", spriteDescriptionElement); // Check if spriteDescriptionElement is retrieved correctly
const spriteButtonElement = document.getElementById('sprite-button');
console.log("Sprite button element:", spriteButtonElement); // Check if spriteButtonElement is retrieved correctly

if (spriteData && spriteCardElement && spriteTitleElement && spriteDescriptionElement && spriteButtonElement) {
    console.log("All elements found, populating data...");
    spriteTitleElement.textContent = spriteData.title;
    spriteDescriptionElement.textContent = spriteData.description;
    spriteButtonElement.href = spriteData.button.url;
    spriteButtonElement.textContent = spriteData.button.text;
    // Set image source
    const spriteImageElement = spriteCardElement.querySelector('img');
    if (spriteImageElement) {
        spriteImageElement.src = spriteData.image;
        spriteImageElement.alt = spriteData.title; // Set alt text
    }
} else {
    console.log("Some elements are missing, cannot populate data.");
}

    // Update Dr Pepper card dynamically
    const drPepperData = data.mainContent.cards.find(card => card.title === 'Dr Pepper');
console.log("Dr Pepper data:", drPepperData); // Check if drPepperData is retrieved correctly
const drPepperCardElement = document.getElementById('dr-pepper-card');
console.log("Dr Pepper card element:", drPepperCardElement); // Check if drPepperCardElement is retrieved correctly
const drPepperTitleElement = document.getElementById('dr-pepper-title');
console.log("Dr Pepper title element:", drPepperTitleElement); // Check if drPepperTitleElement is retrieved correctly
const drPepperDescriptionElement = document.getElementById('dr-pepper-description');
console.log("Dr Pepper description element:", drPepperDescriptionElement); // Check if drPepperDescriptionElement is retrieved correctly
const drPepperButtonElement = document.getElementById('dr-pepper-button');
console.log("Dr Pepper button element:", drPepperButtonElement); // Check if drPepperButtonElement is retrieved correctly

if (drPepperData && drPepperCardElement && drPepperTitleElement && drPepperDescriptionElement && drPepperButtonElement) {
    console.log("All elements found, populating data...");
    drPepperTitleElement.textContent = drPepperData.title;
    drPepperDescriptionElement.textContent = drPepperData.description;
    drPepperButtonElement.href = drPepperData.button.url;
    drPepperButtonElement.textContent = drPepperData.button.text;
    // Set image source
    const drPepperImageElement = drPepperCardElement.querySelector('img');
    if (drPepperImageElement) {
        drPepperImageElement.src = drPepperData.image;
        drPepperImageElement.alt = drPepperData.title; // Set alt text
    }
} else {
    console.log("Some elements are missing, cannot populate data.");
}

    // Update Coca Cola X3D Model section
    const cokeX3DTitleElement = document.getElementById('coke-x3d-title');
    const cokeX3DDescriptionElement = document.getElementById('coke-x3d-description');

    if (cokeX3DTitleElement && cokeX3DDescriptionElement) {
        cokeX3DTitleElement.textContent = "Coca Cola X3D Model";
        cokeX3DDescriptionElement.textContent = "This X3D model of the coke can had been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.";
    }

    // Update the 3D Image Gallery title and description
    const imageGallery = data.cokePage.imageGallery; // Assuming you're working with the cokePage data
    const imageGalleryTitleElement = document.getElementById('imageGallery-title');
    const imageDescriptionElement = document.getElementById('image-gallery-description');

    if (imageGallery && imageGalleryTitleElement && imageDescriptionElement) {
        imageGalleryTitleElement.textContent = imageGallery.title;
        imageDescriptionElement.textContent = imageGallery.description;
    } else {
        console.error('Title or description element not found or data missing');
    }

    // Update Sprite X3D Model section
    const spriteX3DModel = data.spritePage.x3dModel;

    // Get HTML elements by their IDs
   console.log('Starting spriteX3DModel population process...');

// Attempt to find elements by their IDs
const spriteX3DTitleElement = document.getElementById('sprite-x3d-title');
const spriteX3DDescriptionElement = document.getElementById('sprite-x3d-description');

console.log('Title element:', spriteX3DTitleElement);
console.log('Description element:', spriteX3DDescriptionElement);

// Check if the model and elements exist
if (spriteX3DModel) {
    console.log('Model data:', spriteX3DModel);
    if (spriteX3DTitleElement && spriteX3DDescriptionElement) {
        console.log('Data and elements exist. Proceeding to update...');
        
        // Update the elements with the model data
        spriteX3DTitleElement.textContent = spriteX3DModel.title;
        spriteX3DDescriptionElement.textContent = spriteX3DModel.description;

        console.log('Elements updated successfully!');
    } else {
        console.error('Title or description element not found.');
    }
} else {
    console.error('Model data is missing.');
}
    // Update Dr Pepper X3D Model section
    const pepperX3DModel = data.pepperPage.x3dModel;

    const pepperX3DTitleElement = document.querySelector('.pepper-x3d-title');
    const pepperX3DDescriptionElement = document.querySelector('.pepper-x3d-description');

    if (pepperX3DTitleElement && pepperX3DDescriptionElement && data.pepperPage.x3dModel) {
        pepperX3DTitleElement.textContent = data.pepperPage.x3dModel.title;
        pepperX3DDescriptionElement.textContent = data.pepperPage.x3dModel.description;
    } else {
        console.error('Title or description element not found or data missing');
    }
	
	
}


// Fetch JSON data and update the content for the Sprite page
fetch('./assets/model/data.json')
    .then(response => response.json())
    .then(data => {
        updateSpriteContent(data);
    })
    .catch(error => {
        console.error('Error fetching JSON data:', error);
    });



// Update the content for the Coca Cola page
function updateCokeContent(data) {
    // Identify the content element in the HTML structure
    const contentElement = document.getElementById('coke-content');

    // Check if the element exists and if the JSON data is available
    if (contentElement && data && data.cokePage && data.cokePage.content) {
        const contentData = data.cokePage.content;

        // Update the content of the elements with the fetched data
        document.getElementById('content-title').textContent = contentData.title;
        document.getElementById('content-description').textContent = contentData.description;
        document.getElementById('content-video').src = contentData.videoUrl;
    } else {
        console.error('Some elements are missing or JSON data is incomplete:', contentElement, data);
    }
}

// Wait for the DOM content to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    

    // Fetch JSON data and update the content for the Coca Cola page
    fetchJsonData('assets/model/data.json', function(error, data) {
        if (error) {
            console.error('Error fetching JSON data:', error);
        } else {
            // Call the function to update the content with fetched data
            updateCokeContent(data);
        }
    });
});

function updatePepperContent(data) {
    const contentElement = document.getElementById('pepper-content');
    if (contentElement && data && data.pepperPage && data.pepperPage.content) {
        const contentData = data.pepperPage.content;

        // Populate the content template with data
        const titleElement = contentElement.querySelector('#content-title');
        const descriptionElement = contentElement.querySelector('#content-description');
        const videoElement = contentElement.querySelector('#content-video');

        if (titleElement && descriptionElement && videoElement) {
            titleElement.textContent = contentData.title;
            descriptionElement.textContent = contentData.description;
            videoElement.src = contentData.videoUrl;
        } else {
            console.error('Some elements are missing in the content template');
        }
    } else {
        console.error('Some elements are missing or JSON data is incomplete:', contentElement, data);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    fetchJsonData('assets/model/data.json', function(error, data) {
        if (error) {
            console.error('Error fetching JSON data:', error);
        } else {
            updatePepperContent(data);
        }
    });
});

// Define a function to update the Sprite page content with fetched data
function updateSpriteContent(data) {
    // Log the fetched data for debugging
    console.log('Fetched JSON data:', data);

    // Extract the content data from the JSON data
    const contentData = data && data.spritePage && data.spritePage.content;

    // Check if the content data exists
    if (contentData) {
        try {
            // Construct HTML content for title and description
            const htmlContent = `
                <h3 class="card-title">${contentData.title}</h3>
                <p class="card-text">${contentData.description}</p>
            `;

            // Update the content of the container element
            const contentElement = document.getElementById('sprite-content');
            if (contentElement) {
                contentElement.innerHTML = htmlContent;
                console.log('Sprite content updated successfully.');
            } else {
                console.error('Sprite content container element not found.');
            }
        } catch (error) {
            // Log any errors that occur during content update
            console.error('Error updating Sprite content:', error);
        }
    } else {
        console.error('Content data not found in JSON:', data);
    }
}

// Wait for the DOM content to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM fully loaded');

    // Fetch JSON data and update the content for the Sprite page
    fetchJsonData('model/data.json', function(error, data) {
        if (error) {
            // Log the error if fetching JSON data failed
            console.error('Error fetching JSON data:', error);
        } else {
            // Call the function to update the content with fetched data
            updateSpriteContent(data);
        }
    });
});

// Wait for the DOM content to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    
    
    // Fetch JSON data and update the 3D App
    fetchJsonData('assets/model/data.json', function(error, data) {
        if (error) {
            console.error('Error fetching JSON data:', error);
        } else {
            // Call the function to update the 3D App with fetched data
            update3DApp(data);
            // Log image gallery title and description
            
        }
    });
});

// Define a function to update the Sprite page content with fetched data
function updateSpriteContent(data) {
    // Log the fetched data for debugging
    console.log('Fetched JSON data:', data);

    // Extract the content data from the JSON data
    const contentData = data && data.spritePage && data.spritePage.content;

    // Check if the content data exists
    if (contentData) {
        try {
            // Construct HTML content for title and description
            const htmlContent = `
                <h3 class="card-title">${contentData.title}</h3>
                <p class="card-text">${contentData.description}</p>
                <iframe id="sprite-video" width="560" height="315" src="${contentData.videoUrl}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            `;

            // Update the content of the container element
            const contentElement = document.getElementById('sprite-content');
            if (contentElement) {
                contentElement.innerHTML = htmlContent;
                console.log('Sprite content updated successfully.');
            } else {
                console.error('Sprite content container element not found.');
            }
        } catch (error) {
            // Log any errors that occur during content update
            console.error('Error updating Sprite content:', error);
        }
    } else {
        console.error('Content data not found in JSON:', data);
    }
}

// Wait for the DOM content to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM fully loaded');

    // Fetch JSON data and update Sprite content
    fetchAndSetSpriteContent();
});

document.addEventListener('DOMContentLoaded', function() {
    

    // Function to populate the description of the 3D Image Gallery
    function populateGalleryDescription(description) {
        const descriptionElement = document.getElementById("gallery_sprite-description");
        if (descriptionElement) {
            descriptionElement.textContent = description;
        } else {
            console.error('Description element not found');
			console.log('Description element not found');
        }
    }

    // Call the functions to populate the title and description
    const galleryData = {
        title: "3D Image Gallery",
        description: "These 3D images of the Coke can, Sprite bottle and Dr Pepper cup are rendered in 3ds Max 2017 with Mental Ray"
    };

    populateGalleryDescription(galleryData.description);
});
document.addEventListener('DOMContentLoaded', function() {
    // Get the title element
    const titleElement = document.getElementById("gallery-sprite-title");

    // Check if the title element exists
    if (titleElement) {
        // Set the title text directly
        titleElement.textContent = "3D Image Gallery";
    } else {
        console.error('Title element not found');
    }
});
document.addEventListener('DOMContentLoaded', function() {
    // Function to populate the description of the 3D Image Gallery for Dr Pepper
    function populateDrPepperGallery(description) {
        const descriptionElement = document.getElementById("gallery_pepper-description");
        if (descriptionElement) {
            descriptionElement.textContent = description;
        } else {
            console.error('Description element not found');
        }
    }

    // Call the function to populate the description for Dr Pepper
    const drPepperGalleryData = {
        title: "3D Image Gallery",
        description: "These 3D images of the Coke can, Sprite bottle and Dr Pepper cup are rendered in 3ds Max 2017 with Mental Ray"
    };

    populateDrPepperGallery(drPepperGalleryData.description);

    // Function to populate the title of the 3D Image Gallery for Dr Pepper
    function populateDrPepperGalleryTitle(title) {
        const titleElement = document.getElementById("gallery_pepper-title");
        if (titleElement) {
            titleElement.textContent = title;
        } else {
            console.error('Title element not found');
        }
    }

    // Call the function to populate the title for Dr Pepper
    populateDrPepperGalleryTitle("3D Image Gallery");
});
document.addEventListener('DOMContentLoaded', function() {
    // Get the button-group element
    const buttonGroupElement = document.querySelector('.button-group');

    // Check if the button-group element exists
    if (buttonGroupElement) {
        // Get the camera buttons data from the JSON
        const cameraButtonsData = [
            { label: "Front", action: "cam1()", color: "btn-primary" },
            { label: "Back", action: "cam2()", color: "btn-secondary" },
            { label: "Left", action: "cam3()", color: "btn-success" },
            { label: "Right", action: "cam4()", color: "btn-danger" },
            { label: "Top", action: "cam5()", color: "btn-warning" },
            { label: "Off", action: "", color: "btn-outline-dark", disabled: true }
        ];

        // Loop through the cameraButtonsData array and create buttons dynamically
        cameraButtonsData.forEach(buttonData => {
            // Create a new button element
            const buttonElement = document.createElement('a');
            buttonElement.href = "#";
            buttonElement.classList.add("btn", "btn-responsive", "camera-font", buttonData.color);
            buttonElement.textContent = buttonData.label;
            buttonElement.onclick = function() {
                // Execute the action when the button is clicked
                eval(buttonData.action);
            };
            if (buttonData.disabled) {
                buttonElement.classList.add("disabled");
            }

            // Append the button to the button-group element
            buttonGroupElement.appendChild(buttonElement);
        });
    } else {
        console.error('Button group element not found');
    }
});
document.addEventListener('DOMContentLoaded', function() {
    // Get the button-group element
    const buttonGroupElement = document.querySelector('.button-group-sprite');

    // Check if the button-group element exists
    if (buttonGroupElement) {
        // Define the button data for the Sprite page
        const spriteButtonsData = [
            { label: "Front", action: "cam1()", color: "btn-primary" },
            { label: "Back", action: "cam2()", color: "btn-secondary" },
            { label: "Left", action: "cam3()", color: "btn-success" },
            { label: "Right", action: "cam4()", color: "btn-danger" },
            { label: "Top", action: "cam5()", color: "btn-warning" },
            { label: "Off", action: "", color: "btn-outline-dark", disabled: true }
        ];
        // Loop through the spriteButtonsData array and create buttons dynamically
        spriteButtonsData.forEach(buttonData => {
            // Create a new button element
          const buttonElement = document.createElement('a');
buttonElement.href = "#";
buttonElement.classList.add("btn", "btn-responsive", "camera-font", buttonData.color); // Add the color class here
buttonElement.textContent = buttonData.label;
buttonElement.onclick = function() {
    // Execute the action when the button is clicked
    eval(buttonData.action);
};

            // Disable the button if specified
            if (buttonData.disabled) {
                buttonElement.classList.add("disabled");
            }

            // Append the button to the button-group element
            buttonGroupElement.appendChild(buttonElement);
        });
    } else {
        console.error('Button group element not found');
    }
});

