<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- For more projects: Visit codeastro.com -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fast Foods Drive Thru System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            background: url('D:\STL Data\Downloads\SAMA DRIVE THRU.jpeg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            color: #fff;
        }

        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .content {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5); /* Adds a semi-transparent overlay for text readability */
            padding: 20px;
            border-radius: 10px;
        }

        .title {
            font-size: 84px;
            margin: 0;
        }

        .links > a {
            color: #fff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .links > a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<!-- For more projects: Visit codeastro.com -->
<body>
    <div class="flex-center">
        <div class="content">
            <div class="title">
                Fast Foods Drive-Thru
            </div>
            <div class="links">
                <a href="Restro/admin/">Admin Log In</a>
                <a href="Restro/cashier/">Cashier Log In</a>
                <a href="Restro/customer">Customer Log In</a>
            </div>
        </div>
    </div>
</body>
<!-- For more projects: Visit codeastro.com -->
</html>
