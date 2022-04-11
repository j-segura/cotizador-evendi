var form1 = document.getElementById('form1');

var form2_linea1 = document.getElementById('form2-linea1');

var form2_linea2 = document.getElementById('form2-linea2');

var next1 = document.getElementById('next1');

var next2_linea1 = document.getElementById('next2-linea1');
var next3_linea1 = document.getElementById('next3-linea1');
var next4_linea1 = document.getElementById('next4-linea1');

var next2_linea2 = document.getElementById('next2-linea2');
var next3_linea2 = document.getElementById('next3-linea2');
var next4_linea2 = document.getElementById('next4-linea2');
var next5_linea2 = document.getElementById('next5-linea2');
var next6_linea2 = document.getElementById('next6-linea2');

var barra1 = document.getElementById('barra1');
var barra2 = document.getElementById('barra2');
var barra1_responsive_part1 = document.getElementById('barra1_responsive_part1');
var barra1_responsive_part2 = document.getElementById('barra1_responsive_part2');
var barra2_responsive_part1 = document.getElementById('barra2_responsive_part1');
var barra2_responsive_part2 = document.getElementById('barra2_responsive_part2');

var progress1 = document.getElementById('progress1');
var progress2 = document.getElementById('progress2');
var progress1_part1 = document.getElementById('progress1_part1');
var progress1_part2 = document.getElementById('progress1_part2');
var progress2_part1 = document.getElementById('progress2_part1');
var progress2_part2 = document.getElementById('progress2_part2');

var step1_form1 = document.getElementById('step1-form1');
var step2_form1 = document.getElementById('step2-form1');
var step1_form1_part1 = document.getElementById('step1-form1_part1');
var step1_form2_part1 = document.getElementById('step1-form2_part1');
var step2_form1_part1 = document.getElementById('step2-form1_part1');
var step2_form2_part1 = document.getElementById('step2-form2_part1');

var step1_form2 = document.getElementById('step1-form2');
var step2_form2 = document.getElementById('step2-form2');

/* iconos */ 
var icon1_form1 = document.getElementsByClassName('icon1-form1');
var icon2_form1 = document.getElementsByClassName('icon2-form1');

var icon1_form2 = document.getElementsByClassName('icon1-form2');
var icon2_form2 = document.getElementsByClassName('icon2-form2');


var op1 = document.getElementById('op1');
var op2 = document.getElementById('op2');

var op1_p2 = document.getElementById('op1-p2');
var op2_p2 = document.getElementById('op2-p2');
var op3_p2 = document.getElementById('op3-p2');

var total = document.getElementById('total');

var totalGlobal = 0;//el valor acumulado



//funcion que le coloca los puntos al precio
const inversa = (content) =>{
    let inversContent = [];
    for(let i = content.length; i > -1; i--){
        inversContent.push(content[i]);
        if(inversContent.length % 4 == 0){
            inversContent.push('.')
        }
    }

    let inversPrice = inversContent.join('');

    let price = [];
    for(let i = inversPrice.length; i > -1; i--){
        price.push(inversPrice[i]);
    }

    return price.join('');
}

let ancho;
let alto;



function obtenerTamaño(){
    ancho = document.documentElement.clientWidth;
    alto = document.documentElement.clientHeight;
    let contenido = `Ancho: ${ancho} - Alto: ${alto}`;
    console.log(contenido);

    if(ancho <= 675){
        barra1_responsive_part1.style.display = 'block';
        barra1.style.display = 'none';
    }else{
        barra1_responsive_part1.style.display = 'none';
        barra1.style.display = 'block';
    }    

    if($('#op1').prop('checked')){
        if(ancho <= 675){
            barra1_responsive_part1.style.display = 'block';
            barra2_responsive_part1.style.display = 'none';
            barra1.style.display = 'none';
            barra2.style.display = 'none';
        }else{
            barra1_responsive_part1.style.display = 'none';
            barra2_responsive_part1.style.display = 'none';
            barra1.style.display = 'block';
            barra2.style.display = 'none';
        }
    }

    if($('#op2').prop('checked')){
        if(ancho <= 675){
            barra1_responsive_part1.style.display = 'none';
            barra2_responsive_part1.style.display = 'block';
            barra1.style.display = 'none';
            barra2.style.display = 'none';
        }else{
            barra1_responsive_part1.style.display = 'none';
            barra2_responsive_part1.style.display = 'none';
            barra1.style.display = 'none';
            barra2.style.display = 'block';
        }
    }

}

