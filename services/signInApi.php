<?php

    require "../config/dbConfig.php";
    // generate json web token
    require "../libs/BeforeValidException.php";
    require "../libs/ExpiredException.php";
    require "../libs/SignatureInvalidException.php";
    require "../libs/JWT.php";

    use \Firebase\JWT\JWT;

    // set header
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    $header = getallheaders();

    login();

    function login() {

        global $conn;

        // get posted data
        $json = file_get_contents('php://input');
        $data = json_decode($json);


        // set property values
        $employee_id = isset($data->employee_id) ? $data->employee_id : '';
        $password = isset($data->password) ? $data->password : '';
        

        // VALIDATION
        // check empty Email
        if (empty($employee_id) || $employee_id == "") {
            $response = array(
                'status' => 0,
                'message' => 'Employee ID is required'
            );

            http_response_code(200);
            echo json_encode($response);
            die();
        }

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

        // query sql to get data users
        $sql = $conn->query("SELECT * FROM employee WHERE employee_id = '".$employee_id."' LIMIT 1");
        $user = $sql->fetch_assoc();
        
        // check valid password
        if (!empty($user)) {
            if (password_verify($password, $user['pass'])) {
                
                // if correct, then return given jwt and display message success

                $key = "cvbrb84gd38x3b3f73578gf3cbnxjffhfgv7";
                    
                $alg = 'HS256';

                $issuedAt = time();
                $expirationTime = $issuedAt + 3600; // jwt valid for 60 minutes from the issued time

                $token = array(
                    "email" => $Email,
                    "iat" => $issuedAt,
                    "exp" => $expirationTime
                );


                // generate jwt
                $jwt = JWT::encode($token, $key, $alg);


                $arr_token = array(
                    'firstname' => $user['firstname'],
                    'lastname' => $user['lastname'],
                    'token' => $jwt,
                    'iat' => $issuedAt,
                    'expire' => $expirationTime
                );
                $obj_token = $arr_token;

                $response = array(
                    'status' => 1,
                    'message' => 'Login success',
                    'data' => array($obj_token)
                );

                http_response_code(200);

                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 0,
                    'message' => "password not match"
                );
    
                http_response_code(200);
    
                echo json_encode($response);
            }
        } else {
            
            // if doesn't exist in db
            $response = array(
                'status' => 0,
                'message' => "employee id does not exist"
            );

            http_response_code(200);

            echo json_encode($response);
        }

    }



?>