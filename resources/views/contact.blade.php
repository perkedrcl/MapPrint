@extends('layouts.layout')

@section('content')
<div id="contact-section">
    <div class="container">
        <!-- ./ Main Heading-->
        <div class="row main-low-margin">
            <div class="col-md-12  col-sm-12 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1414.978420258911!2d20.46211447610294!3d44.822443894748936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7ab5a25c4203%3A0xd29d594924ef78bf!2sSkenderbegova+20%2C+Beograd+11000!5e0!3m2!1ssr!2srs!4v1469661605499"
                width="1200" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                <h3>Naša lokacija :</h3>
                <hr />
                <p>
                    Skender Begova 20-22
                    <br /> Dorćol, Beograd
                    <br />

                    <b>Telefon:</b> 063-83-75-122 - Milan
                    <br />
                    <b>Email:</b> mapprintszr@gmail.com
                    <br />
                </p>
            </div>
        </div>
        <!-- ./ Row Content-->
        <div class="row ">
            <div class="col-md-12">
                <h5>
                    </h5>
            </div>
        </div>
    </div>
</div>
</form>
</div>
<div style="float:center;">
    <form method="post" action="sendEmail" class="pera">
        <label>Name:</label>
        <br />
        <input name="name" placeholder="Type Here">
        <br />
        <label>E-mail:</label>
        <br />
        <input name="mail" type="email" placeholder="Type Here">
        <br />
        <label>Message:</label>
        <br />
        <textarea name="msg" placeholder="Type Here"></textarea>
        <br/>
        <input id="submit" name="submit" type="submit" value="Submit">
    </form>
</div>
<h1>{{ isset($response2) ? $response2 : '' }}</h1>
@endsection
