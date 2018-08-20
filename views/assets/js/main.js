$("#formLogin").submit(function(e){
  e.preventDefault();
  if ($("#email").val() != "" && $("#password").val() != "" && $("#email").val() != " " && $("#password").val() != " ") {
    $.ajax({
      url:"validar-login",
      type:"post",
      dataType:"json",
      data:({user:$("#email").val() , pass:$("#password").val()}),
      success:function(result){
        console.log(result);
        if (result=="admin") {
          location.href="adminstracion";
        }else if(result=="user"){
          location.href="user";
        }else{
          $("div.message").remove();
          $("#formLogin").after("<div class='message'>"+result+"</div>");
          setTimeout(function(){$("div.message").remove();},4000);
        }
      },
      error:function(result){console.log(result);}
    });
  }else{
    $("div.message").remove();
    $("#formLogin").after("<div class='message'>Todos los campos son requeridos.</div>");
    setTimeout(function(){$("div.message").remove();},4000);
  }
});
$( function() {
  $("#tabs").tabs();
});
$('#tableUser').DataTable();
$('#tableUser-2').DataTable();

//crear usuario
$("#createUser").submit(function(e){
  e.preventDefault();
  if ($("#nameUser").val() != "" && $("#SnameUser").val() != "" && $("#lastnameUser").val() != "" && $("#SlastnameUser").val() != ""  && $("#emailUser").val() != ""  && $("#passUser").val() != ""  && $("#repPassUser").val() != "") {
      var data = [];
      data.push($("#nameUser").val());
      data.push($("#SnameUser").val());
      data.push($("#lastnameUser").val());
      data.push($("#SlastnameUser").val());
      data.push($("#emailUser").val());
      data.push($("#rolUser").val());
      data.push($("#passUser").val());
    $.ajax({
      url:"crear-usuario",
      type:"post",
      dataType:"json",
      data:({user:data}),
      success:function(result){
        console.log(result);
        if (result==true) {
          $("#createUser")[0].reset();
          location.reload();
        }else{
          $("div.message").remove();
          $("#createUser").after("<div class='message'>"+result+"</div>");
          setTimeout(function(){$("div.message").remove();},4000);
        }
      },
      error:function(result){console.log(result);}
    });
  }else{
    $("div.message").remove();
    $("#createUser").after("<div class='message'>Todos los campos son requeridos.</div>");
    setTimeout(function(){$("div.message").remove();},4000);
  }
});
//modificarUsuario
$("#updateUser").submit(function(e){
  e.preventDefault();
  if ($("#nameUserUp").val() != ""  && $("#lastnameUserUp").val() != ""  && $("#emailUserUp").val() != "") {
      var data = [];
      data.push($("#nameUserUp").val());
      data.push($("#SnameUserUp").val());
      data.push($("#lastnameUserUp").val());
      data.push($("#SlastnameUserUp").val());
      data.push($("#emailUserUp").val());
      data.push($("#rolUserUp").val());
      data.push($("#estadoUserUp").val());
      console.log(data);
    $.ajax({
      url:"modificar-usuario",
      type:"post",
      dataType:"json",
      data:({user:data}),
      success:function(result){
        console.log(result);
        if (result==true) {
          $("#updateUser")[0].reset();
          location.reload();
        }else{
          $("div.message").remove();
          $("#updateUser").after("<div class='message'>"+result+"</div>");
          setTimeout(function(){$("div.message").remove();},4000);
        }
      },
      error:function(result){console.log(result);}
    });
  }else{
    $("div.message").remove();
    $("#updateUser").after("<div class='message'>Todos los campos son requeridos.</div>");
    setTimeout(function(){$("div.message").remove();},4000);
  }
});
//modificarPerfil
$("#updateProfile").submit(function(e){
  e.preventDefault();
  if ($("#nameUserUp").val() != ""  && $("#lastnameUserUp").val() != ""  && $("#emailUserUp").val() != "") {
      var data = [];
      data.push($("#nameUserUp").val());
      data.push($("#SnameUserUp").val());
      data.push($("#lastnameUserUp").val());
      data.push($("#SlastnameUserUp").val());
      data.push($("#emailUserUp").val());
      console.log(data);
    $.ajax({
      url:"modificar-perfil",
      type:"post",
      dataType:"json",
      data:({user:data}),
      success:function(result){
        console.log(result);
        if (result==true) {
          $("#updateProfile")[0].reset();
          location.reload();
        }else{
          $("div.message").remove();
          $("#updateProfile").after("<div class='message'>"+result+"</div>");
          setTimeout(function(){$("div.message").remove();},4000);
        }
      },
      error:function(result){console.log(result);}
    });
  }else{
    $("div.message").remove();
    $("#updateProfile").after("<div class='message'>los campos Nombre, apellido y correo son requeridos.</div>");
    setTimeout(function(){$("div.message").remove();},4000);
  }
});
//modificar contraseña
$("#updatePass").submit(function(e){
  e.preventDefault();
  if (confirm("¿Desea Modificar esta contraseña?")) {
    if ($("#passActual").val() != ""  && $("#passUser").val() != ""  && $("#repPassUser").val() != "") {
      var data = [];
      data.push($("#passActual").val());
      data.push($("#passUser").val());
    if ($("#passUser").val()== $("#repPassUser").val()) {
        console.log(data);
        $.ajax({
          url:"modificar-contrasena",
          type:"post",
          dataType:"json",
          data:({data:data}),
          success:function(result){
            if (result==true) {
              $("#updatePass")[0].reset();
              $("#updatePass").after("<div class='message'>Modoficación Exitosa.</div>");
              setTimeout(function(){$("div.message").remove();},4000);
            }else{
              $("div.message").remove();
              $("#updatePass").after("<div class='message'>"+result+"</div>");
              setTimeout(function(){$("div.message").remove();},4000);
            }
          },
          error:function(result){console.log(result);}
        });
    }else{
      alert("Las contraseñas nuevas no coinciden.");
    }
    }else{
      $("div.message").remove();
      $("#updatePass").after("<div class='message'>Todos los campos son requeridos.</div>");
      setTimeout(function(){$("div.message").remove();},4000);
    }

  }
});
//craer grupo
$("#createGroup").submit(function(e){
  e.preventDefault();
    if ($("#nameGroup").val() != ""  && $("#descGroup").val() ) {
      var data = [];
      data.push($("#nameGroup").val());
      data.push($("#descGroup").val());
        console.log(data);
        $.ajax({
          url:"crear-grupo",
          type:"post",
          dataType:"json",
          data:({data:data}),
          success:function(result){
            if (result==true) {
              $("#createGroup")[0].reset();
              location.href = "asignar_integrantes" ;
            }else{
              $("div.message").remove();
              $("#createGroup").after("<div class='message'>"+result+"</div>");
              setTimeout(function(){$("div.message").remove();},4000);
            }
          },
          error:function(result){console.log(result);}
        });
    }else{
      $("div.message").remove();
      $("#createGroup").after("<div class='message'>Todos los campos son requeridos.</div>");
      setTimeout(function(){$("div.message").remove();},4000);
    }
});
//craer proyecto
$("#createProject").submit(function(e){
  e.preventDefault();
    if ($("#nameProject").val() != ""  && $("#dateProject").val()!="" && $("#fichaProject").val()!="" ) {
      var data = [];
      data.push($("#nameProject").val());
      data.push($("#dateProject").val());
      data.push($("#fichaProject").val());
      data.push($("#tipoPro").val());
        console.log(data);
        $.ajax({
          url:"crear-proyecto",
          type:"post",
          dataType:"json",
          data:({data:data,grupo:$("#grupo").val()}),
          success:function(result){
            if (result==true) {
              $("#createProject")[0].reset();
              location.reload();
              console.log(result);
            }else{
              $("div.message").remove();
              $("#createProject").after("<div class='message'>"+result+"</div>");
              setTimeout(function(){$("div.message").remove();},4000);
            }
          },
          error:function(result){console.log(result);}
        });
    }else{
      $("div.message").remove();
      $("#createProject").after("<div class='message'>Todos los campos son requeridos.</div>");
      setTimeout(function(){$("div.message").remove();},4000);
    }
});
//craer ficha
$("#createFicha").submit(function(e){
  e.preventDefault();
    if ($("#nameFicha").val() != ""  && $("#siglas").val()!="" && $("#fichaProject").val()!="" ) {
      var data = [];
      data.push($("#nameFicha").val());
      data.push($("#siglas").val());
      data.push($("#fichaProject").val());
        console.log(data);
        $.ajax({
          url:"crear-ficha",
          type:"post",
          dataType:"json",
          data:({data:data}),
          success:function(result){
            if (result==true) {
              $("#createFicha")[0].reset();
              location.reload();
              console.log(result);
            }else{
              $("div.message").remove();
              $("#createFicha").after("<div class='message'>"+result+"</div>");
              setTimeout(function(){$("div.message").remove();},4000);
            }
          },
          error:function(result){console.log(result);}
        });
    }else{
      $("div.message").remove();
      $("#createFicha").after("<div class='message'>Todos los campos son requeridos.</div>");
      setTimeout(function(){$("div.message").remove();},4000);
    }
});
function eliminarGrupo(grupo){
  if (confirm("¿Eliminar este grupo?")) {
    $.ajax({
      url:"eliminar-grupo",
      type:"post",
      dataType:"json",
      data:({grupo:grupo}),
      success:function(result){
        console.log(result);
        if(result==true){location.reload();}else{alert(result)}
      },
      error:function(result){console.log(result);}
    });
  }
}
function eliminarFicha(ficha){
  if (confirm("¿Eliminar esta ficha?")) {
    $.ajax({
      url:"eliminar-ficha",
      type:"post",
      dataType:"json",
      data:({ficha:ficha}),
      success:function(result){
        console.log(result);
        if(result==true){location.reload();}else{alert(result)}
      },
      error:function(result){console.log(result);}
    });
  }
}
//cambiar estado
function cambiarEstado(user,est){
  console.log(user,est);
  if (confirm("¿Realizar esta acción?")) {
    $.ajax({
      url:"cambiar-estado-usuario",
      type:"post",
      dataType:"json",
      data:({user:user,estado:est}),
      success:function(result){
        if(result==true){location.reload();}else{alert(result)}
      },
      error:function(result){console.log(result);}
    });
  }
}

