<html>
<head></head>
<body>


Welcome back, {{$name}}.
<table border="1">
    <thead>
        <th>Name</th>
        <th>Age</th>
    </thead>
    <tbody>
    {foreach from=$items item=i}
        <tr>
            <td>{$i['name']}</td>
            <td>{$i['age']}</td>
        </tr>
    {/foreach}
    </tbody>
</table>


</body>
</html>