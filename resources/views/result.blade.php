<!--extends('layouts.master');-->
section('content')
<html>
<table>
    <thead>
        <tr>
            <th>Titolo</th>
            <th>Visualizza</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notizie as $notizia)
        <tr>
            <td>{{$notizia->titolo}}</td>
            <td><div><a href="{{url(''.$notizia->id)}}">Vedi</a></div></td>
        @endforeach
    </tbody>
</table>
</html>
endsection