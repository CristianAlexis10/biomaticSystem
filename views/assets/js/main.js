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

$( function() {
  $("#tabs").tabs();
});

$('#tableUser').DataTable();
