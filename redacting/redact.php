<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
$mysql_connect = new mysqli('localhost', 'mysql', 'mysql', 'panda');
    $id = $_GET['id'];
    $tovar = $mysql_connect->query("SELECT * FROM `cartgoods` WHERE `id` = '$id'");
    $tovs = mysqli_fetch_array($tovar);
?> 
<div class="bg-info text-dark mx-auto d-flex justify-content-center" style="width: 300px; margin-top:100px;">
<form action="new.php" method="post" >
<table class="table contayner my-fl_cont table-sm">
  <thead>
    <tr class="table table-primary">
      <th scope="col"><h2>Изменить данные</h2></th>
    </tr>
  </thead>
  <tbody style="display:block; margin:0 auto;">
    <tr>
      <th scope="row" style="margin-bottom:20px; display:block;"><input style="width:270px; display:block; text-align:center;" type="text" name="id" id="id" value="<?=$tovs['id'];?>" readonly></th>
    </tr>
    <tr>
      <th scope="row" style="margin-bottom:20px; display:block;"><input style="width:270px; display:block; text-align:center;" type="text" name="category" id="category" value="<?=$tovs['category'];?>"></th>
    </tr>
    <tr>
      <th scope="row" style="margin-bottom:20px; display:block;"><input style="width:270px; display:block; text-align:center;" type="text" name="title" id="title" value="<?=$tovs['title'];?>"></th>
    </tr>
    <tr>
      <th scope="row" style="margin-bottom:20px; display:block;"><input style="width:270px; display:block; text-align:center;" type="text" name="description" id="description" value="<?=$tovs['description'];?>"></th>
    </tr>
    <tr>
      <th scope="row" style="margin-bottom:20px; display:block;"><input style="width:270px; display:block; text-align:center;" type="text" name="price" id="price" value="<?=$tovs['price'];?>"></th>
    </tr>
    <tr>
      <th scope="row"><button style="display:block; margin:0 auto;" class="btn btn-dark">Изменить</button></th>
    </tr>
  </tbody>
</table>
</form>
</div>
