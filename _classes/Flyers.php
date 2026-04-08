<?php
class Flyers
{

    // Class to add a Flyer to database
    public static function addFlyer($image)
    {
        global $db;
        $imagePth = str_secur($image);
        $query = "INSERT INTO flyer (image) VALUES (?)";
        $stmt = $db->prepare($query);
        $valid = $stmt->execute([$image]);
        return $valid;
    }

    // Class to get all Flyers from database
    public static function getAllFlyers()
    {
        global $db;
        $query = "SELECT * FROM flyer";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Class to get a Flyer by its ID
    public static function getFlyerById($id)
    {
        global $db;
        $id = str_secur($id);
        $query = "SELECT * FROM flyer WHERE idF = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Class to delete a Flyer by its ID
    public static function deleteFlyerById($id)
    {
        global $db;
        $id = str_secur($id);
        $query = "DELETE FROM flyer WHERE idF = ?";
        $stmt = $db->prepare($query);
        return $stmt->execute([$id]);
    }

    // Class to update Flyer by its ID
    public static function updateFlyerById($id, $image)
    {
        global $db;
        $id = str_secur($id);
        $query = "UPDATE flyer SET image = ? WHERE idF = ?";
        $stmt = $db->prepare($query);
        return $stmt->execute([$image, $id]);
    }

    // Class to count total Flyers
    public static function countFlyers()
    {
        global $db;
        $query = "SELECT COUNT(*) as total FROM flyer";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}
