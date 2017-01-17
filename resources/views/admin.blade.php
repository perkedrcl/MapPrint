@extends('layouts.adminlayout')

@section('content')
<div style="padding-top: 150px">
    <form name="form1" id="peki_txt1" method="post" action="saveNews">
    <table width="50%" border="0" cellspacing="0" cellpadding="0">     
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Naslov:</td>
            <td>
                <input name="headline" type="text" id="headline">
            </td>
        </tr>
        <tr>
            <td>Vest:</td>
            <td>
                <textarea name="story" id="story"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div align="center">
                    <input name="hiddenField" type="hidden" value="add_n">
                    <input name="add" type="submit" id="add" value="Submit">
                </div>
            </td>
        </tr>
    </table>
</form> 
    <button onclick="javascript:showDiv1();">Nova vest</button>
</div>
<div style="padding-top: 150px">
    <form id="peki_txt" action="sendEmail" method="post" >
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
        <input type="button1" value="add" name="add">
    </form>    
    <button onclick="javascript:showDiv();">promocija</button>
</div>
<div style="padding-top: 150px">
    <form action="read" method="post"> 
        <button >prijavljeni</button>
    </form>
</div>
@endsection


