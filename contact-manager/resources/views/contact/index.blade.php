<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .contact-list {
            width: 80%;
            max-width: 600px;
            max-height: 60vh;
            /* Max height to allow scrolling */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            overflow-y: auto;
            /* Scrollable content */
            margin: 0 auto;
            background-color: white;
        }

        .contact-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .profile-picture {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.25rem;
            color: #666;
            margin-right: 15px;
        }

        .contact-info {
            flex: 1;
        }

        .contact-info h3 {
            margin: 0;
            font-size: 1rem;
            color: #333;
        }

        .contact-info p {
            margin: 3px 0;
            color: #777;
            font-size: 0.875rem;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .add-contact {
            position: fixed;
            bottom: 20px;
            right: 100px;
            background-color: #28a745;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .add-contact h2 {
            margin: 0;
            font-size: 2rem;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Contact List ({{ count($contacts) }})</h1>
    <hr>
    <div class="contact-list">
        @foreach ($contacts as $contact)
            <div class="contact-card">
                <div class="profile-picture">
                    {{ strtoupper(substr($contact['name'], 0, 1)) }}
                </div>
                <div class="contact-info">
                    <h3>{{ $contact['name'] }}</h3>
                    <p>{{ $contact['email'] }}</p>
                    <p>{{ $contact['number'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <hr>
    <p class="mssge">{{ session('message') }}</p>
    <div class="add-contact">
        <a href="/contact/create">
            <h2>+</h2>
        </a>
    </div>

</body>

</html>
