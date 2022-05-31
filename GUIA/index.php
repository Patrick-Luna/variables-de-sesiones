
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Document</title>
  <script src="js/jquery.js"></script>
  <script type="text/javascript"></script>

</head>

<body background="IMG/fondolegal.jpg" style="background-size: no-repeat; background-position: center center;">

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <div class="fadeIn first">
        <center><br><br><br>
          <FONT FACE="Rockwell">
            <h1 style="color:0000">LOGIN</h1>
        </center>
      </div>
      <center>
      <form name="frmDatos" action="login.php" method="post">
        <input type="text" id="user" class="fadeIn second" name="user" placeholder="USUARIO">
        <input type="text" id="pasword" class="fadeIn third" name="pasword" placeholder="CONTRASEÑA">
        <br><br>
        <button type="submit" class="btn btn-danger" id="Enviar" name="Enviar">INGRESO</button>
        </center>
      </form>
      <div id="res">

      </div>
    </div>
  </div>
</body>

</html>

<script src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

    //alert(nombre);  alert(apellido);
    $("#Enviar").click(function() {
      //alert("HERE");
      var user = $("#user").val();
      var pwd = $("#pasword").val();
      $.ajax({
        type: 'post',
        
        url: 'div.php',
        data: {
          'user': user,
          'pasword': pasword
        },
        success: function(response) {
          $("#res").html(response);
        },
        error: function(response) {
          $("#res").html(response);
        }


      });
    });


  });
</script>