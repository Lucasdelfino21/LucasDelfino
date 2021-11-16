var formulario = document.getElementById('formulario');
formulario.addEventListener('submit', function(e){
  e.preventDefault();

  var datos = new FormData(formulario);
  console.log(datos)
  console.log(datos.get('dni'))

fetch("verificar.php",{
  method: "POST",
  body: datos
})
.then (response => response.json())
.then (data =>{
  console.log(data)
  if(data === "error"){
    respuesta.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Error
                </div>
                `
  }
  else{
    respuesta.innerHTML = `<div>
                <table width='100%' border=0>
                <tr bgcolor='#0000FF'>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                </tr>
                <tr>
                    <td>`+data.nombre+`</td>
                    <td>`+data.apellido+`</td>
                    <td>`+data.edad+`</td>
                </tr>
                </table>
                </div>`
      }
  })
})
