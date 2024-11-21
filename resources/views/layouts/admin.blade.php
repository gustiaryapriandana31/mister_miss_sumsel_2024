<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>{{ $title }}</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('img/logo_b_management.png') }}" type="image/x-icon">

    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- BOX ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

    <!-- REMIX ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Custom fonts for this template-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:wght@100..900&display=swap" rel="stylesheet" />


    <!-- Custom styles for this template-->
    <link href="{{ asset('css/admin/sb-admin-2.css') }}" rel="stylesheet">

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

        .container-fluid {
            font-size: 1rem;
        }

        .note-editor .dropdown-toggle::after {
            all: unset;
        }

        .note-editor .note-dropdown-menu {
            box-sizing: content-box;
        }

        .note-editor .note-modal-footer {
            box-sizing: content-box;
        }
    </style>
</head>

@if ($title == 'Login Admin')
    <body class="bg-gradient-primary d-flex align-items-center" style="min-height: 100vh">
        <div class="container">
            @yield('content')
        </div>
    </body>
@else
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin-berita') }}">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">BManagement</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Dashboard
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item <?= $nav['active'] === "Berita" ? "active" : ""; ?>">
                    <a class="nav-link" href="{{ route('admin-berita') }}">
                        <i class="fa fa-newspaper"></i>
                        <span>Berita</span>
                    </a>
                </li>
                <br>
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content" class="py-5">

                    @yield('content')

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </body>
@endif

<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/admin/sb-admin-2.js') }}"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/tam-emoji/css/emoji.css') }}">
<script src="{{ asset('vendor/tam-emoji/js/config.js') }}"></script>
<script src="{{ asset('vendor/tam-emoji/js/tam-emoji.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>

<!-- DataTable -->
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>

<script>
    document.emojiButton = 'fas fa-smile';
    document.emojiType = 'unicode';
    document.emojiSource = "/vendor/tam-emoji/img";

    $('.summernote').summernote({
        // callbacks: {
        //     onImageUpload: function(files) {
        //         for (let i = 0; i < files.length; i++) {
        //             $.upload(files[i]);
        //         }
        //     },
        //     onMediaDelete: function(target) {
        //         $.delete(target[0].src);
        //     }
        // },
        tabsize: 2,
        height: 500,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'emoji']],
            ['view', ['codeview', 'help']]
        ]
    });

    $(document).ready(function() {
        $('#dataTable').DataTable();
        bsCustomFileInput.init()
    });

    // $.upload = function(file) {
    //     let out = new FormData();
    //     out.append('file', file, file.name);
    //     $.ajax({
    //         method: 'POST',
    //         url: '',
    //         contentType: false,
    //         cache: false,
    //         processData: false,
    //         data: out,
    //         success: function(img) {
    //             $('.summernote').summernote('insertImage', img);
    //         },
    //         error: function(jqXHR, textStatus, errorThrown) {
    //             console.error(textStatus + " " + errorThrown);
    //         }
    //     });
    // };

    // $.delete = function(src) {
    //     $.ajax({
    //         method: 'POST',
    //         url: '',
    //         cache: false,
    //         data: {
    //             src: src
    //         },
    //         success: function(response) {
    //             console.log(response);
    //         }
    //     });
    // };

    function previewImg() {
        const thumb = document.querySelector('.custom-file-input');
        const thumbLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');
        thumbLabel.textContent = thumb.files[0].name;
        const fileThumb = new FileReader();
        fileThumb.readAsDataURL(thumb.files[0]);
        fileThumb.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

</html>
