<?php

function get_table($data)
{
    $table = "\n<table border=1 style='display: table;border-collapse: separate;border-spacing:2px;border-color: gray;'>";

    $table .= "<thead><tr>\n";
    foreach ($data[0] as $key => $val) {
        $table .= "<th> $key </th>\n";
    }
    $table .= "</tr>\n";
    foreach ($data as $row) {
        $table .= "<tr>";
        $i = 0;
        foreach ($row as $value) {
            if (empty($value)) $value = '&nbsp;';
            if ($i == 0)
                $table .= "<td><b>$value</b></td>\n";
            else
                $table .= "<td>$value</td>\n";
            $i++;
        }
        $table .= "<tr>";
    }
    $table .= "</table>";
    return $table;
}