<div class="documentation_body">
<h3>Driver Login </h3>
<p>By this API Driver can login to the system.</p>
<hr>
<p> <strong> Request URL: </strong> http://52.41.115.212/geo_fences/geoFenceLists.json</p>
<p> <strong> Request Type:</strong> POST</p>
<div class="panel panel-default ">
    <div class="panel-heading doc_panel_heading">
        <b> Request Example Json:</b>
    </div>
    <div class="panel-body">
        <textarea id="reqJsonDoc" class="form-control" rows="10">{
    "product":"CTS API",
    "apiName":"authenticateDriver",
    "version":"1.0",
    "apiUserId":"admin",
    "apiSecurityCode":"1234",
    "serviceOperatorId":"1",
    "mobileNo":"8801534226580",
    "authorizationCode":"123456",
	"fcmToken":"13534sdgdsgsd4643dsd5"
}</textarea>
    </div>
</div>
<p><b>Request Parameter Description</b></p>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr><th> Parameter </th><th>Description </th>
        </tr></thead>
        <tbody>
             <tr>
                <td> product </td><td>Attribute "product" represents API name, default value "CTS API" . </td>
            </tr>
            <tr>
                <td> apiName </td><td>Attribute "apiName" represents function that will call for requested url. </td>
            </tr>
            <tr>
                <td> version </td><td>Attribute "version" represents API version, default value "1.0" . </td>
            </tr>
            <tr>
                <td> apiUserId </td><td>Attribute "apiUserId" represents API User ID. </td>
            </tr>
            <tr>
                <td> apiSecurityCode </td><td>Attribute "apiSecurityCode" represents app security code send API request. </td>
            </tr>
            <tr>
                <td> mobileNo </td><td>Attribute "mobileNo" represents the User Name. </td>
            </tr>
            <tr>
                <td> authorizationCode </td><td>Attribute "authorizationCode" represents User Password. </td>
            </tr>
            <tr>
                <td> fcmToken </td><td>Attribute "fcmToken" represents  Driver User FCM Token. (Optional, sometimes the parameter &amp; value exists, sometimes may not). </td>
            </tr>
            

        </tbody>
    </table>
    <hr>
</div>

<div class="panel panel-default ">
    <div class="panel-heading doc_panel_heading">
        <b> Response Example Json:</b>
    </div>
    <div class="panel-body">
        <textarea id="resExampleJson" class="form-control" rows="15"> 
                {
                    "status": 0,
                    "product": "CTS API",
                    "version": "1.0",
                    "apiName": "authenticateDriver",
                    "response": {
                       "displayMsg": "Login Successfully",
                       "driverUserId": "289",
                       "driverId": "74",
                       "vehicleStat": "1",
                       "vehicleId": "11",
                       "vehicleName": "DMCHA516541",
                       "tripReqStatus": "6",
                       "companyId": "1"
                    },
                    "errorCode": 200,
                    "errorMsg": ""
                 }
        </textarea>
    </div>
</div>

<p><b>Response Parameter Description</b></p>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr><th> Parameter </th><th>Description </th>
        </tr></thead>
        <tbody>
            <tr>
                <td> status </td><td>Attribute "status" represents API execution status, it will be either 0 on success or 1 for failure. </td>
            </tr>
            <tr>
                <td> product </td><td>Attribute "product" represents API name, default value "CTS API" . </td>
            </tr>
            <tr>
                <td> apiName </td><td>Attribute "apiName" represents function that is called for requested url. </td>
            </tr>
            <tr>
                <td> version </td><td>Attribute "version" represents API version, default value "1.0" . </td>
            </tr>
            <tr>
                <td> response </td>
                <td>Attribute "response" will hold actual response for the request url, it also contain following parameters: <br>
                    <b> displayMsg - </b> It will contain Login Success Message <br>    
                    <b> driverUserId - </b> It will contain Driver User Id <br>
                    <b> driverId - </b> It will contain Driver Id <br>
                    <b> vehicleStat - </b> It represent the vehicle online or offline<b>( 1= Online, 2= Offline)</b> <br>
                    <b> vehicleId - </b> It will contain Vehicle Id <br>
                    <b> vehicleName - </b> It will contain Vehicle Name <br><br>
                    <b> tripReqStatus - </b> It will contain Trip Req Status<b>(1=Assigned,2= Forwarded,3= Accepted, 4=Cancelled,5=On Trip, 6=Completed)</b> <br><br>
                    <b> companyId - </b> It will contain company Id <br><br>      
                </td>
            </tr>
            <tr>
                <td> errorCode </td><td>If "status" set with value 1 then it will set with error code for particular error that causes failure of execution.</td>
            </tr>
            <tr>
                <td> errorMsg </td><td>If "status" set with value 1 then this attribute will contain error message. </td>
            </tr>
            
        </tbody>
    </table>
    <hr>
</div>
</div>