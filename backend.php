<?php

include_once 'connection.php';

//user verfication via database
class User_data_verify extends DbConnection
{

    public function __construct()
    {

        parent::__construct();
    }



    public function escape_string($value)
    {

        return $this->connection->real_escape_string($value);
    }
}

//curd opeeration on database
class CURD_Operation extends DbConnection
{
    public function __construct()
    {

        parent::__construct();
    }

    public function create_student_result_table()
    {
        $create_tudent_result_table = "
      CREATE TABLE IF NOT EXISTS student_result
      (
        id                      int not null auto_increment,
        student_id              int,
        first_name              text,
        last_name               text,
        batch_class             text,
        email_address           text,
        english                 float,
        hindi                   float,
        math                    float,
        science                 float,
        history                 float,
        geography               float,
        remarks                 text,
        percentage              int,
        grade                   text,
        primary key(id)
      )";

        if (!$this->connection->query($create_tudent_result_table)) {
            return  '<div class="alert alert-danger alert-dismissible fade show" role="alert"><span>Student Result Table Creation Fail</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
        } else {
            return  '<div class="alert alert-info alert-dismissible fade show" role="alert"><span>Student Result Table Creation Succefuly</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
        }
    }

    function fetch_student_results($requested_user_id = 0)
    {
        $fetch_student_result_details_query = $requested_user_id > 0 ? "SELECT * FROM student_result Where id='$requested_user_id'" : "SELECT * FROM student_result ORDER BY id DESC";



        $fetch_student_result_details = $fetch_student_result_details_query;
        $data = $this->connection->query($fetch_student_result_details);

        if ($data->num_rows > 0) {
            while ($fetched_student_result_details_row = $data->fetch_array()) {
                $student_result_details_row[] = $fetched_student_result_details_row;
            }
            return $student_result_details_row;
        } else {
            return false;
        }
    }

    public function insert_student_result_details(
        $student_id,
        $first_name,
        $last_name,
        $batch_class,
        $email_address,
        $english,
        $hindi,
        $math,
        $science,
        $history,
        $geography,
        $percentage,
        $grade
    ) {
        $insert_student_result_details = "INSERT INTO `student_result` (`id`,  `student_id`,`first_name`,`last_name`,`batch_class`,`email_address`,`english`,`hindi`,`math`,`science`,`history`,`geography`,`percentage`,`grade`) VALUES ('NUll','$student_id','$first_name','$last_name','$batch_class','$email_address','$english','$hindi','$math','$science','$history','$geography','$percentage','$grade')";

        if (!$this->connection->query($insert_student_result_details)) {
            // return '<div class="alert alert-danger alert-dismissible fade show" role="alert"><span>Data Insertion Fail</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
            return false;
        } else {
            // return '<div class="alert alert-info alert-dismissible fade show" role="alert"><span>Data Insertion Succefuly</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
            return true;
        }
    }

    public function update_student_result_details($student_id, $first_name, $last_name, $batch_class, $email_address, $english, $hindi, $math, $science, $history, $geography, $percentage, $grade)
    {
        $update_student_result_details_query =  "UPDATE  `student_result` SET`student_id`=$student_id,`first_name`=$first_name,`last_name`=$last_name,`batch_class`=$batch_class,`email_address`=$email_address,`english`=$english,`hindi`=$hindi,`math`=$math,`science`=$science,`history`=$history,`geography`=$geography,`percentage`=$percentage,`grade`=$grade WHERE `student_id` = $student_id";
        $update_student_result_details = $update_student_result_details_query;

        if (!$this->connection->query($update_student_result_details)) {
            // return '<div class="alert alert-danger alert-dismissible fade show" role="alert"><span>Account Updation Fail</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
            return false;
        } else {
            // return '<div class="alert alert-info alert-dismissible fade show" role="alert"><span>Account Updation Succefuly</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
            return true;
        }
    }
}
