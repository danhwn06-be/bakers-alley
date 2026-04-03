<x-layouts.app title="Trang chủ | Baker's Alley">
    <div class="rev-slider">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <div class="bannercontainer">
                    <div class="banner">
                        <ul>
                            <!-- THE FIRST SLIDE -->
                            <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                    data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                    data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                    data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                    data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                    data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                        data-bgposition="center center" data-bgrepeat="no-repeat"
                                        data-lazydone="undefined" src="{{ asset('assets/dest/images/thumbs/1.jpg') }}"
                                        data-src="{{ asset('assets/dest/images/thumbs/1.jpg') }}"
                                        style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{{ asset('assets/dest/images/thumbs/1.jpg') }}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>
                            </li>
                            <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                    data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                    data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                    data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                    data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                    data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                        data-bgposition="center center" data-bgrepeat="no-repeat"
                                        data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg"
                                        data-src="assets/dest/images/thumbs/1.jpg"
                                        style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>

                            <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                    data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                    data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                    data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                    data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                    data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                        data-bgposition="center center" data-bgrepeat="no-repeat"
                                        data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg"
                                        data-src="assets/dest/images/thumbs/1.jpg"
                                        style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>

                            </li>

                            <li data-transition="boxfade" data-slotamount="20"
                                class="active-revslide current-sr-slide-visible"
                                style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                    data-zoomstart="undefined" data-zoomend="undefined"
                                    data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined"
                                    data-bgpositionend="undefined" data-bgposition="undefined"
                                    data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                                    data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                        data-bgposition="center center" data-bgrepeat="no-repeat"
                                        data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg"
                                        data-src="assets/dest/images/thumbs/1.jpg"
                                        style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!--slider-->
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>New Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{ $newProducts->total() }} sản phẩm</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach ($newProducts as $product)
                                    <div class="col-sm-3" style="margin-bottom: 20px;">
                                        <div class="single-item">

                                            @if ($product->sale_price)
                                                <div class="ribbon-wrapper">
                                                    <div class="ribbon sale">Sale</div>
                                                </div>
                                            @endif

                                            <div class="single-item-header">
                                                <a href="{{ route('products.show', $product->id) }}">
                                                    <img src="{{ asset('assets/dest/images/products/' . $product->image) }}"
                                                        alt="{{ $product->name }}" height="250px">
                                                </a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{ $product->name }}</p>

                                                <p class="single-item-price">
                                                    @if ($product->sale_price)
                                                        <span class="flash-del">{{ number_format($product->price) }}
                                                            đ</span>
                                                        <span
                                                            class="flash-sale">{{ number_format($product->sale_price) }}
                                                            đ</span>
                                                    @else
                                                        <span class="flash-sale">{{ number_format($product->price) }}
                                                            đ</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="#"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary"
                                                    href="{{ route('products.show', $product->id) }}">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center" style="margin-top: 20px;">
                                    {{ $newProducts->appends(request()->all())->links() }}
                                </div>
                            </div>
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>

                        <div class="beta-products-list">
                            <h4>Top Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{ $saleProducts->total() }} sản phẩm</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach ($saleProducts as $product)
                                    <div class="col-sm-3" style="margin-bottom: 20px;">
                                        <div class="single-item">

                                            <div class="ribbon-wrapper">
                                                <div class="ribbon sale">Sale</div>
                                            </div>

                                            <div class="single-item-header">
                                                <a href="{{ route('products.show', $product->id) }}">
                                                    <img src="{{ asset('assets/dest/images/products/' . $product->image) }}"
                                                        alt="{{ $product->name }}" height="250px">
                                                </a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{ $product->name }}</p>
                                                <p class="single-item-price">
                                                    <span class="flash-del">{{ number_format($product->price) }}
                                                        đ</span>
                                                    <span class="flash-sale">{{ number_format($product->sale_price) }}
                                                        đ</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="#"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary"
                                                    href="{{ route('products.show', $product->id) }}">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center" style="margin-top: 20px;">
                                    {{ $saleProducts->appends(request()->all())->links() }}
                                </div>
                            </div>
                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div>

</x-layouts.app>
