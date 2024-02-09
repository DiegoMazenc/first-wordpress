function pouetPouet(){
    alert('lkdfmlqzkfjhqzrmlfkn');
}

let navBtn = document.querySelector('#navBtn');
let navToggle = document.querySelector('#navToggle');

navBtn.addEventListener("click", (event) => {
    console.log("click")
  navToggle.classList.toggle("navToggleOff");
  navToggle.classList.toggle("navToggleOn");
});