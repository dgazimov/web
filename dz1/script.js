function plus () {
    var num1, num2, result;
    num1 = document.getElementById ('n1').value;
    num1 = parseInt(num1);

    num2 = document.getElementById ('n2').value;
    num2 = parseInt(num2);

    result = num1+num2;
    document.getElementById('result').innerHTML = result;
}

function minus () {
    var num1, num2, result;
    num1 = document.getElementById ('n1').value;
    num1 = parseInt(num1);

    num2 = document.getElementById ('n2').value;
    num2 = parseInt(num2);

    result = num1-num2;
    document.getElementById('result').innerHTML = result;
}
function show () {
let element_input = document.querySelector(".calculate");
let data = element_input.value

let element_result = document.querySelector (".result");
element_result.innerHTML = data

 let element_window = document.querySelector (".mask"); //получение доступа к окну
 element_window.classList.remove("hidden"); //убрали класс hidden из списка классов этого окна

}

function hide() {
    let element_window = document.querySelector(".mask");
    element_window.classList.add("hidden");
}