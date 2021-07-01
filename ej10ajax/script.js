function ajax() {
    let pais = document.getElementById("pais").value;
    let prov = document.getElementById("provincias");
    let s=document.getElementById('agregar');
    let xhr = new XMLHttpRequest();
    xhr.open ("GET", "datos.php?pais="+pais, true);
    
    if (prov.length>0) {
     prov.length=0; 	
    }
     xhr.onload = function(){
         if(conexion.status === 200){
         let json = JSON.parse(xhr.responseText);
         if (pais=='Argentina') {
             for (var i = 0; i < 23; i++) {
                 var option=document.createElement("option");
                 option.value=json[i];
                 option.text=json[i];
                 prov.appendChild(option);
             }
         }else{
             for (var i = 0; i < 19; i++) {
                 var option=document.createElement("option");
                 option.value=json[i];
                 option.text=json[i]; 
                 prov.appendChild(option);
             }
         }
         console.log(pais);
         console.log(json);
         }    
     }
     conexion.send();
 }