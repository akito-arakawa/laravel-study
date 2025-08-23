@if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/person/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <label>name:</label>
    <div>
        <input type="text" name="name" value="{{ $form->name }}">
    </div>
    <label>mail:</label>
    <div>
        <input type="text" name="mail" value="{{ $form->mail }}">
    </div>
    <label>age:</label>
    <div>
        <input type="number" name="age" value="{{ $form->age }}">
    </div>
    <label></label>
    <div>
        <input type="submit" value="send">
    </div>
</form>