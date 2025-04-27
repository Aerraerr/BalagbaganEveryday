<!DOCTYPE html>
<html lang="en">
<?php
    require_once "conn.php";
    $id = @$_GET["id"];
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>View Data</title>
</head>
<body>
<section class="justify-content-center">
    <h1 class="text-center my-4">View Data</h1>
    <h6 class="text-center">
    <?php
    include 'student.php';
    $student = new student($conn);
    $student->set_id($id);
    $student->printLabel();

        /*$sql = "SELECT name 
                FROM results 
                WHERE id = '$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $name = $row['name'];
        echo "Name: " . $name;
        */
    ?>
    </h6>
        <div class="container ">
            <table class="table w-50 mx-auto">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Activity</th>
                        <th scope="col">Activity Marks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT id, activity, marks 
                            FROM activity 
                            WHERE student_id = '$id'";
                    if ($result = $conn ->query($sql)) {
                        while ($row = $result->fetch_assoc()) {
                            $Id = $row['id'];
                            $Activity = $row['activity'];
                            $Marks = $row['marks'];
                            echo "<tr>
                            <td>$Id</td>
                            <td>$Activity</td>
                            <td>$Marks</td>
                          </tr>";
                        }
                    }







                    /*require_once "conn.php";
                    $sql_query = "SELECT * FROM activity";
                    if ($result = $conn->query($sql_query)) {
                        while ($row = $result->fetch_assoc()) {
                            $Id = $row['id'];
                            $Student_ID = $row['student_id'];
                            $Activity = $row['activity'];
                            $Activity_Marks = $row['marks'];
                            echo "<tr>
                                    <td>$Id</td>
                                    <td>$Student_ID</td>
                                    <td>$Activity</td>
                                    <td>$Activity_Marks</td>

                                </tr>";
                        }
                    } */
                    ?>

                </tbody>
            </table>
        </div>
    </section>
</body>
</html>