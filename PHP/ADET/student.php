<?php
class student {
    private $conn;
    private $id;


    public function __construct($conn){
        $this->conn = $conn;

    }
    public function set_id($id){
        $this->id = $id;
    }
    public function printLabel() {
        $sql = "SELECT name
        FROM results 
        WHERE id = '$this->id'";
        $result = $this->conn->query($sql);

        if ($row = $result->fetch_assoc()){
            echo "Name: " . $row['name'];
        } else {
            echo "No student found.";
        }
            

    }
}
        /*$sql = "SELECT name 
                FROM results 
                WHERE id = '$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $name = $row['name'];
        echo "Name: " . $name;
        */

?>