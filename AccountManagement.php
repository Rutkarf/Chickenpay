<?php include 'includes/_head.php'; ?>

<?php include 'includes/_navbar.php'; ?>




<div class="container-fluid full-height d-flex flex-column">
    <div class="row flex-grow-1 gx-3 gy-3">
        <!-- Première colonne -->
        <div class="col-md-4 border p-3 d-flex flex-column justify-content-center align-items-center">
            <!-- Section 1 -->
            <div class="mb-4 text-center">
                <h5>Listes des Comptes F.I.A.T et Wallets Crypto</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Rechercher un compte...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Ajouter un compte</button>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="flex-grow-1 overflow-auto w-100">
                <h5>Détails du Compte Sélectionné</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Devise ou Crypto</th>
                            <th>Solde</th>
                            <th>Date de Dernière Modification</th>
                            <th>Adresse Wallet ou RIB</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-4 border p-3 d-flex flex-column justify-content-center align-items-center">
            <!-- Section 1 -->
            <div class="mb-4 text-center">
                <h5 class="font-weight-bold">Solde Global du Compte Utilisateur</h5>
                <!-- Affichage du solde global -->
                <p class="display-4">$XXXX</p>
            </div>

            <!-- Section 2 -->
            <div class="flex-grow-1 overflow-auto w-100 text-center">
                <h5>Intégration du tokenR4V3</h5>
                <!-- Intégration Three.js -->
                <!-- Placez ici votre code d'intégration Three.js pour le tokenR4V3 -->
            </div>
        </div>

        <!-- Troisième colonne -->
        <div class="col-md-4 border p-3 d-flex flex-column justify-content-center align-items-center">
            <!-- Section 1 -->
            <div class="mb-4 text-center">
                <h5>Historique des Transactions</h5>
                <input type="text" class="form-control" placeholder="Rechercher une devise ou une crypto...">
            </div>

            <!-- Section 3 -->
            <div class="flex-grow-1 overflow-auto w-100">
                <h5>Détails de la Transaction Sélectionnée</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Devise ou Crypto</th>
                            <th>Solde</th>
                            <th>Date de Dernière Modification</th>
                            <th>Nom ou Adresse Wallet du Payeur ou Receveur</th>
                            <th>Adresse Wallet ou RIB</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td> <!-- Remplacez par des données réelles -->
                            <td></td> <!-- Remplacez par des données réelles -->
                            <td></td> <!-- Remplacez par des données réelles -->
                            <td></td> <!-- Remplacez par des données réelles -->
                            <td></td> <!-- Remplacez par des données réelles -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>








<?php include 'includes/_footer.php'; ?>