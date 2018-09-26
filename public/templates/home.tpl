{include file="inc/header.tpl"}

    <a href="create" class="btn btn-success">Add Post</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach $posts as $post}
            <tr>
                <th scope="row">{$post.id}</th>
                <td><a href="/show?id={$post.id}">{$post.title}</a></td>
                <td>
                    <a href="/edit?id={$post.id}" class="btn btn-warning">Edit</a>
                    <a href="/delete?id={$post.id}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            {/foreach}
        </tbody>
    </table>

{include file="inc/footer.tpl"}