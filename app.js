const http = require('http');
const fs = require('fs');



http.createServer((request, response) => {
    // 1. Codigo de estatus HTTP y Content Type
    const file = request.url == '/'?"./www/index.html":`./www${request.url}`;
    fs.readFile(file, (err, data) => {
        if(err){
            response.writeHead(404, { "Content-Type": "text/plain" });
            response.write("Not found");
            response.end();
        } else {
            response.writeHead(200, { "Content-Type": "text/html" });
            response.write(data);
            response.end();
        }
    });
}).listen(8888);