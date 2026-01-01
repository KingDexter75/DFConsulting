<?php
class Admin
{

    // Class to check if email exists
    public static function emailExists($email)
    {
        global $db;
        $email = str_secur($email);
        $query = "SELECT * FROM admin WHERE email = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$email]);
        return $stmt->rowCount() > 0;
    }

    // Class to add admin to database
    public static function addAdmin($id, $name, $email, $password)
    {
        global $db;
        $id = str_secur($id);
        $name = str_secur($name);
        $email = str_secur($email);
        $password = str_secur($password);
        $verify = self::emailExists($email);
        if ($verify) {
            return false;
        }
        $query = "INSERT INTO admin (idA, name, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $valid = $stmt->execute([$id, $name, $email, $password]);
        return $valid;
    }

    // Class to delete admin from database
    public static function deleteAdmin($id)
    {
        global $db;
        $id = str_secur($id);
        $query = "DELETE FROM admin WHERE idA = ?";
        $stmt = $db->prepare($query);
        $stmt->bindParam("1", $id);
        return $stmt->execute();
    }

    //Class to update admin info
    public static function updateAdmin($id, $name, $email, $password)
    {
        global $db;
        $id = str_secur($id);
        $name = str_secur($name);
        $email = str_secur($email);
        $password = str_secur($password);
        $query = "UPDATE admin SET name = ?, email = ?, password = ? WHERE idA = ?";
        $stmt = $db->prepare($query);
        $stmt->bindParam("1", $name);
        $stmt->bindParam("2", $email);
        $stmt->bindParam("3", $password);
        $stmt->bindParam("4", $id);
        return $stmt->execute();
    }

    // Class to get admin info
    public static function getAdmin($id)
    {
        global $db;
        $id = str_secur($id);
        $query = "SELECT * FROM admin WHERE idA = ?";
        $stmt = $db->prepare($query);
        $stmt->bindParam("1", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Class to get all admins
    public static function getAllAdmins()
    {
        global $db;
        $query = "SELECT * FROM admin";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Class to authenticate admin
    public static function authenticate($email, $password)
    {
        global $db;
        $email = str_secur($email);
        $password = str_secur($password);
        $query = "SELECT * FROM admin WHERE email = ? AND password = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$email, $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
