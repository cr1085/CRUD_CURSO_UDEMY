$(function(){

    sesion();
    logout();
    registrar();

    $("#save").click(function(){
        dataForm();
    });

     
    $("#siguiente").click(function(){
        sig();
    });


    $("#anterior").click(function(){
        ant();
    });

   $("#closeModal").click(function(){
      cerrarModal();
   });

    dataGeneral();
   
});

// variables globales 
var dataGlobal="";
var inicio=0;
var fin=0;
var pagination=0;



// Enviar data formulario
function dataForm(){

let URL="./framework/salvar.php";
let tabla= document.getElementById("tabla");

$.ajax({

url:URL,
type:'POST',
data: $("#formularioPersona").serialize(),
success: function(data){

    let dataLocal=JSON.parse(data);
    let item=0; 

for(let dat of dataLocal){
    
    tabla.insertRow(-1).innerHTML=`<td>${item}</td><td>${dat.codigo}</td><td>${dat.email}</td><td>${dat.nombre}</td><td><button class="btn btn-info">O</button></td>
    <td><button class="btn btn-danger">X</button></td>`;
    
    item++;
    // console.log(dat);
 
   }

   

}

});

resetForm();

}



function resetForm(){

    alert("datos insertados...");
    document.getElementById("formularioPersona").reset();
    location.reload();
}


// Recibir data general
function dataGeneral(){

let URL = "./framework/dataGeneral.php";



$.ajax({
url: URL,
type: 'POST',
success:function(data){ 
 let dataGeneral = JSON.parse(data);
 dataGlobal = dataGeneral;
 inicio=0;
 fin=3;
 pagination=3;

 info();


console.log(dataGeneral.length);


} 




});





}



// Paginación siguiente 

function sig(){

document.getElementById("tabla").innerHTML="";

inicio=fin ;    
fin+=pagination;   


   
    info();
    



}

// Paginación anterior 
function ant(){

    document.getElementById("tabla").innerHTML="";

    inicio-=pagination;    
    fin-=pagination;   
    
    
       
        info();
        
    
    
    

}

// Información total 
function info(){

        let items=dataGlobal;

    for(let dat=inicio; dat < fin; dat++){

        tabla.insertRow(-1).innerHTML=`<td>${dat+1}</td>
                                       <td>${items[dat].codigo}</td>
                                       <td>${items[dat].email}</td>
                                       <td>${items[dat].nombre}</td>
                                       <td><button type="button" class="btn btn-info" id="${items[dat].codigo}" onClick="update(this)">O</button></td>
                                       <td><button class="btn btn-danger">X</button></td>`;

      }

      if(fin <= (dataGlobal.length - 1)){
      
     $("#siguiente").show();
      }else{
        $("#siguiente").hide();

      }

      if(inicio > (pagination-1)){
      
        $("#anterior").show();
         }else{
           $("#anterior").hide();
   
         }
        

}


// ACTUALIZAR
function update(res){

   $("#exampleModal").modal('show');



   $("#btnUpdate").click(function(){

    let nombreUpdate=document.getElementById('nUpdate');
    let emailUpdate=document.getElementById('eUpdate');



    let URL="./framework/update.php";
    
    let recibirData={
    "codigo":res.id,
    "nombre":nombreUpdate.value,
    "email":emailUpdate.value  
    }

    
    
    $.ajax({
    url: URL,
    type:'POST',
    data:recibirData,
    success: function(data){
    console.log(data);
    }
    
    });

    nombreUpdate.value="";
    emailUpdate.value=""; 

     });
    


}



function cerrarModal(){

$("#exampleModal").modal('hide');


}


// INICIAR SESSION
function sesion(){

    
   
    $("#btnLogin").click(function(){

      let URL="../framework/session.php";
      let loginEmail=document.getElementById('email');
      let logiPass=document.getElementById('pass');
      let sesionPHP={
          "email":loginEmail.value,
          "pass":logiPass.value
      }
      
    $.ajax({
        url: URL,
        type: 'POST',
        data: sesionPHP,
        success: function(data){
         
           let res=JSON.parse(data);                   
          
           if(res[0].codigo === 'error'){
            alert("Usuario o contraseña estan incorrectos");
           }else{
               window.location.href="http://localhost:3000/index.php";
           }
            
        } 


    });  


    });


}


// CERRAR SESSION
function logout(){

$("#logout").click(function(){

    let URL= "../framework/destruirSession.php";
    $.ajax({
url:URL,
type:'POST',
success: function(data){
  
    let res=JSON.parse(data);
console.log(res);
    if(res === 1){
      window.location.href="http://localhost:3000/view/login.php";
    }
    
}

    }); 

});

}

// REGISTRAR  USUARIOS
function registrar(){

    $("#btnRegistrar").click(function(){
    
        let URL="../framework/registrar.php";
        let emailR = document.getElementById('email');
        let passR = document.getElementById('pass'); 
        let registrando={
           
            email:emailR.value,
            pass:passR.value 
        }
        
       $.ajax({
        url:URL,
        type:'POST',
        data:registrando,
        success: function(data){
          let res=JSON.parse(data);
         
         console.log(res);
        }

       });
       
         alert("registrado"); 
       emailR.value="";
       passR.value="";

    });


}