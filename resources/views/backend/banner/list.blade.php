<x-backend.layout.master>
    @slot('title')
    Banner
    @endslot
<div class="card mb-4">
    @slot('bottomheader')
   Banner
    @endslot
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Banner

       <a href="{{ route('banners.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add New Banner</button></a>
    </div>


    <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Banner Name </th>
                    <th>Banner Image</th>
                    <th>Active Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($banners as $banner)


                <tr>
                    <td>{{ $banner->option }}</td>
                    <td align="center"><img src="{{asset('/storage/banner/'.$banner->image)}}" alt="" style="width:200px;height:100px;margin:auto"></td>
                    <td>{{ $banner->is_active }}</td>
                    <td>
                        <div class="d-flex">


                            <x-backend.buttonlink.editlink action="{{ route('banners.edit',['banner'=>$banner->id ])}}"/>
                            <x-backend.buttonlink.deletelink action="{{ route('banners.destroy',['banner'=>$banner->id ])}}"/>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</x-backend.layout.master>
