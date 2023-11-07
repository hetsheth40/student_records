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
	$remarks = $verify->escape_string($_POST['remarks']);
	
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
		$insert_student_result_detail = $table_operation->update_student_result_details($student_id, $first_name, $last_name, $batch_class, $email_address, $english, $hindi, $math, $science, $history, $geography, $remarks, $percentage, $grade);
	} else {
		$insert_student_result_detail = $table_operation->insert_student_result_details($student_id, $first_name, $last_name, $batch_class, $email_address, $english, $hindi, $math, $science, $history, $geography, $remarks, $percentage, $grade);
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

	if (isset($_POST['student_id'])) {
		$requested_student_id = $verify->escape_string($_POST['student_id']);

		//student results detail
		$student_results_details = $table_operation->fetch_student_results($requested_student_id);
	} else {
		//student results detail
		$student_results_details = $table_operation->fetch_student_results();
	}



	if ($student_results_details != false) {

		foreach ($student_results_details as $student_result_detail) {
		
			$percentage=$student_result_detail['percentage'];

			switch ($percentage) {
				case $percentage >= 75:
					$color = 'bg-success';
					break;
				case $percentage >= 60:
					$color = 'bg-info';
					break;
				case $percentage >= 33:
					$color = 'bg-warning';
					break;
				case $percentage <= 33:
					$color = 'bg-danger';
					break;
			}
		
?>

			<tr>
				<td><?php echo $student_result_detail['student_id']; ?></td>
				<td><?php echo $student_result_detail['first_name']; ?></td>
				<td><?php echo $student_result_detail['last_name']; ?></td>
				<td><?php echo $student_result_detail['batch_class']; ?></td>
				<td><?php echo $student_result_detail['email_address']; ?></td>
				<td><?php echo $student_result_detail['remarks']; ?></td>
			</tr>
			<tr>
				<td colspan="6">
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
								<td>Percentage</td>
								<td>Grade</td>
							</tr>
						</thead>
						<tbody class="<?php echo $color; ?>">

							<tr>
								<td><?php echo $student_result_detail['english']; ?>/100</td>
								<td><?php echo $student_result_detail['hindi']; ?>/100</td>
								<td><?php echo $student_result_detail['math']; ?>/100</td>
								<td><?php echo $student_result_detail['science']; ?>/100</td>
								<td><?php echo $student_result_detail['history']; ?>/100</td>
								<td><?php echo $student_result_detail['geography']; ?>/100</td>
								<td><?php echo $student_result_detail['english'] + $student_result_detail['hindi'] + $student_result_detail['math'] + $student_result_detail['science'] + $student_result_detail['history'] + $student_result_detail['geography']; ?>/600</td>
								<td><?php echo $percentage; ?>%</td>
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
			<td colspan="6">No Data Found</td>
		</tr>

<?php
	}
	exit;
}


header('location: index.php');
exit;
?>