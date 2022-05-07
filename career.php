<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOSTRAP LINK.... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        /* .banner{
            background:url('bg2.jpg');
            background-size: cover;
        } */
        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }
    </style>
    <title>Career</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
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
                    </ul>
                </div>
            </div>
        </nav>

        <!-- JUMBOTRON IS STARTED FROM HERE  
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1>Bootstrap Tutorial</h1>
                <p>Bootstrap is the most popular HTML, CSS...</p>
            </div>
        </div>
        -->

        <div class="banner">
            <img src="bg2.jpg" alt="" class="img-fluid" width="100%">
        </div>

    </div>
    <div class="row">
        <?php
        $sql = "SELECT cname,position,Jdesc,CTC, kills form Jobs";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                echo '
                <div class="col-md-4">
                    <div class="jobs">Jobs</div>
                    <h3 style="text-align:center;">' . $rows['position'] . '</h3>
                    <h4 style="text-align:center;">' . $rows['cname'] . '</h4>
                    <p stye="color:black; text-align:justify;">' . $rows['Jdesc'] . '</p>
                    <p stye="color:black; text-align:justify;">' . $rows['skills'] . '</p>
                    <p stye="color:black;">' . $rows['CTC'] . '</p>
                </div>
            ';
            }
        }

        ?>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Applying</label>
                                    <input type="text" class="form-control" id="apply">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Qualificaiton</label>
                                    <input type="text" class="form-control" id="qual">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Year Passout</label>
                                    <input type="text" class="form-control" id="year">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>