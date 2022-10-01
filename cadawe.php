<style type="text/css">
	table{
		border-radius: 3%;
		background: purple;
		margin-left:20%;
		margin-right:20%;
		cursor:pointer;
		
	}
	tr{
		background:white;
		
	}
	td{
		color:white;
		background:#999000;
		font-size:40;
	}
	
	td:hover{
		background:blue;
	}
	.o{
		font-weight:bold;
	}

</style>

<?php
$University="DIU";
$STID="4335";
$STDNAme="cadaawe ali";
$faculty="computer science";
$Gender="Male";
$Date="27/9/2022";
?>
<table border="1">
<tr><td class="o">University</td><td><?php echo"$University";  ?>"</td></tr>
<tr><td class="o">Student ID</td><td><?php echo "$STID"; ?></td></tr>
<tr><td class="o">Student Name</td><td><?php echo "$STDNAme";?></td></tr>
<tr><td class="o">Faculty</td><td><?php echo "$faculty";?></td></tr>
<tr><td class="o">Gender</td><td><?php echo "$Gender";?></td></tr>
<tr><td class="o">Date</td><td><?php echo "$Date";?></td></tr>
</table>