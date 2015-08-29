<?php 
api_expose('save_quote');
function save_quote($data)
{
    if (!is_admin()) {
        return;
    }
    $table = "ez_quotes";
    return db_save($table, $data);
}

function get_quotes($params=array())
{
    if (is_string($params)) {
        $params = parse_params($params);
    }
    $params['table'] = "ez_quotes";
    return db_get($params);
}

api_expose('delete_quote');
function delete_quote($params)
{
    if (!is_admin()) {
        return;
    }
    if (isset($params['id'])) {
        $table = "ez_quotes";
        $id = $params['id'];
        return db_delete($table, $id);
    }
}