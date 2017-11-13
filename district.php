<option value="">Chon Quan Huyen</option>
<?php
	include("connect.php");
	$sql="SELECT * FROM district WHERE province_id = ".$_POST["provinceid"];
			$q=$conn->prepare($sql);
			$q->execute();
			$r=$q->fetchAll(PDo::FETCH_ASSOC);
			foreach($r as $row){
				echo'<option value="'.$row["dist_id"].'">'.$row["dist_name"].'</option>';
			}
				