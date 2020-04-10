



<?php require('header.php'); ?>


<div style="margin-top:6rem;" class=" col-8 mx-auto text-center">
<h1 class="text-center">Mentions légales générateur</h1>


    <form id="submit-button" class="mb-3" action="mentionlegale.php" method="post">
   

<div class="row">
      <div class="col-md-4 form-group mx-auto">
        <label>Adresse URL de votre site internet</label>
        <input type="text" class="form-control"  name="adresseurl" placeholder="https://monsite.fr">
        
        <label>Forme juridique</label>
        <input type="text" class="form-control"  name="formejuridique" placeholder="SAS, SARL">
        
        <label>Nom de l'entreprise</label>
        <input type="text" class="form-control"  name="nomentreprise">
        
        <label>Adresse du siège social de l'entreprise</label>
        <input type="text" class="form-control"  name="adressesiege" >
   
        
    
      </div>
      
      <div class="col-md-4 form-group mx-auto">

           
      <label>Code postal</label>
        <input type="text" class="form-control"  name="cp">

        <label>Ville</label>
        <input type="text" class="form-control"  name="ville">

        <label>Capital social</label>
        <input type="text" class="form-control"  name="capitalsocial" >
        
        <label>Numéro de TVA Intracommunautaire</label>
        <input type="text" class="form-control"  name="tvaintra" >
        
    
      </div>
 
</div>
<div class="mt-5 row">
    
    <div class="col-md-4 form-group mx-auto">
    <h5>Webmaster</h5>
            <label>Nom du webmaster</label>
            <input type="text" class="form-control"  name="webmastenom" >
            
            <label>Mail du webmaster</label>
            <input type="text" class="form-control"  name="webmastermail" >
            
        
          </div>
    <div class="col-md-4 form-group mx-auto">
    <h5>Responsable de la publication</h5>
            <label>Nom du responsable</label>
            <input type="text" class="form-control"  name="responsablenom" >
            
            <label>Mail du responsable</label>
            <input type="text" class="form-control"  name="responsablemail" >
            

            

        
          </div>
    <div class="col-md-4 form-group mx-auto">
    <h5>Légales</h5>
            <label>Nom du représentant légale de l'entreprise</label>
            <input type="text" class="form-control"  name="representantlegaleentreprise" >
            
            <label>Ville du tribunal de compétence en cas de litige</label>
            <input type="text" class="form-control"  name="villetribunal">
        
          </div>
</div>

<div class="row">


    <div class="mt-5 col-md-4 form-group mx-auto">
    <h5 class="">Hébergement</h5>
                <label>Nom de l'hébergeur</label>
                <input type="text" class="form-control"  name="nomhost" >
                
                <label>Adresse de l'hébergeur</label>
                <input type="text" class="form-control"  name="adressehost">

                <label>Code postal</label>
                <input type="text" class="form-control"  name="cphost" >
                
                <label>Ville </label>
                <input type="text" class="form-control"  name="villehost">

                <label>Téléphone  </label>
                <input type="text" class="form-control"  name="contacthost">
                
              </div>
    
    <div class="mt-5 col-md-4 form-group mx-auto">
    <h5 class="">CNIL</h5>
                      
    <label>Votre numéro CNIL </label>
                <input type="text" class="form-control"  name="numcnil">

<p>Délégué à la protection des données<small>(physique ou morale)</small></p>

                <label>Nom  </label>
                <input type="text" class="form-control"  name="nomdelegue">
                <label>Mail  </label>
                <input type="text" class="form-control"  name="maildelegue">
        
                
              </div>
    <div class="mt-5 col-md-4 form-group mx-auto">
    <h5 class="">Données colléctées </h5>
                      
    <label>Données indispensables au fonctionnement du service </label>
           
                <textarea class="form-control" name="data" rows="4" ></textarea>
                <label>Temps de conservation (mois)  </label>
                <input type="text" class="form-control"  name="dataconserve">


                <label>Données permettant d’améliorer l’expérience utilisateur et de proposer des conseils contextualisés  </label>
              
                <textarea class="form-control" name="dataxp" rows="4" ></textarea>
                <label>Temps de conservation (mois)  </label>
                <input type="text" class="form-control"  name="dataxpconserve">
                
              </div>
    

</div>    

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Générer mes mentions légales</button>
  </div>
  
  
</form>
</div>   

<?php require('footer.php'); ?>






