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
        <table>
            <tr>
                <th>Photo URLs</th>
            </tr>
            @foreach ($photos as $photo)
            <tr>
                <td><a href="{{ $photo->photo_url }}">{{ $photo->photo_url }}</a></td>
            </tr>
            @endforeach
        </table>
        </br>
        <a href="{{ route('addPhoto') }}">Add Photo</a>
    </body>
</html>