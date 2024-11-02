<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games-lib</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            padding: 20px;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            color: #4a90e2;
            margin-bottom: 20px;
        }

        .game {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #eaeaea;
            transition: background-color 0.3s;
        }

        .game:hover {
            background-color: #f9f9f9;
        }

        .game:last-child {
            border-bottom: none;
        }

        .game img {
            border-radius: 8px;
            max-width: 200px;
            height: auto;
            margin-right: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .game-details {
            flex-grow: 1;
        }

        .game-details h2 {
            font-size: 1.5em;
            margin: 0;
            color: #333;
        }

        .game-details p {
            font-size: 1.1em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Games Library</h1>
        @foreach($games as $game)
        <div class="game">
            @if ($game->image)
            <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->name }}">
            @endif
            <div class="game-details">
                <h2>{{$game->name}}</h2>
                <p>Genre: {{ $game->genre }}</p>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>
