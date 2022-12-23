<?php
	$k = $_POST['id'];
	$k= trim($k);
	$conn = mysqli_connect("localhost", "root", "", "bus_management"); 
	$sql ="SELECT * FROM service_details where vehicleno='{$k}'";
	// $sql ="SELECT Distinct vehicleno FROM bus_details";
	$res = mysqli_query($conn , $sql);
	$sl=1;


	while($rows=mysqli_fetch_array($res))
	{
		?>
		<tr>
			<td height="30">&nbsp;<?php echo $sl++;?></td>
			<td>&nbsp;<?php echo $rows['vehicleno'];?></td>
	  		<td>&nbsp;<?php echo $rows['sdate'];?></td>
			<td>&nbsp;<?php echo $rows['particulars']; ?></td>
            <td>&nbsp;<?php echo $rows['approve_amt']; ?></td>
	  		<td align="center" width="15%"><a href="service_details_edit.php?service_id=<?php echo $rows['service_id']; ?>"><i class="fa fa-pencil fa-2x icon-wrap blue-color" aria-hidden="true"></a></td>
			<td align="center" width="15%"><a href="service_details_delete.php?service_id=<?php echo $rows['service_id']; ?>"><i class="fa fa-trash fa-2x icon-wrap red-color" aria-hidden="true"></i></a>
                            </td>
		</tr>
		<?php
	}
	echo $sql;
?>
<script>
            function checkdelete() {
                return confirm('Are you sure you want to delete this record?');
            }
        </script>