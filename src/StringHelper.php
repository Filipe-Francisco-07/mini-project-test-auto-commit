
<?php

class StringHelper
{

    public function slugify($text)
    {
        $text = strtolower($text);
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        return trim($text, '-');
    }

    public function truncate($text, $limit)
    {
        if (strlen($text) <= $limit) {
            return $text;
        /**
         * Classe responsável por fornecer métodos utilitários para manipulação de strings.
         */
        }

        return substr($text, 0, $limit) . "...";
    /**
     * Converte uma string em um formato "slug", substituindo caracteres não alfanuméricos por hífens.
     * 
     * @param mixed $text A string a ser convertida em slug.
     * @return mixed A string formatada como slug.
     */
    }

}