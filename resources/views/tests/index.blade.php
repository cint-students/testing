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
          <th></th>
          <th></th>
          <th></th>
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
                <div>{{ $item['date']->format('d.m.Y') }}</div>
              </td>
              <td class="table-text">
                <div>
                  {{ $item['name'] }}
                </div>
              </td>
              <td class="table-text">
                <div>{{ $item['distance'] }}</div>
              </td>
              <td class="table-text">
                <a href="{{ route('tests.show', ['id' =>$item->id]) }}" class="btn btn-info"><i class="fa fa-list"></i></a>
                <a href="{{ route('tests.edit', ['id' =>$item->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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
