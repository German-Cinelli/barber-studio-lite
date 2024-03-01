<div class="c-chart-wrapper">
    <canvas id="canvas-type-of-appointments-chart" style="display: block; box-sizing: border-box; height: 568.889px; width: 568.889px;" width="512" height="512"></canvas>

    @push('js')
        <script src="{{ asset('coreui/vendors/chart.js/js/chart.min.js') }}"></script>

        <script>
            const doughnutChart = new Chart(document.getElementById('canvas-type-of-appointments-chart'), {
                type: 'doughnut',
                data: {
                    labels: [
                        'Flash',
                        'Local',
                        'Web'
                    ],
                    datasets: [{
                        data: [
                            {{ $flashAppointmentsCount }},
                            {{ $localAppointmentsCount }},
                            {{ $webAppointmentsCount }}
                        ],
                        backgroundColor: ['#321fdb', '#39f', '#e55353'],
                        hoverBackgroundColor: ['#321fdb', '#39f', '#e55353']
                    }]
                },
                options: {
                    responsive: true
                }
            });
        </script>
    @endpush

</div>

