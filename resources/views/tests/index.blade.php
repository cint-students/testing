@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
  <!-- Список ошибок формы -->
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


@if(Session::has('message'))
    <div class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</div>
@endif


<div class="d-flex flex-row justify-content-center">
    <div class="p-2">
        <a class="btn btn-outline-primary" href="{{route('tests.create')}}" >Добавить запись</a>
    </div>
</div>

@if (count($tests) > 0)
  <div class="panel panel-default">

    <div class="panel-body">
      <table class="table table-hover">

        <!-- Заголовок таблицы -->
        <thead>
          <th>id</th>
          <th>test</th>
          <th>description</th>
          <th>created at</th>
          <th>updated at</th>
          <th></th>
        </thead>

        <!-- Тело таблицы -->
        <tbody id="searchTable">
          <tr>
            <td colspan=""></td>
          </tr>
          @foreach ($tests as $item)
            <tr>
              <td class="table-text">
                <div>{{ $item->id }}</div>
              </td>
              <td class="table-text">
                <div>
                {{ $item->test }}
                </div>
              </td>
              <td class="table-text">
                <div>
                {{ $item->description }}
                </div>
              </td>
              <td class="table-text">
                <div>
                {{ $item->created_at}}
                </div>
              </td>
              <td class="table-text">
                <div>{{ $item->updated_at }}</div>
              </td>
              <td class="table-text">
                <a href="{{ route('tests.edit', ['id' =>$item->id]) }}" class="btn btn-info">edit</a>
                <a href="{{ route('tests.index', ['id' =>$item->id]) }}" class="btn btn-info">delete</a>
              </td>

            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>
 @else
  <div class="row">
    <div class="col text-center alert alert-warning">
        Пока в системе нет ни одного теста
    </div>
</div>
 @endif
@endsection
