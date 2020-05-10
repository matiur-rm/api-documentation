
<!DOCTYPE html>
<html lang="en">
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


        <script type="text/javascript">
            var base_url = "/"
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="api_heading">GrumbleDog API Simulator</h3>
                </div>
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <ul class="menuBar">
                                <li><a class="active" href="<?= base_url('dashboard') ?>">Home |</a></li>
                                <li><a class="" href="<?= base_url('api-req-simulator') ?>">API Request Simulator |</a></li>
                                <li><a class="" href="<?= base_url('error-code') ?>">Custom Error Code |</a></li>
                                <li><a class="" href="<?= base_url('') ?>">Example</a></li>
                            </ul>
                            <a class="pull-right logoutBtn" href="<?= base_url('user/logout') ?>">Logout</a>
                        </div>
                        <div class="panel-body">
                            
             <div class="home_body_content">

                                <h3>Custom Error Code Description</h3>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <th> Code </th><th>Description </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 200 </td><td>OK - the request was successful. </td>
                                            </tr>
                                            <tr>
                                                <td> 201 </td><td>Created - the request was successful and a resource was created. </td>
                                            </tr>
                                            <tr>
                                                <td> 202 </td><td>The device already add to dog. </td>
                                            </tr>
                                            <tr>
                                                <td> 203 </td><td>The dog has already added device. </td>
                                            </tr>
                                            <tr>
                                                <td> 204 </td><td>No Content - the request was successful but there is no representation to return (i.e. the response is empty). </td>
                                            </tr>
                                            <tr>
                                                <td> 400 </td><td>The Dog is not added device. </td>
                                            </tr>
                                            <tr>
                                                <td> 401 </td><td>Unauthorized  - The dog is not your.</td>
                                            </tr>
                                            <tr>
                                                <td> 403 </td><td>The device is not available.</td>
                                            </tr>
                                            <tr>
                                                <td> 404 </td><td>Please give all required data.</td>
                                            </tr>
                                            <tr>
                                                <td> 405 </td><td>Bad Request - the request could not be understood or was missing required parameters.</td>
                                            </tr>
                                            <tr>
                                                <td> 500 </td><td>Session expired or logout.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                </div>
                                <h3>General Error JSON</h3>
                                <div class="generalErrorJson">
                                    { <br>
                                        &nbsp; &nbsp; &nbsp;"status" : 1, <br>
                                        &nbsp; &nbsp; &nbsp;"api_name" : "api name", <br>
                                        &nbsp; &nbsp; &nbsp;"response" : null, <br>
                                        &nbsp; &nbsp; &nbsp;"errorCode" : 101, <br>
                                        &nbsp; &nbsp; &nbsp;"errorMsg" : "Error message" <br>
                                    }
                                
                                </div>
                            </div>

                            
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </body>
</html>