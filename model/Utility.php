<?php

class Utility {

    public static function validPass($email, $password) {//function and passed parameters, order of parameters is very important
        $db = Database::getDB(); //calling the getDB function from the database class into a variable
        $query = 'SELECT email,pass FROM account_info WHERE email = :email'; //sql statements or stored procedures
        $statement = $db->prepare($query); //prepare query for db
        $statement->bindValue(":email", $email); //parameter in query being binded
        $statement->execute();
        $row = $statement->fetch(); //single item being called
        $statement->closeCursor(); //close statment

        if ($row == FALSE)
            return false;
        else if ($row['pass'] == $password)
            return true;
        else
            return false;
    }

    public static function test() {
        $db = Database::getDB();
        $query = 'CALL `get_all_address`()'; //calling stored procedure
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll(); //for multiple items being called as an array
        $statement->closeCursor();

        return $rows; //returning array
    }

    public static function getOneAddress($i) {
        $db = Database::getDB();
        $query = 'CALL `get_one_address`(:i)';
        $statement = $db->prepare($query);
        $statement->bindValue(":i", $i);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        return $rows;
    }

    public static function getID($email) {
        $db = Database::getDB();
        $query = 'CALL `get_login_info`(:id)';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $email);
        $statement->execute();
        $row = $statement->fetch();
        $foundId = 0;

        if ($row != FALSE) {
            $foundId = $row['ID'];
        }

        $statement->closeCursor();

        return $foundId;
    }

    public static function donorExists($id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM donor WHERE ACCT_ID = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        return ($row != FALSE);
    }

    public static function userExists($email) {
        $db = Database::getDB();
        $query = 'SELECT * FROM account_info WHERE EMAIL = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(":email", $email);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        return ($row != FALSE);
    }

    public static function charityExists($id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM charity WHERE ACCT_ID = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        return ($row != FALSE);
    }

    public static function getUserDetails($id) {
        $db = Database::getDB();
        $query = 'CALL `get_donor_profile`(:id)'; //'Select * from donor WHERE ACCT_ID = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        return $rows;
    }

    public static function getCharityDetails($id) {
        $db = Database::getDB();
        $query = 'CALL `get_charity_profile_full`(:id)'; //Select * from charity WHERE ACCT_ID = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        return $rows;
    }

    public static function updateDonor() {
        $db = Database::getDB();
        $query = 'CALL ``(:)';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function updateCharity() {
        $db = Database::getDB();
        $query = 'CALL ``(:)'; 
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $statement->closeCursor();
    }


        public static function updateAddress($id, $street, $city, $suite, $state, $zip) {
        $db = Database::getDB();
        $query = 'CALL `update_address`(:id,:street,:city,:suite,:state,:zip)';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->bindValue(":street", $street);
        $statement->bindValue(":city", $city);
        $statement->bindValue(":suite", $suite);
        $statement->bindValue(":state", $state);
        $statement->bindValue(":zip", $zip);
        $statement->execute();
        $statement->closeCursor();
    }

}
