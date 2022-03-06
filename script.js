$(document).ready(function() {
    var table = $('#example').DataTable({

        //add color if temp is too hot
        "createdRow": function(row, data, dataIndex) {
            if (data[1] > data[3]) {        
                $(row).css('background-color', 'rgba(128,0,0,0.8)');
                $(row).css('color', 'rgba(255,255,255,0.8)');
            }
            else if (data[1] < data[2]){
                $(row).css('background-color', 'rgba(0,0,128,0.8)');
                $(row).css('color', 'rgba(255,255,255,0.8)');
            }
            else{
                $(row).css('background-color', 'rgba(0,128,0,0.8)');
                $(row).css('color', 'rgba(255,255,255,0.8)');
            }
        },

        //order by id, descending
        "order": [[0, "desc"]],        

        //hide id
        "columnDefs": [{
            "targets": [0],
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
    getHumidityRange();
    updateDeviceStatus();

    setInterval(getAverageRecords, 1000);
    setInterval(getHumidityRange, 1000);
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

function getHumidityRange() {
    $.ajax({
        type: 'POST',
        url: 'WebService/getHumidityRange.php',
        success: function(data) {
            $('#humidityRange').html(data);
        }
    });
}

function getCurrentHumidity() {
    $.ajax({
        type: 'POST',
        url: 'WebService/getCurrentHumidity.php',
        success: function(data) {
            $('#currentHumidity').html(data);
        }
    });
}

function updateHumidifierStatus() {
    $.ajax({
        type: 'POST',
        url: 'WebService/getDehumidifierStatus.php',
        success: function(data) {
            $('#humidifierStatus').html(data);
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
                $('#humidifierStatus').html("OFF");
                $('#currentHumidity').html("N/A");
            }
            else {
                updateHumidifierStatus();
                getCurrentHumidity();
            }
        }
    });
}