@extends('layouts/admin/adminmain')
@section('content')
@section('title','Dashboard')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Dashboard</h2>
          <ol>
            <li>Admin</li>
            <li>Dashboard</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body" >
                    <h5 class="card-title text-primary font-weight-bold" >Home</h5>
                    <p class="card-text">Total data : 3.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary font-weight-bold">Profile</h5>
                    <p class="card-text">Total data : 4.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary font-weight-bold">Contact</h5>
                    <p class="card-text">Total data : 5.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary font-weight-bold">Footer</h5>
                    <p class="card-text">Total data : 6.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary font-weight-bold">User</h5>
                    <p class="card-text">Total data : 3.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary font-weight-bold">Total Pengunjung</h5>
                    <p class="card-text">12345.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h5>Action History</h5>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                    <th>User</th>
                    <th>Aksi</th>
                    <th>Timestamp</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Tammy</td>
                        <td>Menambahkan footer item</td>
                        <td>05 April 2024 09:22</td>
                    </tr>
                    <tr>
                        <td>Tammy</td>
                        <td>Menambahkan footer item</td>
                        <td>05 April 2024 09:15</td>
                    </tr>
                    <tr>
                        <td>Jane Doe</td>
                        <td>Menghapus data contact</td>
                        <td>04 April 2024 08:09</td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

    <div class="row">
        <h5>Chart Pengunjung</h5>
    </div>
    <div class="row">
    <canvas id="visitorChart" width="800" height="400"></canvas>
    </div>

</div>
</section>
@endsection
    
@section('script')
// Data jumlah pengunjung per bulan
        const visitorData = {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
                label: 'Jumlah Pengunjung per Bulan',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                data: [56, 87, 24, 69, 42, 78, 33, 91, 15, 72, 38, 63]
            }]
        };

        // Konfigurasi Chart
        const chartConfig = {
            type: 'line',
            data: visitorData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        };

        // Inisialisasi Chart
        const ctx = document.getElementById('visitorChart').getContext('2d');
        const myChart = new Chart(ctx, chartConfig);
@endsection

