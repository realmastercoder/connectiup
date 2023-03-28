window.onload = () => {

document.getElementById("scaled").onclick = () => {
    // change style/display to none
    document.getElementById("scaled").style.display = "none";
    document.getElementById("full").style.display = "flex";
}
document.getElementById("full").onclick = () => {
    // change style/display to none
    document.getElementById("full").style.display = "none";
    document.getElementById("scaled").style.display = "flex";
}}