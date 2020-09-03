{extends file="layout.tpl"}

{block name="body"}
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
        <tr>
            <td>1</td>
            <td>admin@admin.admin</td>
            <td>25.03.2020</td>
            <td>user</td>
            <td>
                <button class="btn btn-success">Make admin</button>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>admin@admin.admin</td>
            <td>25.03.2020</td>
            <td>admin</td>
            <td>
                <button class="btn btn-default">Make user</button>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    </table>
{/block}