
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
        <script src="<?= base_url('assets/js/custom.js') ?>"></script>


        <script type="text/javascript">
            var base_url = '<?php "http://" . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']); ?>';
        </script>

        <style>
            #headers-button{
                display: inline-block;
                margin-bottom: 0;
                font-weight: normal;
                text-align: center;
                vertical-align: middle;
                cursor: pointer;
                background-image: none;
                border: 1px solid transparent;
                white-space: nowrap;
                padding: 6px 12px;
                font-size: 13px;
                line-height: 1.42857143;
                border-radius: 0;
                border: 1px solid #ccc;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                color:green;
            }
            #headers-list {
                margin-left: 47px;
            }
            #headers-list ul li div a span {
                margin-top: 7px;
            }
            #headers-list li {
    margin-bottom: 8px;
}
ul li {
   list-style: none;
}
.row {
    margin-left: -15px;
    margin-right: -15px;
}
        </style>

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
                            <!--<form class="form-horizontal" action="" method="post">-->
                            <form class="form-horizontal" action="<?= base_url('') ?>" method="post">

                                <div class="form-group">
                                    <label  class="col-sm-2">REQUESTED URL</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">http://52.41.115.212</div>
                                            <select id="urlId" class="form-control">
                                                <option value=''>Select API</option>
                                                <option value="1" data-url="RegistrationReqOne" >01. Device Add</option>
                                                <option value="2" data-url="RegistrationReqTwo" >02. Dog Track</option>
                                                <option value="3" data-url="Authenticate" >03. Device Delete</option>
                                                <option value="4" data-url="NearestVehicle" >04. Dog list</option>
                                                <option value="5" data-url="VehicleType" >05. User FCM Token Receive</option>
                                                <option value="6" data-url="ConfirmTripRequest" >06. Geo-Fence Add</option>
                                                <option value="7" data-url="TripRequsitionCancel" >07. Geo-Fence Edit</option>
                                                <option value="8" data-url="ClientLists" >08. Geo-Fence Delete</option>
                                                <option value="9" data-url="FcmTokenReceive" >09. Geo-Fence List All Dog</option>
                                                <option value="10" data-url="FcmPushNotification" >10. Geo-Fence List Single Dog</option>

                                            </select>

                                        </div>



                                    </div>

                                    <div class="col-sm-2">
                                        <select class="form-control" id="request-method-dropdown" width="20px" onchange="switchMethod(this.value)">
                                            <option>GET</option>
                                            <option>POST</option>
                                            <option>PUT</option>
                                            <option>DELETE</option>
                                            <option>PATCH</option>
                                            <option>OPTIONS</option>
                                        </select>


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="headers-button" class="col-sm-2">HEADERS</label>
                                    <div class="col-sm-2">
                                        <button type="button" id="headers-button" class="btn-flat btn-default add_button"><span class="glyphicon glyphicon-plus"></span></button>
                                    </div> 
                                </div>

                                <div id="headers-list">
                                    <div class="col-sm-offset-1 col-sm-12">
                                        <ul class="field_wrapper"> 
                                        </ul>
                                    </div>
                                </div> 



                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2">CONTENT-TYPE</label>
                                    <div class="col-sm-8">


                                        <select id="urlId" class="form-control">
                                            <option value=''>Select Content-Type</option>
                                            <option value="1" data-url="RegistrationReqOne" >application/json</option>
                                            <option value="2" data-url="RegistrationReqTwo" >application/x-www-form-urlencoded</option>
                                            <option value="3" data-url="Authenticate" >application/javascript</option>
                                            <option value="4" data-url="NearestVehicle" >application/rss+xml</option>
                                            <option value="5" data-url="VehicleType" >text/plain</option>
                                        </select>





                                    </div>


                                </div>

                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2">JSON STRING</label>
                                    <div class="col-sm-10">
                                        <textarea id="jsonFile" name="jsonFileName" class="form-control" rows="10">  </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button id="submitBtn" type="submit" class="btn btn-success">SUBMIT</button>
                                    </div>
                                </div>
                            </form>


                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="pannelHeading">Response</span>
                                </div>
                                <div class="panel-body">
                                    <center>  <span class="resJsonContentBody"> No Response Yet </span></center>
                                    <pre id="resJsonContent" class="form-control cust_pre">  </pre>
                                    <!-- <div id="resJsonContent"></div> -->
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <button id="documentExpand" type="button" class="documentExpand btn btn-xs btn-info" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    </button>
                                    <button id="documentCollapse" type="button" class="documentCollapse btn btn-xs btn-info" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                    </button> <span class="pannelHeading">Documentation</span>
                                </div>
                                <div class="panel-body">
                                    <div id="docFile">



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#resJsonContent').hide();
                $('.resJsonContentBody').html('No Response Yet');
                $("#urlId").change(function () {
                    var apidocid = $(this).val();

                    $.ajax({
                        url: base_url + 'api-doc/' + apidocid,
                        method: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            var jsonFile = data.jsonFile;


                            // alert(jsonFile.name);
                            $('#docFile').load("<?= base_url('geo-fence'); ?>");
                            var docFile = data.docFile;
                            $('#jsonFile').html(jsonFile);
                            $('#docFile').html(docFile);
                            $('#reqJsonDoc').html(jsonFile);
                        }

                    });
                });

                $("#docFile").hide();
                $("#documentCollapse").hide();

                $("#documentExpand").click(function () {
                    $("#documentExpand").hide();
                    $("#docFile").show();
                    $("#documentCollapse").show();
                });
                $("#documentCollapse").click(function () {
                    $("#documentExpand").show();
                    $("#docFile").hide();
                    $("#documentCollapse").hide();
                });


                $("#submitBtn").click(function () {
                    var newJson = $("#jsonFile").val();
                    var dataUrl = $('#urlId :selected').attr('data-url');

                    $.ajax({
                        url: base_url + 'home/api-req',
                        method: 'POST',
                        data: {data: newJson, type: dataUrl},
                        success: function (data) {
                            console.log(data);


                            var apiResponse = data.apiResponse;
                            $('.resJsonContentBody').hide();
                            $('#resJsonContent').html(JSON.stringify(JSON.parse(apiResponse), undefined, 3));
                            $('#resJsonContent').show();
//                            $('#resExampleJson').html(JSON.stringify(JSON.parse(apiResponse),undefined,3)); 

                        }
                    });
                    return false;
                });
                
                
                //Once add button is clicked Header
                 var maxField = 10; 
                 var addButton = $('.add_button');
                 var wrapper = $('.field_wrapper');
                 var fieldHTML = '<li class="row"><div class="col-sm-4"><input type="text" class="form-control"  placeholder="Key"></div><div class="col-sm-4"><input type="text" class="form-control"  placeholder="Value"></div><div class="col-sm-1"><a href="javascript:void(0);" class="remove_button"><span class="glyphicon glyphicon-remove"></span></a></div></li>'; //New input field html 
                 var x = 1;
    

                  $(addButton).click(function(){
                        if(x < maxField){ 
                            x++;
                            $(wrapper).append(fieldHTML);
                        }
                  });
                
                  //Once remove button is clicked Header
                    $(wrapper).on('click', '.remove_button', function(e){
                        e.preventDefault();
                        $(this).parents('li').remove(); 
                        x--;
                    });

            });
        </script>

    </body>
</html>