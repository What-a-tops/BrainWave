let socket = io.connect(hostname+port);
socket.on('active_users', function(data) {
    $('.total-active').text(data.active);
});

socket.on('start_game', function(data) {
    // $('.start-active').text(data.active);
    console.log(data);
});

