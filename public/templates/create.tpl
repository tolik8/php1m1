{include file="inc/header.tpl"}

<form action="/store" method="POST">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" autofocus>
    </div>
    <div class="form-group">
        <button class="btn btn-success">Add Post</button>
    </div>
</form>

{include file="inc/footer.tpl"}