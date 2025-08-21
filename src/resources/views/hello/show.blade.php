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
@if ($items != null)
@foreach($items as $item)
<table width="400px">
    <tr><th width="50px">id:</th></tr>
    <td width="50px">{{ $item->id }}</td>
    <tr><th width="50px">name:</th></tr>
    <td width="50px">{{ $item->name }}</td>
</table>
@endforeach
@endif

</html>