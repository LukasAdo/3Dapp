const viewpointDefinitions = [
    {
        id: 'Front_Camera',
        position: '-4903 -24.6 1917',
        orientation: '-0.01095 0.9999 -0.004318 -0.7512'
    },
    {
        id: 'Back_Camera',
        position: '-1121 83.3 -2454',
        orientation: '0.01122 -0.9995 -0.03105 -2.448'
    },
    {
        id: 'Bottom_Camera',
        position: '-2939 -2975 73.77',
        orientation: '-0.9397 -0.2518 0.2313 -1.548'
    },
    {
        id: 'Top_Camera',
        position: '-2832 2067 -12.42',
        orientation: '0.576 -0.6163 -0.5371 -1.974'
    },
    {
        id: 'Right_Camera',
        position: '-1084 204.6 1687',
        orientation: '0.09274 -0.9948 -0.04124 -0.8407'
    },
    {
        id: 'Left_Camera',
        position: '-4738 0 -1655',
        orientation: '0 -1 0 -3.912'
    }
];

document.addEventListener('DOMContentLoaded', function() {
    // Log information about the predefined viewpoint elements
    viewpointDefinitions.forEach(function(viewpoint) {
        console.log('Viewpoint:', viewpoint.id, 'Position:', viewpoint.position, 'Orientation:', viewpoint.orientation);
    });
});

// Function to activate a viewpoint
function activateViewpoint(viewpointId) {
    // Get the X3D document element (assuming you have an X3D document loaded in your webpage)
    const x3dDoc = document.querySelector("x3d");

    // Find the viewpoint element with the matching ID
    const viewpointElement = x3dDoc.querySelector(`[DEF="${viewpointId}"]`);

    if (viewpointElement) {
        // Activate the viewpoint by setting the 'set_bind' attribute
        viewpointElement.setAttribute('set_bind', 'true');

        // Deactivate any other viewpoints
        deactivateAllViewpoints(viewpointId);
    } else {
        console.error(`Viewpoint with ID "${viewpointId}" not found.`);
    }
}

// Function to deactivate all viewpoints except the specified one
function deactivateAllViewpoints(exceptViewpointId) {
    // Get all viewpoint elements
    const viewpointElements = document.querySelectorAll("Viewpoint");

    for (const viewpoint of viewpointElements) {
        if (viewpoint.getAttribute('DEF') !== exceptViewpointId) {
            viewpoint.setAttribute('set_bind', 'false');
        }
    }
}

// Define camera functions to activate each viewpoint
function cameraFront() {
    console.log('cameraFront() called');
    const viewpointId = 'Front_Camera';
    activateViewpoint(viewpointId);
}

function cameraBack() {
    console.log('cameraBack() called');
    const viewpointId = 'Back_Camera';
    activateViewpoint(viewpointId);
}

function cameraLeft() {
    console.log('cameraLeft() called');
    const viewpointId = 'Left_Camera';
    activateViewpoint(viewpointId);
}

function cameraRight() {
    console.log('cameraRight() called');
    const viewpointId = 'Right_Camera';
    activateViewpoint(viewpointId);
}

function cameraTop() {
    console.log('cameraTop() called');
    const viewpointId = 'Top_Camera';
    activateViewpoint(viewpointId);
}

function cameraBottom() {
    console.log('cameraBottom() called');
    const viewpointId = 'Bottom_Camera';
    activateViewpoint(viewpointId);
}