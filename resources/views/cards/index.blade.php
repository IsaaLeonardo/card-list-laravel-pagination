<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cards List Pagination</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        @foreach ($cards as $card)
            <div>
                <h2>{{ $card->station }}</h2>
            </div>
        @endforeach

        {{ $cards->links() }}
    </body>
</html>
