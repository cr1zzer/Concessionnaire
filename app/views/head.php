<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) : 'AutoFictif' ?></title>
    <link rel="icon" type="image/png" href="/Concessionnaire/public/css/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/Concessionnaire/public/css/style.css" rel="stylesheet">
    <style>
        body {
            background: #f5f5f5;
            color: #222;
        }
        .navbar, footer, .bg-dark {
            background: #191919 !important;
        }
        .navbar .navbar-brand, .navbar-nav .nav-link, footer {
            color: #fff !important;
        }
        .btn-danger, .bg-danger {
            background-color: #d1001f !important;
            border-color: #d1001f !important;
        }
        .btn-outline-danger {
            color: #d1001f !important;
            border-color: #d1001f !important;
        }
        .btn-outline-danger:hover {
            background-color: #d1001f !important;
            color: #fff !important;
        }
        .card-title {
            color: #d1001f;
        }
        .badge.bg-success {
            background: #198754 !important;
        }
        .badge.bg-info {
            background: #fff !important;
            color: #191919 !important;
            border: 1px solid #d1001f;
        }
    </style>
</head>