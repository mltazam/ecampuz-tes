<?php
for ($i=1; $i <= 50; $i++) { 
	if ($i%5==0) {
		$cek = $i;
		if ($cek%3==0) {
			echo 'FooBar<br>';
		}else{
			echo 'Bar<br>';
		}
	}
	elseif ($i%3==0) {
		echo 'Foo<br>';
	}
	else{
		echo $i.'<br>';
	}
}
?>