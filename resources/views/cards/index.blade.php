<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cards List Pagination</title>
    </head>
    <body>
        <h1>Historial de Transacciones</h1>

        <div class="remaining-total">
            <p>Total Restante</p>
            <p class="amount"> Bs. 100</p>
        </div>

        <ul class="transactions-list">
            @foreach ($cards as $card)
                <li class="transaction">
                    <div class="transaction-icon">
                        @if ($card->recharge)
                            <p>recarga</p>
                        @else
                            <p>viaje</p>
                        @endif
                    </div>

                    <div class="transaction-info">
                        <p class="transaction-info-date">{{ $card->date }}</p>
                        <p class="transaction-info-station">
                            @if ($card->station)
                                {{ $card->station }}
                            @else
                                En línea
                            @endif
                        </p>
                    </div>

                    <div class="transaction-amount">
                        <p>Bs. {{ $card->mount }}</p>
                    </div>
                </li>
            @endforeach
        </ul>

        {{ $cards->links() }}
    </body>
</html>