function asignar_grupo(usu,grupo){
  if (confirm("¿Agregar como colaborador?")) {
    $.ajax({
      url:"agregar_colaborador",
      type:"post",
      dataType:"json",
      data:({user:usu,grupo:grupo}),
      success:function(result){
        console.log(result);
        if(result==true){location.reload();}else{alert(result)}
      },
      error:function(result){console.log(result);}
    });
  }
}

// abrir y cerrar ventanas modales
function openModal(event, modal) {
  let i, containerModal, x;
  containerModal = document.getElementsByClassName('containerModal');
  for (i = 0; i < containerModal.length; i++) {
    containerModal[i].style.transform = "translateY(-9999px)";
  }
  document.getElementById(modal).style.transform = "translateY(0)";
}
function closeModal(event, modal) {
  let i, closeModal, x;
  closeModal = document.getElementsByClassName('closeModal');
  for (i = 0; i < closeModal.length; i++) {
    closeModal[i].style.transform = "translateY(0)";
  }
  document.getElementById(modal).style.transform = "translateY(-9999px)";
}

// crear acta
$("#createActa").submit(function(e) {
  e.preventDefault();
  if ($("#nameActa").val() != ""  && $("#cityActa").val()!="" && $("#dateActa").val()!=""  && $("#datetimeStartActa").val()!=""  && $("#datetineEndActa").val()!=""  && $("#placeActa").val()!=""  && $("#dirActa").val()!=""  && $("#themeActa").val()!=""  && $("#objetiveActa").val()!=""  && $("#meetActa").val()!=""  && $("#concluActa").val()!=""  && $("#activityActa").val()!=""  && $("#responActa").val()!=""  && $("#dataComproActa").val()!=""  && $("#NameAsistActa").val()!=""  && $("#cargoActa").val()!=""  && $("#nameInvitedActa").val()!=""  && $("#cargoInvitedActa").val()!="" && $("#entidadActa").val()!="" ) {
    var data = [];
    data.push($("#nameActa").val());
    data.push($("#cityActa").val());
    data.push($("#dateActa").val());
    data.push($("#datetimeStartActa").val());
    data.push($("#datetineEndActa").val());
    data.push($("#PlaceActa").val());
    data.push($("#dirActa").val());
    data.push($("#themeActa").val());
    data.push($("#objectiveActa").val());
    data.push($("#meetActa").val());
    data.push($("#concluActa").val());
    data.push($("#activityActa").val());
    data.push($("#responActa").val());
    data.push($("#dataComproActa").val());
    data.push($("#NameAsistActa").val());
    data.push($("#cargoActa").val());
    data.push($("#nameInvitedActa").val());
    data.push($("#cargoInvitedActa").val());
    data.push($("#entidadActa").val());
    $.ajax({
      url:"crear-acta",
      type:"post",
      dataType:"json",
      data:({data:data}),
      success:function(result) {
        console.log(result);
        if (result==true) {
          $("#createActa")[0].reset();
          location.reload();
          console.log(result);
        }else {
          $("div.message").remove();
          $("#createActa").after("<div class='message'>" + result + "</div>");
          setTimeout(function() {$("div.message").remove();},4000);
        }
        },
        error:function(res){
          console.log(res);
        }
    })
 }else{
   alert("Campos vacios.");
 }
 })

 // crear aprendiz

 $("#formAlums").submit(function(e) {
   if ($("#alumnName").val() !="" && $("#alumnLast").val() !="" && $("#alumnTypedoc").val() !="" && $("#alumnDoc").val()!="" && $("#alumnEmail").val() != "" && $("#alumnPhone").val() !="" && $("#alumnDate").val()!="" && $("#alumnDatend").val() !="" && $("#alumnFic").val()!="" && $("#alumnProg").val()!="" && $("#alumnTypevin").val() !="") {
     var data = [];
     data.push($("#alumnName").val());
     data.push($("#alumnLast").val());
     data.push($("#alumnTypedoc").val());
     data.push($("#alumnDoc").val());
     data.push($("#alumnEmail").val());
     data.push($("#alumnPhone").val());
     data.push($("#alumnDate").val());
     data.push($("#alumnDatend").val());
     data.push($("#alumnFic").val());
     data.push($("#alumnFic").val());
     data.push($("#alumnProg").val());
     data.push($("#alumnTypevin").val());
     $.ajax({
       url:"alumns",
       type:"post",
       dataType:"json",
       data:({data:data}),
       success:function(result){
         if (result==true){
           $("formAlums"==true)[0].reset();
           location.reload();
         }else {
           $("div.message").remove();
           $("#formAlums").after("<div class='message'>"+result+"</div>");
           setTimeout(function() {
             $("#formAlums").remove();
           },4000)
         }
       },
       error:function(res) {
         console.log(res);
       }
     })
   }else {
     alert("llena todos los campos");
   }
 })
