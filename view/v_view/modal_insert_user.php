  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel3">Ajouter Client</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="login-form" action="../controller/insert_user.php" method="post">
                                                    <div class="form-group">
                                                        <label for="nomClient">Nom :</label>
                                                        <input type="text" name="nomClient" value="nom" id="nomClient">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prenomClient">Prenom :</label>
                                                        <input type="text" name="prenomClient" value="prenom" id="prenomClient">
                                                    </div>

                                                <input type="submit" class="btn btn-secondary"  name="add_user" value="Ajouter">
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>