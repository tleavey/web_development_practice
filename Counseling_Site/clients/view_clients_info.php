<?php include("../includes/header.php") ?>
<?php include("../includes/db_connect.php") ?>

<div class="wrapper">
	<div class="main-content">

<?php
//again $db for db.humanoriented.com is db_oneteam
//$db = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);
$id = $_GET["id"];
$res = $db->query("SELECT * FROM clients WHERE id=$id");
$row = $res->fetch_assoc();

?>
	<table class="list-table">
		<tr>
			<th><?php echo $row["first_name"] . " " . $row["last_name"]; ?></th>
		</tr>
		<tr>
			<td>Age: <?php echo $row["age"];?></td>
		</tr>
		<tr>
			<td>Date of Birth: <?php echo $row["date_of_birth"]; ?></td>
		</tr>
		<tr>
			<td>Address: <?php echo $row["address"]; ?></td>
		</tr>
		<tr>
			<td>Address: <?php echo $row["address2"]; ?></td>
		</tr>
		<tr>
			<td>City: <?php echo $row["city"]; ?></td>
		</tr>
		<tr>
			<td>State: <?php echo $row["state"]; ?></td>
		</tr>
		<tr>
			<td>ZIP: <?php echo $row["zip"]; ?></td>
		</tr>
		<tr>
			<td>Phone: <?php echo $row["phone"]; ?></td>
		</tr>
		<tr>
			<td>Contact: <?php echo $row["message"]; ?></td>
		</tr>
		<tr>
			<td>Email: <?php echo $row["email"]; ?></td>
		</tr>
		<tr>
			<td>Occupation: <?php echo $row["occupation"]; ?></td>
		</tr>
		<tr>
			<td>Employer: <?php echo $row["employer"]; ?></td>
		</tr>
		<tr>
			<td>Employer's Address: <?php echo $row["workAddress"]; ?></td>
		</tr>
		<tr>
			<td>Employer's Phone: <?php echo $row["workPhone"]; ?></td>
		</tr>
		<tr>
			<td>Contact Employer: <?php echo $row["workMessage"]; ?></td>
		</tr>
		<tr>
			<td>Spouse/Partner's Name: <?php echo $row["partnerName"]; ?></td>
		</tr>
		<tr>
			<td>Spouse/Partner's Age: <?php echo $row["partnerAge"]; ?></td>
		</tr>
		<tr>
			<td>Spouse/Partner's DOB: <?php echo $row["partnerBday"]; ?></td>
		</tr>
		<tr>
			<td>Spouse/Partner's Occupation: <?php echo $row["partnerOccupation"]; ?></td>
		</tr>
		<tr>
			<td>Spouse/Partner's Employer: <?php echo $row["partnerEmployer"]; ?></td>
		</tr>
		<tr>
			<td>Spouse/Partner's Phone: <?php echo $row["partnerPhone"]; ?></td>
		</tr>
		<tr>
			<td>Relative's First Name: <?php echo $row["relativeFirstName"]; ?></td>
		</tr>
		<tr>
			<td>Relative's Last Name: <?php echo $row["relativeLastName"]; ?></td>
		</tr>
		<tr>
			<td>Relative's Age: <?php echo $row["relativeAge"]; ?></td>
		</tr>
		<tr>
			<td>Relative's DOB: <?php echo $row["relativeDate"]; ?></td>
		</tr>
		<tr>
			<td>Relative's Relation: <?php echo $row["relation"]; ?></td>
		</tr>
		<tr>
			<td>Emergency Contact: <?php echo $row["emergencyName"]; ?></td>
		</tr>
		<tr>
			<td>Emergency Contact Relation: <?php echo $row["emergencyRelation"]; ?></td>
		</tr>
		<tr>
			<td>Emergency Contact Address: <?php echo $row["emergencyAddress"]; ?></td>
		</tr>
		<tr>
			<td>Emergency Contact Phone: <?php echo $row["emergencyPhone"]; ?></td>
		</tr>
		<tr>
			<td>Has Insurance: <?php echo $row["hasInsurance"]; ?></td>
		</tr>
		<tr>
			<td>Insurance Company: <?php echo $row["insuranceCompany"]; ?></td>
		</tr>
		<tr>
			<td>Primary Care Physician: <?php echo $row["PCP"]; ?></td>
		</tr>
		<tr>
			<td>Primary Care Physician Phone: <?php echo $row["PCPphone"]; ?></td>
		</tr>
		<tr>
			<td>Prescription Medications: <?php echo $row["medications"]; ?></td>
		</tr>
		<tr>
			<td>Seen a Counselor Before: <?php echo $row["seenBefore"]; ?></td>
		</tr>
		<tr>
			<td>Previous Counselor: <?php echo $row["previousCounselor"]; ?></td>
		</tr>
		<tr>
			<td>Reason for Today's Visit: <?php echo $row["reason"]; ?></td>
		</tr>
	</table>

	<?php $db->close(); ?>

	</div>
</div>

<?php include("../includes/footer.php") ?>
