@extends('layouts.app')

@section('content')

<style>
  .row {
  
  }
 
  .blockHeader {
  color : white;
  background-color: grey;
  display: flex;
  flex-direction : row;
  justify-content: space-between;
  padding: 10px;
  padding-left: 20px;
  padding-right: 20px;
  border-radius: 10px 10px 0px 0px;
  }
  
  .information {
  display: flex;
  flex-direction: row;
  min-width:350px;
  }
  
  .dataLabel {
  color: black;
  display: flex;
  flex: 3;
  font-weight: bold;
  }
  
  .dataField {
  color: black;
  display: flex;
  flex:3;
  font-weight: bold;
  }
  
  .line {
  display:flex;
  flex-direction:row; 
  }
 
  .spacer{
  flex:1;
  }
  
  .data {
  display: block;
  }
  
  .logo {
  margin: 10px;
  width : 50%;
  }
  
  .subcontainer {
  margin-top : 10px;
  margin-bottom: 10px;
  border-radius: 14px 14px 10px 10px;
  border: 2px solid grey;
  min-width: 750px;
  justify-content : space-around;
  align-items : center;
  }
  
  .applicationTitle {
  font-weight: bold;
  font-size: 16px;
  }
  
  .colonne {
  height:100%; 
  display:flex; 
  flex-direction:column; 
  justify-content:space-around;
  flex-wrap : no wrap;
  }
  
  .formContainer {
  display: flex;
  flex-direction:column;
  }
  
  .formData {
  flex:3;
  display: flex;
  flex-direction:row;
  }
  
  .formLabels{
  display:flex;
  flex: 1;
  flex-direction : column;
  justify-content: space-between;
  }
  
  .formFields{
  display:flex;
  flex: 1;
  flex-direction : column;
  justify-content: space-between;
  }
  
  .formButton {
  flex:1;
  }
 
  
</style>


<div class="container">
<!--
  <div class="row subcontainer">
    <div class="blockHeader">
      <span class="applicationTitle"> Facebook </span>
      <a href="#" style="color:white;"> supprimer </a>
    </div>
    
    <div class="information">
      <div class="col-xs-3" style="text-align:center;"> 
	<img src="https://upload.wikimedia.org/wikipedia/fr/thumb/c/c8/Twitter_Bird.svg/1259px-Twitter_Bird.svg.png" alt="Logo Facebook" class="logo" />
      </div>
      
      <div class="col-xs-9" style="display:flex; flex-direction:column; justify-content:space-around;">
	<div class="row" style="flex:3;">
	  <div class="col-xs-4 colonne">
	    <div class="row">
	      <div class="dataLabel"> Identifiant : </div>
	    </div>

	    <div class="row">
	      <div class="dataLabel"> Mot de passe : </div>
	    </div>
	  </div>

	  <div class="col-xs-4 colonne">
	    <div class="row">
	      <div class="data"> unautremail@exemple.fr </div>
	    </div>

	    <div class="row">
	      <div class="data"> *********** </div>
	    </div>
	  </div>

	  <div class="col-xs-4 colonne">
	    <div class="row">
	      <a href="#" id="emailUpdate" style="color:grey;"> modifier </a>
	    </div>

	    <div class="row">
	      <a href="#" id="passwordUpdate" style="color:grey;"> modifier </a>
	    </div>
	  </div>
	</div>
	
	<div class="row" style="flex:1;">
	  <div class="switch">
	    <input type="checkbox">
	    <span class="switchLabel">Afficher mot de passe.</span>
	  </div>
	</div>
      </div>      
    </div>
    -->


@if (count($tasks) > 0)
  @foreach ($tasks as $task)
  <div class="row subcontainer">
    <div class="blockHeader" style="text-align:center;">
      <span class="applicationTitle"> Compte {{ $task->url }} </span>
      <form action="{{ url('task/'.$task->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Supprimer
	</button>
	</form>
      
    </div>
    <div class="information">
      <div class="col-sx-3" style="text-align:center;">
        <img src="http://essexgreennj.com/img/stores/logo.png" label="Logo" class="logo"/>
      </div>

      <div class="col-xs-9" style="display:flex; flex-direction:column; justify-content:space-around;">

	<div class="row" style="flex:3">

	  <div class="col-xs-4 colonne">
	    <div class="row">
	      <div class="dataLabel"> Identifiant : </div>
	    </div>

	    <div class="row">
	      <div class="dataLabel"> Mot de passe : </div>
	    </div>
	  </div>

	  <div class="col-xs-4 colonne">
	    <div class="row">
	      <div class="data"> {{ $task->name }} </div>
	    </div>

	    <div class="row">
	      <div class="data"> {{ $task->password }} </div>
	    </div>
	  </div>

	  <div class="col-xs-4 colonne">
	    <div class="row">
	      <a href="#" id="emailUpdate" style="color:grey;"> modifier </a>
	    </div>

	    <div class="row">
	      <a href="#" id="passwordUpdate" style="color:grey;"> modifier </a>
	    </div>
	  </div>
	</div>

	<div class="row" style="flex:1;">
	  <div class="switch">
	    <input type="checkbox">
	    <span class="switchLabel"> Afficher mot de passe</span>
	  </div>
	</div>
      </div>
   </div>
</div>
@endforeach
@endif

  <div class="row subcontainer">
    <div class="blockHeader" style="text-align:center;">
      <span class="applicationTitle"> Ajouter des identifiants </span>
    </div>
    <form action="{{ url('task')}}" method="POST">
     {{ csrf_field() }}
      
      <div class="formContainer">
		<div class="formData">
			<div class="formLabels">
				<div class="line"><div class="spacer"></div><div class="dataLabel"> URL : </div></div>
				<div class="line"><div class="spacer"></div><div class="dataLabel"> Identifiant : </div></div>
				<div class="line"><div class="spacer"></div><div class="dataLabel"> Mot de passe : </div></div>
				
				
				
			</div>
			<div class="formFields">
				<div class="line"><div class="spacer"></div><input type="text" name="url" id="urlInput" class="dataField" placeholder=""/><div class="spacer"></div></div>
				<div class="line"><div class="spacer"></div><input type="text" name="name" id="idInput" class="dataField" placeholder="votremail@exemple.com"/><div class="spacer"></div></div>
				<div class="line"><div class="spacer"></div><input type="password" name="password" id="passwordInput" class="dataField" placeholder="Votre mot de passe"/><div class="spacer"></div></div>
			</div>
		</div>
		<div class="formButton">
			<div class="line">
				<div class="spacer"></div>
				<div class="buttonContainer">
					<input type="submit" name="monSubmit" id="submit" value="Ajouter" class="btn btn-danger" />
				</div>
				<div class="spacer"></div>
			</div>
		</div>
      </div>
      
    </form>
  </div>
</div>

</div>
@endsection

