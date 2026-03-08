/**
 * Converte uma string em um formato amigável para URLs, substituindo caracteres não alfanuméricos por hífens.
 * 
 * @param mixed $text A string a ser convertida.
 * @return mixed A string formatada para uso em URLs.
 */
/**
 * Converte uma string em um formato de slug, substituindo caracteres não alfanuméricos por hífens.
 * 
 * @param mixed $text A string a ser convertida em slug.
 * @return mixed A string formatada como slug.
 */
/**
 * Converte uma string em um formato de slug, substituindo caracteres não alfanuméricos por hífens.
 * 
 * @param mixed $text A string a ser convertida em slug.
 * @return mixed A string formatada como slug.
 */
<?php



class StringHelper
{



 
    /**
     * Converte uma string em um formato "slug", substituindo caracteres não alfanuméricos por hífens.
     * 
     * @param mixed $text A string a ser convertida em slug.
     * @return mixed A string formatada como slug.
     */
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