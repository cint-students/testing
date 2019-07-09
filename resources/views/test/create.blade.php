@extends('layouts.app')
@section('content')
<style>
    .textarea{
        width: 40%; resize: none;
    }
    #description{
        height: 100px;
    }
    #testcode{
        height: 200px;
    }
</style>
<h1 style="text-align:center;">Добавление теста</h1>
<form method="Post" action="{{route('tests.store')}}" style="margin-left: 50px;">
    {{ csrf_field() }}
    <label for="testcode">Testcode:</label><br>
    <textarea name="testcode" id="testcode" class="textarea"></textarea><br>
    <label for="descriptin">Description:</label><br>
    <textarea name="descriptin" id="descriptin" class="textarea"></textarea>
    <p>
        <input type="submit" value="Добавить" />
    </p>
</form>
@endsection