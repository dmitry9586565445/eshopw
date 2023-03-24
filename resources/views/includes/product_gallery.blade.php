 <!--Сортировка галереи товаров-->
 @section('custom_js')
 @endsection
 <div class="sorting-line-divider">
    <div class="sort-wrapper">
        <form action="/sort" method="get" class="sort-form">
            <label for="sort">Сортировать по:</label>
            <select name="sort" id="sort" class="sort-field">
                <option value="name|asc">Названию</option>
                <option value="price|desc">Уменьшению цены</option>
                <option value="price|asc">Увеличению цены</option>                                
            </select>
            <!-- <button type="submit" name="" value="" class="sort-submit">
                <img class="search-image" src="images/search-icon.svg" alt="Go">
            </button>  -->                           
        </form>
    </div>
</div>

<!--  <ul class="shop_gallery"> Галерея товаров-->
<ul id="imgBlock" class="layout_four_column" id="product_gallery">
    @include('ajax.product_card', $products)
</ul>