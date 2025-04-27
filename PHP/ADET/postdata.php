<!DOCTYPE html>
<html lang="en">
<?php
require_once "conn.php";

if (isset($_POST['submit'])) {
    $activity = $_POST['activity'];
    $activity_marks = $_POST['activity_marks'];
    $student_id = $_GET['id']; // Use the student ID from the URL

    if (!empty($student_id) && !empty($activity) && !empty($activity_marks)) {
        $sql = "INSERT INTO activity (student_id, activity, marks) VALUES ('$student_id', '$activity', '$activity_marks')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "Student ID, Activity, and Marks cannot be empty.";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <section>
        <h1 class="text-center my-4">Post Activity</h1>
        <div class="container">
            <?php
            require_once "conn.php";
            $sql_query = "SELECT * FROM results WHERE id=" . $_GET["id"];

            if ($result = $conn->query($sql_query)) {
                if ($row = $result->fetch_assoc()) {
                    $Name = $row["name"];
                    $Marks = $row["marks"];
                }
            }
            ?>

            <form action="postdata.php?id=<?php echo $_GET['id']; ?>" method="post" name="student_form" onsubmit="return validateForm()">
                <div class="row justify-content-center">
                    <div class="center form-group col-lg-5">
                        <label for="name">Student Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $Name; ?>" disabled>

                        <label for="marks">Original Marks</label>
                        <input type="text" name="marks" id="marks" class="form-control" value="<?php echo $Marks; ?>" disabled>

                        <label for="activity">Activity</label>
                        <input type="text" name="activity" id="activity" class="form-control" required>

                        <label for="activity_marks">Activity Marks</label>
                        <input type="number" name="activity_marks" id="activity_marks" class="form-control" required>

                        <div class="mt-4 text-end">
                            <input type="submit" name="submit" class="btn btn-primary w-25" value="Post">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>

<script>
    function validateForm() {
        let activityMarks = document.getElementById("activity_marks").value;
        let marks = parseFloat(activityMarks);
        if (isNaN(marks) || marks < 0 || marks > 100) {
            alert("Please enter valid Activity Marks between 0 and 100.");
            return false;
        }
        return true;
    }
</script>
