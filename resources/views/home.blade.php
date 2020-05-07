<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{URL::asset('src/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div class="flex-center" id='home'>
        <nav>
            <ul class="ulM">
                <li>Inicio</li>
                <li>Downloads</li>
                <li>Ranking</li>
                <li>Items</li>
            </ul>
        </nav>
        <a href="{{route('logout')}}" class="logout">Logout</a>
        <h1>{{$user->id}}</h1>

        <div class="online">
            <table>
                <thead>
                    <tr>
                        <th>Online</th>
                    </tr>
                </thead>
                <tbody id="style-8">

                    <tr>
                        <td><img src="{{URL::asset('src/person.png')}}"> Murilo gay</td>
                    </tr>
                    <tr>
                        <td><img src="{{URL::asset('src/person.png')}}"> Murilo gay</td>
                    </tr>
                    <tr>
                        <td><img src="{{URL::asset('src/person.png')}}"> Murilo gay</td>
                    </tr>
                    <tr>
                        <td><img src="{{URL::asset('src/person.png')}}"> Murilo gay</td>
                    </tr>
                    <tr>
                        <td><img src="{{URL::asset('src/person.png')}}"> aaaaaaaaaaaaaaaa</td>
                    </tr>
                    <tr>
                        <td><img src="{{URL::asset('src/person.png')}}"> Caio buceta</td>
                    </tr>
                    <tr>
                        <td><img src="{{URL::asset('src/person.png')}}"> LilPombo pinto</td>
                    </tr>
                    <tr>
                        <td><img src="{{URL::asset('src/person.png')}}"> Leo viadinho</td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>
</body>
<script src="{{URL::asset('src/script.js')}}"></script>

</html>