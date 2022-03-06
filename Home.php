<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Monitoring System</title>

<head>
    <!-- important for responsive web designs -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Data Tables CSS -->
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css" />

    <!-- jQuery Data Tables CDN -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript" charset="utf8"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js" type="text/javascript" charset="utf8"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js" type="text/javascript" charset="utf8"></script>

    <!-- Date Time library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/luxon/2.3.1/luxon.min.js" integrity="sha512-Nw0Abk+Ywwk5FzYTxtB70/xJRiCI0S2ORbXI3VBlFpKJ44LM6cW2WxIIolyKEOxOuMI90GIfXdlZRJepu7cczA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src = "script.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body background="https://wallpaperaccess.com/full/1092564.jpg">
    <div class="container-fluid text-center col-xl-10 col-lg-9 col-md-10 col-sm-11" style="padding-bottom:30px; padding-top:30px;">
        <div class="rcorners">
            <h1 style="padding:50px; color:#2E6CA4;"><strong>Humiditiy Monitoring System</strong></h1>
            <div class="row" style="padding:30px;">
                <!-- Temp/Hum Summary -->
                <div class="col-lg-3">
                    <p><span class="smallHeading">Average Temperature:<br /></span>
                        <span class="number" id="averageTemp"></span>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p><span class="smallHeading">Average Humidity:<br /></span>
                        <span class="number" id="averageHum"></span>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p><span class="smallHeading">Humidity Range:<br /></span>
                        <span class="number" id="humidityRange"></span>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p><span class="smallHeading">Current Humidity:<br /></span>
                        <span class="number" id="currentHumidity"></span>
                    </p>
                </div>
            </div> <!-- end of Temp/Hum Summary row -->

            <div class="row" style="padding:40px 0px; width:80%; margin:auto;">
                <!-- Fan/Device Status, Update Desired Row -->
                <div class="col-md-4" style="padding-top:40px;">
                    <img src="Images/BlueFan.png" alt="Fan Icon" height="230" width="230">
                </div>
                <div class="col-md-8" style="padding-top:30px;">
                    <div class="row">
                        <div class="col-lg-6" style="text-align:center;">
                            <span class="smallHeading">Humidifier Status: </span><br>
                            <span class="number" id="humidifierStatus"></span>
                        </div>
                        <div class="col-lg-6">
                            <span class="smallHeading">Device Status: </span><br>
                            <span class="number" id="deviceStatus"></span>
                        </div>
                    </div>

                    <hr>

                    <span class="smallHeading">Update Humidity Range:<br /></span> <!-- Update High humidity -->
                    <form action="WebService/updateHumidityRange.php" method="POST">
                        <div class="row" style="padding-top:10px">
                            <div style="width:35%;"><input type="text" placeholder="Min Humidity" name="minHumidity" value="" required></div>
                            <div style="width:35%;"><input type="text" placeholder="Max Humidity" name="maxHumidity" value="" required></div>
                            <div style="width:30%;"><input class="button2" type="submit" name="submit" value="UPDATE"></div>
                        </div>
                    </form>
                </div>
            </div> <!--  End of Fan/Device Status, Update Desired Row -->

            <hr>
            
            <h1 style="padding:20px; color:#2E6CA4;"><strong>Logs</strong></h1>
            <span><strong>Legend : </strong></span>
            <span style="color: blue;">Blue = Low Humidity, </span>
            <span style="color: green;">Green = Normal Humidity, </span>
            <span style="color: red;">Red = High Humidity</span>

            <div class="d-flex justify-content-center">
                <div class="col-lg-11">
                    <table id="example" class="display table table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Humidity</th>
                                <th>Min Humidity</th>
                                <th>Max Humidity</th>
                                <th>Temperature</th>
                                <th>Date and Time</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>