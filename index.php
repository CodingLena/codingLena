<!DOCTYPE html>
<html>
  <?php require_once('head.html');?>
 <body>

  <div class="well">
    <img src="assets/img/cake_header.png">
     <h2>Willkommen!</h2>
    <form method="POST" action="login.php" id="sexyFormular">
<input type="text" class="form-control" placeholder="Name..." name="name" autofocus required>
<br>
<input type="password" class="form-control" placeholder="Passwort..." name="password" required>
<hr>
<input type="submit" class="btn btn-danger btn-block" value="Login" id="hallo">
    </form>
  </div>
 </body>
</html>

<script>
$("#hallo").click(function(){
    $('input#hallo').removeClass('btn-danger').addClass('btn-success');
});


$("#sexyFormular").submit(function(e)
{
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR)
        {

        }
    });
    e.preventDefault(); //STOP default action
});
</script>
