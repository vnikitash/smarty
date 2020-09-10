{extends file="layout.tpl"}

{block name="body"}

    <form action="/?action=adminAddProduct" method="POST" style="width: 400px" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price $</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Product price ($)" name="price">
        </div>
        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" class="form-control" id="file" name="image">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category_id">
                {foreach from=$categories item=category}
                    <option value="{$category['id']}">{$category['name']}</option>
                {/foreach}
            </select>
        </div>

        <button type="submit" class="btn btn-success">Create Product</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Manage</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src=""></td>
                <td>iPhone XS Max</td>
                <td>Some phone</td>
                <td>25.00 $</td>
                <td>
                    <button class="btn btn-warning">Update</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><img src=""></td>
                <td>iPhone XS Max</td>
                <td>Some phone</td>
                <td>25.00 $</td>
                <td>
                    <button class="btn btn-warning">Update</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>

        </tbody>
    </table>
{/block}