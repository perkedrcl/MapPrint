@extends('layouts.adminlayout')

@section('content')
<div style="padding-top: 150px">
    <input type="button" value="nova vest" />
</div>
<div style="padding-top: 150px">
    <form class="peki_txt" action="sendEmail" method="post">
        NASLOV:
        <br>
        <input type="text" name="subject">
        <br>
        TEKST PORUKE:
        <br>
        <input type="text" name="text">
        <br>
        <br>
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
    </form>
    <input type="button" value="promocija" id="peki"/>
</div>
<div style="padding-top: 150px">
    <input type="button" value="prijave" action="read" method="post"/>
</div>
@endsection


