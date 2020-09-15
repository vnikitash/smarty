{extends file="layout.tpl"}

{block name="body"}
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
                <li role="presentation" class="active"><a href="/">All</a></li>
                {foreach from=$categories item=category}
                    <li role="presentation"><a href="/?categoryId={$category['id']}">{$category['name']}</a></li>
                {/foreach}
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                {foreach from=$products item=product}
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{if $product['image']}{$product['image']}{else}1.png{/if}" width="100">
                            <div class="caption">
                                <h3>{$product['name']}</h3>
                                <p>Category: <b>{$product['category_name']}</b></p>
                                <p>{$product['price']} $</p>
                                <p>
                                    <form action="/?action=addToCart" method="POST">
                                        <input type="hidden" name="id" value="{$product['id']}">
                                    <input type="submit" class="btn btn-success" role="button" value="Add to cart!">
                                    </form>

                                </p>
                            </div>
                        </div>
                    </div>
                {/foreach}
        </div>
    </div>
{/block}