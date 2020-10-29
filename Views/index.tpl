{extends file="layout.tpl"}
{block name=body}
    Time: {{$time}}<br>

    <form action="/user/create" method="POST" class="form-group">
        <input class="form-control" type="email" name="email" placeholder="example@email.com">
        <input class="form-control" type="password" name="password" placeholder="Password">
        <input type="submit" class="btn btn-success" value="Create">
    </form>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Registered At</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            {foreach from=$users item=user}
                <tr>
                    <td><a href="/user/info/{$user['id']}">{$user['id']}</a></td>
                    <td>{$user['email']}</td>
                    <td>{$user['created_at']}</td>
                    <td><a href="/user/delete/{$user['id']}" class="btn btn-danger">Remove</a></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{/block}
