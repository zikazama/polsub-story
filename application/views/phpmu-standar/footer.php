<?php
echo "<div class='wrapper'>
	<ul class='right'>";
		$topmenu2 = $this->model_utama->view_where_ordering_limit('menu',array('position' => 'Top','aktif' => 'Ya'),'urutan','ASC',0,5);
			foreach ($topmenu2->result_array() as $row) {
			echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
		}
	echo "</ul>
	<p>&copy; ".date('Y')."<b>Sistem Informasi Polsub Story</b><br/>Develop by. <b style='color:orange'>Group 1</b> Project 2. <b style='color:orange'>Politeknik Negerk subang</b></p>
</div>";