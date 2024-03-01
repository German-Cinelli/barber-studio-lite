document.addEventListener('notification-success', event => {
    showNotification('cil-check-circle', 'text-success', event.detail[0].title, event.detail[0].body);
});

document.addEventListener('notification-warning', event => {
    showNotification('cil-warning', 'text-warning', event.detail[0].title, event.detail[0].body);
});

document.addEventListener('notification-danger', event => {
    showNotification('cil-ban', 'text-danger', event.detail[0].title, event.detail[0].body);
});

document.addEventListener('notification-info', event => {
    showNotification('cil-info', 'text-info', event.detail[0].title, event.detail[0].body);
});

function showNotification(type, color, title, body){
    const toastLiveExample = document.getElementById('liveToast')

    toastType.classList.remove('cil-check-circle', 'cil-warning', 'cil-ban', 'cil-info');
    toastType.classList.remove('text-success', 'text-warning', 'text-danger', 'text-info');

    toastType.classList.add(type, color)
    toastTitle.textContent = title
    toastBody.textContent = body

    const toast = new coreui.Toast(toastLiveExample)
    toast.show()
}

document.addEventListener('notification-confirmation', event => {
    const toastLiveExample = document.getElementById('liveToastConfirmation')
    const toast = new coreui.Toast(toastLiveExample)
    toast.show()
});
