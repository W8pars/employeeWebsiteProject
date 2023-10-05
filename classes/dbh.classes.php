<?php

class Dbmgr {

    private $host = '';
    private $user = '';
    private $password = '';
    private $database = '';
    public $con = null;

    //protected not private so other classes can extend and use
    public function connect(){

        $this->host = DBHOST;
        $this->user = DBUSER;
        $this->password = DBPASS;
        $this->database = DBNAME;

        try {
            
            $this->con = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
        }
        catch (PDOException $e) {
            print "Error!!!!!!: " . $e->getMessage() . "<br/>";
            die();
        }

        return $this->con;
    }

    public function executeSelectQuery ($con, $sql) {

        // run pdo method query() on sql object
        $result = $con->query($sql);
        // set table variable string to hold html code to set up table headers
        // then fill td with the input sql query ran above

        $table = "<div class='table-responsive'><table class='table table-bordered table-hover'><tr>";
        $table = $table . "<th class='text-center' scope='col'>First Name</th>";
        $table = $table . "<th class='text-center'scope='col'>Last Name</th>";
        $table = $table . "<th class='text-center' scope='col'>Address</th>";
        $table = $table . "<th class='text-center scope='col'>Phone</th>";
        $table = $table . "<th class='text-center' scope='col'>Salary</th>";
        $table = $table . "<th class='text-center' scope='col'>SSN</th>";
        $table = $table . "<th class='text-center' scope='col'>Email</th>";
        $table = $table . "<th class='text-center' scope='col'>Password (hidden for security purposes)</th>";
        while($row = $result->fetch()){
            $table = $table . "<tbody><tr><td>" . $row["firstName"] . "</td>";
            $table = $table . "<td>" . $row["lastName"] . "</td>";
            $table = $table . "<td>" . $row["address"] . "</td>";
            $table = $table . "<td>" . $row["phone"] . "</td>";
            $table = $table . "<td>" . $row['salary'] . "</td>";
            $table = $table . "<td>" . $row["ssn"] . "</td>";
            $table = $table . "<td>" . $row["email"] . "</td>";
            $table = $table . "<td>" . $row["password"] . "</td></tr>";
        }
        $table = $table . "</tbody></table></div>";
        return $table;
    }
    public function executeQuery ($con, $sql){
        // example:  "INSERT INTO tbluser ("INSERT INTO tbluser (firstName, lastName, email, address, phone, salary, ssn, password) VALUES (:firstName, :lastName, :email, :address, :phone, :salary, :ssn, :password)");    
        $sql_command = explode (' ', trim($sql))[0]; 
        // example: "INSERT" "DELETE" "UPDATE" ETC returns 
        $execute_statement = $con->exec($sql);
    }

 
}
?>
