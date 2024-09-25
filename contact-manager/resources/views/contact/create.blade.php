<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            float: left;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #007bff;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0069d9;
        }

        input[type="submit"]:active {
            background-color: #0056b3;
        }

        /* Add responsive design */
        @media (max-width: 500px) {
            form {
                padding: 15px;
                width: 90%;
            }

            input[type="submit"] {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>

    <h1>Add a New Contact</h1>
    <hr>

    <form action="/contact" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter contact name">

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" placeholder="Enter phone number">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter email address">

        <input type="submit" value="Add Contact">
    </form>

</body>

</html>
