function calc ()
{
    var n1 = parseInt (document.getElementById ('n1').value);
    var n2 = parseInt (document.getElementById ('n2').value);
    var oper = document.getElementById ('operators').value;

    if (oper === '+')
    {
        document.getElementById ('result').value = n1+n2;
    }
    if (oper === '-')
    {
        document.getElementById ('result').value = n1-n2;
    }
    if (oper === '/')
    {
        document.getElementById ('result').value = n1/n2;
    }
    if (oper === '*')
    {
        document.getElementById ('result').value = n1*n2;
    }
    
    let element_window = document.querySelector (".mask"); //получение доступа к окну
    element_window.classList.remove("hidden"); //убрали класс hidden из списка классов этого окна
}


function show () {

     let element_window = document.querySelector (".mask"); //получение доступа к окну
     element_window.classList.remove("hidden"); //убрали класс hidden из списка классов этого окна
    
    }
    
    function hide() {
        let element_window = document.querySelector(".mask");
        element_window.classList.add("hidden");
    }