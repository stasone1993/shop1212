@extends('layouts.admin')
@section('content')
@include('common.errors')
@if (count($products) > 0)
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-striped task-table">

            <!--Заголовок таблицы--> 
            <thead>
                <th>Заголовок</th>
                <th>Дата создания</th>
                <th>Дата изменения</th>
                <th>Действие</th>
            </thead>

            <!--Тело таблицы--> 
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <!--Имя задачи--> 
                    <td class="table-text col-sm-4">
                        <div>{{ $item->name }}</div>
                    </td>
                    <td class="table-text col-sm-3">
                        <div>{{ $item->created_at }}</div>
                    </td>
                    <td class="table-text col-sm-3">
                        <div>{{ $item->updated_at }}</div>
                    </td>
                    <td>
                        <form action="/admin/product/{{ $item->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection