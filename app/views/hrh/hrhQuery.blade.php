<div class="hrhQueryPost">
    @include('hrh.hrhQueryPagination')
</div>

<script>

    $("a[href='#hrh_query']").on('click',function(e){
        $('.hrh_content').html(loadingState);
        var url = $(this).data('link');
        setTimeout(function(){
            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    $('.hrh_content').html(data);
                }
            });
        },700);
    });

    //global variable
    var keyword = '';

    $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            queryPosts();
            e.preventDefault();
        });
    });

    function queryPosts() {
        $('.hrhQueryPost').html("<span>Rusel Loading....</span>");
    }

</script>