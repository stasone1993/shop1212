@extends('layouts.admin')
@section('content')
@include('common.errors')
  <!-- Bootstrap шаблон... -->
  <div class="panel-body">
    <form action="/admin/product" method="POST" class="form-horizontal">
      {{ csrf_field() }}
      <!-- Имя задачи -->
      <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Name</label>

        <div class="col-sm-6">
          <input type="text" name="name" class="form-control" id="name">
        </div>
      </div>
      <div class="form-group">
        <label for="description" class="col-sm-3 control-label">Description</label>

        <div class="col-sm-6">
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
      </div>
      <!-- Кнопка добавления задачи -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> Create product
          </button>
        </div>
      </div>
    </form>
  </div>
@endsection