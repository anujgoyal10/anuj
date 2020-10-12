


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Home page</title>


<style>
      table {
        border-collapse: separate;
        border-spacing: 0 15px;
      }
      th {
        background-color: #4287f5;
        color: white;
      }
      th,
      td {
        width: 150px;
        text-align: center;
        border: 1px solid black;
        padding: 5px;
      }
      h2 {
        color: #4287f5;
      }
    </style>


  </head>
<body>
  <!-- <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script> -->
<div class="container">
<form action="#" id="myform" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="City">
  </div>
  <div class="form-group">
    <label for="occupation">Occupation</label>
    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation">
  </div>
  <button type="submit" class="btn btn-primary" name="submit" id= "button"> Submit</button>
</form>

<div class="container">
<?php
 define('HOST','localhost');
 define('USERNAME', 'test');
 define('PASSWORD','Asdf@1234');
 define('DB','test');


 $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
  if (!empty($_POST)){
  $name= $_POST['name'] ;
  $city= $_POST['city'];
  $occupation =$_POST['occupation'];
   $sql = "insert into formdata (name, city,occupation) values ('$name','$city','$occupation')";
 
 if(mysqli_query($con, $sql)){
echo "<table>
    <tr>
    <div column-gap: 40px>
      <th>Name</th>
        <th>City</th>
        <th>Occupation</th>
        </div>
    </tr>";
    echo "<tr>";
    echo "<td >".$name."</td>";
    echo "<td >".$city."</td>";
    echo "<td >".$occupation."</td>";
    echo "</tr>";
    echo "</table>";
 }
  
}

?>
</div>

</div> 
 <!-- 
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
<script type="text/javascript">
$(document).ready(function(){
  $("#myform").submit(function(event){
    var postdata = $("#myform").serialize();
  })
});
</script>
 -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




<script>
  $(document).ready(function () {
    $('.btn-primary').click(function (e) {
      e.preventDefault();
      var name = $('#name').val();
      var city = $('#city').val();
      var occupation = $('#occupation').val();
      $.ajax
        ({
          type: "POST",
          url: "form.php",
          data: { "name": name, "city": city, "occupation": occupation },
          success: function (data) {
            $('.container').html(data);
            $('#myform')[0].reset();
          }
        });
    });
  });
</script>


</body>
</html>




