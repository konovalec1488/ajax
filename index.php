<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>AJAX</title>
        <script src="js/script.js" type="text/javascript"></script>
        <style>
            #content{
                width: 60vw;
                min-height: 100px;
                border:2px solid blue;
                margin: 10px;
                padding: 5px;
            }
            #getUsers{
                margin: 10px 0;
            }
        </style>
    </head>
    <body>
        <form>
            <input type="text" name="name" id="name">
            <button type="button" id="load">LOAD</button>
            <div id="content"></div>
        </form>
        <form name="reg">
            <input type="text" id="login" placeholder="Login">
            <input type="password" id="pass" placeholder="Pass">
            <input type="password" id="pass2" placeholder="Pass confirm">
            <input type="submit">
        </form>
        
        <input id="getUsers" type="button" value="Пользователи">
        <div id="users"></div>
    </body>
</html>

