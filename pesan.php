<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title> BOOKING TICKET </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- Mengisi Data -->
		<div class="jumbotron">
	  		<div class="container">
	  		 <div class="container">
	          <h3><center>Pemesanan Tiket </center></h3>
	          <br><br>
	            <form>
				  <div class="form-group">
				    <label for="maskapai">Maskapai</label>
				    <input type="text" class="form-control" id="maskapai" name="maskapai" placeholder="Nama Maskapai">
				  </div>

				  <div class="form-group">
				    <label for="bandara1">Bandara Asal </label>
				    <select class="custom-select mr-sm-2" id="bandara1" name="bandara1">
				        <option selected>Choose...</option>
				        <option value="1">Soekarno-Hatta (CGK)</option>
				        <option value="2">Husein Satranegara (BDO)</option>
				        <option value="3">Abdul Rahman Saleh (MLG)</option>
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="bandara2">Bandara Tujuan </label>
				    <select class="custom-select mr-sm-2" id="bandara2" name="bandara2">
				        <option selected>Choose...</option>
				        <option value="1">Sultan Iskandarmuda (BTJ)</option>
				        <option value="2">Ngurah Rai (DPS)</option>
				        <option value="3">Hasanuddin (UPG)</option>
				        <option value="4">Inanwatan (INX)</option>
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="tiket">Harga Tiket </label>
				    <input type="text" class="form-control" id="tiket" name="tiket1">
				  </div>

				  <div class="form-group">
				    <label for="pajak">Pajak </label>
				    <input type="text" class="form-control" id="pajak" name="pajak">
				  </div>

				  <div class="form-group">
				    <label for="total"> Total Harga Tiket </label>
				    <input type="text" class="form-control" id="total" name="total">
				  </div>

				  <br>
				  <center><button type="submit" name="kirim" class="btn btn-success btn-block">SUBMIT</button></center>
	        <br>
	        <a class="btn btn-primary btn-block" href="index.php" role="button">KEMBALI</a>
				</form>
	      <br><br>
			 </div>
			</div>
		</div>
	<!-- Akhir Mengisi Data -->

<?php

//	Fungsi untuk menghitung Total Item.
	//	Total item didapat dengan cara menjumlahkan tiket1, pajak, dan total.
	//	Variabel $a, $b, $c secara berurutan merupakan tiket1, pajak, dan total.
	//	Fungsi ini mengembalikan value Total Keseluruhan.
	function totalItem($a, $b, $c){
		$total = $a + $b + $c;
		return $total;
	}


	$berkas = "json/data.json"; //Variabel berisi nama berkas di mana data dibaca dan ditulis.
	$dataCustomer = array(); //Variabel array kosong untuk menampung data customer dari berkas.
	
	//Mengambil data dari berkas dan mengkonversi data tersebut menjadi array PHP.
	//Variabel $dataJson berisi data dari berkas dalam bentuk array Json.
	//Variabel $dataCustomer berisi data pada $dataJson yang sudah dikonversi menjadi array PHP.
	$dataJson = file_get_contents($berkas);
	$dataCustomer = json_decode($dataJson, true);

	//echo "$dataJson"; //menampilkan isi data json
	//echo "<br><br>"; 
	//print_r($dataCustomer); //menampilkan isi dataCustomer yang sudah berupa array

	if(isset($_POST['Kirim'])){
		$tiket = array(); //Variabel array kosong untuk menampung data nilai yang dimasukkan dari form.
		
		//Memasukkan data tiket ke dalam array $tiket.
		array_push($tiket, $_POST['tiket'], $_POST['pajak'], $_POST['total']);
		
		//Memasukkan data customer dari form ke dalam array $databaru.
		$dataBaru = array(
			'maskapai' => $_POST['maskapai'],
			'bandara1' => $_POST['bandara1'],
			'bandara2' => $_POST['bandara2'],
			'tiket1' => $tiket
		);

		print_r($dataBaru);
		
		array_push($dataCustomer,$dataBaru); //Menambahkan data baru ke dalam data yang sudah ada dalam berkas. 
		
		//Mengkonversi kembali data customer dari array PHP menjadi array Json dan menyimpannya ke dalam berkas.
		$dataJson = json_encode($dataCustomer, JSON_PRETTY_PRINT);
		file_put_contents($berkas, $dataJson);


	}
?>

<p><br><br>
		
		<!-- Tabel untuk menampilkan data Customer. -->
		<table style="width:100%" border="1">
			<tr>
				<!-- Header tabel data Customer. -->
				<th>Maskapai</th>
				<th>Asal Penerbangan</th>
				<th>Tujuan Penerbangan</th>
				<th>Harga Tiket</th>
				<th>Pajak</th>
				<th>Total Harga Tiket</th>
			</tr>
			
<?php
	//	Perulangan untuk menampilkan data customer.
	//	Variabel $i adalah index data customer pada array $dataCustomer.
	for ($i=0; $i < count($dataCustomer); $i++){
		
		//	Memindahkan data dari dalam array $dataCustomer ke variabel baru.
		//	$maskapai adalah data nama maskapai.
		//	$bandara1 adalah data bandara asal.
		//	$bandara2 adalah data bandara tujuan.
		//	$tiket adalah data berisi harga tiket dalam bentuk array berisikan tiket1, pajak, dan total.
		$maskapai = $dataCustomer[$i]['maskapai']; // Contoh isi variabel: "Adam Air".
		$bandara1 = $dataCustomer[$i]['bandara1']; // Contoh isi variabel: "Soekarno-Hatta(CGK)".
		$bandara2 = $dataCustomer[$i]['bandara2']; // Contoh isi variabel: "Husein Satranegara".
		$tiket = $dataCustomer[$i]['tiket1']; // Contoh isi variabel: ["1000", "2000", "500"]
		
		//	Variabel $bandara1 berisi teks yang akan ditampilkan sesuai dengan data pada variabel $bandara1.
		if ($bandara1 == "Soekarno-Hatta(CGK)") $bandara1 = "Soekarno-Hatta";
		elseif ($bandara1 == "Husein Satranegara") $bandara1 = "Husein Satranegara";
		
		//	Baris untuk menampilkan data customer.
		echo "<tr>
				<td>".$maskapai."</td> <!-- Data maskapai. -->
				<td>".$bandara1."</td> <!-- Data nomor hp. -->
				<td>".$bandara2."</td> <!-- Data jenis kelamin. -->
				<td>".$tiket[0]."</td> <!-- Data harga tiket. -->
				<td>".$tiket[1]."</td> <!-- Data harga pajak. -->
				<td>".totalItem($item[0], $item[1], 0)."</td> <!-- Data item3. -->
			</tr>";
	}
?>
		</table>

</body>
</html>