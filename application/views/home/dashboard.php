
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
                            
                               <div class="table-responsive">
                                <table class="table home_table">
                                    <tr> <td class="doc_title"> <b> Document Title : </b></td><td  class="doc_subtitle"> GrumbleDog API</td> <tr>
                                    <tr> <td class="doc_title"> <b> Version : </b></td><td class="doc_subtitle"> 1.0 </td> <tr>
                                    <tr> <td class="doc_title"> <b> Date : </b></td><td class="doc_subtitle"><b> 2018-11-10</b></td> <tr>
                                    <tr> <td class="doc_title"> <b> Status : </b></td><td class="doc_subtitle"> <b>Testing</b></td> <tr>
                                </table>
                              </div> 
                            
                            <h3>GENERAL NOTES:</h3>
                            <p>text goes here</p>
                            <h3>Copyright:</h3>
                            <p>This document contains proprietary technical information which is the property of <b>Silicon Orchard  Ltd.</b>, copying of this document and giving it to others and the using or communication of the contents thereof, are forbidden without express authority. Offenders are liable to the payment of damages. All rights reserved in the event of grant of a patent or the registration of a utility model or design. All specification supplied herein are subject to change without notice at any time.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>