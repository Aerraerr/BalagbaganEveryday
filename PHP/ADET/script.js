
function validateForm() {
let x = document.forms["student_form"] ["marks"].value;
if (!((x >= 65) && (x <= 100))) {
    alert("Invalid Grade! Please enter a valid number between 65 and 100. Try again!");
    return false;
    }
}