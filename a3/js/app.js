function navigationMenu() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
}

// const left = document.querySelector(".left");
// const right = document.querySelector(".right");
// const container = document.querySelector(".container");
// left.addEventListener("mouseenter", () => {
// 	container.classList.add("hover-left");
// });
// left.addEventListener("mouseleave", () => {
// 	container.classList.remove("hover-left");
// });
// right.addEventListener("mouseenter", () => {
// 	container.classList.add("hover-right");
// });
// right.addEventListener("mouseleave", () => {
// 	container.classList.remove("hover-right");
// });