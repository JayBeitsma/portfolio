const qualities = document.getElementById("qualities");
const experiences = document.getElementById("experiences");
const quality = document.getElementById("quality");
const experience = document.getElementById("experience");

function qualitySwap() {
    if (qualities.style.display === "flex") {
        qualities.style.display = "none";
        quality.style.borderBottom = "none";
    } else {
        qualities.style.display = "flex";
        experiences.style.display = "none";
        quality.style.borderBottom = "2px solid darkblue";
        experience.style.borderBottom = "none";
    }
}

function experienceSwap() {
    if (experiences.style.display === "flex") {
        experiences.style.display = "none";
        experience.style.borderBottom = "none";
    } else {
        experiences.style.display = "flex";
        qualities.style.display = "none";
        experience.style.borderBottom = "2px solid darkblue";
        quality.style.borderBottom = "none";
    }
}


function displaySkillCubes() {
    const qualities2 = document.querySelectorAll('.quality');

    qualities2.forEach(quality => {
        const skillLevel = parseInt(quality.getAttribute('data-skill'), 10);
        const cubeContainer = quality.querySelector('.cube-container');

        // Clear the container before adding new cubes
        cubeContainer.innerHTML = '';

        // Generate cubes based on skill level
        for (let i = 0; i < skillLevel; i++) {
            const cube = document.createElement('div');
            cube.classList.add('cube');
            cubeContainer.appendChild(cube);
        }
    });
}

// Run function on load
displaySkillCubes();