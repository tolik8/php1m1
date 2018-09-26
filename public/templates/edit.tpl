{include file="inc/header.tpl"}

<form action="/update" method="POST">
    <input type="hidden" name="id" value="{$post.id}">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" value="{$post.title}" autofocus>
    </div>
    <div class="form-group">
        <button class="btn btn-warning">Edit Post</button>
    </div>
</form>

{include file="inc/footer.tpl"}