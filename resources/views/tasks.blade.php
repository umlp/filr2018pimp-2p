<!DOCTYPE html>
<html>
<head>
  <title> Securikey </title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
  <div class="window">
    <!-- style -->
    <style>
      .mainTitle {
        font-weight: bold;
        font-size: 24px;
      }

      .header {
        border: 2px solid black;
        text-align: center;
        padding: 25px;
        box-shadow: -1px 2px 5px 2px rgba(0, 0, 0, 0.7);
      }

      .logo {
        padding: 10px;
        max-width:90%;
        max-height:90%;
      }

      .container {
        margin: 15px auto;
        border: 2px solid black;
        width: 800px;
        box-shadow: -1px 2px 5px 2px rgba(0, 0, 0, 0.7);
      }

      .title {
        font-weight: bold;
        font-size: 20px;
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
        flex-direction: row;
        justify-content: space-between;
      }

      .updateLabel {
        display : flex;
        font-style: italic;
        color: grey;
      }

      .label{
        display: block;
        font-weight: bold;
        padding-left: 20px;
        width: 30%;
      }

      .data{
        display: block;
        width: 50%;
      }

      .applicationTitle {
        display: flex;
      }

      .formTitle {
        text-align: center;
        padding: 15px;
      }

      .applicationTitle {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
      }

      .switch {
        padding-top: 10px;
        padding-left: 20px;
        display : flex;
      }

      .switchLabel {
        padding-left: 5px;
        padding-top: 2px;
      }

      .formLine{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 80%;
        margin-bottom: 10px;
      }

      .formInput {
        display: block;
        width: 50%;
        font-size: 14px;
      }

      .buttonContainer {
        text-align: center;
      }

      .addButton {
        font-size: 16px;
        font-weight: bold;
        padding: 5px;
        margin: 20px;
        box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);
      }



    </style>
    <!-- style -->
    <div class="header">
      <span class="mainTitle"> Vos identifiants </span>
    </div>

    <div class="body">
      <div class="enregistrements">
	<div class="container">
          <div class="applicationTitle">
            <span class="title"> Facebook </span>
            <span class="updateLabel"> supprimer </span>
          </div>
          <div class="information">
            <div class="logoContainer">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAulBMVEU9WZj///9uhLX+/v729vbt7e3q6urNzc37+/vh4eHe3t7a2tpvg7ZuhrbT09NJY5+qqqqvr69CXJgqTZJMZJxUap81U5WCkrQjSIvv8fTGztmdq8dieLD///r0+fcpSpHb3+Zdc6Nlfa53jLbGxsa7u7u2vNCrssk9WYyUoLvDyNrW2N+JmbmBkrpygaoAOYZsgKotTIo2UJlhfLZZcK0kRpO+x9J3i69EZJdleaVQapeBk7JbdKZneaV40oB/AAAITElEQVR4nO3da3eaShQGYAgIKCkFiZNbDaYF01ya06QnSdP2/P+/dfYeLqKCg1RxNmvetfpBW+083XuGiVLQdHEMiSMevUZUtpI2wuyljuPgL1nDx7cZWS0sdCaFODmzsbCsG8ifXFljrBByH8dZ1hAykjk4QMvizBrjmjDzAW84cl3PszGxlOFDsz3PBSdHcqNImPmQ59lxkiRB4EucIAhgjLGNSm5cL6O24jNSH+cFfhJ70ANSZ+TFgR8gcoR1XC+jtgzkBRzCq4AXWw2Op1LEGcaA5Ma0jOXfLAs5EAro2YkfDDse5V/GcIMgtl2Yj6vEkjDtUCxgEFjFs1O5j4nOYvyuH8S8jNipVcIM6EIBvewpa356PWahzNFO3h/uzEwQ+4mddqpurAszIBYQXmBM9aubSRQypskexsLo/Q6aDVBDILrD5UZdCHEOIjDhD83bSH5cERZqN+mwg4K4KsQScmDMH86fwkOPesuEJ/fckQDRKhO1MtDNgM7jy6EH3CIvt5wSpHOxIOZCmITWyE54i1pfn8eHHm6bhO+4shqciAtqWZj1aBLggxljJIFAnOCqavqwE1sUUStPQh//gEVg/azJmP3CKg79uDQVCyH0aIDHQecrWSAQn9/RA6vNcEm41KOPNOdglnF4iVWCPuVFLAutUexbsBOYv1AGQs5mU133AnuUF1FLF9KshFOTcItmuUYRzkQzLaKWNSnMQvxp4pbagX49EezgdDubiQuh5cY+LrTRoce3g0zSIwYeE3Nh2qS4m7mh36TaOLrnOxsvO+prRZPij4STQw9vBxlrv2HF9AI86huFEJsUHlh9aFL4SQNqNfDT1XQh5DvSOf11BhMN89U0F5pmNg1PezANIWzOJ+JCmC40uGO77okQf4yK+VIDE5HXcDDkR8Mp8e1MHvadHxFhqVkSwlLq9KOEGsNtTbqYOgshbEp1sx8LjcYmXJjtarTscNgnoaaE9FMljJWQVJSQfpSQfpSQfpSQfpSQfpSQfuQXMsbCMKqLeJRyC1kYhT/fbm9eL+5n1bkXfpwksZBFZ99vZlf6pkyv6ApZ9HgnPh1yeiUcpqRCFj4MhDzKwrO38yY+skI2vmjmoypk/5lNgSSF4/Cbrjc+45qiMDxtXECaQva4DZCicOwIVbSFZ7OtgPSE7GE7IEGho097LQxvtiwhOeFT80M9TSHb6lBIUDiOGm9HiQr5CVq9FrK33gvnfReGW+5n6Amj7bakBIVP2wNpCfnpWdsLCX2ayI5aCHVSQvGO5vz2JGTLeRK+Lx2hob+Gbc4IJSM09PlZq/clI9Rn7YCEhF9anrRMR9j2rGwyQqNlk9IRTpWwLkrYXZRQCeuihN1FCZWwLkrYXZRQCetCSMgqI3zfgwrH5Wi/NwqNX9cV+XMtt3AVsek7/Jrfc4TNe0jh6rkzopMUqi77LP58SiZhm9xL/b3FLoQXvReKr09CXXjZe+GD1N897UL42Huh+FJP1IXiv4W48Erub0h3ILTk/p9dOxDOxBckIy587X0NG1wXkLhQfMCnLnwU/y3EhSe9Fzb4eIq2cNDg6pWUhUaDn/BpC5tdn5O28LLBSTYyfZq4fd4kF369WMr9xk8Tr+4u1tPkQsAHreHSLVSizf8Z4fyfituuNDkTjMz3Fue9/2ZGCWujhN1FCZWwLkrYXZRQCeuihN1FCZWwLkrYXZRQCeuihN1FCZWwLkrYXZRQCeuihN1FCZWwLkrYXZRQCeuihN1FCZWwLkrYXZRw90LtY7cZb75a+Tlr+b7XtcLPH7rN0eVmYcvxHH2pFx53HIHw01G7t90gPOo4QmG7yCMU17BdlLC7KKES1kUJu4sSKmFdlLC7KKES1qVKaCvhXqKEuxIa5mBoBz0SfkiFXibUsYap0Pm80/GLsy/hNxQmKDS40HBQONL16YfdAoTZk/AYP8KzUehkQqghiOHZL7sFiIeyJyHejy9JPAubNK+hl8Tw7OVuAeKh7Ef4+Q5eHMRuSWhabhLAs3efdwoQZk/CT7im+KvC2HfgLf/tdibuR/jhE7zWCuzRoCSEA2IwPMBE3Ivwx6VupAtNJixPxNcfOyZsjrCGx23e9c9sMQ0LIW9TeN6YHLd605YRCNvtQI7xBsoDP86aNBdim7rw8Gb5Mrj7zsfJxrQaTHgPjrhoUhSmuxqPr6b6151+QXiAPH/XFytpIcQ2HfFtjX7xcugh/mWeznkJ0213WYhF9PGJ04PcunpnOcO7YppYwqxJubAoYowX8fnFxoceZvuEpyDAHVtRwoVwgMuphf8AH+kSQ34jeo8fKrISpsJFn+IlgM5/tr1X1qGTAi0/LpUwF+ppn6brqXNNcy5G/NQO0y/3aC7M+9ROEv7wtu15HgcMe5pnQHsER4qsRwthQQwSfqH02SSi1KrjMYu+n+Mig8B0HV0X8qkIVQzwbudTff7ziYxx/Bxdpzf4HqwBC2E6FTnRH6bPXJw+nTW41cKBw1gYaQ/ZnZO9deBCiH2KjQrLjR9nV1Wb3t+c/pl8PJE4k/eHeX5jaDMJYm+EQGcBLAkLohcnvqeTixP7CRwmViq4JMyJ0Klx4Ntm10P8qwy4z4XDxHIFl4XpcoNlBGPiJ+6g21G2jWF5AfhsFwu4UsEVYUEccmPg4+s8V+Z42G9+wutnpQVcBuprt0XBTjUH2KueDcokCeQOjBCq4I3AlxZwBbgm5GUEIxQSK+l6HkAlDozPdYGH9asoYJVwYcRKWkPpY4GOl8+pKGC1kN++xkmRyJQ9ppnzKnzVwqKQPKbcSQdp1PnqhfriTkSOxDGc/B5JtRFdFLbihkuSRQAQCunnf6WDCAzINBtIAAAAAElFTkSuQmCC" alt="Logo Facebook" class="logo" />
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
          <div class="applicationTitle">
            <span class="title"> Twitter </span>
            <span class="updateLabel"> supprimer </span>
          </div>
          <div class="information">
            <div class="logoContainer">
              <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/c/c8/Twitter_Bird.svg/1259px-Twitter_Bird.svg.png" alt="Logo Twitter" class="logo" />
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
      </div>
      
      <div class="container">
        <div class="formTitle">
            <span class="title">Ajouter des identifiants</span>
        </div>
        <form id="formulaire">
          <div class="formLine"><label class="label">URL :</label><input type="text" name="url" id="urlInput" class="formInput" placeholder=""/></div>
          <div class="formLine"><label class="label">Identifiant :</label><input type="text" name="id" id="idInput" class="formInput" placeholder="votremail@exemple.com"/></div>
          <div class="formLine"><label class="label">Mot de passe :</label><input type="password" name="password" id="passwordInput" class="formInput" placeholder="Votre mot de passe"/></div>
          <div class="switch">
            <input type="checkbox">
            <span class="switchLabel">Afficher mot de passe.</span>
          </div>

          <div class="buttonContainer">
            <input type="submit" name="monSubmit" id="submit" value="Ajouter" class="addButton" onclick="enregistrer()"/>
          </div>
        </form>
      </div>

    </div>
  </div>
  <footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
      // <!--
	     function enregistrer () {
	     var mail = document.getElementById("idInput").value;
	     var mdp = document.getElementById("passwordInput").value;
	     $("#enregistrements").append("<p>FDP</p>");
	     $("#enregistrements").append("<div class='container'><div class='applicationTitle'><span class='title'></span><span class='updateLabel'></span></div><div class='information'><div class='logoContainer'></div><div class='userData'><div class='userDataLine'><span class='label'> Identifiant : </span><span class='data'>",mail,"</span><span class='updateLabel'> modifier </span></div><div class='userDataLine'><span class='label'> Mot de passe : </span><span class='data'>",mdp,"</span><span class='updateLabel'> modifier </span></div><div class='switch'><input type='checkbox'><span class='switchLabel'>Afficher mot de passe.</span></div></div></div></div>");
	     }
	     //-->

    </script>
  </footer>
</body>
</html>

