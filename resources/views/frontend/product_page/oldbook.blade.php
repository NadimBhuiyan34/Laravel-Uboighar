
<x-frontend.layout.master>
    @slot('title')
    OLd Book
    @endslot
<x-frontend.productpage.products :data="$sellbooks" title="Old Book" imagefile="sellbooks"/>
</x-frontend.layout.master>
