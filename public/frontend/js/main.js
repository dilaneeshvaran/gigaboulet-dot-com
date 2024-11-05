/*  Navbar */
document.querySelector(".menu-btn").addEventListener("click", function () { 
    document.querySelector("nav").classList.toggle("open") 
});

document.querySelector(".close").addEventListener("click", function () { 
    document.querySelector("nav").classList.toggle("open") 
});

Alpine.start();