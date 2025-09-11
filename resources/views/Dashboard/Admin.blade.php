<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }
        .sidebar {
            min-height: 100vh;
            background: #1e293b; 
            color: #fff;
            transition: all 0.3s ease;
        }
        .sidebar a {
            color: #cbd5e1;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            transition: 0.3s;
        }
        .sidebar a:hover,
        .sidebar a.active {
            background: #0f172a;
            color: #fff;
            border-left: 4px solid #3b82f6;
        }
        .sidebar .brand {
            font-size: 1.3rem;
            font-weight: bold;
            padding: 20px;
            background: #0f172a;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        {{-- Sidebar --}}
        <div class="col-md-3 col-lg-2 sidebar d-flex flex-column p-0">
            <div class="brand">🛠️ Dashboard</div>
            <a href="{{ url('/Opinions') }}" class="active">🏠 Opinions</a>
            <a href="{{ url('/AddServices') }}">🛎️ Add Services</a>
            <a href="{{ url('/Appointments') }}">📅 Appointments</a>

            
            <a href="{{ url('/Addvideo&photo') }}">📸 Photos & 🎬 Videos</a>
            

            {{-- Customers Section --}}
            <a href="{{ url('/customers') }}">👥 Customers</a>

            <a href="{{ url('/Users') }}">👤 Users</a>
            <a href="{{ url('/settings') }}">⚙️ Settings</a>
        </div>

        {{-- Content --}}
        <div class="col-md-9 col-lg-10 content">
            @yield('content')
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>