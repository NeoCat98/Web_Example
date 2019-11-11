const http = require('http'),
    fs = require('fs'),
    url = require('url'),
    {
    parse
    } = require('querystring');

mimeTypes = {
  "html": "text/html",
  "jpeg": "image/jpeg",
  "jpg": "image/jpeg",
  "png": "image/png",
  "js": "text/javascript",
  "css": "text/css"
}; 

//Creación del servidor

http.createServer((req, res)=>{
}).listen(8081); 

function collectRequestData(request, callback) {
    const FORM_URLENCODED = 'application/x-www-form-urlencoded';
    if (request.headers['content-type'] === FORM_URLENCODED) {
        let body = '';
        request.on('data', chunk => {
          body += chunk.toString();
        });
        request.on('end', () => {
          callback(null, parse(body));
        });
    } else {
        callback({
        msg: `The content-type don't is equals to ${FORM_URLENCODED}`
     });
    } 
} 

var pathname = url.parse(req.url).pathname; 

if(pathname == "/"){
    pathname = "../index.html";
}
