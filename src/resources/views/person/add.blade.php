@if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $errors)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/person/add" method="post">
    @csrf
    <label>name:</label>
    <div>
        <input type="text" name="name" value="{{ old('name') }}">
    </div>
    <label>mail:</label>
    <div>
        <input type="text" name="mail" value="{{ old('mail') }}">
    </div>
    <label>age:</label>
    <div>
        <input type="number" name="age" value="{{ old('age') }}">
    </div>
    <label></label>
    <div>
        <input type="submit" value="send">
    </div>

</form>