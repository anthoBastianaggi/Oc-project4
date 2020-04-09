async function makeit() {
    var labelsNumberUsers = [];
    var dataNumberUsers = [];
    var labelsPercentBirthdate = [];
    var dataPercentBirthdateUsers = [];

    var dataCountNumberUsers = await get('ajax?action=ajax');
    response = JSON.parse(dataCountNumberUsers);
    response.countNumberUsers.forEach(function(item) {
        var element = Object.values(item);
        labelsNumberUsers.push(element[1]);
        dataNumberUsers.push(parseInt(element[0], 10));
    });

    function chartNumberUsers() {
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
    };
    document.getElementById("chartCountNumberUsers").innerHTML = chartNumberUsers();
}
makeit();