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
            
            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
           
          </div>

          <!-- Add Task Button -->
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
              <button type="submit" class="btn btn-default">
                <i class="fa fa-btn fa-plus">Add Task</i>
              </button>
            </div>
          </div>
        </form>


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





     @if (count($comptes) > 0)
    <div class="panel panel-default">
      <div class="panel-heading">
        Comptes enregistres
      </div>

      <div class="panel-body">
        <table class="table table-striped task-table">
          <thead>
            <th>Compte</th>
            <th>&nbsp;</th>
          </thead>
          @foreach ($comptes as $compte)
          <tbody>
	    <tr>
	      <td class="table-text"><div>Mail</div></td>
	      <td class="table-text"><div>{{ $compte->mail }}</div></td>

	      <!-- Task Delete Button -->
	      <td>
	      </td>
	    </tr>
	    <tr>
	      <form action="{{ url('compte/'.$compte->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
		
                <button type="submit" class="btn btn-danger">
                  <i class="fa fa-btn fa-trash">Supprimer</i>
                </button>
              </form>
	    </tr>
          </tbody>

            @endforeach

        </table>
      </div>
    </div>
    @endif






    <div class="gestionnaireCompte" class="panel panel-default">
      <div class="panel-heading">
      </div>

      <div class="panel-body">

	<form action="{{ url('compte')}}" method="POST" class="form-horizontal">
	  <div class="form-group">
	    <div class="row">
	      <label for="mail" class="col-sm-3 control-label">Adresse Mail</label>
	      <div class="col-sm-6">
		<input type="mail" name="mail" id="mail">
	      </div>
	    </div>

	    <div class="row">
	      <label for="identifiant" class="col-sm-3 control-label">Identifiant</label>
	      <div class="col-sm-6">
		<input type="text" name="identifiant" id="identifiant">
	      </div>
	    </div>

	    <div class="row">
	      <label for="motDePasse" class="col-sm-3 control-label">Mot de passe</label>
	      <div class="col-sm-6">
		<input type="password" name="motDePasse" id="motDePasse">
	      </div>
	    </div>

	  </div>
	</form>

      </div>
    </div>

  
  </div>
</div>
@endsection
