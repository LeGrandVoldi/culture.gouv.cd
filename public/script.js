var $messages = $('.messages-content'),
		d, h, m,
		i = 0;

$(window).load(function() {
	$messages.mCustomScrollbar();
	setTimeout(function() {
		sendMessageToAPI("Salut");
	}, 100);
});

const parser = new commonmark.Parser();
const renderer = new commonmark.HtmlRenderer();

function getUserId() {
	let userId = localStorage.getItem('userId');
	if (!userId) {
		userId = 'user-' + Math.random().toString(36).substr(2, 9);
		localStorage.setItem('userId', userId);
	}
	return userId;
}

const userId = getUserId();

function updateScrollbar() {
	$messages.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
		scrollInertia: 10,
		timeout: 0
	});
}

function setDate() {
	d = new Date();
	if (m != d.getMinutes()) {
		m = d.getMinutes();
		$('<div class="timestamp">' + d.getHours() + ':' + m + '</div>').appendTo($('.message:last'));
		$('<div class="checkmark-sent-delivered">&check;</div>').appendTo($('.message:last'));
		$('<div class="checkmark-read">&check;</div>').appendTo($('.message:last'));
	}
}

function insertMessage() {
	var msg = $('.message-input').val();
	if ($.trim(msg) == '') {
		return false;
	}
	$('<div class="message message-personal">' + msg + '</div>').appendTo($('.mCSB_container')).addClass('new');
	setDate();
	$('.message-input').val(null);
	updateScrollbar();
	sendMessageToAPI(msg);
}

$('.message-submit').click(function() {
	insertMessage();
});

$(window).on('keydown', function(e) {
	if (e.which == 13) {
		insertMessage();
		return false;
	}
})


/*
function fakeMessage() {
	if ($('.message-input').val() != '') {
		return false;
	}
	$('<div class="message loading new"><figure class="avatar"><img src="https://app.holduix.dev/assets/images/avatar.png" /></figure><span></span></div>').appendTo($('.mCSB_container'));
	updateScrollbar();
	
	setTimeout(function() {
		$('.message.loading').remove();
		$('<div class="message new"><figure class="avatar"><img src="https://app.holduix.dev/assets/images/avatar.png" /></figure>' + Fake[i] + '</div>').appendTo($('.mCSB_container')).addClass('new');
		setDate();
		updateScrollbar();
		i++;
	}, 1000 + (Math.random() * 20) * 100);
}
	*/


function sendMessageToAPI(message) {
	const url = 'sendMessage.php';
	const appToken = 'braintys';
	const userId = localStorage.getItem('userId');

	fetch(url, {
		method: 'POST',
		headers: {
			'Content-Type': 'application/json'
		},
		body: JSON.stringify({
			app_token: appToken,
			user_id: userId,
			message: message
		})
	})
	.then(response => response.json())
	.then(data => {
		if (data.error === "False") {
			const parsed = parser.parse(data.response);
			const html = formatMessage(renderer.render(parsed));
			const messageElement = $('<div class="message new"><figure class="avatar"><img src="https://app.holduix.dev/assets/images/avatar.png" /></figure><div class="typed-text"></div></div>');
			messageElement.appendTo($('.mCSB_container')).addClass('new');

			new Typed(messageElement.find('.typed-text')[0], {
				strings: [formatMessage(html)],
				typeSpeed: 35,
				showCursor: false,
				onComplete: function() {
					setDate();
					updateScrollbar();
				}
			});
		} else {
			console.error('API Error: ' + data.message);
		}
	})
	.catch(error => {
		console.error('Fetch Error: ', error);
	});
}




$('.button').click(function(){
	$('.menu .items span').toggleClass('active');
	$('.menu .button').toggleClass('active');
});
function toggleChat() {
    const chatBox = document.getElementById('chatBox');
    if (chatBox.style.display === 'none' || chatBox.style.display === '') {
        chatBox.style.display = 'flex';
    } else {
        chatBox.style.display = 'none';
    }
}
function formatMessage(text) {
	let formattedText = text
		.replace(/\n\n/g, '<br><br>')
		.replace(/\n/g, '<br>')
		.replace(/\*\*(.*?)\*\*/g, '<b>$1</b>')
		.replace(/#\s(.*?)\n/g, '<h1>$1</h1>')
		.replace(/##\s(.*?)\n/g, '<h2>$1</h2>')
		.replace(/###\s(.*?)\n/g, '<h3>$1</h3>')
		.replace(/####\s(.*?)\n/g, '<h4>$1</h4>')
		.replace(/#####\s(.*?)\n/g, '<h5>$1</h5>')
		.replace(/######\s(.*?)\n/g, '<h6>$1</h6>')
		.replace(/\*(.*?)\*/g, '<b>$1</b>');

	return formattedText;
}