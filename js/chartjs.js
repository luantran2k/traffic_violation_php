// Line chart
var result;
function load_data() {
    $.get("./php/count_violation.php", function (data) {
        result = data.split(" ");
        result.pop();
        console.log(result);
    });
};
load_data();
setTimeout(() => {
    const ctx = document.getElementById('lineChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12',],
            datasets: [
                {
                    label: 'Năm 2021',
                    data: result,
                    backgroundColor: 'transparent',
                    borderColor: '#0d6efd',
                    borderWidth: 1
                },
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}, 100);

var data = {
    labels: [
        "Xe máy",
        "Ô tô",
        "Xe tự chế",
        "Khác"
    ],
    datasets: [
        {
            data: [60, 30, 8, 2],
            backgroundColor: [
                "#0d6efd",
                "#4d94ff",
                "#8fbcff",
                "#b6b6b6",
            ],
        }]
};

//Pie chart
var piectx = document.getElementById("piechart").getContext("2d");
var pieChart = new Chart(piectx, {
    type: 'pie',
    data: data,
    options: {
        showAllTooltips: true,
        animation: {
            animateRotate: true,
            animateScale: true
        },
        elements: {
            arc: {
                borderColor: "#fff"
            }
        },
        title: {
            display: true,
            text: 'Theo loại phương tiện (%)',
            fontSize: 18,
            padding: 20,
            fontColor: "#999",
            fontStyle: 'Normal',
            fontFamily: "Montserrat",
            fullWidth: true
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                boxWidth: 30,
                fontColor: "#999",
                fontFamily: "Montserrat",
                fullWidth: true
            }
        },
        tooltips: {
            enabled: false,
            bodyFontColor: "#efefef",
            fontStyle: 'Normal',
            bodyFontFamily: "Montserrat",
            cornerRadius: 2,
            backgroundColor: "#333",
            xPadding: 7,
            yPadding: 7,
            caretSize: 5,
            bodySpacing: 10
        }
    }
});