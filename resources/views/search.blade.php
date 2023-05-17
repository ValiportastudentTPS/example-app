<!--extends('layouts.master');-->
section('content')
<html>
<form type="get" action="{{url('/result')}}">
    <input name="testo" type="search" placeholde="Notizia da cercare" />
    <label for="categoria">Scegli una categoria:</label>
    <select name="categoria" id="categoria">
        <option value="tutte">Tutte</option>
        <option value="cronaca">Cronaca</option>
        <option value="cultura">Cultura</option>
        <option value="economia">Economia</option>
        <option value="esteri">Esteri</option>
        <option value="politica">Politica</option>
        <option value="Spettacolo">Spettacolo</option>
        <option value="saluta">Salute</option>
        <option value="scuola">Scuola</option>
        <option value="sport">Sport</option>
        <option value="scienze">Scienze</option>
    </select>
    <label for="formato">Scegli un formato:</label>
    <select name="formato" id="formato">
        <option value="tutte">Tutti</option>
        <option value="testo">Testo</option>
        <option value="immagine">Immagine</option>
        <option value="audio">Audio</option>
        <option value="video">Video</option>
    </select>
    <button type="submit">Cerca</button>
</form>
</html>
endsection