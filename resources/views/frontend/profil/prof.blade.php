<div class="post-popup pst-pj">
    <div class="post-project">
        <h3>Informations</h3>
        <div class="post-project-fields">
            <form action="{{url('my-profil-create')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="poste" placeholder="Poste">
                    </div>
                    <div class="col-lg-12">
                        <textarea name="apercu" placeholder="Un apercu sur votre personne"></textarea>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="ville" placeholder="Votre ville">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="quartier" placeholder="Votre quartier">
                    </div>
                    <div class="col-lg-12">       
                        <input type="file" name="image" class="form-control"> <br>   
                    </div>
                 
                    <div class="col-lg-12">
                        <ul>
                            <li><button class="active" type="submit" value="post">Enregistrer</button></li>
                            <li><a href="#" title="">Annuler</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
        <a href="#" title=""><i class="fa fa-times-circle-o" aria-hidden="true"></i>
        </a>
    </div>
</div>