/* linea 1 */
op1.onclick = function(){

    if($('#op1').prop('checked')){
        if(ancho <= 675){
            barra1_responsive_part1.style.display = 'block';
            barra2_responsive_part1.style.display = 'none';
            barra1.style.display = 'none';
            barra2.style.display = 'none';
        }else{
            barra1_responsive_part1.style.display = 'none';
            barra2_responsive_part1.style.display = 'none';
            barra1.style.display = 'block';
            barra2.style.display = 'none';
        }
    }

    totalGlobal = 0;
    totalGlobal += 1000000;
    total.innerHTML = "$ " + inversa(`${totalGlobal}`);
    next1.style.display = 'block';

    next1.onclick = function(){
        form1.style.display = 'none';
        form2_linea1.style.display = 'flex';
        progress1.style.width = '29.1%';
        progress1_part1.style.width = '50%';
        step1_form1.style.background = '#F130D5';
        step2_form1.style.border = '1px solid #F130D5';
        step1_form1_part1.style.background = '#F130D5';
        step2_form1_part1.style.border = '1px solid #F130D5';
        

        //codigo que funciona pero dudo si se puede mejorar
        icon1_form1[0].style.stroke = "#fff";
        icon1_form1[1].style.stroke = "#fff";
        icon1_form1[2].style.stroke = "#fff";
        icon1_form1[3].style.stroke = "#fff";
        icon2_form1[0].style.stroke = "#F130D5";
        icon2_form1[1].style.stroke = "#F130D5";
    }
} 

/* linea 2 */
op2.onclick = function(){

    if($('#op2').prop('checked')){
        if(ancho <= 675){
            barra1_responsive_part1.style.display = 'none';
            barra2_responsive_part1.style.display = 'block';
            barra1.style.display = 'none';
            barra2.style.display = 'none';
        }else{
            barra1_responsive_part1.style.display = 'none';
            barra2_responsive_part1.style.display = 'none';
            barra1.style.display = 'none';
            barra2.style.display = 'block';
        }
    }

    totalGlobal = 0;
    totalGlobal += 1500000;
    total.innerHTML = "$ " + inversa(`${totalGlobal}`);
    next1.style.display = 'block';

    next1.onclick = function(){
        form1.style.display = 'none';
        form2_linea2.style.display = 'flex';
        progress2.style.width = '21.35%';
        progress2_part1.style.width = '40%';
        step1_form2.style.background = '#F130D5';
        step2_form2.style.border = '1px solid #F130D5';
        step1_form2_part1.style.background = '#F130D5';
        step2_form2_part1.style.border = '1px solid #F130D5';

        icon1_form2[0].style.stroke = "#fff";
        icon1_form2[1].style.stroke = "#fff";
        icon1_form2[2].style.stroke = "#fff";
        icon1_form2[3].style.stroke = "#fff";
        
        icon2_form2[0].style.stroke = "#F130D5";
        icon2_form2[1].style.stroke = "#F130D5";
        icon2_form2[2].style.stroke = "#F130D5";
        icon2_form2[3].style.stroke = "#F130D5";
        icon2_form2[4].style.stroke = "#F130D5";
        icon2_form2[5].style.stroke = "#F130D5";
        icon2_form2[6].style.stroke = "#F130D5";
        icon2_form2[7].style.stroke = "#F130D5";
        icon2_form2[8].style.stroke = "#F130D5";
        icon2_form2[9].style.stroke = "#F130D5";
    }
}

//radios pregunta 2 linia 1

let data = 0;

$('.pregunta2-l1').click(
    function(){
        let valor = $(this).attr('data-valor');
        let tipo = $(this).attr('value');

        totalGlobal = totalGlobal - parseInt(data);
        totalGlobal += parseInt(valor);
        $(total).html("$ " + inversa(`${totalGlobal}`));
        data = valor;
        console.log(tipo);
        
        $('#tipo').html(tipo);
        $('#next2-linea1').show();
    }
);

//radios pregunta 4 linia 1

let data2 = 0;
let valorCuantos = 0;

$('#cuantos').change(function(){

    valorCuantos = $('#cuantos').val() * 20000;
    totalGlobal = totalGlobal - parseInt(data2);
    totalGlobal += valorCuantos;
    $(total).html("$ " + inversa(`${totalGlobal}`));
    data2 = valorCuantos;
    $('#num-products').html($('#cuantos').val());

});


$('.pregunta4-l1').click(
    function(){
        let id = $(this).attr('id');
        let valor = $(this).attr('data-valor');

        if(!id === 'op4-p4'){
            $('#cuantos').val() = 20;
        }
        

        totalGlobal = totalGlobal - parseInt(data2);
        totalGlobal += parseInt(valor);
        $(total).html("$ " + inversa(`${totalGlobal}`));
        data2 = valor; 

        console.log(data2);

        $('#num-products').html($(this).val());
        $('#next4-linea1').show();
    }
);

//radios predunta 2 linia 2
let data3 = 0;


