<?php  # print var_export($leftMenuParams, true); exit;

    if(!is_null($leftMenuParams))
    switch ($leftMenuParams['site']){
        case 'mugyanta' : include_partial('product/leftMenuMugyantasPadlok',        array('leftMenuParams' => $leftMenuParams)); break;
        case 'villamos' : include_partial('product/leftMenuVillamosIpariTermekek',  array('leftMenuParams' => $leftMenuParams)); break;
        case 'search'   : include_partial('product/leftMenuKereses',                array('leftMenuParams' => $leftMenuParams)); break;
    }
?>
