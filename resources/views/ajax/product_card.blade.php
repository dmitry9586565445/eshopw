@foreach($products as $product)   
    <!-- $products это из ProductComposer.php-->        
    @include('includes.product_card', $product)        
@endforeach