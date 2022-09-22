


<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script src="{{ asset('assets/src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('assets/src/plugins/src/mousetrap/mousetrap.min.js')}}"></script>
<script src="{{ asset('assets/layouts/vertical-dark-menu/app.js')}}"></script>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/src/plugins/src/editors/quill/quill.js')}}"></script>
<script src="{{ asset('assets/src/plugins/src/filepond/filepond.min.js')}}"></script>
<script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js')}}"></script>
<script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js')}}"></script>
<script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.js')}}"></script>
<script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageCrop.min.js')}}"></script>
<script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageResize.min.js')}}"></script>
<script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageTransform.min.js')}}"></script>
<script src="{{ asset('assets/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js')}}"></script>

<script src="{{ asset('assets/src/plugins/src/tagify/tagify.min.js')}}"></script>

<script src="{{ asset('assets/src/assets/js/apps/blog-create.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->

@yield('js')
<!-- Sticky js -->
<script src="{{URL::asset('assets/js/sticky.js')}}"></script>
<!-- custom js -->
<script src="{{URL::asset('assets/js/custom.js')}}"></script><!-- Left-menu js-->
<script src="{{URL::asset('assets/plugins/side-menu/sidemenu.js')}}"></script>
