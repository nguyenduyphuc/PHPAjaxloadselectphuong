<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="jquery-1.11.2.min.js"></script>
</head>
<body>
	<label for="">Tinh</label>
	<select name="province" id="province">
		<option value="">Chon Tinh</option>
		<?php 
			include("connect.php");
			$sql="SELECT *from province";

			$q=$conn->prepare($sql);
			$q->execute();
		;
			$r=$q->fetchAll(PDO::FETCH_ASSOC);
			foreach($r as $row){
				echo'<option value="'.$row["province_id"].'">'.$row["province_name"].'</option>';
			}	
			?>
	</select>
		<label for="">Quan/Huyen</label>
		<select name="district" id="district">
			<option value="">Chua chon tinh </option>
		</select>
		<label for="">Phuong/Xa</label>
		<select name="ward" id="ward">
			<option value="">Chua chon quan,huyen </option>
		</select>
		<script>
		jQuery(document).ready(function($){

			$("#province").change(function(event){
			provinceId = $("#province").val();
			$.post('district.php',{"provinceid":provinceId},function(data){
				$("#district").html(data);

			});

			});	
				$("#district").change(function(event){
			districtId = $("#district").val();
			$.post('ward.php',{"districtid":districtId},function(data){
				$("#ward").html(data);
		});
			});
				});
			</script>
			</body>
			</html>

