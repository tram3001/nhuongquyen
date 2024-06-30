<?php
    define('HOST','127.0.0.1');
    define('USER','root');
    define('PASS','');
    define('DB','nhuongquyen');

    function open_database(){
        $conn = new mysqli(HOST, USER, PASS, DB);

        if($conn-> connect_error){
            die('Connect error: '.$conn->connect_error);
        }
        return $conn;
    }

    function add_dangky($name,$phone,$email,$add,$des,$xem){
        $sql='insert into dangky(name,phone,email,address,des,xem) values(?,?,?,?,?,?)';

        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param('ssssss', $name,$phone,$email,$add,$des,$xem);

        if (!$stm->execute()) {
            return array('code' => 1, 'error' => 'Can not execute command');
        }

        if ($stm->affected_rows == 0) {
            return array('code' => 2, 'error' => 'An error occured');
        }

        return array('code' => 0, 'message' => 'Create successful');

    }
    function login($user, $pass){
        $sql = 'select * from tk where username = ?';
        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$user);

        if(!$stm->execute()){
            return array('code'=>1,'error'=>'Can not execute command');
        }


        $result = $stm->get_result();

        if($result->num_rows ==0){
            return array('code'=>1,'error'=>'User does not exist');
        }
        $data  = $result->fetch_assoc();
        $pass=md5($pass);
        if($pass==$data['pass']){
            return array('code'=>0,'error'=>'','data' => $data);
        }
        else{
            echo "$pass";
            return array('code'=>1,'error'=>'Passwors is incorect');
        }
    }
    function get_dangky()
    {
        $sql = 'SELECT * FROM dangky';
        $conn = open_database();

        $stm = $conn->prepare($sql);

        if (!$stm->execute()) {
            return array('code' => 1, 'error' => 'Can not execute command');
        }

        $result = $stm->get_result();
        if ($result->num_rows == 0) {
            return array('code' => 2, 'error' => 'An error occured');
        }

        return array('code' => 0, 'data' => $result);
    }

    function get_dangky_byID($id)
    {
        $sql = 'SELECT * FROM `dangky` where id = ?';
        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s', $id);

        if (!$stm->execute()) {
            return array('code' => 1, 'error' => 'Can not execute command');
        }

        $result = $stm->get_result();
        if ($result->num_rows == 0) {
            return array('code' => 2, 'error' => 'ID not exist');
        }

        capnhat($id);

        return $result->fetch_assoc();
    }
    /*nhuongquyen_phantrang*/
    function get_danhsach(){
        $conn = open_database();
        $result = mysqli_query($conn, 'select count(id) as total from dangky');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $result = mysqli_query($conn, "SELECT * FROM news LIMIT $start, $limit");
     
        echo $result;
        return $result;
    }
    function capnhat($id){
        $sql='update dangky set xem=1 where id=?';
        $conn=open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s', $id);

        if (!$stm->execute()) {
            return array('code' => 1, 'error' => 'Can not execute command');
        }

        $result = $stm->get_result();
        return $result;
    }
?>