@extends('layouts.app')

@section('content')
<div class="window">
    <!-- style -->
    <!-- image : changer height en pourcentage -->
    <style>
      .mainTitle {
        font-weight: bold;
        font-size: 24px;
      }

      .header {
        border: 2px solid black;
        text-align: center;
        padding: 25px;
      }

      .logo {
        padding: 10px;
        max-width:90%;
        max-height:90%;
      }

      .body {

      }

      .container {
        margin: 15px auto;
        border: 2px solid black;
        width: 800px;
      }

      .title {
        display: flex;
        flex-direction: row;
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
        display: flex;
        flex-direction: row;
        justify-content: space-around;
      }

      .updateLabel {
        display : flex;
        font-style: italic;
        color: grey;
      }

      .label{
        flex: 1;
        font-weight: bold;
        padding-left: 20px;
      }

      .data{
        flex: 2;
      }

      .subTitle {
        font-weight: bold;
        font-size: 18px;
        display: flex;
      }

      .switch {
        padding-left: 20px;
        display : flex;
      }

      .checkbox {

      }

      .switchLabel {

      }

    </style>
    <!-- style -->
    <div class="header">
      <span class="mainTitle"> Vos identifiants </span>
    </div>

    <div class="body">
      <div class="container">
        <div class="title">
          <span class="subTitle"> Facebook </span>
          <span class="updateLabel"> supprimer </span>
        </div>
        <div class="information">
          <div class="logoContainer">
            <img src="./logoFacebook.jpg" alt="Logo Facebook" class="logo" />
          </div>

          <div class="userData">
            <div class="userDataLine">
              <span class="label"> Identifiant : </span>
              <span class="data"> unmail@exemple.com </span>
              <span class="updateLabel"> modifier </span>
            </div>

            <div class="userDataLine">
              <span class="label"> Mot de passe : </span>
              <span class="data"> ********** </span>
              <span class="updateLabel"> modifier </span>
            </div>

            <div class="switch">
              <input type="checkbox">
              <span class="switchLabel">Afficher mot de passe.</span>
            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="title">
          <span class="subTitle"> Twitter </span>
          <span class="updateLabel"> supprimer </span>
        </div>
        <div class="information">
          <div class="logoContainer">
            <img src="./logoTwitter.png" alt="Logo Twitter" class="logo" />
          </div>
          <div class="userData">

            <div class="userDataLine">
              <span class="label"> Identifiant : </span>
              <span class="data"> unmail@exemple.com </span>
              <span class="updateLabel"> modifier </span>
            </div>

            <div class="userDataLine">
              <span class="label"> Mot de passe : </span>
              <span class="data"> MonMot2PasseTwitter </span>
              <span class="updateLabel"> modifier </span>
            </div>

            <div class="switch">
              <input type="checkbox">
              <span class="switchLabel">Afficher mot de passe.</span>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="formTitle"> Ajouter des identifiants </div>
        <form>
          <label class="label">URL :</label><input type="text" name="url" id="urlInput" placeholder=""/><br/>
          <label class="label">Identifiant :</label><input type="text" name="id" id="idInput" placeholder="votremail@exemple.com"/><br/>
          <label class="label">Mot de passe :</label><input type="password" name="password" id="passwordInput" placeholder="Votre mot de passe"/>
        </form>
      </div>

    </div>
  </div>
@endsection
