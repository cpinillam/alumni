<div class="form-group">
    <label for="">SUMMER NOTE TEST COMMENT CODE IF CAUSING ISSUES</label>
    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
    <div id="summernote"></div>
    <button type="submit" class="btn btn-primary">Post your question</button>
</div>
<script>
    $(document).ready(function() {
$('#summernote').summernote(
    {
    placeholder: 'Type Here',
    tabsize: 2,
    height: 100
    }
);

});
</script>