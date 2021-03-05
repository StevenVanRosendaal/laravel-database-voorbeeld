<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <form method="post" action="{{ route('processAddPhoto') }}">
            @csrf
            <label for="title">Photo URL:</label><br>
            <input type="text" id="photo_url" name="photo_url" placeholder="Photo URL"><br>
            <input type="submit" value="Submit">
        </form>
        </br>
        <a href="{{ route('addPhoto') }}">Add Photo</a>
    </body>
</html>