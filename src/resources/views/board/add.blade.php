<form action="/board/add" method="post">
    @csrf
    <label>person id:</label>
    <div>
        <input type="number" name="person_id">
    </div>
    <label>title:</label>
    <div>
        <input type="text" name="title">
    </div>
    <label>message:</label>
    <div>
        <input type="text" name="message">
    </div>
    <div>
        <input type="submit" value="send">
    </div>
</form>