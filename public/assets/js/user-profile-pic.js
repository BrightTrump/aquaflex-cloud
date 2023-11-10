const changePicSvg = document.getElementById("change-pic");
const profilePicInput = document.getElementById("profile-pic-input");
const profileImage = document.getElementById("profile-image");

changePicSvg.addEventListener("click", () => {
    profilePicInput.click();
});

// You can also add an event listener to handle the file selection
profilePicInput.addEventListener("click", () => {
    // Handle the selected file here, e.g., preview the image or upload it to the server.
    // profileImage.src = URL.createObjectURL(profilePicInput.files[0]); //option code
    const selectedFile = profilePicInput.files[0];
    if (selectedFile) {
        // Read the selected file and set it as the source of the <img> element
        const reader = new FileReader();
        reader.onload = function (e) {
            profileImage.src = e.target.result;
        };
        reader.readAsDataURL(selectedFile);
    }
});
