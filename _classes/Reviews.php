<?php
class Reviews
{
    // Class to add reviews
    public static function addReviews($id, $name, $message) {
        global $db;
        $id = str_secur($id);
        $name = str_secur($name);
        $message = str_secur($message);
        $sql = "INSERT INTO reviews (idR, name, message) VALUES (?, ?, ?)";
        $stmt = $db->prepare($sql);
        $valid = $stmt->execute([$id, $name, $message]);
        return $valid;
    }

    // Class to get all reviews from database
    public static function getAllReviews()
    {
        global $db;
        $query = "SELECT * FROM reviews";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Class to get a reviews by its ID
    public static function getReviewsById($id)
    {
        global $db;
        $id = str_secur($id);
        $query = "SELECT * FROM reviews WHERE idR = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Class to delete a reviews by its ID
    public static function deleteReviewsById($id)
    {
        global $db;
        $id = str_secur($id);
        $query = "DELETE FROM reviews WHERE idR = ?";
        $stmt = $db->prepare($query);
        return $stmt->execute([$id]);
    }

    // Class to update reviews by its ID
    public static function updateReviewsById($id, $name, $message)
    {
        global $db;
        $id = str_secur($id);
        $name = str_secur($name);
        $message = str_secur($message);
        $query = "UPDATE reviews SET name = ?, message = ? WHERE idR = ?";
        $stmt = $db->prepare($query);
        return $stmt->execute([$name, $message, $id]);
    }

    // Class to select the two last reviews added
    public static function getLastTwoReviews()
    {
        global $db;
        $query = "SELECT * FROM reviews ORDER BY dateC DESC LIMIT 2";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Class to count total reviews
    public static function countReviews()
    {
        global $db;
        $query = "SELECT COUNT(*) as total FROM reviews";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}
