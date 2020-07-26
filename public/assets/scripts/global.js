let port = ':8080';
let hostname = 'http://'+window.location.hostname;

$(function () {
	let i = "Stop!",
		j = "This is a browser feature intended for developers only. ";

	if ((window.chrome || window.safari)) {
		let l = 'font-family:helvetica; font-size:20px; ';
		[
			[i, l + 'font-size:50px; font-weight:bold; ' + 'color:red; -webkit-text-stroke:1px black;'],
			[j, l],
			['', '']
		].map(function(r) {
			setTimeout(console.log.bind(console, '\n%c' + r[0], r[1]));
		});
	}
});


async function brainwave(data) {
	let result;

	try {
		result = await $.ajax({
			url: data.url,
			type: data.type,
			data: data.data,
			dataType: data.dataType,
			headers: {'X-Requested-With': 'XMLHttpRequest'},
			beforeSend() {
				data.beforeSend;
			}
		});

		return result;
	} catch (error) {
		errorSwal();
	}
}

function emit_socket(data) {
	let socket = io.connect(hostname+port);
	socket.emit('logs', {
		id: data.id,
		action: data.action,
		ago: data.ago,
		department: data.department,
		geoarea: data.geoarea,
		name: data.name,
		profile: data.profile
	});
}

function emit_active(data) {
	let socket = io.connect(hostname+port);
	socket.emit('active_users', {
		active: data.active,
	});
}

function emit_start_game(data) {
	let socket = io.connect(hostname+port);
	socket.emit('start_game', {
		active: data,
	});
}

