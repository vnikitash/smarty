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
            <div class="row" style="text-align: center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {if ($smarty.get.page|default:1) != 1}
                        <li class="page-item"><a class="page-link" href="?per_page={$smarty.get.per_page|default:9}&page={($smarty.get.page|default:1 - 1)}">Previous</a></li>
                        {/if}
                        {for $i = 1; $i <= $pages; $i++}
                            <li class="page-item {if ($smarty.get.page|default:1) == $i}active{/if}" ><a class="page-link" href="?per_page={$smarty.get.per_page|default:9}&page={$i}">{$i}</a></li>
                        {/for}
                        {if ($smarty.get.page|default:1) != $pages}
                            <li class="page-item"><a class="page-link" href="?per_page={$smarty.get.per_page|default:9}&page={($smarty.get.page|default:1 + 1)}">Next</a></li>
                        {/if}

                    </ul>
                </nav>
            </div>
    </div>
{/block}