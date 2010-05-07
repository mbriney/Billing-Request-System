<?php 

// typical REST request
    require('Basecamp.class.php');
    $bc = new Basecamp('https://emotivellc.basecamphq.com/','mbriney','emotive1');
    $response = $bc->getTimeEntryReport($from=null, $to=null, $subject_id=null, $to_item_id=null, $filter_project_id=null, $filter_company_id=null);
    // see the XML output
    print_r($response['body']);
    
    
    
?>