@extends('admin.layouts.admin')
@section('title', __('views.admin.users.product.show'))

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="well text-center">
        <h1><strong>{{$brand->name}}</strong></h1>
        <h4>Marka Kategorileri</h4>
        @foreach($brand->categories as $category)
          {{$category->name}}
        @endforeach
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <a href="{{route('brands.edit',$brand->slug)}}" class="btn btn-sm btn-primary">Değiştir</a>
              {!! Form::open(['route'=>['brands.destroy',$brand->slug],'method'=>'DELETE']) !!}
              {!! Form::submit('Sil',['class'=>'btn btn-danger btn-sm mt-3']) !!}
              {!! Form::close() !!}



          </div>

        </div>
      </div>
    </div>
  </div>

@if($brand->image()->first())
  <div class="row">
    <div class="col-md-12">
        <div class="col-md-3">
          <div class="col-md-5">
            <img src="{{asset('images/brands/' . $brand->image->name)}}" style="width:150px; height: 150px;"alt="">
          </div>
          <div class="col-md-3">
            <a href="{{route('images.delete',['filename'=>$brand->image->name,'foldername'=>'brands'])}}" class="btn btn-danger">Sil</a>
          </div>
        </div>
    </div>
  </div>
@endif
<div class="row form-spacing-top">
  <div class="col-md-12">

    <form method="post" action="{{route('images.imageupload')}}" enctype="multipart/form-data"
    class="dropzone" id="dropzone">
    {{ csrf_field() }}
    <input type="file" name="file" />
    <input type="number" name="product" value="{{$brand->id}}" hidden />
    <input type="number" name="type" value="3" hidden />
    <input type="text" name="foldername" class="foldername" value="brands" hidden />
  </form>
</div>
</div>

{{--
<div class="row form-spacing-top">
  <div class="col-md-12">
    <form method="post" action="{{route('images.imageupload')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="file" />
    <input type="number" name="product" value="{{$brand->id}}" hidden />
    <input type="number" name="type" value="3" hidden />
    <input type="text" name="foldername" class="foldername" value="brands" hidden />
    <input type="submit" name="" value="">
    </form>
  </form>
</div>
</div>
--}}

@endsection

@section('admin_scripts')
  {{ Html::script(mix('assets/admin/js/dropzone.js')) }}
  <script type="text/javascript">

    Dropzone.options.dropzone =
    {
      maxFilesize: 12,
      renameFile: function(file) {
        var dt = new Date();
        var time = dt.getTime();
        return time+file.name;
      },
      acceptedFiles: ".jpeg,.jpg,.png,.gif",
      timeout: 50000,
      addRemoveLinks: true,
      removedfile: function(file)
      {
        var name = file.upload.filename;
        var foldername = $('.foldername').val();
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          },
          type: 'GET',
          url: '{{ url("image/delete") }}' + '/' + name + '/' + foldername,
          success: function (data){
            console.log("File has been successfully removed!!");
          },
          error: function(e) {
            console.log(e);
          }});
          var fileRef;
          return (fileRef = file.previewElement) != null ?
          fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },

        success: function(file, response)
        {
          console.log(response);
        },
        error: function(file, response)
        {
          return false;
        }
      };
    </script>
  @endsection
