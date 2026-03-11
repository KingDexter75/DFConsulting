<?php
class Admin
{
    // Vérifie et crée l'admin par défaut si absent
    public static function checkAndCreateDefaultAdmin()
    {
        global $db;
        $email = 'admin@dftravel.com';

        $stmt = $db->prepare("SELECT COUNT(*) FROM admin WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $exists = $stmt->fetchColumn();

        if (!$exists) {
            $id = UUID;
            $password = md5('Admin@dftravel123');
            $stmt = $db->prepare("INSERT INTO admin (idA, name, email, password, role) VALUES (:id, :name, :email, :password, :role)");
            $stmt->execute([
                'id' => $id,
                'name' => 'Admin Dftravel', // Nom par défaut, modifiable
                'email' => $email,
                'password' => $password,
                'role' => 'admin'
            ]);
        }
    }

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
        // verifions si l'administrateur par defaut a ete creer si c'est n'est pas le cas alors ajoutons le a notre base de donnees
        self::checkAndCreateDefaultAdmin();

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

    // Class to count total admins
    public static function countAdmins()
    {
        global $db;
        $query = "SELECT COUNT(*) as total FROM admin";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}
