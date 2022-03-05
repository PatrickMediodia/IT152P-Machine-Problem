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

    <script src="script.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body background="https://wallpaperaccess.com/full/1092564.jpg">
    <div class="container-fluid text-center col-xl-10 col-lg-9 col-md-10 col-sm-11" style="padding-bottom:30px; padding-top:30px;">
        <div class="rcorners">
            <h1 style="padding:50px; color:#1055A1;">Temperature and Humidity Records</h1>
            <div class="row" style="padding:30px;">
                <div class="col-lg-4">
                    <div class="row">
                        <p><span class="smallHeading">Average Temperature:<br /></span>
                            <span class="number" id="averageTemp"></span>
                        </p>
                    </div>
                    <div class="row">
                        <p><span class="smallHeading">Average Humidity:<br /></span>
                            <span class="number" id="averageHum"></span>
                        </p>
                    </div>
                    <div class="row">
                        <p><span class="smallHeading">Desired Temp:<br /></span>
                            <span class="number" id="desiredTemp"></span>
                        </p>
                    </div>
                    <div class="row">
                        <p><span class="smallHeading">Current Temp:<br /></span>
                            <span class="number" id="currentTemp"></span>
                        </p>
                    </div>
                    <div class="row">
                        <form action="WebService/updateDesiredTemp.php" method="POST">
                            <input type="text" class="form-control" name="desiredTemp">
                            <input type="submit" name="submit" value="Submit">
                        </form>
                    </div>
                    <!--
                    <div class="row">
                        <form action="Email/updateEmail.php" method="POST">
                            <input type="text" name="updateEmail">
                            <input type="submit" name="submit" value="Submit">
                        </form>
                    </div>
                    -->
                </div>
                <div class="col-lg-8">
                    <table id="example" class="display tabletable-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Temperature</th>
                                <th>Humidity</th>
                                <th>Date and Time</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div>
                <div class="row">
                    <p><span class="smallHeading">Fan Status<br /></span>
                        <span class="number" id="fanStatus"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>