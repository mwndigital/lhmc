<script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea.tinyEditor', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists anchor fullscreen visualblocks wordcount',
        toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | anchor autolink | indent outdent | bullist numlist | code | table | visualblocks wordcount | fullscreen',
        default_link_target: "_blank"
    });
</script>
