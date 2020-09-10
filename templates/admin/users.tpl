{extends file="layout.tpl"}

{block name="body"}

    {if isset($smarty.get.error)}
        <div class="alert alert-danger" role="alert">{{$smarty.get.error}}</div>
    {/if}

    {if isset($smarty.get.message)}
        <div class="alert alert-success" role="alert">{{$smarty.get.message}}</div>
    {/if}

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Registered At</th>
            <th>Role</th>
            <th>Manage</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$users item=user}
            <tr>
                <td>{$user['id']}</td>
                <td>{$user['email']}</td>
                <td>{$user['created_at']}</td>
                <td>{if $user['is_admin'] == 1} admin {else} user {/if}</td>
                <td>
                    {if $user['id'] == $smarty.session.user.id}
                        -
                    {elseif $user['is_admin'] == 1}
                        <form action="/?action=adminChangeRole" method="POST">
                            <input type="hidden" value="{$user['id']}" name="id">
                            <input type="hidden" value="0" name="admin">
                            <input type="submit" class="btn btn-primary" value="Make user">
                        </form>
                    {else}
                        <form action="/?action=adminChangeRole" method="POST">
                            <input type="hidden" value="{$user['id']}" name="id">
                            <input type="hidden" value="1" name="admin">
                            <input type="submit" class="btn btn-success" value="Make admin">
                        </form>
                    {/if}

                    {if $user['id'] == $smarty.session.user.id}
                        -
                    {else}
                        <button class="btn btn-danger">Delete</button>
                    {/if}
                </td>
            </tr>
        {/foreach}

        </tbody>
    </table>
{/block}