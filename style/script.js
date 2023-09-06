burger = document.querySelector(".burger");
navbar = document.querySelector(".navbar");
list = document.querySelector("ul")
img = document.querySelector(".logo")

burger.addEventListener('click',()=>{
    navbar.classList.toggle("h-nev");
    list.classList.toggle("v-nev");
    img.classList.toggle("v-nev")
    console.log("Hello");
})