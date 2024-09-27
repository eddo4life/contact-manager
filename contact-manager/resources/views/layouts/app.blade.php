<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager</title>
    <link rel="icon" href="icon.png" type="image/png">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
            margin: 0; 
        }

        main {
            flex: 1; /* Takes up available space */
        }

        footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 15px 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
            position: sticky; 
            bottom: 0; 
        }

        footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        footer li {
            display: inline;
            margin: 0 15px;
        }

        footer a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #388E3C; 
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <main>
        @yield('content')
    </main>
    <footer>
        <ul>
            <li>
                <a href="{{ backpack_url('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ backpack_url('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </footer>
    @yield('scripts')
</body>
</html>
