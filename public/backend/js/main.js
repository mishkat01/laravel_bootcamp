 // Initialize all charts when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Line Chart
            const lineCtx = document.getElementById('lineChart').getContext('2d');
            new Chart(lineCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    datasets: [{
                        label: 'Revenue',
                        data: [6500, 5900, 8000, 8100, 5600, 5500, 7400],
                        borderColor: '#7e3af2',
                        backgroundColor: 'rgba(126, 58, 242, 0.1)',
                        tension: 0.3,
                        fill: true
                    }, {
                        label: 'Profit',
                        data: [4000, 4200, 4500, 5000, 4800, 4100, 6000],
                        borderColor: '#16bdca',
                        backgroundColor: 'rgba(22, 189, 202, 0.1)',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Pie Chart
            const pieCtx = document.getElementById('pieChart').getContext('2d');
            new Chart(pieCtx, {
                type: 'pie',
                data: {
                    labels: ['Direct', 'Organic', 'Referral', 'Social'],
                    datasets: [{
                        data: [35, 30, 20, 15],
                        backgroundColor: [
                            '#7e3af2',
                            '#16bdca',
                            '#ff5a1f',
                            '#faca15'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        }
                    }
                }
            });

            // Bar Chart
            const barCtx = document.getElementById('barChart').getContext('2d');
            new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: ['Electronics', 'Clothing', 'Home', 'Books', 'Sports'],
                    datasets: [{
                        label: 'Sales',
                        data: [65, 59, 80, 81, 56],
                        backgroundColor: [
                            'rgba(126, 58, 242, 0.7)',
                            'rgba(22, 189, 202, 0.7)',
                            'rgba(255, 90, 31, 0.7)',
                            'rgba(250, 202, 21, 0.7)',
                            'rgba(124, 58, 237, 0.7)'
                        ],
                        borderColor: [
                            'rgba(126, 58, 242, 1)',
                            'rgba(22, 189, 202, 1)',
                            'rgba(255, 90, 31, 1)',
                            'rgba(250, 202, 21, 1)',
                            'rgba(124, 58, 237, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Doughnut Chart
            const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
            new Chart(doughnutCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Desktop', 'Mobile', 'Tablet'],
                    datasets: [{
                        data: [60, 30, 10],
                        backgroundColor: [
                            '#7e3af2',
                            '#16bdca',
                            '#ff5a1f'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        }
                    },
                    cutout: '70%'
                }
            });
        });