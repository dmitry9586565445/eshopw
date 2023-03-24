<script>
    jQuery(document).ready(function () {
        let sort = jQuery('#sort');

        sort.click(function (event) {
            event.preventDefault();
            jQuery.ajax({
                method: 'GET',
                url: "{{ route('index') }}",
                data: {
                    sort: sort.val()
                },
                success: function (data) {
                    jQuery('.gallerys').html(data);
                },
                error: function (data) {
                    alert(data);
                }
            });
            // console.log(sort.value);
            // fetch("{{ route('index') }}/" + new URLSearchParams({
            //     sort: sort.value
            // }))
            // .then((response) => {
            //     console.log(response.json());
            // })
            // .catch((error) => {
            //     console.log(error);
            // });
        });
    });
</script>