const tStora = document.querySelector("#stora");
const tSmå = document.querySelector("#små");

tStora.addEventListener("change", function () {
    tSmå.checked = !tSmå.checked;
})
tSmå.addEventListener("change", function () {
    tStora.checked = !tStora.checked;
})
