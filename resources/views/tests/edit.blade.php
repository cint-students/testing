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
<form method="PUT" action="{{TestController@update, $test->id}}" style="margin-left: 50px;">
    {{ csrf_field() }}
    <label for="test">Test:</label><br>
    <textarea name="test" id="test" class="textarea">{{$test->test}}</textarea><br>
    <label for="descriptin">Description:</label><br>
    <textarea name="description" id="description" class="textarea">{{$test->description}}</textarea>
    <p>
        <input type="submit" value="Добавить" class='btn btn-primary'>
    </p>
</form>
@endsection
