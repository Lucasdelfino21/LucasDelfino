var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formulario);
    console.log(datos)
    console.log(datos.get('dni'))

    fetch('verificar.php',{
        method: 'POST',
        body: datos
    })
        .then( response => response.json())
        .then( data => {
            console.log(data)
            if(data === 'error'){
                respuesta.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Error
                </div>
                `
            }else{
                respuesta.innerHTML = `<div>
                <table width='60%' border=0>
                <tr bgcolor='#00FF00'>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Colegio</th>
                    <th>Numero</th>
                    <th>Direccion</th> 
                </tr>
                <tr>
                    <td>`+data.nombre+`</td>
                    <td>`+data.apellido+`</td>
                    <td>`+data.colegio+`</td>
                    <td>`+data.numero+`</td>
                    <td>`+data.direccion+`</td>
                </tr>
                </table>
                </div>`

            }
        } )
})

window.onload = function(){
    var provincias = document.getElementById("provincias")
    fetch("cargar_provincias.php",{
        method: "GET",
    })
    .then (res => res.json())
    .then (data =>{
        console.log(data);
        for (var i = 0; i < 23; i++){
            var option = document.getElementById("option");
            option.value = data[i].provincia;
            option.text = data[i].provincia;
            provincias.appendChild(option);

        }
    })
}