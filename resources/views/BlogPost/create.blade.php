<form method="POST" action="/blog">
    @csrf
    <label for="title">Title:</label>
    <input id="title" name="title" type="text">
    <label for="body">Body:</label>
    <textarea id="body" name="body"></textarea>
    <button type="submit">Submit</button>
</form>