@include('.panel.general.head')


<body class="vertical-layout vertical-menu-modern 2-columns navbar-floating menu-expanded footer-static" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="" style="" data-framework="laravel" data-asset-path="index.html">


    @include('.panel.general.left-nav')
    @include('.panel.general.top-nav')

    <!-- END: Header-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper ">


            <div class="content-body">





                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Banners</h4>

                                <button type="button" class="btn btn-primary waves-effect waves-float waves-light" data-toggle="modal" data-target="#createBanner">Add Banner</button>

                            </div>
                            <div class="table-responsive">
                                <table id="Banner" class="table">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Image</th>
                                            <th>Banner Number</th>
                                            <th>Status</th>
                                            @if($User->user_type_slug=='administrator')
                                            <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($banners as $key => $banner)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                @if($banner->banner_image != null)
                                                <img src="{{$banner->banner_image}}" class="rounded" style="width: 70px; height: 70px; object-fit: cover;">
                                                @else
                                                <img src="{{asset('default_img.png')}}" class="rounded" style="height: 70px; width: 70px; object-fit: cover;">
                                                @endif
                                            </td>

                                            <td>{{ $banner->banner_number }}</td>
                                            <td>
                                                <a href="javascript:void(0);">
                                                    <button value="{{$banner->banner_status}}" banner-id="{{ $banner->id }}" class="status btn @if($banner->banner_status == 1)btn-success @else btn-danger @endif btn-fw">
                                                        @if($banner->banner_status == 1)
                                                        Active
                                                        @else
                                                        InActive
                                                        @endif</button>
                                                </a>

                                            </td>
                                            <td>
                                                <form method="POST" action="{{route('banner.delete', [$banner->id ?? '']) }}" onclick="return confirm('Are you sure to delete this Banner?')">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-inverse-success btn-fw" type="submit"><i data-feather="trash-2"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Data not Found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->
            </div>
        </div>
    </div>
    <!-- End: Content-->



    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    @include('.panel.general.footer')
    @include('.panel.general.modal')


    <!-- Vehicle Modal -->
    <div class="modal fade" id="createBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <form class="forms-sample" method="POST" action="{{route('banner.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Image</label>
                                        <img id="preview_image" class="image_length" src="{{ asset('default_img.png')}}">
                                        <br>
                                        <input type="button" id="get_image" class="btn btn-icon btn-success w-31 mt-1" value="Change">
                                        <input type="file" name="banner_image" id="image" value="" />
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 form-group">
                                    <label for="banner_number">Banner Number</label>
                                    <input type="text" class="form-control" name="banner_number" placeholder="Enter Banner Number" required />
                                </div>
                                <div class="col-lg-12 col-md-12 form-group">
                                    <label for="banner_status">Banner Status</label>
                                    <select class="form-control form-control-alternative" name="banner_status" data-toggle="select" data-placeholder="Select Status">
                                        <option value="1" selected>Active
                                        </option>
                                        <option value="0"> InActive</option>
                                    </select>
                                </div>
                               
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    @include('.panel.general.script')

    <script>
        document.getElementById('get_image').onclick = function() {
            document.getElementById('image').click();
        };
        image.onchange = evt => {
            const [file] = image.files
            if (file) {
                preview_image.src = URL.createObjectURL(file)
            }
        }

        $('.status').on('click', function(e) {
            e.preventDefault();
            var status = $(this).val();
            var id = $(this).attr('banner-id');

            $.ajax({
                type: 'POST',
                url: '{{ route("banner.updateStatus")}}',
                data: {
                    'id': id,
                    'status': status,
                    '_token': "{{ csrf_token() }}"
                },
                success: function(response) {
                    var status = response.status;
                    if (status == true) {
                        location.reload();
                    }
                }
            });
        })
    </script>

</body>

</html>