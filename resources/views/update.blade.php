<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>{{ $title }}</title>
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
    @if ($datas)
        <div class="container">
            <div class="students-container">
                @foreach ($datas as $data)
                    <form action="/change/{{ $data->id }}" method="POST">
                        @csrf
                        <h1>Update Student Details</h1>
                        <input type="text" class="in-box" name="name" placeholder="enter your name"
                            value="{{ $data->name }}">
                        <input type="number" class="in-box" name="age" placeholder="enter your age"
                            value="{{ $data->age }}">
                        <textarea name="address" class="in-tarea"
                            placeholder="enter your address"> {{ $data->address }}</textarea>
                        <input type="email" class="in-box" name="mail" placeholder="enter your mail"
                            value="{{ $data->mail }}">
                        <input type="submit" class="in-btn" value="update">
                    </form>
                @endforeach
            </div>
        </div>
    @endif


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
</body>

</html>
