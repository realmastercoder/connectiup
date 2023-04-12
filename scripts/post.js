window.onload = () => {

    let reply_reply = document.getElementsByClassName('reply_reply');

    for (let i = 0; i < reply_reply.length; i++) {
        reply_reply[i].onclick = () => {
            data = reply_reply[i].getAttribute('data');
            author = reply_reply[i].getAttribute('author');
            document.getElementById('reply_form').style.display = 'block';
            data = '"' + data + '"' + ' posted by @' + author + '\n<br>' + '------------------------------------' + '<br>\n';
            document.getElementById('rrtext').value = data;
            document.getElementById('rrtext').focus();
        }
    }
    document.getElementById("scaled").onclick = () => {
        // change style/display to none
        document.getElementById("scaled").style.display = "none";
        document.getElementById("full").style.display = "flex";
    }
    document.getElementById("full").onclick = () => {
        // change style/display to none
        document.getElementById("full").style.display = "none";
        document.getElementById("scaled").style.display = "flex";
    }

}