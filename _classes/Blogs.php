<?php
class Blogs
{

    // Class to check if title of blog exists
    public static function titleExists($title)
    {
        global $db;
        $title = str_secur($title);
        $query = "SELECT * FROM blogs WHERE title = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$title]);
        return $stmt->rowCount() > 0;
    }

    // Class to add a blog to database
    public static function addBlog($id, $title, $content, $imagePath)
    {
        global $db;
        $id = str_secur($id);
        $title = str_secur($title);
        $content = str_secur($content);
        $imagePth = str_secur($imagePath);
        $verify = self::titleExists($title);
        if ($verify) {
            return false;
        }
        $query = "INSERT INTO blogs (idB, title, content, imagePath) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $valid = $stmt->execute([$id, $title, $content, $imagePath]);
        return $valid;
    }

    // Class to get all blogs from database
    public static function getAllBlogs()
    {
        global $db;
        $query = "SELECT * FROM blogs";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Class to get a blog by its ID
    public static function getBlogById($id)
    {
        global $db;
        $id = str_secur($id);
        $query = "SELECT * FROM blogs WHERE idB = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Class to delete a blog by its ID
    public static function deleteBlogById($id)
    {
        global $db;
        $id = str_secur($id);
        $query = "DELETE FROM blogs WHERE idB = ?";
        $stmt = $db->prepare($query);
        return $stmt->execute([$id]);
    }

    // Class to update blog by its ID
    public static function updateBlogById($id, $title, $content, $imagePath = null)
    {
        global $db;
        $id = str_secur($id);
        $title = str_secur($title);
        $content = str_secur($content);
        if ($imagePath == null) {
            $query = "UPDATE blogs SET title = ?, content = ? WHERE idB = ?";
            $stmt = $db->prepare($query);
            return $stmt->execute([$title, $content, $id]);
        } else {
            $query = "UPDATE blogs SET title = ?, content = ?, imagePath = ? WHERE idB = ?";
            $stmt = $db->prepare($query);
            return $stmt->execute([$title, $content, $imagePath, $id]);
        }
    }

    // Class to select the two last blog added
    public static function getLastTwoBlogs()
    {
        global $db;
        $query = "SELECT * FROM blogs ORDER BY date DESC LIMIT 2";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Class to count total blogs
    public static function countBlogs()
    {
        global $db;
        $query = "SELECT COUNT(*) as total FROM blogs";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}
