<div class="post-popup job_post">
    <div class="post-project">
        <h3>Experiences</h3>
        <div class="post-project-fields">
            <form action="/my-exp-create" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="title" placeholder="Title experience">
                    </div>
                    <div class="col-lg-12">
                        <textarea name="description" rows="2" placeholder="Description experience"></textarea>
                    </div>
                  
                    <h3 style="margin-bottom: 15px">Education</h3>
                    <div class="col-lg-6">
                        <input type="text" name="niveau" placeholder="niveau d'étude">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="annee" placeholder="JJ/MM/AAAA">
                    </div>
                    <h3 style="margin-bottom: 15px">Competences</h3>
                    <div class="col-lg-4">
                        <input type="text" name="comptu" placeholder="competence 1">
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="comptd" placeholder="competence 2">
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="comptt" placeholder="competence 3">
                    </div>  
                    <div>             
                        <ul>
                            <li><button class="active" type="submit" value="post">Enregistrer</button></li>
                            <li><a href="#" title="">Annuler</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
    </div>
</div>