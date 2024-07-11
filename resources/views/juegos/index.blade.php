<x-app-layout>
    <table class="table text-left">
        <thead>
            <tr>
                <th>ID</th>
                <th>Juego</th>
                <th>Cantidad de jugadores</th>
                <th>Fecha</th>
                <th>Monto</th>
            <tr>
        </thead>
        <tbody>
            @foreach ($apuestas as $apuesta)
                <tr>
                    <td>{{ $apuesta->id }}</td>
                    <td>{{ $apuesta->juego?->nombre }}</td>
                    <td>{{ $apuesta->juego?->cantidad_jugadores }}</td>
                    <td>{{ $apuesta->fecha }}</td>
                    <td>{{ $apuesta->monto }}</td>
                </tr>
            @endforeach
    </table>
    <span>
        <h2>Apuestas en juegos de +3 jugadores</h2>
        <h3>{{ $apuestasDe3 }}</h3>
    </span>
</x-app-layout>
