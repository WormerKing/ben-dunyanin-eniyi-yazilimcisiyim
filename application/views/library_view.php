<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<button style="text-align:center;">
		<a href="<?php echo base_url('library/types')?>" style="text-decoration: none;">
			Tür ekle
		</a>
	</button>
	<form action="<?php echo base_url('library/save')?>" method="post">
		<label>Kitap adı</label>
		<input type="text" name="name">

		<br>

		<label>Yazar</label>
		<input type="text" name="author">

		<br>

		<label>Tür</label>
		<select name="type">
			<?php
				foreach ($types->result() as $type) {
					echo "<option value='".strtolower($type->name)."'>".strtoupper($type->name)."</option>";
				}
			?>
			<!--option value="aksiyon">Aksiyon</option>
			<option value="hikaye">Hikaye</option>
			<option value="çizgi_roman">Çizgi roman</option>
			<option value="roman">Roman</option-->
		</select>

		<br>

		<label>Yayınlanma tarihi</label>
		<input type="date" name="publish_date">

		<br>

		<label>Durum</label>
		<br>

		<label>Aktif</label>
		<input type="radio" name="status" value="1">
		
		<label>Pasif</label>
		<input type="radio" name="status" value="0">

		<br>
		<input type="submit" value="Gönder">
	</form>

	<hr>

	<h1 style="text-align: center;">Tüm kitaplar liste</h1>
	<?php
		foreach ($books->result() as $book) {
			echo "<div style='text-align:center;'>";
			echo "Kitap adı : ".$book->name;
			echo "<br>";
			echo "Kitap yazarı : ".$book->author;
			echo "<br>";
			echo "Kitap kategörisi : ".$book->type;
			echo "<br>";
			echo "Yayınlanma Tarihi : ".$book->publish_date;
			echo "<br>";
			echo "Kayıt eklenme tarihi : ".$book->createdAt;
			echo "<br>";
			echo "Kitap durumu : ".($book->status == 1 ? "Aktif" : "Pasif");
			echo "</div>";
			echo "<hr>";
		}
	?>
</body>
</html>