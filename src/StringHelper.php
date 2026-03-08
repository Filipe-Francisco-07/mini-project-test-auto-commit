
<?php



class StringHelper
{




    public function slugify($text)
    {
        $text = strtolower($text);
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        return trim($text, '-');
    }



    /**
     * Trunca uma string para um limite especificado e adiciona reticências se necessário.
     * 
     * @param mixed $text A string a ser truncada.
     * @param mixed $limit O limite de caracteres para a truncagem.
     * @return mixed A string truncada ou a original se estiver dentro do limite.
     */
    public function truncate($text, $limit)
    {
        if (strlen($text) <= $limit) {
            return $text;
        }

        return substr($text, 0, $limit) . "...";
    }

}