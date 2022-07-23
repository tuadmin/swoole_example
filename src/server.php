<?php
require __DIR__.'/Shared/enumeradores/EServer.php';
class ServerEvent{
    const start = 'start';
    const request = 'request';
}
$server = new Swoole\HTTP\Server("127.0.0.1", 9999);
$server->set([
    //for debugging
    'worker_num' => 1,
]);
var_dump(EServer::start);
$server->on(ServerEvent::start, function (Swoole\Http\Server $server) {
    echo "Swoole http server is started at http://127.0.0.1:9999\n";
});

$server->on(ServerEvent::request, function (Swoole\Http\Request $request, Swoole\Http\Response $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Hello Worldsss\n");
});
$server->start();