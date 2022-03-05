$(document).ready(function() {
    var table = $('#example').DataTable({

        //add color if temp is too hot
        "createdRow": function( row, data, dataIndex ) {
            console.log(data[1], data[2]);
            if (data[1] > data[2]) {        
            $(row).css('background-color', 'rgba(128,0,0,0.8)');
            $(row).css('color', 'rgba(255,255,255,0.8)');
        }},

        //order by id, descending
        "order": [[ 0, "desc" ]],        

        //hide id
        "columnDefs": [{
            "targets": [ 0 ],
            "visible": false,
            "searchable": false 
        }],

        //get data from web service
        ajax: "WebService/getTempHumRecords.php"
    });
    
    //refresh table every second
    setInterval(function() {
        table.ajax.reload(null, false); // user paging is not reset on reload
    }, 1000);

    getAverageRecords();
    getDesiredTemp();
    updateDeviceStatus();

    setInterval(getAverageRecords, 1000);
    setInterval(getDesiredTemp, 1000);
    setInterval(updateDeviceStatus, 1000);
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

function updateDeviceStatus() {
    $.ajax({
        type: 'POST',
        url: 'WebService/getDeviceStatus.php',
        success: function(data) {
            $('#deviceStatus').html(data);
            if(data == "OFFLINE") {
                $('#fanStatus').html("OFF");
                $('#currentTemp').html("N/A");
            }
            else {
                updateFanStatus();
                getCurrentTemp();
            }
        }
    });
}