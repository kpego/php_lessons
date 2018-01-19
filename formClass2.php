<?php
/**
 * Created by PhpStorm.
 * User: Manu
 * Date: 16/01/2018
 * Time: 17:51
*/

trait Form
{
    public function formDebut($method, $action)
    {
        echo '<form action=\'' . $action . '\' method = \'' . $method . '\'>' . '<br/>';
    }

    public function label($forLabel, $contentLabel)
    {
        echo '<label for=\'' . $forLabel . '\'>' . $contentLabel . '</label>'. '<br/>';
    }

    public function selectDebut($nameSelect)
    {
        echo '<select name=\'' . $nameSelect . '\'>'. '<br/>';
    }

    public function selectOption($optionSelect, $contentOption)
    {
        echo '<option value=\"' . $optionSelect . '\">' . $contentOption . '</option>'. '<br/>';
    }


    public function textarea($nameTextarea, $contenTextarea)
    {
        echo  '<br/>'.'<textarea name=\'' . $nameTextarea . '\'>' . $contenTextarea . '</textarea>'.'<br/>';
    }

    public function formFin()
    {
        echo '</form>';
    }

    /**
     * @param $inpuType
     * @param $inputName
     * @param $inputValue  Celui ci doit etre mis pour le submit
     * @return string
     */
    public function input($inpuType, $inputName, $inputValue)
    {
       if ($inpuType=='submit') {
           echo '<input type=\'' . $inpuType . '\' name =\'' . $inputName . '\' value=\'' . $inputValue . '\'>' . '<br/>';
       }
            else {
                echo '<input type=\''.$inpuType.'\' name=\''.$inputName.'\' >'.'<br/>';
        }
    }
}


 class Formulaire
{
    use Form;

 }

$utilisateur=new Formulaire;
$utilisateur->formDebut('POST','index.php');
$utilisateur->label('noms','Noms :');
$utilisateur->input('text','noms','');
$utilisateur->label('choir','choir');
$utilisateur->input('text','choir','');
$utilisateur->selectDebut('cars');
$utilisateur->selectOption('volvo','Volvo');
$utilisateur->selectOption('bmw','Bmw');
$utilisateur->selectOption('toyota','Toyota');
$textearea='Tout ceci mechappel jaimerais bien quee tout sosi e place';
$utilisateur->textarea('Commentaires',$textearea);
$utilisateur->input('submit','submit','Envoyer');
$utilisateur->formFin();
