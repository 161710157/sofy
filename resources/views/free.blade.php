@extends('layouts.master6')
@extends('layouts.app')
@section('free')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <body background="gambar/miniouns.jpg"></body>
<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Sahabat. <span class="text-muted">Anoy,Wididit,Patok,Obay.</span></h2>
          <p class="lead">Sahabat yang baik adalah orang yang sangat kita percayai dan membuat kita tenang bersamanya. Dia selalu ada dimanapun dan pada saat kapanpun</p>
        </div>
        <div class="col-md-5">
          <?php
$image=glob("gambar/sofy.jpg");
for($i=0;$i<count($image);$i++)	
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

 <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">sahabat. <span class="text-muted">Wididit.</span></h2>
          <p class="lead">Dia adalah orang yang selalu ada dan menemaniku disaat aku rapuh,.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
           <?php
$gg=glob("gambar/wididit.jpg");
for($i=0;$i<count($gg);$i++)  
{
  $double = $gg[$i];
?>
  <img src="<?php echo $double;?>" width="360" heigth="260"/?>
  <?php
}
  ?>        </div>
      </div>      

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">sahabat. <span class="text-muted">Obay.</span></h2>
          <p class="lead">Dia adalah orang yang selalu konyol dan membuatt semua orang tertawa dan kocak,.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
           <?php
$gg=glob("gambar/abista.jpg");
for($i=0;$i<count($gg);$i++)	
{
	$double = $gg[$i];
?>
	<img src="<?php echo $double;?>" width="360" heigth="260"/?>
	<?php
}
	?>        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Sahabat. <span class="text-muted">Patok</span></h2>
          <p class="lead">Dia adalah patner hidup saya .
.</p>
        </div>
        <div class="col-md-5">
            <?php
$ww=glob("gambar/patok1.jpg");
for($i=0;$i<count($ww);$i++)	
{
	$ampun = $ww[$i];
?>
	<img src="<?php echo $ampun;?>" width="260" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

</body>
</html>
@endsection