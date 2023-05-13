<!--extends('layouts.master');-->
section('content')
<html>
<form type="get" action="{{url('/result')}}">
    <input name="query" type="search" placeholde="Notizia da cercare" />
    <button type="submit">Cerca</button>
</form>
</html>
endsection