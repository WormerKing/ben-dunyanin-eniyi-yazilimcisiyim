<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<button>
		<a href="<?php echo base_url("library/index")?>" style="text-decoration: none;">
			Kitap ekle
		</a>
	</button>
	<form action="<?php echo base_url("library/type_save")?>" method="post">
		<label>Kategori ismi</label>
		<input type="text" name="name">

		<br>

		<label>Durum</label>
		<br>

		<label>Aktif</label>
		<input type="radio" name="status" value="1">

		<br>

		<label>Pasif</label>
		<input type="radio" name="status" value="0">

		<br>
		<input type="submit" value="Gönder">
	</form>

	<h1 style="text-align: center;">Tüm kategoriler</h1>
	<hr>

	<?php
		foreach ($types->result() as $type) {
			echo "<div style='text-align:center;'>";
			echo "Kategori adı : "."<a href='".base_url("library/list_books?category=".(str_replace(" ","+",strtolower($type->name))))."'>".strtolower($type->name)."</a>";
			echo "<br>";
			echo "Durum : ".($type->status == 1 ? "Aktif":"Pasif");
			echo "<hr>";
			echo "</div>";
		}
	?>
</body>
</html>