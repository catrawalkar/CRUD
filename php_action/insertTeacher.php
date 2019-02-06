<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="//ajax.googleapis.com/ajax/libs/dojo/1.14.1/dojo/dojo.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="stylesheet" href="../custom/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="../custom/js/JavaScript.js"></script>

    <title>Teacher-Department Form</title>
</head>


<body>
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="nav ">
      <li class="nav-item" style="padding:5px">
        <a class="nav-link btn btn-default" href="../index.htm">Home</a>
      </li>
      <li class="nav-item" style="padding:5px">
        <a class="nav-link btn btn-primary active" href="insertTeacher.php">Insert Article</a>
      </li>
      <li class="nav-item" style="padding:5px">
        <a class="nav-link btn btn-default" href="viewTeacher.php">View Article</a>
      </li>
    </ul>
  </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 border-right">
                <h2>
                    Insert Article data
                </h2>
                <form method="get" action="">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="title">Title: </label>
                                <input id="title" class="form-control" type="text" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="source">Source: </label>
                                <input id="source" class="form-control" type="text" placeholder="Enter Source">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="category">Category: </label>
                                <input id="category" class="form-control" type="text" placeholder="Enter Category">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="intro">Intro: </label>
                                <input id="intro" class="form-control" type="text" placeholder="Enter Intro">
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="form-group">
                                <label for="time">Time: </label>
                                <input id="time" class="form-control" type="time" placeholder="Enter Time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="date">Date: </label>
                                <input id="date" class="form-control" type="date" placeholder="Enter Date"
                                    value="1980-01-01">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="keywords">Keywords: </label>
                                <input id="keywords" class="form-control" type="text" placeholder="Enter Keywords">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="tags">Tags: </label>
                                <input id="tags" class="form-control" type="text" placeholder="Enter Tags">
                            </div>
                        </div>
                    </div> -->
                    <div class="row" style="padding: 20px;">
                        <div class="col-5"></div>
                        <div class="col-4">
                            <button class="btn btn-primary" type="button" id="teacher_btn">Submit</button>
                        </div>
                        <div class="col-3"></div>
                    </div>


                </form>
            </div>
            <div class="col-6">
                <h2>
                    lorem ipsum
                </h2>
            </div>
        </div>
    </div>
</body>

</html>