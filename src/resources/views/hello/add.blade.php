<html>

<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #777;
        }

        h1 {
            font-size: 50pt;
            text-align: right;
            color: #d0d0f0;
            margin: -20px 0px -0px 0px;
        }
    </style>
</head>
<form action="/hello/add" method="post">
    @csrf
    <div>
        <label style="display:inline-block; width:75px;" for="name">name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label style="display:inline-block; width:75px;" for="mail">mail:</label>
        <input type="text" name="mail">
    </div>
    <div>
        <label style="display:inline-block; width:75px;" for="age">age:</label>
        <input type="number" name="age">
        <input type="submit" value="send">
    </div>
</form>

</html>