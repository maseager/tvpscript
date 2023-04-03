<?php 
if ($f == 'load-more-pages') {
    $offset = (isset($_GET['offset']) && is_numeric($_GET['offset'])) ? $_GET['offset'] : false;
    $query  = $_GET['query'];
    $html   = "";
    $data   = array(
        "status" => 404,
        "html" => $html
    );
    if ($offset) {
        $groups = Wo_GetSearchAdv($query, 'pages', $offset);
        if (count($groups) > 0) {
            foreach ($groups as $wo['result']) {
                // if ($wo['config']['theme'] == 'sunshine') {
                //     $html .= Wo_LoadPage('search/page-result');
                // }
                // else{
                //     $html .= Wo_LoadPage('search/result');
                // }
                $html .= Wo_LoadPage('search/page-result');
            }
            $data['status'] = 200;
            $data['html']   = $html;
        }
    }
    header("Content-type: application/json");
    echo json_encode($data);
    exit();
}
