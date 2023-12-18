<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<button>
		<a href="<?php echo base_url("library/types")?>" style="text-decoration: none;">Geri</a>
	</button>
	<h1 style="text-align: center;"><?php echo strtoupper($this->input->get("category"))?> Kategorisine ait kitaplar</h1>
	<hr>

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