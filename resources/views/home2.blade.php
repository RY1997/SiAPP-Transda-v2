@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Data Otsus Aceh</h6>
                    </div>
                    <div class="card-body">
                        <small class="">Tahun 2023</small>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped" role="progressbar"
                                style="width: 10%; background-color:rgba(255, 99, 132, 0.5)" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="">Tahun 2024</small>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped" role="progressbar"
                                style="width: 10%; background-color:rgba(255, 99, 132, 0.5)" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Data Otsus dan DTI Papua</h6>
                    </div>
                    <div class="card-body">
                        <small class="">Tahun 2023</small>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped" role="progressbar"
                                style="width: 10%; background-color:rgba(54, 162, 235, 0.5)" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="">Tahun 2024</small>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped" role="progressbar"
                                style="width: 10%; background-color:rgba(54, 162, 235, 0.5)" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Data Otsus dan DTI Papua Barat</h6>
                    </div>
                    <div class="card-body">
                        <small class="">Tahun 2023</small>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped" role="progressbar"
                                style="width: 10%; background-color:rgba(255, 206, 86, 0.5)" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="">Tahun 2024</small>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped" role="progressbar"
                                style="width: 10%; background-color:rgba(255, 206, 86, 0.5)" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- {{ session('jenis_tkd') }} -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Proporsi Dana Otsus dalam Pendapatan APBD</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="comboChart" style="max-height: 400px;"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection

@push('page_scripts')
    <script>
        // Fetch chart data from the server
        fetch('/combo-chart-data')
            .then(response => response.json())
            .then(data => {
                const labels = data.monApbdData.map(item => `${item.kode_pwk} - ${item.tahun}`);
                const totalAllSums = data.monApbdData.map(item => item.total_all_sums);
                const sumAlokasi = data.monAlokasiData.map(item => item.sum_alokasi);

                const ctx = document.getElementById('comboChart').getContext('2d');

                // Function to generate colors dynamically
                function generateColor(index) {
                    const colors = ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)'
                    ]; // Add more colors as needed
                    const colorIndex = Math.floor(index / 5) % colors.length; // Change color every 5 data rows
                    return colors[colorIndex];
                }

                // Function to create custom labels for each color group
                function createLabels() {
                    const labels = [];
                    for (let i = 0; i < labels.length; i += 5) {
                        labels.push(`Group ${i/5 + 1}`);
                    }
                    return labels;
                }

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                                label: 'Total Pendapatan APBD',
                                data: totalAllSums,
                                backgroundColor: totalAllSums.map((value, index) => generateColor(index))
                            },
                            {
                                label: 'Total Alokasi Dana OTSUS',
                                data: sumAlokasi,
                                borderColor: 'rgba(54, 162, 235, 1)',
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                type: 'line',
                                fill: false
                            }
                        ]
                    },
                    options: {
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 0,
                                bottom: 0
                            }
                        },
                        scales: {
                            yAxes: [{
                                type: 'linear',
                                position: 'left',
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Total Pendapatan APBD and Alokasi Dana OTSUS'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: true
                        },
                        legend: {
                            display: true,
                            position: 'bottom',
                            labels: {
                                generateLabels: function(chart) {
                                    return createLabels();
                                }
                            }
                        }
                    }
                });
            });
    </script>
@endpush
