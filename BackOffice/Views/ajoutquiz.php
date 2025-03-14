<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ajouter Quiz </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="csclient.js"></script>
    <script>
    function validateForm() {
        var titre = document.forms["Form"]["titre"].value;
        var questions = document.forms["Form"]["questions"].value;
        var reponses = document.forms["Form"]["reponses"].value;
        var id_cours = document.forms["Form"]["id_cours"].value;

        if (titre === "") {
            alert("Please enter a titre.");
            return false;
        }

        if (questions === "") {
            alert("Please enter questions.");
            return false;
        }

        if (reponses === "") {
            alert("Please enter reponses.");
            return false;
        }

        if (id_cours === "") {
            alert("Please select an ID Cours.");
            return false;
        }

        return true;
    }
</script>


</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i> Espace Admin </a>
                    </li>
                    <h3 class="menu-title"> Éléments IU</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li> -->
                            <li><i class="fa fa-table"></i><a href="table-user.php">Utilisateur</a></li>
                            <li><i class="fa fa-table"></i><a href="table-cours.php">Cours</a></li>
                            <li><i class="fa fa-table"></i><a href="table-quiz.php">Quiz</a></li>
                        
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

                </div>

            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Espace Admin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Espace Admin</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active"> table de donnée </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row" style=" justify-content: center;">
                    <div class="col-lg-6" >
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Cours</strong>
                            </div>
                            <div class="card-body" >
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Ajouter Quiz </h3>
                                        </div>
                                        <hr>
                                        <!--  onsubmit="return validateForm(event)"   -->
                                        <form action="ajoutquiz_form.php" name="Form" method="POST" onsubmit="return validateForm();">
                                            <div class="form-group">
                                                <label>ID Quiz</label>
                                                <input type="number" name="id" class="form-control" hidden>
                                            </div>
                                            <div class="form-group">
                                                <label>Titre</label>
                                                <input type="text" name="titre" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Questions</label>
                                                <textarea name="questions" class="form-control" rows="4"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Reponses</label>
                                                <textarea name="reponses" class="form-control" rows="4"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_cours">ID Cours</label>
                                                <select name="id_cours" class="form-control">
                                                    <?php
                                                    try {
                                                        $con = new PDO('mysql:host=localhost;dbname=gestion_des_cours', 'root', '');

                                                        // Prepare and execute the SQL query
                                                        $stmt = $con->prepare("SELECT id FROM cours");
                                                        $stmt->execute();

                                                        // Fetch the results and populate the select options
                                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                            $id_cours = $row['id'];
                                                            echo "<option value=\"$id_cours\">$id_cours</option>";
                                                        }
                                                    } catch (PDOException $e) {
                                                        echo "Database query failed: " . $e->getMessage();
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-lg btn-info btn-block">
                                                <span>Ajouter</span>
                                            </button>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->




                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
