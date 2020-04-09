async function makeit() {
    var labelsPercentBirthdate = [];
    var dataPercentBirthdateUsers = [];

    var dataPercentBirthdate = await get('ajax?action=ajax');
    response = JSON.parse(dataPercentBirthdate);
    response.percentBirthdateUsers.forEach(function(item) {
        var element = Object.values(item);
        labelsPercentBirthdate.push(element[1]);
        dataPercentBirthdateUsers.push(parseInt(element[0], 10));
    });

    function chartPercentAge() {
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
    };
    document.getElementById("chartPercentBirthdate").innerHTML = chartPercentAge();
}
makeit();