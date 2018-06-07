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

$( function() {
  $("#tabs").tabs();
});

$('#tableUser').DataTable();
