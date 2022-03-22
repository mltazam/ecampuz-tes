<form method="POST" action="3_operator_logic.php">	
	<input type="number" name="angka1"><br><br>
	<input type="number" name="angka2"><br><br>
	<button type="submit">cek</button>
</form>

	<?php if (!empty($_POST['angka1'])){
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];

			for ($i=1; $i <= $angka1; $i++) { 
				$hasil = $i*$angka2;
				if ($hasil==$angka1) {
					echo 'Hasil = '.$i;
				}else{
					if ($hasil+1==$angka1) {
						echo 'Hasil = '.$i;
					}
				}
			}
		}
	?>