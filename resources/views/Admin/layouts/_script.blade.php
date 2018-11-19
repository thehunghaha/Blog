<script type="text/javascript">
        $(document).ready(function() {
            
$('#addTagBtn').click(function() {
                $('#tags option:selected').each(function() {
                    $(this).appendTo($('#selectedTags'));
                });
            });
            $('#removeTagBtn').click(function() {
                $('#selectedTags option:selected').each(function(el) {
                    $(this).appendTo($('#tags'));
                });
            });
 $('.tagRemove').click(function(event) {
                event.preventDefault();
                $(this).parent().remove();
            });
            $('ul.tags').click(function() {
                $('#search-field').focus();
            });
            $('#search-field').keypress(function(event) {
                if (event.which == '13') {
                    if ($(this).val() != '') {
                        $('<li class="addedTag">' + $(this).val() + '<span class="tagRemove" onclick="$(this).parent().remove();">x</span><input type="hidden" value="' + $(this).val() + '" name="tags[]"></li>').insertBefore('.tags .tagAdd');
                        $(this).val('');
                    }
                }
            });
 
  });
</script>