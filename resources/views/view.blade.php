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
            width: 130px;
            background: #00fbd814;
        }

        .students-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 20px;
            font-size: 0.9em;
            margin: 20px auto;
            width: 1200px;
        }

        .student-box {
            padding: 20px;
            display: grid;
            border-radius: 2px;
            box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
        }

        .student-box div {
            margin: 6px 0px;
        }

        div span {
            font-weight: 700;
            margin-right: 6px;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-self: end;
        }



        .btn {
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
            height: max-content;

        }

        .update {
            color: #252424;
            background: #69d9fb;
            font-family: inherit;
        }

        .remove {
            background: crimson;
            color: #fff;

        }

        .update:focus {
            background: #54bada;
        }

        .remove:focus {
            background: #c41131;
        }

        /* .address{
        min-height:65px;
    }
    .mail{  
        min-height: 40px;

    } */

    </style>
</head>

<body>
    <a class="link" href="{{ route('Create') }}">Add Student</a>
    @if ($datas)

        <div class="students-container">
            @foreach ($datas as $data)
                <div class="student-box">
                    <div class="name"><span>Name : </span>{{ $data->name }}</div>
                    <div class="age"><span>Age : </span>{{ $data->age }}</div>
                    <div class="address"><span>Address : </span>{{ $data->address }}</div>
                    @if ($data->mail)
                        <div class="mail"><span>Mail : </span>{{ $data->mail }}</div>
                    @endif
                    <div class="options">
                        <a class="f-1 btn  update" href="/change/{{ $data->id }}">Update</a>
                        <a class="f-1 btn  remove" href="/delete/{{ $data->id }}">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

</body>

</html>
