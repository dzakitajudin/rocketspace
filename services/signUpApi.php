<?php

    require "../config/dbConfig.php";

    // set header
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    $header = getallheaders();

    registration();
    
    function registration() {

        global $conn;

        $today = date('d/m/Y');
        
        // get posted data
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        
        // set property values
        $firstName = isset($data->firstName) ? $data->firstName : '';
        $lastName = isset($data->lastName) ? $data->lastName : '';
        $address = isset($data->address) ? $data->address : '';
        $email = isset($data->email) ? $data->email : '';
        $phoneNumber = isset($data->phoneNumber) ? $data->phoneNumber : '';
        $gender = isset($data->gender) ? $data->gender : '';
        $birthDate = isset($data->birthDate) ? $data->birthDate : '';
        $department = isset($data->department) ? $data->department : '';
        $division = isset($data->division) ? $data->division : '';
        $level = isset($data->level) ? $data->level : '';
        $role = isset($data->role) ? $data->role : '';
        $password = isset($data->password) ? $data->password : '';
        $confirmPassword = isset($data->confirmPassword) ? $data->confirmPassword : '';

        // BEGIN TRANSACTION //
        $conn->autocommit(FALSE);
        
        // VALIDATION
        // check empty FirstName
        if (empty($firstName) || $firstName == "") {
            $response = array(
                'status' => 0,
                'message' => 'First Name is required'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

        // check empty LastName
        // if (empty($lastName) || $lastName == "") {
        //     $response = array(
        //         'status' => 0,
        //         'message' => 'Last Name is required'
        //     );

        //     http_response_code(200);
        //     echo json_encode($response);
        //     die();
        // }

        // check empty Address
        if (empty($address) || $address == "") {
            $response = array(
                'status' => 0,
                'message' => 'Address is required'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

        // check empty Email
        if (empty($email) || $email == "") {
            $response = array(
                'status' => 0,
                'message' => 'Email is required'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

        // find email on database
        $findemail = $conn->query("SELECT COUNT(*) as jml_email FROM employee WHERE email = '".$email."'");
        $emailCount = $findemail->fetch_assoc();

        // check Unique Email
        if ($emailCount['jml_email'] != 0) {
            $response = array(
                'status' => 0,
                'message' => 'Email must be unique'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

        // check valid email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response = array(
                'status' => 0,
                'message' => 'Email is invalid'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

        // check empty PhoneNumber
        if (empty($phoneNumber) || $phoneNumber == "") {
            $response = array(
                'status' => 0,
                'message' => 'Phone Number is required'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

        // find phone number on database
        $findphone = $conn->query("SELECT COUNT(*) as jml_phone FROM employee WHERE phone = '".$phoneNumber."'");
        $phonenumber = $findphone->fetch_assoc();
        
        // check Unique PhoneNumber
        if ($phonenumber['jml_phone'] != 0) {
            $response = array(
                'status' => 0,
                'message' => 'Phone Number must be unique'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

        // check valid BirthDate
        if (!preg_match('/^([0-9]{2})\\/([0-9]{2})\\/([0-9]{4})$/', $birthDate)) {
            $response = array(
                'status' => 0,
                'message' => 'Birth Date is invalid format (dd/mm/yyyy)'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

        // check empty Department
        // if (empty($department) || $department == "") {
        //     $response = array(
        //         'status' => 0,
        //         'message' => 'Department is required'
        //     );

        //     http_response_code(200);
        //     echo json_encode($response);
        //     die();
        // }

        // check empty Level
        // if (empty($level) || $level == "") {
        //     $response = array(
        //         'status' => 0,
        //         'message' => 'Level is required'
        //     );

        //     http_response_code(200);
        //     echo json_encode($response);
        //     die();
        // }

        // check empty Role
        // if (empty($role) || $role == "") {
        //     $response = array(
        //         'status' => 0,
        //         'message' => 'Role is required'
        //     );

        //     http_response_code(200);
        //     echo json_encode($response);
        //     die();
        // }

        // check empty Password
        if (empty($password) || $password == "") {
            $response = array(
                'status' => 0,
                'message' => 'Password is required'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

        // check empty Confirm Password
        if (empty($confirmPassword) || $confirmPassword == "") {
            $response = array(
                'status' => 0,
                'message' => 'Confirm Password is required'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

        // check Password and Confirm Password match
        if ($confirmPassword !== $password) {
            $response = array(
                'status' => 0,
                'message' => 'Confirm Password is not match with password'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

        // hash password
        $options = array(
            'cost' => 10
        );

        // hash password
        $hashed_password = password_hash($confirmPassword, PASSWORD_DEFAULT, $options);


        // ======= INSERT DATA ======= //

        // $set_uuid = "set @idUser = UUID()";
        // $result_set_uuid_book = $conn->query($set_uuid);

        //set employee id
        // 2 digit tahun + bulan + tgl + nomor urut
        $empDate = date('ymd');
        $nourut = 1;
        $employeeId = $empDate.'0000';
        $employeeId = strval($employeeId+$nourut);

        // find employee id on database
        $findEmpId = $conn->query("SELECT employee_id FROM employee WHERE employee_id LIKE '%".$empDate."%' ORDER BY created DESC LIMIT 1");
        $empId = $findEmpId->fetch_assoc();
        // var_dump($empId);exit;
        
        if (!empty($empId['employee_id']) || $empId['employee_id'] != '') { // jika sudah ada
            $employeeId = strval($empId['employee_id']+$nourut);
        }
        
        //convert birthdate
        $birthDate2 = str_replace('/', '-', $birthDate);

        $data = array(
            'employee_id' => $employeeId,
            'firstname' => $firstName,
            'lastname' => $lastName,
            'address' => $address,
            'email' => $email,
            'phone' => $phoneNumber,
            'gender' => $gender,
            'birthdate' => date("Y-m-d", strtotime($birthDate2)),
            'division' => $division,
            'department' => $department,
            'level' => $level,
            'role' => $role,
            'pass' => $hashed_password,
            'created' => date('Y-m-d H:i:s')
        );

        $column = implode(", ", array_keys($data));
        $escaped_values = array_map(array($conn, 'real_escape_string'), array_values($data));
        $values  = "'".implode("', '", $escaped_values)."'";
        
        // insert to db
        $addEmployee = $conn->query("INSERT INTO employee ($column) VALUES ($values)");
        $tes="INSERT INTO employee ($column) VALUES ($values)";
        

        if ($addEmployee) {
            $conn->commit();

            $response = array(
                'status' => 1,
                'message' => 'Data saved success'
            );
                            
            http_response_code(200);
            echo json_encode($response);
        } else{
            $conn->rollback();

            $response = array(
                'status' => 0,
                'message' => 'Data saved failed'
            );
                            
            http_response_code(200);
            echo json_encode($response);
        }

    }


?>