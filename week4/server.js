var http = require('http');
var read = require('read');

read.readFile('./index.html', function(err, html){
	if (err) {
		throw err;
	}
	http.createServer( (request, response) => {
  		response.writeHead(200, {'Content-Type': 'text/html'});
  		response.write(html);
		response.end();
	}).listen(8124);
});

console.log('Server running at http://127.0.0.1:8124/');