@extends('admin.layouts.admin')
@section('title', __('views.admin.categories.index.title'))
@section('content')

  <div class="row">
    <div class="col-md-12">
      <table class="table" id="table">
        <thead>
          <tr>
            <th>İsim</th>
            <th>Kategoriler</th>
            <th>Oluşturan</th>
          </tr>
        </thead>
        <tbody>
          @foreach($brands as $brand)
            <tr>
              <td>{{ $brand->name }}</td>
              <td>@foreach($brand->categories as $category)
                {{ $category->name }}
              @endforeach
              </td>


            </td>

            <td>{{ $brand->created_at }}</td>
            <td><div class="row">
              <div class="col-md-4">
                <a href="{{route('brands.show',$brand->slug)}}" class="btn btn-sm btn-default">Görüntüle</a>
              </div>
              <div class="col-md-4">
                <a href="{{route('brands.edit',$brand->slug)}}" class="btn btn-sm btn-primary">Değiştir</a>
              </div>
            </div>
            </td>
          </tr>

        @endforeach

      </tbody>
    </table>

  </div>
@endsection
