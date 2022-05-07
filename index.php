<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTRAP LINK.... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- EXTERNAL CSS LINK -->
    <link rel="stylesheet" href="style\style.css">
    <style>
        /* The side navigation menu */
        .sidebar {
            margin: 0;
            margin-top: 8px;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
            margin-top: 60px;
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }
    </style>
    <title>Dashboard</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </nav>
        <div class="sidebar">
            <a class="active" href="#home">Jobs</a>
            <a href="#jobs.php">Candidates Applied</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>

        <!-- Page content -->
        <div class="content">
            <!-- <h2>Responsive Sidebar Example</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium dolore autem neque reiciendis rerum, provident eum illum molestiae eveniet consectetur.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ratione quod debitis quidem odit. Fugiat minima quasi ex distinctio ?</p>
            <h3>Resize the browser window to see the effect. </h3> -->


            <p>
                <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                </a> -->
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Post Job
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="Company Name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="" name="Cname">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPosition" class="form-label">Position</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="pos">
                        </div>
                        <div class="mb-3">
                            <label for="JObDesc" class="form-label">JOb Description</label>
                            <input type="text" class="form-control" id="JobDesc" name="Jdesc">
                        </div>
                        <div class="mb-3">
                            <label for="skill" class="form-label">Skills Required</label>
                            <input type="text" class="form-control" id="skills" name="skills">
                        </div>
                        <div class="mb-3">
                            <label for="CTC" class="form-label">CTC</label>
                            <input type="text" class="form-control" id="CTC" name="CTC">
                        </div>
                        <!-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">CTC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>TCS</td>
                        <td>Software Developer</td>
                        <td>8 LPA</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Google</td>
                        <td>Digital Marketing</td>
                        <td>12 LPA</td>
                    </tr>
                    <!-- <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->

<?php

        $sql="Select cname,position,CTCfrom Jobs";
        $result=mysqli_query($conn,$sql);
        if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
                $i=0;
                echo"
                <td>".++$i."</td>
                <td>".$rows['cname']."</td>
                <td>".$rows['position']."</td>
                <td>".$rows['CTC']."</td>
                ";
            }
        }
/*
 echo"
 <tbody>
 <tr>
        <td>".++$i."</td>
                <td>".$rows['cname']."</td>
                <td>".$rows['position']."</td>
                <td>".$rows['CTC']."</td>
  </tr>              
  </tbody>              
 ";
 else{
     echo"";
 }
*/

?>


                </tbody>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>