//================= SELECTORS ================

const navLabel = document.querySelector(".nav-toggle");
const navigation = document.querySelector(".navigation");
const closeNav = document.querySelector(".close-nav");

const hamburgerDivs = document.querySelectorAll(".header__nav-icon--bar");
const siteTitle = document.querySelector(".header__title");
const currentSeason = document.querySelector(".season-display");

//================== COLOURS ==================

const orange = "#dd693f";
const pink = "#ff11db";
const darkBlue = "#303744";
const yellow = "#e6c719";
const red = "#d9455c";
const purple = "#5041a0";
let colour = purple;

//=============== NAV FUNCTIONALITY ================

navLabel.addEventListener("click", showNav);
closeNav.addEventListener("click", hideNav);

function showNav() {
  navigation.style.transform = "translateX(0)";
}

function hideNav() {
  navigation.style.transform = "translateX(-600px)";
}


// ============ HEADER COLOUR CHANGES ==============  

function scrollCondition() {
  if (window.scrollY >= 1800) {
    colour = red;
  } else if (window.scrollY >= 1300) {
    colour = pink;
  } else if (window.scrollY >= 800) {
    colour = yellow;
  } else if (window.scrollY >= 300) {
    colour = orange;
  } else {
    colour = purple;
  }
  changeColour(colour);
}

function changeColour(colour) {
  changeHamburger(colour);
  changeTitle(colour);
  changeSeason(colour);
}

function changeHamburger(colour) {
  hamburgerDivs.forEach(function(div){
    div.style.backgroundColor = colour;
  })
}

function changeTitle(colour) {
  siteTitle.style.color = colour;
}

function changeSeason(colour) {
  currentSeason.style.color = colour;
}

window.addEventListener("scroll", scrollCondition);