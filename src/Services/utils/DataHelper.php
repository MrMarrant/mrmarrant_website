<?php

namespace App\Services\utils;

/**
 * Classe utilitaire pour les données.
 */
class DataHelper {

    /**
     *
     * @param string name
     * 
     * @return object - The query object.
     */
    public static function getQuery(string $name): ?object {
        $data = DataHelper::getJsonData();
        $query = NULL;

        foreach ($data as $key => $value) {
            if (strtolower($value->name) == $name) {
                $query = $value;
            }
        }
        return $query;
    }

    /**
     * 
     * @return object - The data json.
     */
    public static function getJsonData(): mixed {
        $data = file_get_contents('../data/project_data.json');
        $data = json_decode($data);

        return $data;
    }
}
