// Element vi behöver
const eModal = document.querySelector("#exampleModal");
const eForm = document.querySelector("#exampleModal form");
const eStatus = document.querySelector("#status");

// Initialiserar modal-fönstret
var loginModal = new bootstrap.Modal(
    "#exampleModal",
    {
        // options here
        backdrop: "static",
        keyboard: false
    }
);

/* showLogin.addEventListener("click", function () {
    loginModal.show();
})
*/

// Hantera inloggning
eForm.addEventListener("submit", function (e) {
    // Förhindra att sidan refreshas
    e.preventDefault();
    
    // Läs in data från formuläret
    const postData = new FormData(eForm);

    // Skicka till skriptet login.php
    fetch("./login.php", {
        method: "POST",
        body: postData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
    })
})