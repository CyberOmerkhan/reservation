function refresh(){
    setTimeout(window.location.reload(), 500);
}
el = document.getElementById('chat-messages');
el.scrollTop = Math.ceil(el.scrollHeight - el.clientHeight);
window.scrollTo(0,document.body.scrollHeight);