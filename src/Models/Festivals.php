<?php

namespace MVC\Models;

class Festival {
    public $festival_name;
    public $festival_details;
    public $festival_day_indian_calender;
    public $status;
    public $festival_name_local;

    public function __construct($festival_name, $festival_details, $festival_day_indian_calender, $status, $festival_name_local){
        $this->festival_name = $festival_name;
        $this->festival_details = $festival_details;
        $this->festival_day_indian_calender = $festival_day_indian_calender;
        $this->status = $status;
        $this->festival_name_local = $festival_name_local;
    }
}


class FestivalModel{
    function __construct($config_obj){
        $this->host = $config_obj->host;
        $this->connection=[
            "Database" => $config_obj->database,
            "Uid" => $config_obj->user,
            "PWD" => $config_obj->password,
        ];
    }

    public function opne_db(){
        $this->conn = sqlsrv_connect($serverName, $connection);
        if(!$this->conn)
            die(print_r(sqlsrv_errors(), true));
    }

    public function close_db(){
        $stat = sqlsrv_close($this->conn);
        if(!$stat){
            die(print_r(sqlsrv_errors(), true));
        }
    }

    public function getAllFestivals(){
        $tsql="select * from dbo.m_festivals_list;";
        $stmnt = sqlsrv_query($conn, $tsql);
        $data=array();
        while($dt = sqlsrv_fetch_array($response, SQLSRV_FETCH_ASSOC)){
            array_push($data, $dt);
        }
        return $res;
    }
}