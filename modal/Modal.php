<?php
require_once('./config/config.php');
class Modal{
    public $table;
    public $fillable;
    public $id;

    public function __construct()
    {
        
    }
    public function getData($table)
    {
        $sql = "SELECT * FROM $table";
        $result = $con->query($sql);
        if ($result->num_rows > 0) 
        {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                $data = $row;
            }
        }
        $con->close();
    }
}
$vid = $result["vid"];

?>