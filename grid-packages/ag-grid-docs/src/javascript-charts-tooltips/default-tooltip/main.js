var options = {
    container: document.getElementById('myChart'),
    data: [{
        month: 'Jun',
        value1: 50,
        hats_made: 40
    }, {
        month: 'Jul',
        value1: 70,
        hats_made: 50
    }, {
        month: 'Aug',
        value1: 60,
        hats_made: 30
    }],
    series: [{
        type: 'column',
        xKey: 'month',
        yKeys: ['value1', 'hats_made']
    }]
};

var chart = agCharts.AgChart.create(options);

function setYNames() {
    chart.series[0].yNames = ['Sweaters Made', 'Hats Made'];
}

function resetYNames() {
    chart.series[0].yNames = [];
}