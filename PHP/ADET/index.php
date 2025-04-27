<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + MySQL CRUD</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


    </head>

<body>
    <section>
    <h1 style="text-align: center; margin: 50px 0;">PHP CRUD Operations with MySQL</h1>

    <div class="container">
        <form name="student_form" action="adddata.php" method="post" onsubmit="return validateForm()">
            <div class="row">
                <div class="form-group col-lg-4">
                    <label for="name">Student Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter student name" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="grade">Grade</label>
                    <select name="grade" id="grade" class="form-control" required>
                        <option value="">Select a Grade</option>
                        <option value="Grade 6">Grade 6</option>
                        <option value="Grade 7">Grade 7</option>
                        <option value="Grade 8">Grade 8</option>
                        <option value="Grade 9">Grade 9</option>
                        <option value="Grade 10">Grade 10</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <label for="marks">Marks</label>
                    <input type="number" name="marks" id="marks" class="form-control" required>
                </div>
                <div class="form-group col-lg-2" style="display: grid; align-items: flex-end;">
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </form>
    </div>
    </section>



    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Marks</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Post</th>
                        <th scope="col">View Post</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "conn.php";
                    $sql_query = "SELECT * FROM results";
                    if ($result = $conn->query($sql_query)) {
                        while ($row = $result->fetch_assoc()) {
                            $Id = $row['id'];
                            $Name = $row['name'];
                            $Grade = $row['class'];
                            $Marks = $row['marks'];
                            echo "<tr>
                                    <td>$Id</td>
                                    <td>$Name</td>
                                    <td>$Grade</td>
                                    <td>$Marks</td>
                                    <td><a href='updatedata.php?id=$Id' class='btn btn-primary'>Edit</a></td>
                                    <td><a href='deletedata.php?id=$Id' class='btn btn-danger'>Delete</a></td>
                                    <td><a href='postdata.php?id=$Id' class='btn btn-primary'>Post</a></td>
                                    <td><a href='viewdata.php?id=$Id' class='btn btn-primary'>View Post</a></td>
                                </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>

