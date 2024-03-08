<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Ajouter un utilisateur</h3>
      <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
          <label for="cni">CNI</label>
          <input type="text" class="form-control" id="cni" name="cni" required>
        </div>
        <div class="form-group">
          <label for="horaire">Horaire</label>
          <input type="text" class="form-control" id="horaire" name="horaire" required>
        </div>
        <div class="form-group">
          <label for="qrcode">QR Code</label>
          <input type="text" class="form-control" id="qrcode" name="qrcode" required>
        </div>
        <div class="form-group">
          <label for="cjm">CJM</label>
          <input type="text" class="form-control" id="cjm" name="cjm" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="mdp">Mot de passe</label>
          <input type="password" class="form-control" id="mdp" name="mdp" required>
        </div>
        <div class="form-group">
          <label for="telephone">Téléphone</label>
          <input type="text" class="form-control" id="telephone" name="telephone" required>
        </div>
        <div class="form-group">
          <label for="profileId">ID du profil</label>
          <input type="text" class="form-control" id="profileId" name="profileId" required>
        </div>
        <div class="form-group">
          <label for="statusCompte">Statut du compte</label>
          <input type="text" class="form-control" id="statusCompte" name="statusCompte" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Ajouter l'utilisateur</button>
      </form>
    </div>
  </div>
</div>
