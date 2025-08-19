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

<body>
    <h1>Index</h1>
    @isset ($msg)
        <p>{{$msg}}</p>
    @else
    <p>何か書いてください。</p>
    @endisset
    <form method="POST" action="/hello">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form>

    <p>{{12300 * 1.08}}</p>
    <p>{{date('Y-m-d H:i:s')}}</p>
    <p>{!! "This is <b>sample</b><i>message.</i>"!!}</p>
    <ol>
        @foreach($data as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ol>
    <p>ここが本文のコンテンツです</p>
    <p>Controller value<br>'message' = {{ $message }}</p>
    <p>ViewComposer value<br>'view_message' = {{ $view_message }}</p>
</body>

</html>