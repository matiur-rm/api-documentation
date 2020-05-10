<!DOCTYPE html>
<html lang="en">

   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>API Document</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
        <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/bootstrap-theme.min.css') ?>" rel="stylesheet" />
        <script src="<?= base_url('assets/js/jquery-2.2.3.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/custom.js') ?>"></script>


        <script type="text/javascript">
            var base_url = "/"
        </script>
    </head>
    <body>


        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">

                    <div class="panel panel-default cust_pannel">
                        <div class="panel-heading">
                            <center> <h3>API Login</h3></center>
                            <div class="panel-body">
                                <form action="<?php echo base_url('user/login'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="userName">User Name</label>
                                        <input type="text" class="form-control" name="username" id="userName" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>


</html>