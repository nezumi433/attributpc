                      <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel4">Suppression</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Êtes-vous surs ?</h2>
                                                <form class="login-form" action="../controller/delete_pc.php?idOrdinateur=<?php echo $idOrdinateur ?>" method="post">
                                                    <input type="submit" class="btn btn-success" value="oui" name="oui">

                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>
