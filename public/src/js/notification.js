const $notification      = document.getElementById('notification');
const $closeNotification = document.getElementById('close-notification');

$closeNotification.addEventListener('click', e => {
	$notification.classList.replace('flex', 'hidden');
});