<option value="">Chon Quan Huyen</option>
<?php
	include("connect.php");
	$sql="SELECT * FROM ward WHERE dist_id= ".$_POST["districtid"];
			$q=$conn->prepare($sql);
			$q->execute();
			$r=$q->fetchAll(PDO::FETCH_ASSOC);
			foreach($r as $row){
				echo'<option value="'.$row["ward_id"].'">'.$row["ward_name"].'</option>';
			}