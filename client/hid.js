
const fnameInput = document.getElementById("fname");
const MnameInput = document.getElementById("Mname");
const LnameInput = document.getElementById("Lname");
const emailInput = document.getElementById("email");
const phoneInput = document.getElementById("phone");
const submitbtnButton = document.getElementById("submitbtn");

// Listen for changes to the input fields
fnameInput.addEventListener("input", toggleSubmitbtn);
LnameInput.addEventListener("input", toggleSubmitbtn);
MnameInput.addEventListener("input", toggleSubmitbtn);
emailInput.addEventListener("input", toggleSubmitbtn);
phoneInput.addEventListener("input", toggleSubmitbtn);

function toggleSubmitbtn() {
  // Check if all fields have a value
  if (fnameInput.value && MnameInput.value && LnameInput.value && emailInput.value && phoneInput.value) {
    submitbtn.classList.remove("btn");
  } else {
    submitbtn.classList.add("btn");
  }
}