$('.pregunta2-l2').click(
    function(){
        let valor = $(this).attr('data-valor');
        let tipo = $(this).attr('value');

        totalGlobal = totalGlobal - parseInt(data3);
        totalGlobal += parseInt(valor);
        $(total).html("$ " + inversa(`${totalGlobal}`));
        data3 = valor;
        console.log(tipo);
        
        $('#tipo2').html(tipo);
        $('#next2-linea2').show();
    }
);

//radios pregunta 4 linia 2

let data4 = 0;

$('.pregunta4-l2').click(
    function(){
        let valor = $(this).attr('data-valor');

        totalGlobal = totalGlobal - parseInt(data4);
        totalGlobal += parseInt(valor);
        $(total).html("$ " + inversa(`${totalGlobal}`));
        data4 = valor;

        $('#next4-linea2').show();
    }
);

//radios pregunta 5 linia 2

let data5 = 0;

$('.pregunta5-l2').click(
    function(){
        let valor = $(this).attr('data-valor');

        totalGlobal = totalGlobal - parseInt(data5);
        totalGlobal += parseInt(valor);
        $(total).html("$ " + inversa(`${totalGlobal}`));
        data5 = valor;

        $('#next5-linea2').show();
    }
);

//radios pregunta 6 linia 2

let data6 = 0;
let valorCuantos2 = 0;

$('#cuantos2').change(function(){

    valorCuantos2 = $('#cuantos2').val() * 20000;
    totalGlobal = totalGlobal - parseInt(data6);
    totalGlobal += valorCuantos2;
    $(total).html("$ " + inversa(`${totalGlobal}`));
    data6 = valorCuantos2;
    $('#num-products2').html($('#cuantos2').val());

});

$('.pregunta6-l2').click(
    function(){
        let valor = $(this).attr('data-valor');
        let id = $(this).attr('id');

        if(!id === 'op4-p6'){
            $('#cuantos2').val() = 20;
        }

        totalGlobal = totalGlobal - parseInt(data6);
        totalGlobal += parseInt(valor);
        $(total).html("$ " + inversa(`${totalGlobal}`));
        data6 = valor;

        $('#next6-linea2').show();
        $('#num-products2').html($(this).val());
    }
);

$('.checkbox').click(
    function(){
        let valor = $(this).attr('data-valor');
        let is_checked = $(this).prop('checked');
        let btn = $(this).attr('data-btn');

        if(is_checked){
            totalGlobal += parseInt(valor);
            $(total).html("$ " + inversa(`${totalGlobal}`));
        } else {
            totalGlobal -= parseInt(valor);
            $(total).html("$ " + inversa(`${totalGlobal}`));
        }

        hidden_button(btn);
    }
);

function hidden_button(btn_name){

    var checkeds = $('.ghost');
    let is_checked = [];

    $(checkeds).each((i, camp) => {
        if($(camp).prop('checked')){
            is_checked.push(i);
        }
    });

    if(is_checked.length <= 0){
        $(btn_name).hide();
    }else{
        $(btn_name).show();
    }
}

$('#next3-linea1').click(function(){
    var checkeds = $('.valores');
    let is_checked = [];

    $(checkeds).each((i, camp) => {
        if($(camp).prop('checked')){
            is_checked.push($(camp).val());
        }
    });

    let secciones = is_checked.join(", ");

    $('#internas').html(is_checked.join(", "));
    $('#secciones').val(secciones);

    console.log(secciones);
});

$('#next3-linea2').click(function(){
    var checkeds = $('.valores2');
    let is_checked = [];

    $(checkeds).each((i, camp) => {
        if($(camp).prop('checked')){
            is_checked.push($(camp).val());
        }
    });

    let secciones = is_checked.join(", ");

    $('#internas2').html(is_checked.join(", "));
    $('#secciones').val(secciones);

    console.log(secciones);
});

//esta funcion resetea el formulario
$('.btn-reset').click(function(){
    $('.reset').prop('checked', false);
    data = 0;
    data2 = 0;
    data3 = 0;
    data4 = 0;
    data5 = 0;
    data6 = 0;

    $('#next2-linea1').hide();
    $('#next3-linea1').hide();
    $('#next4-linea1').hide();

    $('#next2-linea2').hide();
    $('#next3-linea2').hide();
    $('#next4-linea2').hide();
    $('#next5-linea2').hide();
    $('#next6-linea2').hide();
});


$('.reset_cuantos').click(function(){
    $('#cuantos').val('');
});





/* si (masVeinte esta check){
    datavalor de masVeinte sea igual al valor de lo que se ingrese en la input number x 20.000
}sino{
    la imput sera igual a 0
}

 */

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('input[type=number]').forEach( node => node.addEventListener('keypress', e => {
      if(e.keyCode == 13) {
        e.preventDefault();
      }
    }))
  });

