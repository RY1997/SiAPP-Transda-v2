@extends('layouts.app')

@section('content')
<div class="container-fluid py-3">
    <div class="row mb-5">
        <div class="d-md-flex align-items-center justify-content-between mb-2">
            <div class="mb-4 mb-md-0">
                <h4 class="fs-6 mb-0">Batas Pengisian : Minggu, 9 Juni 2024</h4>
            </div>
            <div class="d-flex align-items-center justify-content-between gap-6">
                <a href="https://docs.google.com/spreadsheets/d/1EzVca9mJbvz4fiXVV_w9KQDLZUIHd-jQzEwmCBguQqY/edit#gid=623477459" target="_blank" class="btn btn-success mt-2">
                    Hasil QA 
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="col-sm-12 row m-0 text-center">
            <div class="col-3 p-1">
                <div class="col-12 card p-0 mb-2 border border-primary">
                    <div class="card-body p-2 mb-0">
                        <h3 class="text-primary mb-0" id="days"></h3>
                    </div>
                    <div class="card-footer py-2 p-0 bg-primary">
                        <p class="mb-0 text-white">Hari</p>
                    </div>
                </div>
            </div>
            <div class="col-3 p-1">
                <div class="col-12 card p-0 mb-2 border border-primary">
                    <div class="card-body p-2 mb-0">
                        <h3 class="text-primary mb-0" id="hours"></h3>
                    </div>
                    <div class="card-footer py-2 p-0 bg-primary">
                        <p class="mb-0 text-white">Jam</p>
                    </div>
                </div>
            </div>
            <div class="col-3 p-1">
                <div class="col-12 card p-0 mb-2 border border-primary">
                    <div class="card-body p-2 mb-0">
                        <h3 class="text-primary mb-0" id="minutes"></h3>
                    </div>
                    <div class="card-footer py-2 p-0 bg-primary">
                        <p class="mb-0 text-white">Menit</p>
                    </div>
                </div>
            </div>
            <div class="col-3 p-1">
                <div class="col-12 card p-0 mb-2 border border-primary">
                    <div class="card-body p-2 mb-0">
                        <h3 class="text-primary mb-0" id="seconds"></h3>
                    </div>
                    <div class="card-footer py-2 p-0 bg-primary">
                        <p class="mb-0 text-white">Detik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">Data Otsus Aceh</h6>
                </div>
                <div class="card-body">
                    <small class="">Tahun 2023</small>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%; background-color:rgba(255, 99, 132, 0.5)" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="">Tahun 2024</small>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%; background-color:rgba(255, 99, 132, 0.5)" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%; background-color:rgba(54, 162, 235, 0.5)" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="">Tahun 2024</small>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%; background-color:rgba(54, 162, 235, 0.5)" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%; background-color:rgba(255, 206, 86, 0.5)" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="">Tahun 2024</small>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%; background-color:rgba(255, 206, 86, 0.5)" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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
@endsection

@push('page_scripts')
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jun 9, 2024 23:59:59").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
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