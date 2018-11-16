<div class="flex-w flex-l-m filter-tope-group m-tb-10">
  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
    Hepsi
  </button>

  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$category = $categories->where('slug','erkek-sırt-cantasi')->first()->slug}}">
    {{$category = $categories->where('slug','erkek-sırt-cantasi')->first()->name}}
  </button>
  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$category = $categories->where('slug','kadin-sirt-cantasi')->first()->slug}}">
    {{$category = $categories->where('slug','kadin-sirt-cantasi')->first()->name}}
  </button>
  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$category = $categories->where('slug','unisex-sirt-cantasi')->first()->slug}}">
    {{$category = $categories->where('slug','unisex-sirt-cantasi')->first()->name}}
  </button>
</div>
