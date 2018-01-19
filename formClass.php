<?php

trait Form
{

    public function formDebut($method, $action)
    {
        return '<form action=\'' . $action . '\' method = \'' . $method . '\'>' . '<br/>';
    }

    public function label($forLabel, $contentLabel)
    {
        return '<label for=\'' . $forLabel . '\'>' . $contentLabel . '</form>';
    }

    public function selectDebut($nameSelect)
    {
        return '<select name=\'' . $nameSelect . '\'>';
    }

    public function selectOption($optionSelect, $contentOption)
    {
        return '<option value=\"' . $optionSelect . '\">' . $contentOption . '</option>';
    }

    public function selectFin()
    {
        return '</select>';
    }

    public function textarea($nameTextarea, $contenTextarea)
    {
        return '<textarea name=\'' . $nameTextarea . '\'>' . $contenTextarea . '</textarea>';
    }

    public function formFin()
    {
        return '</form>';
    }

    /**
     * @param $inpuType
     * @param $inputName
     * @param $inputValue  Celui ci doit etre mis pour le submit
     * @return string
     */
    public function input($inpuType, $inputName, $inputValue)
    {
        switch ($inpuType) {
            case 'submit':

                return '<input type=\'' . $inpuType . '\' name =\'' . $inputName . '\' value=\'' . $inputValue . '\'>' . '<br/>';
                break;
            case 'default':
                return '<input type=\''.$inpuType.'\' name=\''.$inputName.'\' >'.'<br/>';
        }
    }
}


 class Formulaire
{
    use Form;
 }
}
