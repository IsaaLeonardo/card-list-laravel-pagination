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
                align-items: center;
                gap: 10px;
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
                position: relative;
                background-color: rgb(60 134 94);
            }
            
            .travel-icon {
                position: relative;
                background-color: rgb(167 75 75);
            }

            .vertical-line {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 5px;
                height: 60%;
                background-color: #fff;
            }

            .horizontal-line {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 60%;
                height: 5px;
                background-color: #fff;
            }

            .transaction-amount {
                margin-left: auto;
                font-size: 25px;
                font-weight: bold;
            }

            .transaction-info-station {
                display: inline-block;
                padding: 5px;
                color: black;
                background-color: #ffff8b;
                border-radius: 10px;
                margin: 0;
            }

            .transaction-info-date {
                font-weight: bold;
                font-size: 20px;
                margin: 0;
                margin-block-end: 10px;
            }

            .green-text {
                color: rgb(60 134 94);
            }

            .red-text {
                color: rgb(167 75 75);
            }

            .shadow {
                box-shadow: 0 9px 10px -10px #00000082;
                -webkit-box-shadow: 0px 9px 10px -10px rgba(0,0,0,.51);
                -moz-box-shadow: 0px 9px 10px -10px rgba(0,0,0,.51);
                background-color: var(--blanco);
                padding: 4rem;
                border-radius: 1.2rem;
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
                <li class="transaction shadow">
                    <div class="transaction-icon">
                        @if ($card->recharge)
                            <div class="recharge-icon">
                                <div class="vertical-line"></div>
                                <div class="horizontal-line"></div>
                            </div>
                        @else
                            <div class="travel-icon">
                                <div class="horizontal-line"></div>
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
                        <p class="{{ $card->recharge ? 'green-text' : 'red-text' }}">
                            Bs. {{ $card->mount }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>

        {{ $cards->links() }}
    </body>
</html>
