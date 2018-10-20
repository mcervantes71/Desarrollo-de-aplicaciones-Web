var num_puerto = 8080;

var http = require('http');

var functionServer = function(request, response) {
    response.writeHead(200, {'Content-Type':'text/plain'});
    response.end('Hola Mundo');
};

var server = http.createServer(functionServer).listen(num_puerto);
console.log('Listening port ' + num_puerto);
