@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-sm-offset-2 col-sm-8">
    <div class="panel panel-default">
      <!--<div class="panel-heading">
        New Task
      </div>
      -->
      <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
        <!-- New Task Form -->
        <form action="{{ url('task')}}" method="POST" class="form-horizontal">
          {{ csrf_field() }}

          <!-- Task Name -->
          <div class="form-group">
	  <div class="row">
            <label for="task-name" class="col-sm-3 control-label">Task</label>

            <div class="col-sm-6">
              <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
            </div>
	    </div>
            <label for="Champ-nom" class="col-sm-3 control-label">Nom</label>
            <div class="col-sm-6">
              <input type="text" name="Nom" id="Champ-nom" class="form-control"/>
            </div>
          </div>

          <!-- Add Task Button -->
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
              <button type="submit" class="btn btn-default">
                <i class="fa fa-btn fa-plus"></i>Add Task
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="gestionnaireCompte" class="panel panel-default">
      <div class="panel-heading">
      </div>

      <div class="panel-body">
	<div class="form-group">
	  <label for="identifiant" class="col-sm-3 control-label">Identifiant</label>
	  <div class="col-sm-6">
	    <input type="text" name="identifiant" id="identifiant">
	  </div>

	  <br/><br/>
	  <label for="motDePasse" class="col-sm-3 control-label">Mot de passe</label>
	  <div class="col-sm-6">
	    <input type="password" name="motDePasse" id="motDePasse">
	  </div>
	</div>
      </div>
    </div>

    <!-- Current Tasks -->
    @if (count($tasks) > 0)
    <div class="panel panel-default">
      <div class="panel-heading">
        Current Tasks
      </div>

      <div class="panel-body">
        <table class="table table-striped task-table">
          <thead>
            <th>Task</th>
            <th>&nbsp;</th>
          </thead>
          <tbody>
            @foreach ($tasks as $task)
            <tr>
              <td class="table-text"><div>{{ $task->name }}</div></td>

              <!-- Task Delete Button -->
              <td>
                <form action="{{ url('task/'.$task->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}

                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-btn fa-trash"></i>Delete
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    @endif
  </div>
</div>
@endsection
