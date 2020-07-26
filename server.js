let socket = require( 'socket.io' );
let express = require('express');
let app = express();
let server = require('http').createServer(app);
let io = socket.listen(server);
let port = process.env.PORT || 8080;
server.listen(port, function () {
    console.log('Server listening at port %d', port);
});
io.on('connection', function (socket) {
    socket.on( 'start_game', function( data ) {
        io.sockets.emit( 'active_users', {
            active: data.active
        });
    });
    socket.on( 'active_users', function( data ) {
        io.sockets.emit( 'active_users', {
            active: data
        });
    });
});
