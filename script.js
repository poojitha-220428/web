// =====================
// Task 1: Variables
// =====================
var company = "My Startup";
let year = 2026;
const founder = "Poojitha";

console.log(company);
console.log(year);
console.log(founder);


// =====================
// Task 2: Functions
// =====================

// Normal function
function greet() {
    console.log("Welcome to our website!");
}
greet();

// Arrow function
const add = (a, b) => {
    return a + b;
};

const subtract = (a, b) => a - b;

console.log("Addition:", add(5, 3));
console.log("Subtraction:", subtract(5, 3));


// =====================
// Task 3: Built-in Functions
// =====================
alert("Welcome to our Startup Website!");

let userInput = prompt("Enter something:");
console.log("User entered:", userInput);


// =====================
// Task 4: Manipulate HTML
// =====================
function changeText() {
    document.getElementById("text").innerText = "Text Changed Successfully!";
}


// =====================
// Task 5: Styling
// =====================
let toggle = false;

function changeStyle() {
    let element = document.getElementById("styleText");

    if (!toggle) {
        element.style.color = "white";
        element.style.backgroundColor = "black";
        element.style.fontSize = "30px";
        toggle = true;
    } else {
        element.style.color = "black";
        element.style.backgroundColor = "white";
        element.style.fontSize = "20px";
        toggle = false;
    }
}


// =====================
// Task 6: Events
// =====================
let box = document.getElementById("hoverBox");

box.onmouseover = function () {
    box.style.backgroundColor = "yellow";
};

box.onmouseout = function () {
    box.style.backgroundColor = "lightgray";
};


// =====================
// Task 7: Interactive
// =====================

// Greeting
function askName() {
    let name = prompt("Enter your name:");
    document.getElementById("greeting").innerText = "Hello " + name + " 👋";
}

// Form validation
function validateForm(event) {
    event.preventDefault();

    let username = document.getElementById("username").value;

    if (username === "") {
        alert("Username cannot be empty!");
    } else {
        console.log("Form submitted:", username);
        alert("Form submitted successfully!");
    }
}

// Print page
function printPage() {
    window.print();
}