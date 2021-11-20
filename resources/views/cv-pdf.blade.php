<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$cv->name}}</title>

    <style>
        body {
            font-family: Arial;
            font-size: 12pt;
        }
        div {
            margin-left: 10%;
        }
        h1 {
            font-size: 20pt;
        }
        h2 {
            font-weight: normal;
            font-size: 12pt;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div>
        <h1>{{$cv->name}}</h1>

        <p>Возраст: {{$cv->age}}</p>
        <p>Город: {{$cv->city}}</p>
        <p>Телефон: {{$cv->phone}}</p>
        <p>email: <a href="mailto:{{$cv->email}}">{{$cv->email}}</a></p>
        <p>telegram: <a href="{{$cv->tg}}">{{$cv->tg}}</a></p>
        <p>github: <a href="{{$cv->github}}">{{$cv->github}}</a></p>

        <br><br>

        <p>Цель: {{$cv->objective}}</p>

        <br><br>

        <p>Ключевые навыки: {{$cv->hardSkills}}</p>

        <br><br>

        <p>О себе: {{$cv->softSkills}}</p>

        <br><br>

        <p>Образование: {{$cv->education}}</p>

        <br><br>

        <p>Ps: {{$cv->ps}}</p>
    </div>
</body>
</html>
