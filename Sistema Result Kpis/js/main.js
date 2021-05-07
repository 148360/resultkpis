$(buscar_datos());

function buscar_datos(consulta){
$.ajax({


url: 'laboratorio3/buscar.php',
type: 'POST',
dataType: 'html',
data: {consulta: consulta},

})
.done(funtion(respuesta){

    $("#datos").html(respuesta);
})
.fail(funtion(){
    console.log("error");
})



}