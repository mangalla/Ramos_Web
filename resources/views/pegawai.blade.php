<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pegawai - {{ $pegawai['employee_name'] }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .jumbotron {
            background-color: #0d6efd;
            color: white;
            padding: 4rem 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }
        .jumbotron h1 {
            font-size: 3.5rem;
            font-weight: 600;
        }
        .card {
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: none;
            border-radius: 0.75rem;
        }
        dt {
            font-weight: 600;
            color: #555;
        }
        dd {
            margin-left: 0;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-weight: 600;">My Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home </a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul><!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pegawai - {{ $pegawai['employee_name'] }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .jumbotron {
            background-color: #0d6efd;
            color: white;
            padding: 4rem 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }
        .jumbotron h1 {
            font-size: 3.5rem;
            font-weight: 600;
        }
        .card {
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: none;
            border-radius: 0.75rem;
        }
        dt {
            font-weight: 600;
            color: #555;
        }
        dd {
            margin-left: 0;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-weight: 600;">My Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <h1>{{ $pegawai['employee_name'] }}</h1>
        <p class="lead">Tanggal Bergabung: {{ $pegawai['join_date']->translatedFormat('d F Y') }}</p>
        <p>{{ $pegawai['career_goal'] }}</p>
    </header>

    <main class="container">
        <div class="row g-4">

            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header fw-bold">
                        Detail Profil Pegawai
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4">Posisi</dt>
                            <dd class="col-sm-8">{{ $pegawai['position'] }}</dd>

                            <dt class="col-sm-4">Usia</dt>
                            <dd class="col-sm-8">{{ $pegawai['age'] }} tahun</dd>

                            <dt class="col-sm-4">Lama Bekerja</dt>
                            <dd class="col-sm-8">{{ $pegawai['working_duration_formatted'] }}</dd>

                            <dt class="col-sm-4">Gaji Bulanan</dt>
                            <dd class="col-sm-8">Rp {{ number_format($pegawai['salary'], 0, ',', '.') }}</dd>

                            <dt class="col-sm-4">Keahlian</dt>
                            <dd class="col-sm-8">
                                @foreach ($pegawai['skills'] as $skill)
                                    <span class="badge bg-primary me-1">{{ $skill }}</span>
                                @endforeach
                            </dd>
                        </dl>

                        <div class="alert @if($pegawai['working_duration'] < 730) alert-info @else alert-success @endif mt-3">
                            {{ $pegawai['status_pegawai'] }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Alerts</div>
                    <div class="card-body">
                        <div class="alert alert-primary">Informational alert</div>
                        <div class="alert alert-success">Success alert</div>
                        <div class="alert alert-warning">Warning alert</div>
                        <div class="alert alert-danger mb-0">Danger alert</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header fw-bold">Buttons</div>
                    <div class="card-body">
                        <button class="btn btn-primary">Primary</button>
                        <button class="btn btn-secondary">Secondary</button>
                        <button class="btn btn-outline-success">Outline</button>
                        <button class="btn btn-success">Success</button>
                        <button class="btn btn-danger">Danger</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center text-muted py-4 mt-5 bg-white">
        <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <h1>{{ $pegawai['employee_name'] }}</h1>
        <p class="lead">Tanggal Bergabung: {{ $pegawai['join_date']->translatedFormat('d F Y') }}</p>
        <p>{{ $pegawai['career_goal'] }}</p>
    </header>

    <main class="container">
        <div class="row g-4">

            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header fw-bold">
                        Detail Profil Pegawai
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4">Posisi</dt>
                            <dd class="col-sm-8">{{ $pegawai['position'] }}</dd>

                            <dt class="col-sm-4">Usia</dt>
                            <dd class="col-sm-8">{{ $pegawai['age'] }} tahun</dd>

                            <dt class="col-sm-4">Lama Bekerja</dt>
                            <dd class="col-sm-8">{{ $pegawai['working_duration_formatted'] }}</dd>

                            <dt class="col-sm-4">Gaji Bulanan</dt>
                            <dd class="col-sm-8">Rp {{ number_format($pegawai['salary'], 0, ',', '.') }}</dd>

                            <dt class="col-sm-4">Keahlian</dt>
                            <dd class="col-sm-8">
                                @foreach ($pegawai['skills'] as $skill)
                                    <span class="badge bg-primary me-1">{{ $skill }}</span>
                                @endforeach
                            </dd>
                        </dl>

                        <div class="alert @if($pegawai['working_duration'] < 730) alert-info @else alert-success @endif mt-3">
                            {{ $pegawai['status_pegawai'] }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Alerts</div>
                    <div class="card-body">
                        <div class="alert alert-primary">Informational alert</div>
                        <div class="alert alert-success">Success alert</div>
                        <div class="alert alert-warning">Warning alert</div>
                        <div class="alert alert-danger mb-0">Danger alert</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header fw-bold">Buttons</div>
                    <div class="card-body">
                        <button class="btn btn-primary">Primary</button>
                        <button class="btn btn-secondary">Secondary</button>
                        <button class="btn btn-outline-success">Outline</button>
                        <button class="btn btn-success">Success</button>
                        <button class="btn btn-danger">Danger</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center text-muted py-4 mt-5 bg-white">
        <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
