 
<x-frontend.layout.master>
    @slot('title')
    Product
    @endslot


<x-frontend.productpage.products :data="$products" title="Product" imagefile="products"/>
</x-frontend.layout.master>