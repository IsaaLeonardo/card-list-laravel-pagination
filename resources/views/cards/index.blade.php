<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cards List Pagination</title>

        <style>
            ul.transactions-list {
                list-style: none;
                padding: 0;
                max-width: 500px;
                margin: 0 auto;
            }

            li.transaction {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid;
                border-radius: 25px;
            }

            .transaction-icon > * {
                width: 70px;
                height: 70px;
                border-radius: 50%;
            }

            .recharge-icon {
                background-color: rgb(60 134 94);
            }
            
            .travel-icon {
                background-color: rgb(167 75 75);
            }
        </style>
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
                            <div class="recharge-icon">

                            </div>
                        @else
                            <div class="travel-icon">

                            </div>
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
