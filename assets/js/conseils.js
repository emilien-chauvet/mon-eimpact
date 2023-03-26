/*if(typeof systeme_display == 'undefined') {
	let systeme_display = document.getElementById("systeme");
}

if(typeof stockage_display == 'undefined') {
	let stockage_display = document.getElementById("stockage");
}

if(typeof internet_display == 'undefined') {
	let internet_display = document.getElementById("internet");
}

if(typeof mails_display == 'undefined') {
	let mails_display = document.getElementById("mails");
}

if(typeof title_systeme == 'undefined') {
	let title_systeme = document.getElementById("mails");
}

if(typeof title_stockage == 'undefined') {
	let title_stockage = document.getElementById("mails");
}

if(typeof title_internet == 'undefined') {
	let title_internet = document.getElementById("mails");
}

if(typeof title_mails == 'undefined') {
	let title_mails = document.getElementById("mails");
}*/

var section1 = document.getElementById("systeme");
var section2 = document.getElementById("stockage");
var section3 = document.getElementById("internet");
var section4 = document.getElementById("mails");

section1.style.display = "none";
section2.style.display = "none";
section3.style.display = "none";
section4.style.display = "none";

function systemeToggleSection() {
    systeme_title.classList.toggle("collapsed");
    systeme_title.classList.toggle("expanded");
    if (section1.style.display == "none") {
    section1.style.display = "block";
    } 
    else {
    section1.style.display = "none";
    }
}

var systeme_title = document.getElementById("title_systeme");
systeme_title.addEventListener("click", systemeToggleSection);



function stockageToggleSection() {
    stockage_title.classList.toggle("collapsed");
    stockage_title.classList.toggle("expanded");
  if (section2.style.display == "none") {
    section2.style.display = "block";
  } else {
    section2.style.display = "none";
  }
}

var stockage_title = document.getElementById("title_stockage");
stockage_title.addEventListener("click", stockageToggleSection)



function internetToggleSection() {
    internet_title.classList.toggle("collapsed");
    internet_title.classList.toggle("expanded");
  if (section3.style.display == "none") {
    section3.style.display = "block";
  } else {
    section3.style.display = "none";
  }
}

var internet_title = document.getElementById("title_internet");
internet_title.addEventListener("click", internetToggleSection)



function mailsToggleSection() {
    mails_title.classList.toggle("collapsed");
    mails_title.classList.toggle("expanded");
  if (section4.style.display == "none") {
    section4.style.display = "block";
  } else {
    section4.style.display = "none";
  }
}

var mails_title = document.getElementById("title_mails");
mails_title.addEventListener("click", mailsToggleSection)