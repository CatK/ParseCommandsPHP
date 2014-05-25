  <?php
  /*
   * Parser
   * @author CatK
   * Inclure ce fichier après que votre CMS ai ouvert la connexion .
   */
   

function type($i)//Recuperes les fonction de commandes .
        {
                //Ajoutez vos fonctions de commandes dans cet Array
                $ct = array(
                                '0' => 'Affiches la liste des commandes.',
                                '38' => 'Teleportation'
                );
                return $ct[$i];
        }

function get($function)
        {
              
            explode("-", $function);  
        }

function output($function)//Sortie
        {
              
           echo type($function[0]);  
        }
