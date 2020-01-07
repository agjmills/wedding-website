<html>
<head>
    <title>Place Cards</title>

    <link href="{{ $_SERVER['DOCUMENT_ROOT'] }}/css/pdf.css" rel="stylesheet">
    <style>
        @page {
            margin: 0in;
        }

        body {
            background-color: #FFF;
            padding: .15in;
            font-family: "Allura", cursive;
            margin: 0px;
            color: #000;
            font-size: 30px;
            line-height: 22px;
        }

        h1 {
            font-family: "Allura", cursive;
            font-size: 40px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
@foreach($choices as $choice)

    <div
        style="background-color: {{ $loop->iteration %2 === 0 ? 'white' : 'white' }}; width: 49%; text-align: center; height: 49%; position: relative; float: left">
        <div style="position: absolute; top: 20px; transform: rotate(180deg); padding-right: 10px;">
            <p>
                {{ $choice->starter->name }}
            </p>
            <p>
                {{ $choice->main_course->name }}
            </p>
            <p>
                @if ($choice->dessert)
                    {{ $choice->dessert->name }}
                @endif
            </p>
            </p>
        </div>
        <div style="position: absolute; top: 300px; padding: 3px;">
            <h1>{{ $choice->name }}</h1>
            <img src="{{ $_SERVER['DOCUMENT_ROOT'] }}/img/hearts.png" width="100%">
        </div>
    </div>
    @if ($loop->iteration % 2 === 0)
        <div style="clear: both; height: 5px"></div>
    @else
        <div style="width: 2%; float: left;"></div>
    @endif
@endforeach
</body>
</html>
