@extends('layouts.master2')
@extends('layouts.app')
@section('gallery')
<!DOCTYPE html>
<html>
<head>
	<title>Trcyduk</title>
</head>

<body background="gambar/ebel.jpg"></body>
<center><h2>Trcyduk</h2>
<?php
$image=glob("gambar/wididit.jpg");
$gg=glob("gambar/abista.jpg");
$ww=glob("gambar/1.jpeg");
$aa=glob("gambar/pramuka.jpg");
$zz=glob("gambar/patok1.jpg");
$app=glob("gambar/sofy.jpg");
for($i=0;$i<count($image);$i++)
for($i=0;$i<count($gg);$i++)
for($i=0;$i<count($ww);$i++)
for($i=0;$i<count($aa);$i++)
for($i=0;$i<count($zz);$i++)	
for($i=0;$i<count($app);$i++)	

{
	$single_image = $image[$i];
	$double = $gg[$i];
	$three = $ww[$i];
	$four = $aa[$i];
	$five = $zz[$i];
	$six = $app[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<img src="<?php echo $double;?>" width="260" heigth="260"/?>
	<img src="<?php echo $three;?>" width="260" heigth="260"/?>
	<img src="<?php echo $four;?>" width="260" heigth="260"/?>
	<img src="<?php echo $five;?>" width="260" heigth="260"/?>
	<img src="<?php echo $six;?>" width="260" heigth="260"/?>
	<?php
}
	?>
</center>
</html>
@endsection