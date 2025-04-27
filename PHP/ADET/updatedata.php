<!DOCTYPE html>
<html lang="en">
    <?php
    require_once "conn.php";

    if (isset($_POST["name"]) && isset($_POST["grade"]) && isset($_POST["marks"])) {
        $name = $_POST["name"];
        $grade = $_POST["grade"];
        $marks = $_POST["marks"];

        $sql = "UPDATE results SET name='$name', class='$grade', marks='$marks' WHERE id=".$_GET["id"];
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<section>

<h1 style="text-align: center; margin: 50px 0;">Update Data</h1>
    <div class="container">
        <?php
            require_once "conn.php";
            $sql_query = "SELECT * FROM results WHERE id=".$_GET["id"];

            if ($result = $conn -> query($sql_query)) {
                while ($row = $result -> fetch_assoc()) {
                    $Id = $row['id'];
                    $Name = $row["name"];
                    $Grade = $row["class"];
                    $Marks = $row["marks"];
                }
            }
        ?>
                <form action="updatedata.php?id=<?php echo $_GET['id']; ?>"  method="post" name="student_form" onsubmit="return validateForm()">
                    <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="name">Student Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $Name; ?>" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="grade">Grade</label>
                        <select name="grade" id="grade" class="form-control" required>
                            <option value="">Select a Grade</option>
                            <option value="Grade 6" <?php if ($Grade == "Grade 6") { echo "selected"; } ?>>Grade 6</option>
                            <option value="Grade 7" <?php if ($Grade == "Grade 7") { echo "selected"; } ?>>Grade 7</option>
                            <option value="Grade 8" <?php if ($Grade == "Grade 8") { echo "selected"; } ?>>Grade 8</option>
                            <option value="Grade 9" <?php if ($Grade == "Grade 9") { echo "selected"; } ?>>Grade 9</option>
                            <option value="Grade 10" <?php if ($Grade == "Grade 10") { echo "selected"; } ?>>Grade 10</option>
                            <option value="1st Year" <?php if ($Grade == "1st Year") echo "selected"; ?>>1st Year</option>
                            <option value="2nd Year" <?php if ($Grade == "2nd Year") echo "selected"; ?>>2nd Year</option>
                            <option value="3rd Year" <?php if ($Grade == "3rd Year") echo "selected"; ?>>3rd Year</option>
                            <option value="4th Year" <?php if ($Grade == "4th Year") echo "selected"; ?>>4th Year</option>
                        </select>
                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="marks">Marks</label>
                        <input type="text" name="marks" id="marks" class="form-control" value="<?php echo $Marks; ?>" required>
                    </div>
                    <div class="form-group col-lg-2" style="display: grid; align-items: flex-end;">
                        <input type="submit" name="submit" class="btn btn-primary" value="Update">
                    </div>
                    </div>
                </form>
    <?php
        
        ?>
    </div>
</section>


</body>
</html>
<script>
    function validateForm() {
        let x = document.forms["student_form"]["marks"].value;
        
        // Convert to a number and check if it's valid
        let marks = parseFloat(x);
        if (isNaN(marks) || marks < 65 || marks > 100) {
            alert("Invalid Grade! Please enter a valid number between 65 and 100. Try again!");
            return false; // Prevent form submission
        }
        
        return true; // Allow form submission
    }
</script>

