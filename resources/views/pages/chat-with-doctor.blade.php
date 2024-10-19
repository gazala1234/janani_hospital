@extends('layouts.app')

@section('page-heading')
Chat With Doctor
@endsection

<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

@section('page-content')
<div class="container">
    <center>
        <p id="chatLog">

        </p>
    </center>

    <center>
        <input class="form-control" id="userBox" type="text" placeholder="Type a message......" autofocus
            onkeydown="if(event.keyCode==13) {talk()}">
    </center>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
<script>
    know =
{
    "Hi": "Hello",
    "Who are you": "I am gazala",
    "How are you": "I am fine",
    "How old are you": "i am 22 years of old",
    "I need your help": "How may i help you ?",
    "Why this chatbot is": "To enable communication between machine and user",
    "In this website where is payment option": "you can click on top right three dots and find",
    "Your designation": "Software developer",

};

function talk() {
    var user = document.getElementById("userBox").value;
    document.getElementById("userBox").value = "";
    document.getElementById("chatLog").innerHTML += user + "<br>";

    if (user in know) {
        document.getElementById("chatLog").innerHTML += know[user] + "<br>";
    }
    else {
        document.getElementById("chatLog").innerHTML += "I don't understand....<br>";
    }
}
</script>

@endsection