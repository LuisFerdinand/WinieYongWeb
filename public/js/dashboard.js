// dashboard.js

console.log('Script loaded'); // Debugging: Check if the script is loaded

document.addEventListener('DOMContentLoaded', function () {
    console.log('DOM fully loaded and parsed'); // Debugging: Ensure DOM is loaded

    var canvas = document.getElementById('clickChart');
    var labels = JSON.parse(canvas.getAttribute('data-labels'));
    var data = JSON.parse(canvas.getAttribute('data-values'));

    console.log('Labels:', labels); // Debugging: Check if labels are correct
    console.log('Data:', data);     // Debugging: Check if data is correct

    if (typeof Chart !== 'undefined') {
        var ctx = canvas.getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels, // Product names
                datasets: [{
                    label: 'Clicks Today',
                    data: data, // Click counts
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    } else {
        console.error('Chart.js is not loaded.');
    }
});
