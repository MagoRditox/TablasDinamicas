<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New</title><!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="resources\css\new.css">
    <script type="text/javascript" src="resources\js\new.js"></script>
</head>
<body>
            <div class="form-body">
                <div class="row">
                    <div class="form-holder">
                        <div class="form-content">
                            <div class="form-items">
                                <h3>Register Today</h3>
                                <p>Teacher</p>
                                <form class="requires-validation" action="new_register" method="POST">
                                    @csrf
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="name" placeholder="Name Teacher" required>
                                        <div class="valid-feedback">Username field is valid!</div>
                                        <div class="invalid-feedback">Username field cannot be blank!</div>
                                    </div>

                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="lastname" placeholder="Lastname" required>
                                        <div class="valid-feedback">lastname field is valid!</div>
                                        <div class="invalid-feedback">Lastmane field cannot be blank!</div>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label">I confirm that all data are correct</label>
                                    <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                                    </div>
                        

                                    <div class="form-button mt-3">
                                        <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        


</body>
</html>