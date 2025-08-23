<table>
    <tr><th>name:</th><td>{{ $form->name }}</td></tr>
    <tr><th>mail:</th><td>{{ $form->mail }}</td></tr>
    <tr><th>age:</th><td>{{ $form->age }}</td></tr>
</table>
<form action="/person/del" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <input type="submit" value="send">
</form>