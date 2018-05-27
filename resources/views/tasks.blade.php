@extends('layouts.app')

@section('content')

	<style>
		.row {
			height: 120px;
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
		}
		
		.information {
			display: flex;
			flex-direction: row;
		}
		
		.logoContainer {
			flex: 0.75;
		}
		
		.userData {
			padding: 20px;
			flex: 5;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}
		
		.userDataLine {
			padding: 5px;
			display: flex;
			flex-direction : row;
			justify-content: space-between;
		}
		
		.dataLabel {
			color: black;
			display: block;
			font-weight: bold;
			padding-left: 20px;
			width: 30%;
		}
		
		.data {
			display: block;
			width: 50%;
		}
		
		.logo {
			padding: 10px;
			max-width: 90%;
			max-height: 90%;
		}
		
		.subcontainer {
			border-radius: 6px;
		}
		
	</style>
	
	<div class="container">
		<div class="row subcontainer">
		        <div class="blockHeader">
				  <span class="title"> Facebook </span>
				  <a href="#" style="color:white;"> supprimer </a>
			</div>
				
			<div class="information">
				  <div class="logoContainer">
				    	<img src="data:image/png;base64,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" alt="Logo Facebook" class="logo" />
				  </div>

				  <div class="userData">
					    <div class="userDataLine">
						      <span class="dataLabel"> Identifiant : </span>
						      <span class="data"> unmail@exemple.com </span>
						      <a href="#" style="color:grey;"> modifier </a>
					    </div>

					    <div class="userDataLine">
						      <span class="dataLabel"> Mot de passe : </span>
						      <span class="data"> ********** </span>
						      <a href="#" style="color:grey;"> modifier </a>
					    </div>
							    
					    <div class="switch">
						      <input type="checkbox">
						      <span class="switchLabel">Afficher mot de passe.</span>
					    </div>
				</div>
			</div>
		</div>

	</div>
@endsection
