window.onload = () => {

    let reply_reply = document.getElementsByClassName('reply_reply');

    for (let i = 0; i < reply_reply.length; i++) {
        reply_reply[i].onclick = () => {
            data = reply_reply[i].getAttribute('data');
            author = reply_reply[i].getAttribute('author');
            document.getElementById('reply_form').style.display = 'block';
            data = '"' + data + '"' + ' posted by @' + author + '\n------------------------------------\n';
            document.getElementById('rrtext').value = data;
            document.getElementById('rrtext').focus();
        }
    }

}