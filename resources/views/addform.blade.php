<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Add student</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins';
            margin: 0;
        }

        .link {
            margin: 20px;
            display: block;
            text-align: center;
            text-decoration: none;
            font-size: 1em;
            font-weight: 600;
            margin-top: 15px;
            padding: 7px 10px;
            border-radius: 2px;
            box-shadow: rgb(0 0 0 / 12%) 0px 1px 3px, rgb(0 0 0 / 24%) 0px 1px 2px;
            transition: all 0.35s ease-in-out;
            letter-spacing: 0.7px;
            width: max-content;
            background: #00fbd814;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .students-container{
            box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
    padding: 20px 40px;
    border-radius: 3px;
    margin-top: -120px;
        }

        .in-box {
            color: black;
            font-family: inherit;
            display: block;
            margin-bottom: 10px;
            width: 250px;
            padding: 6px 10px;
            border: 1px solid #4e4ec7;
            border-radius: 3px;
            font-size: 0.9em;
            outline: none;
        }

        .in-tarea {
            color: black;
            font-family: inherit;
            display: block;
            margin-bottom: 10px;
            width: 250px;
            padding: 6px 10px;
            border: 1px solid #4e4ec7;
            border-radius: 3px;
            font-size: 0.9em;
            resize: vertical;
            min-height: 120px;
            max-height: 250px;
            outline: none;
        }

        .in-box:focus {
            border: 1px solid #c699f1;
        }

        .in-btn {
            display: block;
            text-align: end;
            text-decoration: none;
            font-size: 1em;
            font-weight: 600;
            margin-top: 15px;
            padding: 7px 10px;
            border-radius: 2px;
            box-shadow: rgb(0 0 0 / 12%) 0px 1px 3px, rgb(0 0 0 / 24%) 0px 1px 2px;
            transition: all 0.35s ease-in-out;

            letter-spacing: 0.7px;
            border: none;
            background: #4ae472;
            color: #000;
        }

        .alert {
            color: crimson;
            list-style: none;
            position: absolute;
            top: 0;
            right: 0;
            background: #fff;
            border-radius: 2px;
            box-shadow: rgb(0 0 0 / 12%) 0px 1px 3px, rgb(0 0 0 / 24%) 0px 1px 2px;
        }

        .alert h1 {
            margin: 0;
            text-align: center;
            font-size: 1.1em;
            font-weight: 700;
        }

        h1 {
            font-size: 1.3em;
        }

    </style>
</head>

<body>
    <a class="link" href="{{ route('Read') }}">View Students</a>
    <div class="container">
        <div class="students-container">
        <form action="/add" method="POST">
            @csrf
            <h1>Add New Student Details</h1>

            <input class="in-box" type="text" name="name" placeholder="Name" autocomplete="off">
            <input class="in-box" type="number" name="age" placeholder="Age">
            <textarea class="in-tarea" name="address" placeholder="Address"></textarea>
            <input class="in-box" type="email" name="mail" placeholder="Mail">
            <input class="in-btn" type="submit" value="Add">

        </form>

    </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <h1>Form Error</h1>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>

</html>
