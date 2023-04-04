const slider = document.querySelector('#slider');
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length - 1];

const btnLeft = document.querySelector('#btn-left');
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement("afterbegin", sliderSectionLast);

function Next() {
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 1.5s ease-in-out";
    setTimeout (function() {
        slider.style.transition = "none";
        slider.insertAdjacentElement("beforeend", sliderSectionFirst);
        slider.style.marginLeft = "-100%";
    }, 1500);
}

function Previous() {
    let sliderSection = document.querySelectorAll(".slider__section");
    let sliderSectionLast = sliderSection[sliderSection.length - 1];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 1.5s ease-in-out";
    setTimeout(function() {
        slider.style.transition = "none";
        slider.insertAdjacentElement("afterbegin", sliderSectionLast);
        slider.style.marginLeft = "-100%";
    }, 1500);
    
}




const menuBtn = document.querySelector(".menu-btn");
const menuBurguer = document.querySelector("#burguer");
const navList = document.querySelector(".nav-list");


menuBtn.addEventListener("click", () => {
    if (navList.classList.contains ("active")) {
		navList.style.animation = "disappear 1s";
		setTimeout(function() {
			navList.classList.remove("active");
		}, 900);
        setTimeout(function() {
            menuBurguer.classList.toggle("active");
        },300);
    }
    else{
        menuBurguer.classList.toggle("active");
		navList.style.animation = "appear 1s";
        setTimeout(function() {
            navList.classList.add("active");
        },400);

		
    }
    });