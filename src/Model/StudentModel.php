<?php

namespace Alipat\StudentManagement\Model;

use Alipat\StudentManagement\Core\Crud;
use Alipat\StudentManagement\Core\Database;

class StudentModel extends Database implements Crud
{
    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;

    public function __construct()
    {
        parent::__construct(); // Call Database constructor to set $this->conn

        // Initialize properties
        $this->id = "";
        $this->fullname = "";
        $this->yearlevel = "";
        $this->course = "";
        $this->section = "";
    }

    public function displayInfo()
    {
        echo "ID: " . $this->id . "\n";
        echo "Fullname: " . $this->fullname . "\n";
        echo "Year Level: " . $this->yearlevel . "\n";
        echo "Course: " . $this->course . "\n";
        echo "Section: " . $this->section . "\n";
    }

    public function create()
    {
        $sql = "INSERT INTO students (id, name, year_level, course, section) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            return "Prepare failed: " . $this->conn->error;
        }

        $stmt->bind_param("sssss", $this->id, $this->fullname, $this->yearlevel, $this->course, $this->section);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function read()
    {
        $sql = "SELECT * FROM students";
        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        return [];
    }

    public function update()
    {
        $sql = "UPDATE students SET name = ?, year_level = ?, course = ?, section = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            return "Prepare failed: " . $this->conn->error;
        }

        $stmt->bind_param("sssss", $this->fullname, $this->yearlevel, $this->course, $this->section, $this->id);
        $stmt->execute();

        return $stmt->affected_rows > 0;
    }

    public function delete()
    {
        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            return "Prepare failed: " . $this->conn->error;
        }

        $stmt->bind_param("s", $this->id);
        $stmt->execute();

        return $stmt->affected_rows > 0;
    }
}
?>
