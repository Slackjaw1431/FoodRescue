<?php

class PersonDB {

    public static function emailExists($email) {
        $db = Database::getDB();
        $query = 'SELECT * FROM userdonors WHERE email = :email OR SELECT * FROM usercharity WHERE email = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(":email", $email);
        $statement->execute();
        $row = $statement->fetch();
        $exists = $row != FALSE;
        $statement->closeCursor();

        return $exists;
    }

    public static function createUser($newName, $newEmail, $newPass, $newAddress, $newLink, $newPhone) {
        $db = Database::getDB();

        $query = "INSERT INTO userdonors (name, email, password, address, phone, link) VALUES (:name, :email, :password, :address, :link, :phone)";

        $statement = $db->prepare($query);
        $statement->bindValue(':name', $newName);
        $statement->bindValue(':email', $newEmail);
        $statement->bindValue(':password', $newPass);
        $statement->bindValue(':address', $newAddress);
        $statement->bindValue(':phone', $newPhone);
        $statement->bindValue(':link', $newLink);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function createCharity($newName, $newEmail, $newPass, $newAddress, $newPhone, $newHours, $newVolunteers, $newFeed) {
        $db = Database::getDB();

        $query = "INSERT INTO usercharity (name, email, password, address, phone, hours, volunteers, feed) VALUES (:name, :email, :password, :address, :phone, :hours, :volunteers, :feed)";

        $statement = $db->prepare($query);
        $statement->bindValue(':name', $newName);
        $statement->bindValue(':email', $newEmail);
        $statement->bindValue(':password', $newPass);
        $statement->bindValue(':address', $newAddress);
        $statement->bindValue(':phone', $newPhone);
        $statement->bindValue(':hours', $newHours);
        $statement->bindValue(':volunteers', $newVolunteers);
        $statement->bindValue(':feed', $newFeed);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function updateAccount($email, $newName, $newAddress, $newPhone, $newLink, $newPass) {
        $db = Database::getDB();
        if (Utility::userExists($email)) {

            $query = 'UPDATE userdonors SET name = :name, address=:address, phone=:phone, link=:link, password=:pass WHERE email = :email';

            $statement = $db->prepare($query);
            $statement->bindValue(':name', $newName);
            $statement->bindValue(':address', $newAddress);
            $statement->bindValue(':phone', $newPhone);
            $statement->bindValue(':link', $newLink);
            $statement->bindValue(':pass', $newPass);
            $statement->bindValue(':email', $email);
            $statement->execute();
            $statement->closeCursor();
        } elseif (Utility::charityExists($email)) {

            $query = 'UPDATE usercharity SET name = :name, address=:address, phone=:phone, password=:pass WHERE email = :email';

            $statement = $db->prepare($query);
            $statement->bindValue(':name', $newName);
            $statement->bindValue(':address', $newAddress);
            $statement->bindValue(':phone', $newPhone);
            $statement->bindValue(':pass', $newPass);
            $statement->bindValue(':email', $email);

            $statement->execute();
            $statement->closeCursor();
        } else {
            include ('view/error.php');
        }
    }

}

?>
