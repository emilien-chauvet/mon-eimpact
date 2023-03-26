const modalContainer = document.querySelector(".modal_container");
const modalTriggers = document.querySelectorAll(".modal_trigger");

modalTriggers.forEach(trigger => trigger.addEventListener("click", toogleModal))

function toogleModal(){
    modalContainer.classList.toggle("active");
}

console.log("Bonjour");