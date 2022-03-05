$(document).ready(function() {
    var table = $('#example').DataTable( {
        "order": [[ 2, "desc" ]],
        ajax: "WebService/getTempHumRecords.php"
    });
     
    setInterval(function() {
        table.ajax.reload(null, false); // user paging is not reset on reload
    }, 1000);

    getAverageRecords();
    getDesiredTemp();
    getCurrentTemp();
    updateFanStatus();

    setInterval(getAverageRecords, 1000);
    setInterval(getDesiredTemp, 1000);
    setInterval(getCurrentTemp, 1000);
    setInterval(updateFanStatus, 1000);
});

function getAverageRecords() {
    $.ajax({
        type: 'POST',
        url: 'WebService/getAverageTempHum.php',
        success: function(data) {
            const split_data = data.split(',');
            $('#averageTemp').html(split_data[0]);
            $('#averageHum').html(split_data[1]);
        }
    });
}

function getDesiredTemp() {
    $.ajax({
        type: 'POST',
        url: 'WebService/getDesiredTemp.php',
        success: function(data) {
            $('#desiredTemp').html(data);
        }
    });
}

function getCurrentTemp() {
    $.ajax({
        type: 'POST',
        url: 'WebService/getCurrentTemp.php',
        success: function(data) {
            $('#currentTemp').html(data);
        }
    });
}

function updateFanStatus() {
    $.ajax({
        type: 'POST',
        url: 'WebService/getFanStatus.php',
        success: function(data) {
            $('#fanStatus').html(data);
        }
    });
}