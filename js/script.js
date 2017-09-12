window.onload = function () {
    document.getElementById('load').onclick = function () {
        getData();
    };
    document.getElementById('getUsers').onclick = function () {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var data = xhr.responseText;
                var logins = JSON.parse(data);
                var login_str='';
                for (var i = 0; i < logins.length; i++) {
                    login_str+= "<p>"+logins[i]+"</p>";
                }
                //console.log(logins);
                document.getElementById('users').innerHTML = login_str;
            }
        };
        xhr.open('POST', 'api/users.php');
        xhr.send();
    };
    document.forms.reg.onsubmit = function () {
        var data = 'login=' + this.login.value + '&';
        data += 'pass=' + this.pass.value + '&';
        data += 'pass2=' + this.pass2.value;
        //console.log(data);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var str = xhr.responseText;
                alert(str);
            }
        };
        xhr.open('POST', 'api/reg.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(data);
        return false;
    };
};

function getData() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var str = xhr.responseText;
            document.getElementById('content').textContent = str;
        }

    };
    xhr.open('GET', 'api/index.php?name=' + document.getElementById("name").value);
    xhr.send();
}
