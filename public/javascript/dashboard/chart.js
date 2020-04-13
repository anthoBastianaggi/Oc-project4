async function makeit() {
    // Contains pages where code
    // should not be executed
    var list = ['/projet4/profile', '/projet4/settings', '/projet4/chapter-list', '/projet4/report-comment'];

    // Current address
    var addressPath = document.location.pathname;

    // If the address is on the list
    for (var i = 0; i < list.length; i++) {
        if (list[i] === addressPath) return;
    }

    var labelsPercentBirthdate = [];
    var dataPercentBirthdateUsers = [];

    var dataPercentBirthdate = await get('ajax?action=ajax');
    response = JSON.parse(dataPercentBirthdate);
    response.percentBirthdateUsers.forEach(function(item) {
        var element = Object.values(item);
        labelsPercentBirthdate.push(element[1]);
        dataPercentBirthdateUsers.push(parseInt(element[0], 10));
    });

    var chartPercent = document.querySelector('#chartPercentBirthdate').getContext('2d');
    var chart = new Chart(chartPercent, {
        // The type of chart we want to create
        type: 'pie',

        // The data for our dataset
        data: {
            labels: labelsPercentBirthdate,
            datasets: [{
                backgroundColor: [
                    "#90EE90",
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ], 
                borderColor: [
                    "#90EE90",
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ], 
                data: dataPercentBirthdateUsers
            }]
        },

        // Configuration options go here
        options: {}
    });

    var labelsNumberUsers = [];
    var dataNumberUsers = [];

    var dataCountNumberUsers = await get('ajax?action=ajax');
    response = JSON.parse(dataCountNumberUsers);
    response.countNumberUsers.forEach(function(item) {
        var element = Object.values(item);
        labelsNumberUsers.push(element[1]);
        dataNumberUsers.push(parseInt(element[0], 10));
    });

    var chartNumberUsers = document.querySelector('#chartCountNumberUsers').getContext('2d');
    var chart = new Chart(chartNumberUsers, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: labelsNumberUsers,
            datasets: [{
                label: "Nombres d'utilisateurs",
                backgroundColor: "#36A2EB",
                borderColor: "#36A2EB",
                data: dataNumberUsers
            }]
        },

        // Configuration options go here
        options: {}
    });
}
makeit();