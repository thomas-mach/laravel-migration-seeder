<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            @foreach ($trains as $train)

            <div class="col-md-4">
                <div class="card custom_card">

                    <ul>
                        <li><strong>Azienda:</strong> {{$train->azienda}}</li>
                        <li><strong>Stazione di partenza:</strong> {{$train->stazione_di_partenza}}</li>
                        <li><strong>Stazione di arrivo:</strong> {{$train->stazione_di_arrivo}}</li>
                        <li><strong>Partenza:</strong>
                            <ul>
                                <li>Giorno >>> <strong>{{$train->date}}</strong> </li>
                                <li>Ore >>> <strong>{{$train->orario_di_partenza}}</strong></li>
                            </ul>
                        </li>
                        <li><strong>Arrivo:</strong>
                            <ul>
                                <li>Giorno >>> <strong>{{$train->data_arrivo}}</strong> </li>
                                <li>Ore >>> <strong>{{$train->orario_di_arrivo}}</strong></li>
                            </ul>
                        </li>
                        <li><strong>Codice treno:</strong> {{$train->codice_treno}}</li>
                        <li><strong>Num carozze:</strong> {{$train->numero_carrozze}}</li>
                        <li><strong>In orrario</strong> {{$train->in_orario == 1 ? 'SI' : 'RITARDO'}}</li>
                        <li><strong>Cancellato</strong> {{$train->cancellato == 0 ? 'NO' : 'CANCELLATO'}}</li>
                    </ul>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</body>

</html>