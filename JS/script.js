function subtrair(a, b) {
    return a - b;
}

let num1 = prompt("Digite o primeiro número:");
let num2 = prompt("Digite o segundo número:");

num1 = parseFloat(num1);
num2 = parseFloat(num2);

let resultado = subtrair(num1, num2);

document.getElementById("resultado").textContent = "A subtração de " + num1 + " por " + num2 + " é: " + resultado;
