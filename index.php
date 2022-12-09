<?php 

include 'koneksi.php';

error_reporting(0);

if(isset($_POST['submit'])){

		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$nohp = $_POST['nohp'];
		$uploadfoto = $_FILES['uploadfoto']['name'];
		$a =  $_POST['0'];
		$b =  $_POST['1'];
		$c =  $_POST['2'];
		$d =  $_POST['3'];
		$e =  $_POST['4'];
		$f =  $_POST['5'];
		$g =  $_POST['6'];
		$h =  $_POST['7'];
		$i =  $_POST['8'];
		$j =  $_POST['9'];
		$k =  $_POST['10'];
		$l =  $_POST['11'];
		$m =  $_POST['12'];
		$n =  $_POST['13'];
		$o =  $_POST['14'];
		$p =  $_POST['15'];
		$q =  $_POST['16'];
		$r =  $_POST['17'];
		$s =  $_POST['18'];
		$t =  $_POST['19'];
		$u =  $_POST['20'];
		$v =  $_POST['21'];
		$w =  $_POST['22'];
		$x =  $_POST['23'];
		$y =  $_POST['24'];
		$z =  $_POST['25'];

		$aa = $_POST['26'];
		$bb = $_POST['27'];
		$cc = $_POST['28'];
		$dd = $_POST['29'];
		$ee = $_POST['30'];
		$ff = $_POST['31'];
		$gg = $_POST['32'];
		$hh = $_POST['33'];
		$ii = $_POST['34'];
		$jj = $_POST['35'];
		$kk = $_POST['36'];
		$ll = $_POST['37'];
		$mm = $_POST['38'];
		$nn = $_POST['39'];
		$oo = $_POST['40'];
		$pp = $_POST['41'];
		$qq = $_POST['42'];
		$rr = $_POST['43'];
		$ss = $_POST['44'];
		$tt = $_POST['45'];
		$uu = $_POST['46'];
		$vv = $_POST['47'];
		$ww = $_POST['48'];
		$xx = $_POST['49'];
		$yy = $_POST['50'];
		$zz = $_POST['51'];

		$aaa = $_POST['52'];
		$bbb = $_POST['53'];
		$ccc = $_POST['54'];
		$ddd = $_POST['55'];
		$eee = $_POST['56'];
		$fff = $_POST['57'];
		$ggg = $_POST['58'];
		$hhh = $_POST['59'];
		$iii = $_POST['60'];
		$jjj = $_POST['61'];
		$kkk = $_POST['62'];
		$lll = $_POST['63'];
		$mmm = $_POST['64'];
		$nnn = $_POST['65'];
		$ooo = $_POST['66'];
		$ppp = $_POST['67'];
		$qqq = $_POST['68'];
		$rrr = $_POST['69'];
		$sss = $_POST['70'];
		$ttt = $_POST['71'];
		$uuu = $_POST['72'];
		$vvv = $_POST['73'];
		$www = $_POST['74'];
		$xxx = $_POST['75'];
		$yyy = $_POST['76'];
		$zzz = $_POST['77'];

		$aaaa = $_POST['78'];
		$bbbb = $_POST['79'];
		$cccc = $_POST['80'];
		$eeee = $_POST['81'];
		$ffff = $_POST['82'];
		$gggg = $_POST['83'];
		$hhhh = $_POST['84'];
		$iiii = $_POST['85'];
		$jjjj = $_POST['86'];
		$kkkk = $_POST['87'];
		$llll = $_POST['88'];
		$mmmm = $_POST['89'];
		$nnnn = $_POST['90'];
		$oooo = $_POST['91'];
		$pppp = $_POST['92'];
		$qqqq = $_POST['93'];
		$rrrr = $_POST['94'];
		$ssss = $_POST['95'];
		$tttt = $_POST['96'];
		$uuuu = $_POST['97'];
		$vvvv = $_POST['98'];
		$wwww = $_POST['99'];
		$xxxx = $_POST['100'];
		$yyyy = $_POST['101'];
		$zzzz = $_POST['102'];

		$aaaaa = $_POST['103'];
		$bbbbb = $_POST['104'];
		$ccccc = $_POST['105'];
		$ddddd = $_POST['106'];
		$eeeee = $_POST['107'];
		$fffff = $_POST['108'];
		$ggggg = $_POST['109'];
		$hhhhh = $_POST['110'];
		$iiiii = $_POST['111'];
		$jjjjj = $_POST['112'];
		$kkkkk = $_POST['113'];
		$lllll = $_POST['114'];
		$mmmmm = $_POST['115'];
		$nnnnn = $_POST['116'];
		$ooooo = $_POST['117'];
		$ppppp = $_POST['118'];
		$qqqqq = $_POST['119'];
		$rrrrr = $_POST['120'];
		$sssss = $_POST['121'];
		$ttttt = $_POST['122'];
		$uuuuu = $_POST['123'];
		$vvvvv = $_POST['124'];
		$wwwww = $_POST['125'];
		$xxxxx = $_POST['126'];
		$yyyyy = $_POST['127'];
		$zzzzz = $_POST['128'];

		$aaaaaa = $_POST['129'];
		$bbbbbb = $_POST['130'];
		$cccccc = $_POST['131'];
		$dddddd = $_POST['132'];
		$eeeeee = $_POST['133'];
		$ffffff = $_POST['134'];
		$gggggg = $_POST['135'];
		$hhhhhh = $_POST['136'];
		$iiiiii = $_POST['137'];
		$jjjjjj = $_POST['138'];
		$kkkkkk = $_POST['139'];
		$llllll = $_POST['140'];
		$mmmmmm = $_POST['141'];
		$nnnnnn = $_POST['142'];
		$oooooo = $_POST['143'];
		$pppppp = $_POST['144'];
		$qqqqqq = $_POST['145'];
		$rrrrrr = $_POST['146'];
		$ssssss = $_POST['147'];
		$tttttt = $_POST['148'];
		$uuuuuu = $_POST['149'];
		$vvvvvv = $_POST['150'];
		$wwwwww = $_POST['151'];
		$xxxxxx = $_POST['152'];
		$yyyyyy = $_POST['153'];
		$zzzzzz = $_POST['154'];

		$aaaaaaa = $_POST['155'];
		$bbbbbbb = $_POST['156'];
		$ccccccc = $_POST['157'];
		$ddddddd = $_POST['158'];
		$eeeeeee = $_POST['159'];
		$fffffff = $_POST['160'];
		$ggggggg = $_POST['161'];
		$hhhhhhh = $_POST['162'];
		$iiiiiii = $_POST['163'];
		$jjjjjjj = $_POST['164'];
		$kkkkkkk = $_POST['165'];
		$lllllll = $_POST['166'];
		$mmmmmmm = $_POST['167'];
		$nnnnnnn = $_POST['168'];
		$ooooooo = $_POST['169'];
		$ppppppp = $_POST['170'];
		$qqqqqqq = $_POST['171'];
		$rrrrrrr = $_POST['172'];
		$sssssss = $_POST['173'];
		$ttttttt = $_POST['174'];
		$uuuuuuu = $_POST['175'];
		$vvvvvvv = $_POST['176'];
		$wwwwwww = $_POST['177'];
		$xxxxxxx = $_POST['178'];
		$yyyyyyy = $_POST['179'];
		$zzzzzzz = $_POST['180'];

		$aaaaaaaa = $_POST['181'];
		$bbbbbbbb = $_POST['182'];
		$cccccccc = $_POST['183'];
		$dddddddd = $_POST['184'];
		$eeeeeeee = $_POST['185'];
		$ffffffff = $_POST['186'];
		$gggggggg = $_POST['187'];
		$hhhhhhhh = $_POST['188'];
		$iiiiiiii = $_POST['189'];
		$jjjjjjjj = $_POST['190'];
		$kkkkkkkk = $_POST['191'];
		$llllllll = $_POST['192'];
		$mmmmmmmm = $_POST['193'];
		$nnnnnnnn = $_POST['194'];
		$oooooooo = $_POST['195'];
		$pppppppp = $_POST['196'];
		$qqqqqqqq = $_POST['197'];
		$rrrrrrrr = $_POST['198'];
		$ssssssss = $_POST['199'];
		$tttttttt = $_POST['200'];
		$uuuuuuuu = $_POST['201'];
		$vvvvvvvv = $_POST['202'];
		$wwwwwwww = $_POST['203'];
		$xxxxxxxx = $_POST['204'];
		$yyyyyyyy = $_POST['205'];
		$zzzzzzzz = $_POST['206'];

		$aaaaaaaaa = $_POST['207'];
		$bbbbbbbbb = $_POST['208'];
		$ccccccccc = $_POST['209'];
		$ddddddddd = $_POST['210'];
		$eeeeeeeee = $_POST['211'];
		$fffffffff = $_POST['212'];
		$ggggggggg = $_POST['213'];
		$hhhhhhhhh = $_POST['214'];
		$iiiiiiiii = $_POST['215'];
		$jjjjjjjjj = $_POST['216'];
		$kkkkkkkkk = $_POST['217'];
		$lllllllll = $_POST['218'];
		$mmmmmmmmm = $_POST['219'];
		$nnnnnnnnn = $_POST['220'];
		$ooooooooo = $_POST['221'];
		$ppppppppp = $_POST['222'];
		$qqqqqqqqq = $_POST['223'];
		$rrrrrrrrr = $_POST['224'];
		$sssssssss = $_POST['225'];
		$ttttttttt = $_POST['226'];
		$uuuuuuuuu = $_POST['227'];
		$vvvvvvvvv = $_POST['228'];
		$wwwwwwwww = $_POST['229'];
		$xxxxxxxxx = $_POST['230'];
		$yyyyyyyyy = $_POST['231'];
		$zzzzzzzzz = $_POST['232'];

		$aaaaaaaaaa = $_POST['233'];
		$bbbbbbbbbb = $_POST['234'];
		$cccccccccc = $_POST['235'];
		$dddddddddd = $_POST['236'];
		$eeeeeeeeee = $_POST['237'];
		$ffffffffff = $_POST['238'];
		$gggggggggg = $_POST['239'];
		$hhhhhhhhhh = $_POST['240'];
		$iiiiiiiiii = $_POST['241'];
		$jjjjjjjjjj = $_POST['242'];
		$kkkkkkkkkk = $_POST['243'];
		$llllllllll = $_POST['244'];
		$mmmmmmmmmm = $_POST['245'];
		$nnnnnnnnnn = $_POST['246'];
		$oooooooooo = $_POST['247'];
		$pppppppppp = $_POST['248'];
		$qqqqqqqqqq = $_POST['249'];
		$rrrrrrrrrr = $_POST['250'];
		$ssssssssss = $_POST['251'];
		$tttttttttt = $_POST['252'];
		$uuuuuuuuuu = $_POST['253'];
		$vvvvvvvvvv = $_POST['254'];
		$wwwwwwwwww = $_POST['255'];
		$xxxxxxxxxx = $_POST['256'];
		$yyyyyyyyyy = $_POST['257'];
		$zzzzzzzzzz = $_POST['258'];

		$aaaaaaaaaaa = $_POST['259'];
		$bbbbbbbbbbb = $_POST['260'];
		$ccccccccccc = $_POST['261'];
		$ddddddddddd = $_POST['262'];
		$eeeeeeeeeee = $_POST['263'];
		$fffffffffff = $_POST['264'];
		$ggggggggggg = $_POST['265'];
		$hhhhhhhhhhh = $_POST['266'];
		$iiiiiiiiiii = $_POST['267'];
		$jjjjjjjjjjj = $_POST['268'];
		$kkkkkkkkkkk = $_POST['269'];
		$lllllllllll = $_POST['270'];
		$mmmmmmmmmmm = $_POST['271'];
		$nnnnnnnnnnn = $_POST['272'];
		$ooooooooooo = $_POST['273'];
		$ppppppppppp = $_POST['274'];
		$qqqqqqqqqqq = $_POST['275'];
		$rrrrrrrrrrr = $_POST['276'];
		$sssssssssss = $_POST['277'];
		$ttttttttttt = $_POST['278'];
		$uuuuuuuuuuu = $_POST['279'];
		$vvvvvvvvvvv = $_POST['280'];
		$wwwwwwwwwww = $_POST['281'];
		$xxxxxxxxxxx = $_POST['282'];
		$yyyyyyyyyyy = $_POST['283'];
		$zzzzzzzzzzz = $_POST['284'];

		$aaaaaaaaaaaa = $_POST['285'];
		$bbbbbbbbbbbb = $_POST['286'];
		$cccccccccccc = $_POST['287'];
		$dddddddddddd = $_POST['288'];
		$eeeeeeeeeeee = $_POST['289'];
		$ffffffffffff = $_POST['290'];
		$gggggggggggg = $_POST['291'];
		$hhhhhhhhhhhh = $_POST['292'];
		$iiiiiiiiiiii = $_POST['293'];
		$jjjjjjjjjjjj = $_POST['294'];
		$kkkkkkkkkkkk = $_POST['295'];
		$llllllllllll = $_POST['296'];
		$mmmmmmmmmmmm = $_POST['297'];
		$nnnnnnnnnnnn = $_POST['298'];
		$oooooooooooo = $_POST['299'];
		$pppppppppppp = $_POST['300'];
		$qqqqqqqqqqqq = $_POST['301'];
		$rrrrrrrrrrrr = $_POST['302'];
		$ssssssssssss = $_POST['303'];
		$tttttttttttt = $_POST['304'];
		$uuuuuuuuuuuu = $_POST['305'];
		$vvvvvvvvvvvv = $_POST['306'];
		$wwwwwwwwwwww = $_POST['307'];
		$xxxxxxxxxxxx = $_POST['308'];
		$yyyyyyyyyyyy = $_POST['309'];
		$zzzzzzzzzzzz = $_POST['310'];

		$aaaaaaaaaaaaa = $_POST['311'];
		$bbbbbbbbbbbbb = $_POST['312'];
		$ccccccccccccc = $_POST['313'];
		$ddddddddddddd = $_POST['314'];
		$eeeeeeeeeeeee = $_POST['315'];
		$fffffffffffff = $_POST['316'];
		$ggggggggggggg = $_POST['317'];
		$hhhhhhhhhhhhh = $_POST['318'];
		$iiiiiiiiiiiii = $_POST['319'];
		$jjjjjjjjjjjjj = $_POST['320'];
		$kkkkkkkkkkkkk = $_POST['321'];
		$lllllllllllll = $_POST['322'];
		$mmmmmmmmmmmmm = $_POST['323'];
		$nnnnnnnnnnnnn = $_POST['324'];
		$ooooooooooooo = $_POST['325'];
		$ppppppppppppp = $_POST['326'];
		$qqqqqqqqqqqqq = $_POST['327'];
		$rrrrrrrrrrrrr = $_POST['328'];
		$sssssssssssss = $_POST['329'];
		$ttttttttttttt = $_POST['330'];
		$uuuuuuuuuuuuu = $_POST['331'];
		$vvvvvvvvvvvvv = $_POST['332'];
		$wwwwwwwwwwwww = $_POST['333'];
		$xxxxxxxxxxxxx = $_POST['334'];
		$yyyyyyyyyyyyy = $_POST['335'];
		$zzzzzzzzzzzzz = $_POST['336'];

		$aaaaaaaaaaaaaa = $_POST['337'];
		$bbbbbbbbbbbbbb = $_POST['338'];
		$cccccccccccccc = $_POST['339'];
		
		
		
		$a1 =  $_POST['a1'];
		$a2 =  $_POST['a2'];

		$b1 =  $_POST['b1'];
		$b2 =  $_POST['b2'];

		$c1 =  $_POST['c1'];
		$c2 =  $_POST['c2'];

		$d1 =  $_POST['d1'];
		$d2 =  $_POST['d2'];
		$d3 =  $_POST['d3'];

		$e1 =  $_POST['e1'];
		$e2 =  $_POST['e2'];

		$f1 =  $_POST['f1'];
		$f2 =  $_POST['f2'];

		$g1 =  $_POST['g1'];
		$g2 =  $_POST['g2'];

		$keluhan =  $_POST['keluhan'];
		$diagnosaterapi =  $_POST['diagnosaterapi'];
		

	


	$pilihanuser = [$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$aa,$bb,$cc,$dd,$ee,$ff,$gg,$hh,$ii,$jj,$kk,$ll,$mm,$nn,$oo,$pp,$qq,$rr,$ss,$tt,$uu,$vv,$ww,$xx,$yy,$zz,$aaa,$bbb,$ccc,$ddd,$eee,$fff,$ggg,$hhh,$iii,$jjj,$kkk,$lll,$mmm,$nnn,$ooo,$ppp,$qqq,$rrr,$sss,$ttt,$uuu,$vvv,$www,$xxx,$yyy,$zzz,$aaaa,$bbbb,$cccc,$dddd,$eeee,$ffff,$gggg,$hhhh,$iiii,$jjjj,$kkkk,$llll,$mmmm,$nnnn,$oooo,$pppp,$qqqq,$rrrr,$ssss,$tttt,$uuuu,$vvvv,$wwww,$xxxx,$yyyy,$zzzz,$aaaaa,$bbbbb,$ccccc,$ddddd,$eeeee,$fffff,$ggggg,$hhhhh,$iiiii,$jjjjj,$kkkkk,$lllll,$mmmmm,$nnnnn,$ooooo,$ppppp,$qqqqq,$rrrrr,$sssss,$ttttt,$uuuuu,$vvvvv,$wwwwww,$xxxxx,$yyyyy,$zzzzz,$aaaaaa,$bbbbbb,$cccccc,$dddddd,$eeeeee,$ffffff,$gggggg,$hhhhhh,$iiiiii,$jjjjjj,$kkkkkk,$llllll,$mmmmmm,$nnnnnn,$oooooo,$pppppp,$qqqqqq,$rrrrrr,$ssssss,$tttttt,$uuuuuu,$vvvvvv,$wwwwww,$xxxxxx,$yyyyyy,$zzzzzz,$aaaaaaa,$bbbbbbb,$ccccccc,$ddddddd,$eeeeeee,$fffffff,$ggggggg,$hhhhhhh,$iiiiiii,$jjjjjjj,$kkkkkkk,$lllllll,$mmmmmmm,$nnnnnnn,$ooooooo,$ppppppp,$qqqqqqq,$rrrrrrr,$sssssss,$ttttttt,$uuuuuuu,$vvvvvvv,$wwwwwww,$xxxxxxx,$yyyyyyy,$zzzzzzz,$aaaaaaaa,$bbbbbbbb,$cccccccc,$dddddddd,$eeeeeeee,$ffffffff,$gggggggg,$hhhhhhhh,$iiiiiiii,$jjjjjjjj,$kkkkkkkk,$llllllll,$mmmmmmmm,$nnnnnnnn,$oooooooo,$pppppppp,$qqqqqqqq,$rrrrrrrr,$ssssssss,$tttttttt,$uuuuuuuu,$vvvvvvvv,$wwwwwwww,$xxxxxxxx,$yyyyyyyy,$zzzzzzzz,$aaaaaaaaa,$bbbbbbbbb,$ccccccccc,$ddddddddd,$eeeeeeeee,$fffffffff,$ggggggggg,$hhhhhhhhh,$iiiiiiiii,$jjjjjjjjj,$kkkkkkkkk,$lllllllll,$mmmmmmmmm,$nnnnnnnnn,$ooooooooo,$ppppppppp,$qqqqqqqqq,$rrrrrrrrr,$sssssssss,$ttttttttt,$uuuuuuuuu,$vvvvvvvvv,$wwwwwwwww,$xxxxxxxxx,$yyyyyyyyy,$zzzzzzzzz,$aaaaaaaaaa,$bbbbbbbbbb,$cccccccccc,$dddddddddd,$eeeeeeeeee,$ffffffffff,$gggggggggg,$hhhhhhhhhh,$iiiiiiiiii,$jjjjjjjjjj,$kkkkkkkkkk,$llllllllll,$mmmmmmmmmm,$nnnnnnnnnn,$oooooooooo,$pppppppppp,$qqqqqqqqqq,$rrrrrrrrrr,$ssssssssss,$tttttttttt,$uuuuuuuuuu,$vvvvvvvvvv,$wwwwwwwwww,$xxxxxxxxxx,$yyyyyyyyyy,$zzzzzzzzzz,$aaaaaaaaaaa,$bbbbbbbbbbb,$ccccccccccc,$ddddddddddd,$eeeeeeeeeee,$fffffffffff,$ggggggggggg,$hhhhhhhhhhh,$iiiiiiiiiii,$jjjjjjjjjjj,$kkkkkkkkkkk,$lllllllllll,$mmmmmmmmmmm,$nnnnnnnnnnn,$ooooooooooo,$ppppppppppp,$qqqqqqqqqqq,$rrrrrrrrrrr,$sssssssssss,$ttttttttttt,$uuuuuuuuuuu,$vvvvvvvvvvv,$wwwwwwwwwww,$xxxxxxxxxxx,$yyyyyyyyyyy,$zzzzzzzzzzz,$aaaaaaaaaaaa,$bbbbbbbbbbbb,$cccccccccccc,$dddddddddddd,$eeeeeeeeeeee,$ffffffffffff,$gggggggggggg,$hhhhhhhhhhhh,$iiiiiiiiiiii,$jjjjjjjjjjjj,$kkkkkkkkkkkk,$llllllllllll,$mmmmmmmmmmmm,$nnnnnnnnnnnn,$oooooooooooo,$pppppppppppp,$qqqqqqqqqqqq,$rrrrrrrrrrrr,$ssssssssssss,$tttttttttttt,$uuuuuuuuuuuu,$vvvvvvvvvvvv,$wwwwwwwwwwww,$xxxxxxxxxxxx,$yyyyyyyyyyyy,$zzzzzzzzzzzz,$aaaaaaaaaaaaa,$bbbbbbbbbbbbb,$ccccccccccccc,$ddddddddddddd,$eeeeeeeeeeeee,$fffffffffffff,$ggggggggggggg,$hhhhhhhhhhhhh,$iiiiiiiiiiiii,$jjjjjjjjjjjjj,$kkkkkkkkkkkkk,$lllllllllllll,$mmmmmmmmmmmmm,$nnnnnnnnnnnnn,$ooooooooooooo,$ppppppppppppp,$qqqqqqqqqqqqq,$rrrrrrrrrrrrr,$sssssssssssss,$ttttttttttttt,$uuuuuuuuuuuuu,$vvvvvvvvvvvvv,$wwwwwwwwwwwww,$xxxxxxxxxxxxx,$yyyyyyyyyyyyy,$zzzzzzzzzzzzz,$aaaaaaaaaaaaaa,$bbbbbbbbbbbbbb,$cccccccccccccc,$a1,$a2,$b1,$b2,$c1,$c2,$d1,$d2,$d3,$e1,$e2,$f1,$f2,$g1,$g2];

	

	$totalsum = array_sum($pilihanuser);


	$masukkandata = "INSERT INTO sistempakarikarie set nama = '$nama',alamat = '$alamat',nohp = '$nohp' ,totalscore = '$totalsum', keluhan = '$keluhan', diagnosaterapi = '$diagnosaterapi', foto = '$uploadfoto'";

	$hubungkamasukkandata = mysqli_query($koneksi,$masukkandata);

	move_uploaded_file($_FILES['uploadfoto']['tmp_name'], "foto/". $uploadfoto );


	if($hubungkamasukkandata){
		header("location:result.php");	
	}else{
		?>
		<script type="text/javascript">
			alert("data gagal terkirim");
		</script>
<?php  
}
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Kuisioner skor peradangan</title>
  </head>
  <body>

  <?php 

  include 'koneksi.php';

  session_start();

  if($_SESSION['namauser']){
?>

<div class="containeri" style="display: flex;flex-direction: column;">



		<!-- open navbar --> 
		<nav class="navbar navbar-expand-lg bg-light">
		  <div class="container-fluid">
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#"><?php echo $_SESSION['namauser']; ?></a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="logout.php">Logout</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="hasil.php">DATA RECORD</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
  		<!-- close navbar -->




  		<!-- open judul -->
		<h1 style="text-align: center; margin-top: 50px; font-weight: bolder;">KUISIONER KELUHAN TUBUH</h1>
		<!-- close judul -->




  		<div style="display: flex;justify-content: center;text-align: center;align-items: center;line-height: 30px;">
  			<form method="POST" enctype="multipart/form-data">

  				<table border-spacing="30px;">

  					<tr>
  						<td><label>Nama</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="nama"></td>
  					</tr>


  					<tr>
  						<td><label>Alamat</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="alamat"></td>
  					</tr>


  					<tr>
  						<td><label>Nomor telepon</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="nohp"></td>
  					</tr>


  					<tr>
  						<td><label style="font-weight: bolder;color: blue;">SILAHKAN PILIH HANYA SALAH SATU JAWABAN DARI TIAP PERTANYAAN</label></td>
  					</tr>





  					<!-- nomor 1 -->
  					<tr>
  						<td><label style="font-weight: bolder;">1. Seberapa sering Anda mengalami brain fog / pikiran buntu dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="0">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="1">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="2">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="3">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="4">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 1-->




  					<!-- nomor 2 -->
  					<tr>
  						<td><label style="font-weight: bolder;">2. Seberapa sering Anda mengalami Sulit mengingat sesuatu dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="5">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="6">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="7">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="8">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="9">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 2 -->

  					


  					<!-- nomor 3 -->
  					<tr>
  						<td><label style="font-weight: bolder;">3. Seberapa sering Anda mengalami Sulit mengambil keputusan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="10">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="11">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="12">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="13">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="14">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 3 -->
  					





  					<!-- nomor 4 -->
  					<tr>
  						<td><label style="font-weight: bolder;">4. Seberapa sering Anda mengalami Bicara cadel atau gagap dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="15">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="16">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="17">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="18">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="19">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 4 -->



  					<!-- nomor 5 -->
  					<tr>
  						<td><label style="font-weight: bolder;">5. Seberapa sering Anda mengalami sulit belajar atau berkonsentrasi/attention deficit dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="20">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="21">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="22">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="23">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="24">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 5 -->




  					<!-- nomor 6 -->
  					<tr>
  						<td><label style="font-weight: bolder;">6. Seberapa sering Anda mengalami sulit dalam mengkoordinasi sesuatu dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="25">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="26">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="27">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="28">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="29">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 6 -->



  					<!-- nomor 7 -->
  					<tr>
  						<td><label style="font-weight: bolder;">7. Seberapa sering Anda mengalami Nyeri Kepala dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="30">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="31">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="32">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="33">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="34">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 7 -->



  					<!-- nomor 8 -->
  					<tr>
  						<td><label style="font-weight: bolder;">8. Seberapa sering Anda mengalami Migrains (nyeri kepala sebelah) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="35">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="36">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="37">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="38">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="39">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 8 -->



  					<!-- nomor 9 -->
  					<tr>
  						<td><label style="font-weight: bolder;">9. Seberapa sering Anda mengalami Pingsan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="40">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="41">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="42">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="43">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="44">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 9-->



  					<!-- nomor 10 -->
  					<tr>
  						<td><label style="font-weight: bolder;">10. Seberapa sering Anda mengalami Memiliki masalah tidur dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="45">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="46">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="47">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="48">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="49">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 10 -->



  					<!-- nomor 11 -->
  					<tr>
  						<td><label style="font-weight: bolder;">11. Seberapa sering Anda mengalami Kelopak mata mudah merah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="50">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="51">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="52">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="53">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="54">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 11 -->



  					<!-- nomor 12 -->
  					<tr>
  						<td><label style="font-weight: bolder;">12. Seberapa sering Anda mengalami Kelopak Mata Mudah Bengkak dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="55">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="56">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="57">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="58">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="59">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 12 -->



  					<!-- nomor 13 -->
  					<tr>
  						<td><label style="font-weight: bolder;">13. Seberapa sering Anda mengalami Dark Circle (kelopak mata bawah berwarna hitam) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="60">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="61">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="62">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="63">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="64">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 13 -->



  					<!-- nomor 14 -->
  					<tr>
  						<td><label style="font-weight: bolder;">14. Seberapa sering Anda mengalami Poor Vision (kesehatan mata yang menurun) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="65">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="66">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="67">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="68">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="69">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 14 -->




  					<!-- nomor 15 -->
  					<tr>
  						<td><label style="font-weight: bolder;">15. Seberapa sering Anda mengalami Mata gatal dan berair dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="70">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="71">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="72">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="73">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="74">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 15 -->




  					<!-- nomor 16 -->
  					<tr>
  						<td><label style="font-weight: bolder;">16. Seberapa sering Anda mengalami Hidung Tersumbat dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="75">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="76">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="77">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="78">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="79">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 16 -->




  					<!-- nomor 17 -->
  					<tr>
  						<td><label style="font-weight: bolder;">17. Seberapa sering Anda mengalami Lendir yang berlebihan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="80">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="81">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="82">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="83">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="84">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 17 -->



  					<!-- nomor 18 -->
  					<tr>
  						<td><label style="font-weight: bolder;">18. Seberapa sering Anda mengalami Hidung mudah meler dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="85">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="86">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="87">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="88">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="89">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 18 -->




  					<!-- nomor 19 -->
  					<tr>
  						<td><label style="font-weight: bolder;">19. Seberapa sering Anda mengalami Masalah pada sinus paranasalis (didiagnosa sinusitis oleh dokter) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="90">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="91">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="92">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="93">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="94">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 19 -->




  					<!-- nomor 20 -->
  					<tr>
  						<td><label style="font-weight: bolder;">20. Seberapa sering Anda mengalami Sering Bersin dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="95">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="96">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="97">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="98">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="99">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 20 -->




  					<!-- nomor 21 -->
  					<tr>
  						<td><label style="font-weight: bolder;">21. Seberapa sering Anda mengalami Telinga mudah gatal dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="100">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="101">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="102">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="103">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="104">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 21 -->



  					<!-- nomor 22 -->
  					<tr>	
  						<td><label style="font-weight: bolder;">22. Seberapa sering Anda mengalami Telinga berdenging dan gangguan pendengaran dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="105">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="106">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="107">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="108">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="109">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 22 -->




  					<!-- nomor 23 -->
  					<tr>
  						<td><label style="font-weight: bolder;">23. Seberapa sering Anda mengalami Keluar cairan pada telinga dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="110">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="111">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="112">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="113">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="114">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 23 -->




  					<!-- nomor 24 -->
  					<tr>
  						<td><label style="font-weight: bolder;">24. Seberapa sering Anda mengalami Infeksi telinga dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="115">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="116">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="117">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="118">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="119">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 24 -->




  					<!-- nomor 25 -->
  					<tr>
  						<td><label style="font-weight: bolder;">25. Seberapa sering Anda mengalami Batuk kronis dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="120">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="121">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="122">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="123">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="124">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 25 -->




  					<!-- nomor 26 -->
  					<tr>
  						<td><label style="font-weight: bolder;">26. Seberapa sering Anda mengalami Sering berdehem seperti ada dahak di tenggorokan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="125">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="126">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="127">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="128">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="129">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 26 -->




  					<!-- nomor 27 --> 
  					<tr>
  						<td><label style="font-weight: bolder;">27. Seberapa sering Anda mengalami Nyeri tenggorokan Bibir mudah bengkak dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="130">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="131">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="132">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="133">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="134">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 27 -->

  					


  					<!-- nomor 28 -->
  					<tr>
  						<td><label style="font-weight: bolder;">28. Seberapa sering Anda mengalami Sariawan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="135">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="136">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="137">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="138">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="139">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 28 -->




  					<!-- nomor 29 -->
  					<tr>
  						<td><label style="font-weight: bolder;">29. Seberapa sering Anda mengalami Detak jantung tidak teratur dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="140">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="141">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="142">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="143">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="144">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 29 -->




  					<!-- nomor 30 -->
  					<tr>
  						<td><label style="font-weight: bolder;">30. Seberapa sering Anda mengalami Detak jantung cepat/deg-degan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="145">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="146">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="147">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="148">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="149">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 30 -->




  					<!-- nomor 31 -->
  					<tr>
  						<td><label style="font-weight: bolder;">31. Seberapa sering Anda mengalami Nyeri dada dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="150">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="151">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="152">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="153">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="154">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 31 -->




  					<!-- nomor 32 -->
  					<tr>
  						<td><label style="font-weight: bolder;">32. Seberapa sering Anda mengalami Dada terasa sesak 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="155">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="156">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="157">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="158">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="159">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 32 -->




  					<!-- nomor 33 -->
  					<tr>
  						<td><label style="font-weight: bolder;">33. Seberapa sering Anda mengalami Asma/Bronkitis dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="160">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="161">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="162">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="163">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="164">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 33 -->




  					<!-- nomor 34 -->
  					<tr>
  						<td><label style="font-weight: bolder;">34. Seberapa sering Anda mengalami Sesak Nafas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="165">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="166">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="167">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="168">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="169">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 34 -->




  					<!-- nomor 35 -->
  					<tr>
  						<td><label style="font-weight: bolder;">35. Seberapa sering Anda mengalami Kesulitan Bernafas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="170">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="171">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="172">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="173">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="174">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 35 -->




  					<!-- nomor 36 -->
  					<tr>
  						<td><label style="font-weight: bolder;">36. Seberapa sering Anda mengalami Jerawat dalam 1 bulan terakhir?</label></td>
  					</tr>

  					
  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="175">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="176">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="177">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="178">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="179">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 36 -->




  					<!-- nomor 37 -->
  					<tr>
  						<td><label style="font-weight: bolder;">37. Seberapa sering Anda mengalami Gatal-gatal, Eczema, kulit kering dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="180">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="181">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="182">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="183">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="184">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 37 -->




  					<!-- nomor 38 -->
  					<tr>
  						<td><label style="font-weight: bolder;">38. Seberapa sering Anda mengalami Rambut Rontok dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="185">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="186">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="187">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="188">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="189">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 38 -->




  					<!-- nomor 39 -->
  					<tr>
  						<td><label style="font-weight: bolder;">39. Seberapa sering Anda mengalami Hot Flashes (merasa hangat tiba-tiba di darah wajah, leher, dada & berkeringat) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="190">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="191">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="192">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="193">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="194">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 39 -->




  					<!-- nomor 40 -->
  					<tr>
  						<td><label style="font-weight: bolder;">40. Seberapa sering Anda mengalami Sulit menurunkan berat badan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="195">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="196">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="197">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="198">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="199">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 40 -->




  					<!-- nomor 41 -->
  					<tr>
  						<td><label style="font-weight: bolder;">41. Seberapa sering Anda mengalami Food cravings (menginginkan dengan sangat makanan tertentu) dan mengalami kelebihan berat badan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="200">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="201">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="202">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="203">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="204">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 41 -->




  					<!-- nomor 42 -->
  					<tr>
  						<td><label style="font-weight: bolder;">42. Seberapa sering Anda mengalami Berat badan kurang dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="205">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="206">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="207">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="208">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="209">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 42 -->




  					<!-- nomor 43 -->
  					<tr>
  						<td><label style="font-weight: bolder;">43. Seberapa sering Anda mengalami Makan berlebihan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="210">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="211">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="212">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="213">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="214">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 43 -->




  					<!-- nomor 44 -->
  					<tr>
  						<td><label style="font-weight: bolder;">44. Seberapa sering Anda mengalami bengkak pada kaki dan tangan (oedema) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="215">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="216">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="217">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="218">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="219">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 44 -->




  					<!-- nomor 45 -->
  					<tr>
  						<td><label style="font-weight: bolder;">45. Seberapa sering Anda mengalami Mual, Muntah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="220">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="221">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="222">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="223">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="224">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 45 -->




  					<!-- nomor 46 -->
  					<tr>
  						<td><label style="font-weight: bolder;">46. Seberapa sering Anda mengalami Diare dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="225">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="226">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="227">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="228">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="229">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 46 -->




  					<!-- nomor 47 -->
  					<tr>
  						<td><label style="font-weight: bolder;">47. Seberapa sering Anda mengalami Konstipasi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="230">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="231">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="232">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="233">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="234">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 47 -->




  					<!-- nomor 48 -->
  					<tr>
  						<td><label style="font-weight: bolder;">48. Seberapa sering Anda mengalami Sering Kembung dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="235">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="236">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="237">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="238">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="239">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 48 -->




  					<!-- nomor 49 -->
  					<tr>
  						<td><label style="font-weight: bolder;">49. Seberapa sering Anda mengalami Sering kentut dan bersendawa dan tangan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="240">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="241">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="242">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="243">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="244">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 49 -->




  					<!-- nomor 50 -->
  					<tr>
  						<td><label style="font-weight: bolder;">50. Seberapa sering Anda mengalami Heartburn/dada terasa seperti panas terbakar dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="245">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="246">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="247">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="248">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="249">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 50 -->




  					<!-- nomor 51 -->
  					<tr>
  						<td><label style="font-weight: bolder;">51. Seberapa sering Anda mengalami Intestinal/Stomach pain or cramps (kram atau nyeri perut) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="250">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="251">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="252">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="253">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="254">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 51 -->




  					<!-- nomor 52 -->
  					<tr>
  						<td><label style="font-weight: bolder;">52. Seberapa sering Anda mengalami Sering cemas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="255">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="256">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="257">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="258">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="259">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 52 -->





  					<!-- nomor 53 -->
  					<tr>
  						<td><label style="font-weight: bolder;">53. Seberapa sering Anda mengalami Depresi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="260">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="261">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="262">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="263">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="264">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 53 -->





  					<!-- nomor 54 -->
  					<tr>
  						<td><label style="font-weight: bolder;">54. Seberapa sering Anda mengalami Mood Swings (mood naik turun) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="265">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="266">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="267">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="268">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="269">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 54 -->




  					<!-- nomor 55 -->
  					<tr>	
  						<td><label style="font-weight: bolder;">55. Seberapa sering Anda mengalami Sering gugup tiba-tiba dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="270">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="271">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="272">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="273">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="274">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 55 -->





  					<!-- nomor 56 -->
  					<tr>
  						<td><label style="font-weight: bolder;">56. Seberapa sering Anda mengalami Mudah Marah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="275">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="276">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="277">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="278">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="279">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 56 -->





  					<!-- nomor 57 -->
  					<tr>
  						<td><label style="font-weight: bolder;">57. Seberapa sering Anda mengalami Fatigue dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="280">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="281">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="282">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="283">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="284">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 57 -->




  					<!-- nomor 58 -->
  					<tr>
  						<td><label style="font-weight: bolder;">58. Seberapa sering Anda mengalami Lesu/Lethargy Hiperaktif dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="285">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="286">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="287">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="288">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="289">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 58 -->





  					<!-- nomor 59 -->
  					<tr>
  						<td><label style="font-weight: bolder;">59. Seberapa sering Anda mengalami Gelisah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="290">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="291">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="292">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="293">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="294">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 59 -->





  					<!-- nomor 60 -->
  					<tr>
  						<td><label style="font-weight: bolder;">60. Seberapa sering Anda mengalami Nyeri Sendi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="295">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="296">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="297">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="298">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="299">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 60 -->




  					<!-- nomor 61 -->
  					<tr>
  						<td><label style="font-weight: bolder;">61. Seberapa sering Anda mengalami Artritis/radang sendi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="300">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="301">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="302">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="303">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="304">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 61 -->





  					<!-- nomor 62 -->
  					<tr>
  						<td><label style="font-weight: bolder;">62. Seberapa sering Anda mengalami Kaku otot dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="305">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="306">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="307">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="308">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="309">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 62 -->





  					<!-- nomor 63 -->
  					<tr>
  						<td><label style="font-weight: bolder;">63. Seberapa sering Anda mengalami Nyeri otot dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="310">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="311">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="312">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="313">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="314">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 63 -->





  					<!-- nomor 64 -->
  					<tr>
  						<td><label style="font-weight: bolder;">64. Seberapa sering Anda mengalami Weakness (merasa tubuh lemah sekali), Tiredness (merasa tubuh lelah sekali) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="315">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="316">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="317">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="318">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="319">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 64 -->





  					<!-- nomor 65 -->
  					<tr>
  						<td><label style="font-weight: bolder;">65. Seberapa sering Anda mengalami Sering sakit/infeksi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="320">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="321">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="322">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="323">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="324">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 65 -->





  					<!-- nomor 66 -->
  					<tr>
  						<td><label style="font-weight: bolder;">66. Seberapa sering Anda mengalami Sering bermasalah pada saluran kandung kemih dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="325">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="326">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="327">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="328">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="329">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 66 -->





  					<!-- nomor 67 -->
  					<tr>
  						<td><label style="font-weight: bolder;">67. Seberapa sering Anda mengalami Gatal pada area Genitalia dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="330">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="331">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="332">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="333">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="334">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 67 -->





  					<!-- nomor 68 -->
  					<tr>
  						<td><label style="font-weight: bolder;">68. Seberapa sering Anda mengalami Gatal pada anus dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="335">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="336">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="337">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="338">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="339">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 68 -->





  				



  					<tr>
  						<td><label style="font-weight: bolder; color: red;"><u>Apakah anda memiliki diagnosa penyakit autoimun dari hasil lab dan diagnosa dokter ?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="80" name="a1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="a2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki lebih dari 1 penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="100" name="b1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="b2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda mengalami peningkatan penanda inflamasi seperti ESR (Erythrocyte sedimentation rate), CPR (C-Reactive Protein) atau homocystein?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="10" name="c1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="c2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>






  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki kerabat dekat (orang tua atau saudara) dengan penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="10" name="d1">
							  <label class="form-check-label" for="inlineCheckbox1">Iya, orang tua memiliki penyakit autoimun</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="d2">
							  <label class="form-check-label" for="inlineCheckbox2">iya, saudara memiliki penyakit autoimun</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="d3">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki kerabat "a second degree relative" seperti kakek nenek, paman, bibik dll yang memiliki penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="5" name="e1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="e2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>


  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda wanita?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="5" name="f1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="f2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Mohon diketik keluhan yang paling dominan yang anda rasakan saat ini</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-floating">
							  <textarea class="form-control" name="keluhan" placeholder="Jawaban anda" id="floatingTextarea2" style="height: 100px"></textarea>
							</div>
  						</td>
  					</tr>







  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>apakah anda sudah mendapatkan diagnosa lengkap berserta data laboratorium dan terapi dari dokter lain?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="g1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="g2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>jika sudah, mohon tuliskan diagnosa dan terapi yang di dapatkan di kolom di bawah ini</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-floating">
							  <textarea class="form-control" name="diagnosaterapi" placeholder="Jawaban anda" id="floatingTextarea2" style="height: 100px"></textarea>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Tambahkan foto hasil laboratorium atau pemeriksaan lain dibawah ini</u></label></td>
  					</tr>
  					<tr>
  						<td><input type="file" name="uploadfoto"></td>
  					</tr>





  					<tr>
  						<td><input type="submit" name="submit" value="Kirim" style="margin-top: 20px;margin-bottom: 50px; background: green; color: white; font-weight: bolder;border-radius: 10px;"></td>
  					</tr>

  				</table>

  			</form>
  		</div>






  	</div>
















<?php
  }else{
?>

<div class="containeri" style="display: flex;flex-direction: column;">

  			<!-- open navbar --> 
			<nav class="navbar navbar-expand-lg bg-light">
			  <div class="container-fluid">
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>
	  		<!-- close navbar -->


	  		<!-- open judul -->
				<h1 style="text-align: center; margin-top: 50px; font-weight: bolder;">KUISIONER KELUHAN TUBUH</h1>
			<!-- close judul -->




  		<div style="display: flex;justify-content: center;text-align: center;align-items: center;line-height: 30px;">
  			<form method="POST" enctype="multipart/form-data">

  				<table border-spacing="30px;">

  					<tr>
  						<td><label>Nama</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="nama"></td>
  					</tr>


  					<tr>
  						<td><label>Alamat</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="alamat"></td>
  					</tr>


  					<tr>
  						<td><label>Nomor telepon</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="nohp"></td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;color: blue;">SILAHKAN PILIH HANYA SALAH SATU JAWABAN DARI TIAP PERTANYAAN</label></td>
  					</tr>


  					<tr>
  						<td><label style="font-weight: bolder;">1. Seberapa sering Anda mengalami brain fog / pikiran buntu dalam 1 bulan terakhir?</label></td>
  					</tr>


  					<tr>	
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="0">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="1">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="2">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="3">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="4">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">2. Seberapa sering Anda mengalami Sulit mengingat sesuatu dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="5">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="6">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="7">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="8">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="9">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;">3. Seberapa sering Anda mengalami Sulit mengambil keputusan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="10">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="11">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="12">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="13">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="14">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">4. Seberapa sering Anda mengalami Bicara cadel atau gagap dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="15">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="16">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="17">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="18">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="19">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">5. Seberapa sering Anda mengalami sulit belajar atau berkonsentrasi/attention deficit dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="20">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="21">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="22">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="23">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="24">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">6. Seberapa sering Anda mengalami sulit dalam mengkoordinasi sesuatu dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="25">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="26">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="27">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="28">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="29">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">7. Seberapa sering Anda mengalami Nyeri Kepala dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="30">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="31">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="32">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="33">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="34">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">8. Seberapa sering Anda mengalami Migrains (nyeri kepala sebelah) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="35">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="36">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="37">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="38">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="39">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">9. Seberapa sering Anda mengalami Pingsan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="40">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="41">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="42">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="43">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="44">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">10. Seberapa sering Anda mengalami Memiliki masalah tidur dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="45">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="46">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="47">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="48">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="49">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">11. Seberapa sering Anda mengalami Kelopak mata mudah merah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="50">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="51">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="52">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="53">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="54">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">12. Seberapa sering Anda mengalami Kelopak Mata Mudah Bengkak dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="55">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="56">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="57">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="58">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="59">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">13. Seberapa sering Anda mengalami Dark Circle (kelopak mata bawah berwarna hitam) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="60">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="61">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="62">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="63">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="64">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">14. Seberapa sering Anda mengalami Poor Vision (kesehatan mata yang menurun) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="65">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="66">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="67">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="68">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="69">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">15. Seberapa sering Anda mengalami Mata gatal dan berair dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="70">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="71">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="72">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="73">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="74">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">16. Seberapa sering Anda mengalami Hidung Tersumbat dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="75">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="76">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="77">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="78">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="79">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">17. Seberapa sering Anda mengalami Lendir yang berlebihan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="80">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="81">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="82">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="83">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="84">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">18. Seberapa sering Anda mengalami Hidung mudah meler dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="85">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="86">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="87">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="88">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="89">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">19. Seberapa sering Anda mengalami Masalah pada sinus paranasalis (didiagnosa sinusitis oleh dokter) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="90">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="91">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="92">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="93">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="94">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">20. Seberapa sering Anda mengalami Sering Bersin dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="95">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="96">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="97">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="98">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="99">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">21. Seberapa sering Anda mengalami Telinga mudah gatal dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="100">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="101">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="102">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="103">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="104">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">22. Seberapa sering Anda mengalami Telinga berdenging dan gangguan pendengaran dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="105">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="106">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="107">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="108">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="109">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">23. Seberapa sering Anda mengalami Keluar cairan pada telinga dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="110">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="111">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="112">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="113">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="114">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">24. Seberapa sering Anda mengalami Infeksi telinga dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="115">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="116">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="117">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="118">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="119">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">25. Seberapa sering Anda mengalami Batuk kronis dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="120">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="121">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="122">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="123">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="124">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">26. Seberapa sering Anda mengalami Sering berdehem seperti ada dahak di tenggorokan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="125">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="126">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="127">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="128">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="129">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">27. Seberapa sering Anda mengalami Nyeri tenggorokan Bibir mudah bengkak dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="130">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="131">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="132">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="133">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="134">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">28. Seberapa sering Anda mengalami Sariawan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="135">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="136">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="137">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="138">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="139">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">29. Seberapa sering Anda mengalami Detak jantung tidak teratur dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="140">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="141">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="142">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="143">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="144">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">30. Seberapa sering Anda mengalami Detak jantung cepat/deg-degan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="145">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="146">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="147">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="148">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="149">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">31. Seberapa sering Anda mengalami Nyeri dada dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="150">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="151">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="152">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="153">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="154">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">32. Seberapa sering Anda mengalami Dada terasa sesak 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="155">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="156">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="157">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="158">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="159">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">33. Seberapa sering Anda mengalami Asma/Bronkitis dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="160">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="162">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="163">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="164">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="164">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">34. Seberapa sering Anda mengalami Sesak Nafas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="165">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="166">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="167">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="168">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="169">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">35. Seberapa sering Anda mengalami Kesulitan Bernafas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="170">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="171">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="172">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="173">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="174">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">36. Seberapa sering Anda mengalami Jerawat dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="175">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="176">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="177">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="178">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="179">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">37. Seberapa sering Anda mengalami Gatal-gatal, Eczema, kulit kering dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="180">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="181">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="182">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="183">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="184">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">38. Seberapa sering Anda mengalami Rambut Rontok dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="185">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="186">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="187">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="188">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="189">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">39. Seberapa sering Anda mengalami Hot Flashes (merasa hangat tiba-tiba di darah wajah, leher, dada & berkeringat) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="190">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="191">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="192">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="193">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="194">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">40. Seberapa sering Anda mengalami Sulit menurunkan berat badan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="195">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="196">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="197">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="198">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="199">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">41. Seberapa sering Anda mengalami Food cravings (menginginkan dengan sangat makanan tertentu) dan mengalami kelebihan berat badan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="200">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="201">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="202">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="203">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="204">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">42. Seberapa sering Anda mengalami Berat badan kurang dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="205">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="206">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="207">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="208">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="209">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">43. Seberapa sering Anda mengalami Makan berlebihan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="210">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="211">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="212">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="213">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="214">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">44. Seberapa sering Anda mengalami bengkak pada kaki dan tangan (oedema) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="215">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="216">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="217">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="218">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="219">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">45. Seberapa sering Anda mengalami Mual, Muntah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="220">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="221">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="222">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="223">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="224">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">46. Seberapa sering Anda mengalami Diare dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="225">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="226">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="227">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="228">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="229">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">47. Seberapa sering Anda mengalami Konstipasi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="230">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="231">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="232">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="233">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="234">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">48. Seberapa sering Anda mengalami Sering Kembung dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="235">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="236">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="237">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="238">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="239">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">49. Seberapa sering Anda mengalami Sering kentut dan bersendawa dan tangan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="240">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="241">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="242">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="243">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="244">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">50. Seberapa sering Anda mengalami Heartburn/dada terasa seperti panas terbakar dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="245">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="246">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="247">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="248">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="249">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">51. Seberapa sering Anda mengalami Intestinal/Stomach pain or cramps (kram atau nyeri perut) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="250">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="251">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="252">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="253">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="254">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">52. Seberapa sering Anda mengalami Sering cemas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="255">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="256">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="257">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="258">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="259">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">53. Seberapa sering Anda mengalami Depresi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="260">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="261">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="262">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="263">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="264">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">54. Seberapa sering Anda mengalami Mood Swings (mood naik turun) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="265">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="266">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="267">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="268">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="269">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">55. Seberapa sering Anda mengalami Sering gugup tiba-tiba dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="270">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="271">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="272">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="273">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="274">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">56. Seberapa sering Anda mengalami Mudah Marah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="275">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="276">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="277">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="278">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="279">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">57. Seberapa sering Anda mengalami Fatigue dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="280">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="281">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="282">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="283">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="284">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">58. Seberapa sering Anda mengalami Lesu/Lethargy Hiperaktif dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="285">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="286">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="287">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="288">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="289">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">59. Seberapa sering Anda mengalami Gelisah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="290">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="291">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="292">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="293">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="294">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">60. Seberapa sering Anda mengalami Nyeri Sendi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="295">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="296">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="297">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="298">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="299">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">61. Seberapa sering Anda mengalami Artritis/radang sendi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="300">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="301">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="302">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="303">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="304">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">62. Seberapa sering Anda mengalami Kaku otot dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="305">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="306">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="307">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="308">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="309">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">63. Seberapa sering Anda mengalami Nyeri otot dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="310">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="311">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="312">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="313">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="314">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">64. Seberapa sering Anda mengalami Weakness (merasa tubuh lemah sekali), Tiredness (merasa tubuh lelah sekali) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="315">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="316">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="317">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="318">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="319">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">65. Seberapa sering Anda mengalami Sering sakit/infeksi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="320">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="321">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="322">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="323">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="324">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">66. Seberapa sering Anda mengalami Sering bermasalah pada saluran kandung kemih dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="325">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="326">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="327">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="328">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="329">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">67. Seberapa sering Anda mengalami Gatal pada area Genitalia dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="330">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="331">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="332">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="333">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="334">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;">68. Seberapa sering Anda mengalami Gatal pada anus dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="335">
							  <label class="form-check-label" for="inlineCheckbox1">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="336">
							  <label class="form-check-label" for="inlineCheckbox2">1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="337">
							  <label class="form-check-label" for="inlineCheckbox2">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="338">
							  <label class="form-check-label" for="inlineCheckbox2">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="339">
							  <label class="form-check-label" for="inlineCheckbox2">setiap hari</label>
							</div>
  						</td>
  					</tr>

  					
  					

  					

  					








  					<tr>
  						<td><label style="font-weight: bolder; color: red;"><u>Apakah anda memiliki diagnosa penyakit autoimun dari hasil lab dan diagnosa dokter ?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="80" name="a1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="a2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki lebih dari 1 penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="100" name="b1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="b2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda mengalami peningkatan penanda inflamasi seperti ESR (Erythrocyte sedimentation rate), CPR (C-Reactive Protein) atau homocystein?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="10" name="c1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="c2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>






  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki kerabat dekat (orang tua atau saudara) dengan penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="10" name="d1">
							  <label class="form-check-label" for="inlineCheckbox1">Iya, orang tua memiliki penyakit autoimun</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="d2">
							  <label class="form-check-label" for="inlineCheckbox2">iya, saudara memiliki penyakit autoimun</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="d3">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki kerabat "a second degree relative" seperti kakek nenek, paman, bibik dll yang memiliki penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="5" name="e1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="e2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>


  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda wanita?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="5" name="f1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="f2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Mohon diketik keluhan yang paling dominan yang anda rasakan saat ini</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-floating">
							  <textarea class="form-control" name="keluhan" placeholder="Jawaban anda" id="floatingTextarea2" style="height: 100px"></textarea>
							</div>
  						</td>
  					</tr>







  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>apakah anda sudah mendapatkan diagnosa lengkap berserta data laboratorium dan terapi dari dokter lain?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="g1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="g2">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>jika sudah, mohon tuliskan diagnosa dan terapi yang di dapatkan di kolom di bawah ini</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-floating">
							  <textarea class="form-control" name="diagnosaterapi" placeholder="Jawaban anda" id="floatingTextarea2" style="height: 100px"></textarea>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Tambahkan foto hasil laboratorium atau pemeriksaan lain dibawah ini</u></label></td>
  					</tr>
  					<tr>
  						<td><input type="file" name="uploadfoto"></td>
  					</tr>





  					<tr>
  						<td><input type="submit" name="submit" value="Kirim" style="margin-top: 20px;margin-bottom: 50px;background: green; color: white; font-weight: bolder;border-radius: 10px;"></td>
  					</tr>

  				</table>

  			</form>
  		</div>






  	</div>



















<?php
  }
 ?>


   

  	


  		<!-- open footer -->
		<div class="footer" style="display: flex;bottom: 0;right: 0;left: 0;padding: 10px; background-color: #000000; width: 100%;">
			<div style="text-align: center;width: 100%;">
				<div style="color: #ffffff;padding-top: 30px;padding-bottom: 30px;">© kuisioner skor peradangan - 2022</div>
			</div>
		</div>
		<!-- close footer -->









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>