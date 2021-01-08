<?php
class PersonnageDefault 
{

    private $_nom = "Loper";
    private $_prenom ="Dave";
    private $_age = 18; 
    private $_sexe ="Masculin";

    public function Test()
    { 

    }
    
    public function getNom()
    { 
        return $this->_nom;
    }





    public function getPrenom(){
        return $this->_prenom;
    }

    public function getAge(){
        return $this->_age;
  
      }

      public function getSexe(){
        return $this->_sexe;
  
      }



      public function setNom($nom){

        $this->_nom = $nom;
      }


    public function setPrenom($prenom){
   
        $this->_prenom = $prenom;
    }

    public function setAge($age){
    
        $this->_age = $age;
      }

      public function setSexe($sexe){
        $this->_sexe = $sexe;
      }




}