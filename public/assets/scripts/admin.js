$(document).on('click', '.start-game', function (e) {
    e.preventDefault();
    console.log(1);
    emit_start_game(true);
});