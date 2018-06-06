$("#formLogin").submit(function(e){
  e.preventeDefault();
  if ($("#email").val() != "" && $("#password").val() != "" && $("#email").val() != " " $("#password").val() != " ") {
    $.ajax({
      url:"validar-login",
      type:"post",
      dataType:"json",
      data:({user:$("#email").val() , pass:$("#password").val()}),
      success:function(result){
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
