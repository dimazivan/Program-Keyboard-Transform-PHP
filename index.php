<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tes Mitra</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
	<div class="col-md-12">
		<div class="col-md-6">
			<h1>Form</h1>
			<div class="input-group mb-3">
				<!-- <span class="input-group-text" id="inputGroup-sizing-default">Data</span>
				<input type="text" class="form-control" aria-label="Sizing example input"
					aria-describedby="inputGroup-sizing-default" name="txtinput" id="txtinput" readonly> -->
			</div>
		</div>
		<div class="col-md-6">
			<?php
            $data_key = [
                // "1234567890qwertyuiopasdfghjkl;zxcvbnm,./",
                "1234567890",
                "qwertyuiop",
                "asdfghjkl;",
                "zxcvbnm,./",
            ];
			$data_key1 = [
			    "1234567890",
			];
			$data_key2 = [
			    "qwertyuiop",
			];
			$data_key3 = [
			    "asdfghjkl;",
			];
			$data_key4 = [
			    "zxcvbnm,./",
			];
			// var_dump($data_key);
			// echo $data_key[0]."<br>";

			// $dt_slice = array_map(function ($result) {
			//     return str_split($result);
			// }, $data_key);

			// foreach($dt_slice as $hasil) {
			//     foreach ($hasil as $datahasil) {
			//         echo $datahasil."<br>";
			//         $newdata[] = $datahasil;
			//     }
			// }

			$dt_slice1 = array_map(function ($result1) {
			    return str_split($result1);
			}, $data_key1);

			foreach($dt_slice1 as $hasil1) {
			    foreach ($hasil1 as $datahasil1) {
			        // echo $datahasil1."<br>";
			        $newdata1[] = $datahasil1;
			    }
			}

			$dt_slice2 = array_map(function ($result2) {
			    return str_split($result2);
			}, $data_key2);

			foreach($dt_slice2 as $hasil2) {
			    foreach ($hasil2 as $datahasil2) {
			        // echo $datahasil2."<br>";
			        $newdata2[] = $datahasil2;
			    }
			}

			$dt_slice3 = array_map(function ($result3) {
			    return str_split($result3);
			}, $data_key3);

			foreach($dt_slice3 as $hasil3) {
			    foreach ($hasil3 as $datahasil3) {
			        // echo $datahasil3."<br>";
			        $newdata3[] = $datahasil3;
			    }
			}

			$dt_slice4 = array_map(function ($result4) {
			    return str_split($result4);
			}, $data_key4);

			foreach($dt_slice4 as $hasil4) {
			    foreach ($hasil4 as $datahasil4) {
			        // echo $datahasil4."<br>";
			        $newdata4[] = $datahasil4;
			    }
			}

			// $newdata[] = str_split($data_key[0]);

			// echo $data_key[1]."<br>";
			// echo $data_key[2]."<br>";
			// echo $data_key[3]."<br>";
			?>
			Data 1&nbsp;&nbsp;:<span
				id="data1">&nbsp;<?php echo $data_key1[0]; ?></span><br>
			Data 2&nbsp;&nbsp;:<span
				id="data1">&nbsp;<?php echo $data_key2[0]; ?></span><br>
			Data 3&nbsp;&nbsp;:<span
				id="data1">&nbsp;<?php echo $data_key3[0]; ?></span><br>
			Data 4&nbsp;&nbsp;:<span
				id="data1">&nbsp;<?php echo $data_key4[0]; ?></span><br>
			<br>
			Counter Count&nbsp;<span id="cthori">0</span>
			<br>
			<button type="button" onclick="reverseArray()">Horizontal Flip</button>
			Hasil&nbsp;<span id="hasilhori">0</span>
			<br>
			<br>
			Counter Count&nbsp;<span id="ctveri">0</span>
			<br>
			<button type="button" onclick="vertikalArray()">Vertical Flip</button>
			Hasil&nbsp;<span id="hasilveri">0</span>
			<br>
			<br>
			Input Shift (Data 1)<br>
			<input type="number" id="txtshift" required>
			<br>
			<br>
			<button type="button" onclick="shiftArray()">Shift</button>
			Hasil&nbsp;<span id="hasilshift">0</span>
		</div>
	</div>
	<script>
		var i = 0;
		var z = 9;
		var a = 0;
		var b = 9;
		var c = 1;
		var counter = 1;

		function reverseArray() {
			document.getElementById("cthori").innerText = counter;
			if (i >= 9 || z <= 0) {
				alert('mentok boz');
			} else {
				var dt_key = <?php echo json_encode($newdata1); ?> ;
				console.log(dt_key);
				var result_data = reverseElements(dt_key, i, z);
				console.log(result_data);
				console.log(i);
				console.log(z);
				document.getElementById("hasilhori").innerText = result_data;
			}
			i++;
			z--;
		}

		function vertikalArray() {
			document.getElementById("ctveri").innerText = counter;
			if (a >= 9 || b <= 0 || c >= 9) {
				alert('mentok boz');
			} else {
				var dt_key1 = <?php echo json_encode($newdata1); ?> ;
				var dt_key4 = <?php echo json_encode($newdata4); ?> ;
				// console.log(dt_key1);
				// console.log(dt_key4);
				var result_data1 = dt_key1;
				var result_data4 = dt_key4;
				// var result_data1 = reverseElements(dt_key1, a, b);
				// var result_data4 = reverseElements(dt_key4, a, b);
				var hasil = result_data1.slice(0, a).concat(result_data4[a]).concat(result_data1.slice(c));
				console.log(result_data1);
				console.log(result_data4);
				console.log(hasil);
				console.log(a);
				console.log(b);
				document.getElementById("hasilveri").innerText = hasil;
			}
			a++;
			c++;
			b--;
		}

		function shiftArray() {
			txtshift = document.getElementById("txtshift").value;
			i = 0;
			z = 0;
			if (txtshift >= 11 || txtshift == 0 || txtshift <= -11) {
				alert('mentok boz');
			} else {
				console.log(txtshift);
				var dt_key = <?php echo json_encode($newdata1); ?> ;
				var ahay = dt_key.length
				// var counterdepan = ahay - txtshift;
				console.log(dt_key);
				console.log(ahay);
				// var result_data = dt_key.slice(5).concat(dt_key.slice(0, 5)).reverse();
				var result_data = dt_key.slice(txtshift).concat(dt_key.slice(0, txtshift));
				console.log(result_data);
				document.getElementById("hasilshift").innerText = result_data;
			}
		}

		function reverseElements(array, i, z) {
			var temp = array[i];
			array[i] = array[z];
			array[z] = temp;
			return array;
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
	</script>
</body>

</html>