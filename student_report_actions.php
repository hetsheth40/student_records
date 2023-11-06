<?php
include_once 'backend.php';
$verify = new User_data_verify();
$table_operation = new CURD_Operation();

if (isset($_POST['insert']) || isset($_POST['action']) && $_POST['action'] == "insert") {

	$student_id = $verify->escape_string($_POST['student_id']);
	$first_name = $verify->escape_string($_POST['first_name']);
	$last_name = $verify->escape_string($_POST['last_name']);
	$batch_class = $verify->escape_string($_POST['batch_class']);
	$email_address = $verify->escape_string($_POST['email_address']);
	$english = $verify->escape_string($_POST['english']);
	$hindi = $verify->escape_string($_POST['hindi']);
	$math = $verify->escape_string($_POST['math']);
	$science = $verify->escape_string($_POST['science']);
	$history = $verify->escape_string($_POST['history']);
	$geography = $verify->escape_string($_POST['geography']);
	// $total = $verify->escape_string($_POST['total']);
	// $grade = $verify->escape_string($_POST['grade']);

	$percentage = round(((($english + $hindi + $math + $science + $history + $geography) / 600) * 100), 2);

	switch ($percentage) {
		case $percentage >= 75:
			$grade = 'Distinction';
			break;
		case $percentage >= 60:
			$grade = 'First Class';
			break;
		case $percentage >= 33:
			$grade = 'Pass';
			break;
		case $percentage <= 33:
			$grade = 'Fail';
			break;
	}

	$student_results_details = $table_operation->fetch_student_results($student_id);

	if ($student_results_details != false) {
		$insert_student_result_detail = $table_operation->update_student_result_details($student_id,$first_name,$last_name,$batch_class,$email_address,$english,$hindi,$math,$science,$history,$geography,$percentage,$grade);
	} else {
		$insert_student_result_detail = $table_operation->insert_student_result_details($student_id,$first_name,$last_name,$batch_class,$email_address,$english,$hindi,$math,$science,$history,$geography,$percentage,$grade);
	}
	if ($insert_student_result_detail == false) {
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><span>Data Insertion Fail</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
	} else {
		echo '<div class="alert alert-info alert-dismissible fade show" role="alert"><span>Data Insertion Succefuly</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
	}

	exit;
}


if (isset($_POST['action']) && $_POST['action'] == "view") {

	$table_operation->create_student_result_table();

	if (isset($_POST['user_id'])) {
		$requested_user_id = $verify->escape_string($_POST['user_id']);

		//student results detail
		$student_results_details = $table_operation->fetch_student_results($requested_user_id);
	} else {
		//student results detail
		$student_results_details = $table_operation->fetch_student_results();
	}



	if ($student_results_details != false) {

		foreach ($student_results_details as $student_result_detail) {
?>

			<tr>
				<td><?php echo $student_result_detail['student_id']; ?></td>
				<td><?php echo $student_result_detail['first_name']; ?></td>
				<td><?php echo $student_result_detail['last_name']; ?></td>
				<td><?php echo $student_result_detail['batch_class']; ?></td>
				<td><?php echo $student_result_detail['email_address']; ?></td>
			</tr>
			<tr>
				<td colspan="5">
					<table width="100%">
						<thead>
							<tr>
								<td>English</td>
								<td>Hindi</td>
								<td>Math</td>
								<td>Science</td>
								<td>History</td>
								<td>Geography</td>
								<td>Total</td>
								<td>Grade</td>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td><?php echo $student_result_detail['english']; ?>/100</td>
								<td><?php echo $student_result_detail['hindi']; ?>/100</td>
								<td><?php echo $student_result_detail['math']; ?>/100</td>
								<td><?php echo $student_result_detail['science']; ?>/100</td>
								<td><?php echo $student_result_detail['history']; ?>/100</td>
								<td><?php echo $student_result_detail['geography']; ?>/100</td>
								<td><?php echo $student_result_detail['total']; ?>/600</td>
								<td><?php echo $student_result_detail['grade']; ?></td>
							</tr>

						</tbody>
					</table>
				</td>
			</tr>
		<?php
		}
	} else {
		?>
		<tr>
			<td colspan="5">No Data Found</td>
		</tr>

<?php
	}
	exit;
}


header('location: index.php');
exit;
?>