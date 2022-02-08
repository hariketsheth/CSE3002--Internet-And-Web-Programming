const number = parseInt(prompt('Enter the number N: '));
if (number.length <= 0 || isNaN(number)) {
    alert('Invalid Input!! Please try again');
    document.location.reload(true);
}
const text = "The result of Sum of ";
document.getElementById("number2").innerHTML = text + number + " numbers is:";
let sum = 0;

for (let i = 1; i <= number; i++) {
    const temp = parseInt(prompt('Enter the number '+i+': '));
    sum += temp;
}
document.getElementById("result2").value = sum;