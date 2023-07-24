const url = window.location.href;
let page = url.split("/")[3];
if (page == "") page = "Home";

alert(`Hello User, Selamat Datang Di Page ${page}!`);
