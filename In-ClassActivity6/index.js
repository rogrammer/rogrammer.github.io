/* 
    Furkan Demir    19050111022
    İbrahim Bahça   20050111011
*/


var button = document.getElementById("button");
let h1 = document.getElementById("h1");
let count = 0;
let level = 1;
let timeoutDuration = 500;
let start = false;

button.addEventListener("mouseover", () => setTimeout(random, timeoutDuration));

button.addEventListener("click", click);

function click() {
    count++;
    h1.innerText = "Score: " + count;
    if (count === 3) {
        level++;
        alert("level:" + level)
        count = 0;
        timeoutDuration -= 100;
        if (level > 6) {
          timeoutDuration = 0;
        }
    }
}

function random() {
  button.style.top = Math.random() * 500 + "px";
  button.style.left = Math.random() * 800 + "px";
}
